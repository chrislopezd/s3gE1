(function ($) {
    $.fn.columnFilter = function (options) {

        var asInitVals, i, label, th;
        var sRangeFormat = "Inicio {from} Fin {to}";
        var afnSearch_ = new Array();
        var aiCustomSearch_Indexes = new Array();
        var oFunctionTimeout = null;
        var fnOnFiltered = function () { };
        function _fnGetColumnValues(oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty) {
            if (typeof iColumn == "undefined") return new Array();
            if (typeof bUnique == "undefined") bUnique = true;
            if (typeof bFiltered == "undefined") bFiltered = true;
            if (typeof bIgnoreEmpty == "undefined") bIgnoreEmpty = true;
            var aiRows;
            if (bFiltered == true) aiRows = oSettings.aiDisplay;
            else aiRows = oSettings.aiDisplayMaster;

            var asResultData = new Array();

            for (var i = 0, c = aiRows.length; i < c; i++) {
                var iRow = aiRows[i];
                var aData = oTable.fnGetData(iRow);
                var sValue = aData[iColumn];
                if (bIgnoreEmpty == true && sValue.length == 0) continue;
                else if (bUnique == true && jQuery.inArray(sValue, asResultData) > -1) continue;
                else asResultData.push(sValue);
            }

            return asResultData.sort();
        }

        function _fnColumnIndex(iColumnIndex) {
            if (properties.bUseColVis)
                return iColumnIndex;
            else
                return oTable.fnSettings().oApi._fnVisibleToColumnIndex(oTable.fnSettings(), iColumnIndex);
        }

        function fnCreateInput(oTable, regex, smart, bIsNumber, iFilterLength, iMaxLenght) {
            var sCSSClass = "text_filter form-control";
            if (bIsNumber)
                sCSSClass = "number_filter form-control";

            label = label.replace(/(^\s*)|(\s*$)/g, "");
            var currentFilter = oTable.fnSettings().aoPreSearchCols[i].sSearch;
            var search_init = 'search_init ';
            var inputvalue = label;
            if (currentFilter != '' && currentFilter != '^') {
                if (bIsNumber && currentFilter.charAt(0) == '^')
                    inputvalue = currentFilter.substr(1); //ignore trailing ^
                else
                    inputvalue = currentFilter;
                search_init = '';
            }

            var input = $('<input type="text" class="' + search_init + sCSSClass + '" value="' + inputvalue + '" rel="' + i + '"/>');
            if (iMaxLenght != undefined && iMaxLenght != -1) {
                input.attr('maxlength', iMaxLenght);
            }
            th.html(input);
            if (bIsNumber)
                th.wrapInner('<span class="filter_column filter_number" />');
            else
                th.wrapInner('<span class="filter_column filter_text" />');

            asInitVals[i] = label;
            var index = i;

            if (bIsNumber && !oTable.fnSettings().oFeatures.bServerSide) {
                input.keyup(function () {
                    /* Filter on the column all numbers that starts with the entered value */
                    oTable.fnFilter('^' + this.value, _fnColumnIndex(index), true, false); //Issue 37
                    fnOnFiltered();
                });
            } else {
                input.keyup(function () {
                    if (oTable.fnSettings().oFeatures.bServerSide && iFilterLength != 0) {
                        //If filter length is set in the server-side processing mode
                        //Check has the user entered at least iFilterLength new characters

                        var currentFilter = oTable.fnSettings().aoPreSearchCols[index].sSearch;
                        var iLastFilterLength = $(this).data("dt-iLastFilterLength");
                        if (typeof iLastFilterLength == "undefined")
                            iLastFilterLength = 0;
                        var iCurrentFilterLength = this.value.length;
                        if (Math.abs(iCurrentFilterLength - iLastFilterLength) < iFilterLength
                        //&& currentFilter.length == 0 //Why this?
                            ) {
                            //Cancel the filtering
                            return;
                        }
                        else {
                            //Remember the current filter length
                            $(this).data("dt-iLastFilterLength", iCurrentFilterLength);
                        }
                    }
                    /* Filter on the column (the index) of this element */
                    oTable.fnFilter(this.value, _fnColumnIndex(index), regex, smart); //Issue 37
                    fnOnFiltered();
                });
            }

            input.focus(function () {
                if ($(this).hasClass("search_init")) {
                    $(this).removeClass("search_init");
                    this.value = "";
                }
            });
            input.blur(function () {
                if (this.value == "") {
                    $(this).addClass("search_init");
                    this.value = asInitVals[index];
                }
            });
        }

        function fnCreateRangeInput(oTable) {

            //var currentFilter = oTable.fnSettings().aoPreSearchCols[i].sSearch;
            th.html(_fnRangeLabelPart(0));
            var sFromId = oTable.attr("id") + '_range_from_' + i;
            var from = $('<input type="text" class="number_range_filter form-control" id="' + sFromId + '" rel="' + i + '"/>');
            th.append(from);
            th.append(_fnRangeLabelPart(1));
            var sToId = oTable.attr("id") + '_range_to_' + i;
            var to = $('<input type="text" class="number_range_filter form-control" id="' + sToId + '" rel="' + i + '"/>');
            th.append(to);
            th.append(_fnRangeLabelPart(2));
            th.wrapInner('<span class="filter_column filter_number_range form-control" />');
            var index = i;
            aiCustomSearch_Indexes.push(i);


            oTable.dataTableExt.afnFiltering.push(
            function (oSettings, aData, iDataIndex) {
                if (oTable.attr("id") != oSettings.sTableId)
                    return true;
                // Try to handle missing nodes more gracefully
                if (document.getElementById(sFromId) == null)
                    return true;
                var iMin = document.getElementById(sFromId).value * 1;
                var iMax = document.getElementById(sToId).value * 1;
                var iValue = aData[_fnColumnIndex(index)] == "-" ? 0 : aData[_fnColumnIndex(index)] * 1;
                if (iMin == "" && iMax == "") {
                    return true;
                }
                else if (iMin == "" && iValue <= iMax) {
                    return true;
                }
                else if (iMin <= iValue && "" == iMax) {
                    return true;
                }
                else if (iMin <= iValue && iValue <= iMax) {
                    return true;
                }
                return false;
            }
        );

            $('#' + sFromId + ',#' + sToId, th).keyup(function () {

                var iMin = document.getElementById(sFromId).value * 1;
                var iMax = document.getElementById(sToId).value * 1;
                if (iMin != 0 && iMax != 0 && iMin > iMax)
                    return;

                oTable.fnDraw();
                fnOnFiltered();
            });


        }


        function fnCreateDateRangeInput(oTable) {

            var aoFragments = sRangeFormat.split(/[}{]/);

            th.html("");
            var sFromId = oTable.attr("id") + '_range_from_' + i;
            var from = $('<input type="text" class="date_range_filter form-control" id="' + sFromId + '" rel="' + i + '"/>');
            from.datepicker();
            var sToId = oTable.attr("id") + '_range_to_' + i;
            var to = $('<input type="text" class="date_range_filter form-control" id="' + sToId + '" rel="' + i + '"/>');

            for (ti = 0; ti < aoFragments.length; ti++) {

                if (aoFragments[ti] == properties.sDateFromToken) {
                    th.append(from);
                } else {
                    if (aoFragments[ti] == properties.sDateToToken) {
                        th.append(to);
                    } else {
                        th.append(aoFragments[ti]);
                    }
                }
            }


            th.wrapInner('<span class="filter_column filter_date_range" />');
            to.datepicker();
            var index = i;
            aiCustomSearch_Indexes.push(i);

            oTable.dataTableExt.afnFiltering.push(
            function (oSettings, aData, iDataIndex) {
                if (oTable.attr("id") != oSettings.sTableId)
                    return true;

                var dStartDate = from.datepicker("getDate");

                var dEndDate = to.datepicker("getDate");

                if (dStartDate == null && dEndDate == null) {
                    return true;
                }

                var dCellDate = null;
                try {
                    if (aData[_fnColumnIndex(index)] == null || aData[_fnColumnIndex(index)] == "")
                        return false;
                    //alert($.datepicker.regional[""].dateFormat);
                    dCellDate = $.datepicker.parseDate('dd/mm/yy', aData[_fnColumnIndex(index)]);
                } catch (ex) {
                    return false;
                }
                if (dCellDate == null)
                    return false;


                if (dStartDate == null && dCellDate <= dEndDate) {
                    return true;
                }
                else if (dStartDate <= dCellDate && dEndDate == null) {
                    return true;
                }
                else if (dStartDate <= dCellDate && dCellDate <= dEndDate) {
                    return true;
                }
                return false;
            }
        );

            $('#' + sFromId + ',#' + sToId, th).change(function () {
                oTable.fnDraw();
                fnOnFiltered();
            });


        }

        function fnCreateColumnSelect(oTable, aData, iColumn, nTh, sLabel, bRegex, oSelected, bMultiselect) {
            if (aData == null)
                aData = _fnGetColumnValues(oTable.fnSettings(), iColumn, true, false, true);
            var index = iColumn;
            var currentFilter = oTable.fnSettings().aoPreSearchCols[i].sSearch;
            if (currentFilter == null || currentFilter == "")//Issue 81
                currentFilter = oSelected;

            var r = '<select class="search_init select_filter form-control" rel="' + i + '"><option value="" class="search_init">' + sLabel + '</option>';
            if(bMultiselect) {
                r = '<select class="search_init select_filter form-control" rel="' + i + '" multiple>';
            }
            var j = 0;
            var iLen = aData.length;
            for (j = 0; j < iLen; j++) {
                if (typeof (aData[j]) != 'object') {
                    var selected = '';
                    if (escape(aData[j]) == currentFilter
                        || escape(aData[j]) == escape(currentFilter)
                        )
                        selected = 'selected '
                    r += '<option ' + selected + ' value="' + escape(aData[j]) + '">' + aData[j] + '</option>';
                }
                else {
                    var selected = '';
                    if (bRegex) {
                        //Do not escape values if they are explicitely set to avoid escaping special characters in the regexp
                        if (aData[j].value == currentFilter) selected = 'selected ';
                        r += '<option ' + selected + 'value="' + aData[j].value + '">' + aData[j].label + '</option>';
                    } else {
                        if (escape(aData[j].value) == currentFilter) selected = 'selected ';
                        r += '<option ' + selected + 'value="' + escape(aData[j].value) + '">' + aData[j].label + '</option>';
                    }
                }
            }

            var select = $(r + '</select>');
            nTh.html(select);
            nTh.wrapInner('<span class="filter_column filter_select" />');
            if(bMultiselect) {
                select.change(function () {
                    if ($(this).val() != "") {
                        $(this).removeClass("search_init");
                    } else {
                        $(this).addClass("search_init");
                    }
                    var selectedOptions = $(this).val();
                    var asEscapedFilters = [];
                    if(selectedOptions==null || selectedOptions==[]){
                        var re = '^(.*)$';
                    }else{
                        $.each( selectedOptions, function( i, sFilter ) {
                            asEscapedFilters.push( fnRegExpEscape( sFilter ) );
                        } );
                        var re = '^(' + asEscapedFilters.join('|') + ')$';
                    }
                    oTable.fnFilter( re, index, true, false );
                });
            } else {
                select.change(function () {
                    //var val = $(this).val();
                    if ($(this).val() != "") {
                        $(this).removeClass("search_init");
                    } else {
                        $(this).addClass("search_init");
                    }
                    if (bRegex)
                        oTable.fnFilter($(this).val(), iColumn, bRegex); //Issue 41
                    else
                        oTable.fnFilter(unescape($(this).val()), iColumn); //Issue 25
                    fnOnFiltered();
                });
                if (currentFilter != null && currentFilter != "")//Issue 81
                    oTable.fnFilter(unescape(currentFilter), iColumn);
            }
        }

        function fnCreateSelect(oTable, aData, bRegex, oSelected, bMultiselect) {
            var oSettings = oTable.fnSettings();
            if ( (aData == null || typeof(aData) == 'function' ) && oSettings.sAjaxSource != "" && !oSettings.oFeatures.bServerSide) {
                oSettings.aoDrawCallback.push({
                    "fn": (function (iColumn, nTh, sLabel) {
                        return function (oSettings) {
                            if (oSettings.iDraw == 2 && oSettings.sAjaxSource != null && oSettings.sAjaxSource != "" && !oSettings.oFeatures.bServerSide) {
                                return fnCreateColumnSelect(oTable, aData && aData(oSettings.aoData, oSettings), _fnColumnIndex(iColumn), nTh, sLabel, bRegex, oSelected, bMultiselect); //Issue 37
                            }
                        };
                    })(i, th, label),
                    "sName": "column_filter_" + i
                });
            }
            fnCreateColumnSelect(oTable, typeof(aData) == 'function' ? null: aData, _fnColumnIndex(i), th, label, bRegex, oSelected, bMultiselect); //Issue 37

        }
        function fnRegExpEscape( sText ) {
            return sText.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
        };

        function fnCreateDropdown(aData) {
            var index = i;
            var r = '<div class="dropdown select_filter form-control"><a class="dropdown-toggle" data-toggle="dropdown" href="#">' + label + '<b class="caret"></b></a><ul class="dropdown-menu" role="menu"><li data-value=""><a>Show All</a></li>', j, iLen = aData.length;

            for (j = 0; j < iLen; j++) {
                r += '<li data-value="' + aData[j] + '"><a>' + aData[j] + '</a></li>';
            }
            var select = $(r + '</ul></div>');
            th.html(select);
            th.wrapInner('<span class="filterColumn filter_select" />');
            select.find('li').click(function () {
                oTable.fnFilter($(this).data('value'), index);
            });
        }
        function fnCreateCheckbox(oTable, aData) {

            if (aData == null)
                aData = _fnGetColumnValues(oTable.fnSettings(), i, true, true, true);
            var index = i;

            var r = '', j, iLen = aData.length;

            //clean the string
            var localLabel = label.replace('%', 'Perc').replace("&", "AND").replace("$", "DOL").replace("Â£", "STERL").replace("@", "AT").replace(/\s/g, "_");
            localLabel = localLabel.replace(/[^a-zA-Z 0-9]+/g, '');
            //clean the string

            //button label override
            var labelBtn = label;
            if (properties.sFilterButtonText != null || properties.sFilterButtonText != undefined) {
                labelBtn = properties.sFilterButtonText;
            }

            var relativeDivWidthToggleSize = 10;
            var numRow = 12; //numero di checkbox per colonna
            var numCol = Math.floor(iLen / numRow);
            if (iLen % numRow > 0) {
                numCol = numCol + 1;
            };

            //count how many column should be generated and split the div size
            var divWidth = 100 / numCol - 2;

            var divWidthToggle = relativeDivWidthToggleSize * numCol;

            if (numCol == 1) {
                divWidth = 20;
            }

            var divRowDef = '<div style="float:left; min-width: ' + divWidth + '%; " >';
            var divClose = '</div>';

            var uniqueId = oTable.attr("id") + localLabel;
            var buttonId = "chkBtnOpen" + uniqueId;
            var checkToggleDiv = uniqueId + "-flt-toggle";
            r += '<button id="' + buttonId + '" class="checkbox_filter btn btn-default" > ' + labelBtn + '</button>'; //filter button witch open dialog
            r += '<div id="' + checkToggleDiv + '" '
                + 'title="' + label + '" '
                + 'rel="' + i + '" '
                + 'class="toggle-check ui-widget-content ui-corner-all"  style="width: ' + (divWidthToggle) + '%; " >'; //dialog div
            //r+= '<div align="center" style="margin-top: 5px; "> <button id="'+buttonId+'Reset" class="checkbox_filter" > reset </button> </div>'; //reset button and its div
            r += divRowDef;

            for (j = 0; j < iLen; j++) {

                //if last check close div
                if (j % numRow == 0 && j != 0) {
                    r += divClose + divRowDef;
                }

                var sLabel = aData[j];
                var sValue = aData[j];

                if (typeof (aData[j]) == 'object') {
                    sLabel = aData[j].label;
                    sValue = aData[j].value;
                }

                //check button
                r += '<input class="search_init checkbox_filter btn btn-default" type="checkbox" id= "' + uniqueId + '_cb_' + sValue + '" name= "' + localLabel + '" value="' + sValue + '" >' + sLabel + '<br/>';

                var checkbox = $(r);
                th.html(checkbox);
                th.wrapInner('<span class="filter_column filter_checkbox" />');
                //on every checkbox selection
                checkbox.change(function () {

                    var search = '';
                    var or = '|'; //var for select checks in 'or' into the regex
                    var resSize = $('input:checkbox[name="' + localLabel + '"]:checked').size();
                    $('input:checkbox[name="' + localLabel + '"]:checked').each(function (index) {

                        //search = search + ' ' + $(this).val();
                        //concatenation for selected checks in or
                        if ((index == 0 && resSize == 1)
                                || (index != 0 && index == resSize - 1)) {
                            or = '';
                        }
                        //trim
                        search = search.replace(/^\s+|\s+$/g, "");
                        search = search + $(this).val() + or;
                        or = '|';

                    });


                    if (search != "") {
                        $('input:checkbox[name="' + localLabel + '"]').removeClass("search_init");
                    } else {
                        $('input:checkbox[name="' + localLabel + '"]').addClass("search_init");
                    }
                    /* Old code for setting search_init CSS class on checkboxes if any of them is checked
                    for (var jj = 0; jj < iLen; jj++) {
                        if (search != "") {
                            $('#' + aData[jj]).removeClass("search_init");
                        } else {
                            $('#' + aData[jj]).addClass("search_init");
                        }
                    }
                    */

                    //execute search
                    oTable.fnFilter(search, index, true, false);
                    fnOnFiltered();
                });
            }

            //filter button
            $('#' + buttonId).button();
            //dialog
            $('#' + checkToggleDiv).dialog({
                //height: 140,
                autoOpen: false,
                //show: "blind",
                hide: "blind",
                buttons: [{
                    text: "Reset",
                    click: function () {
                        //$('#'+buttonId).removeClass("filter_selected"); //LM remove border if filter selected
                        $('input:checkbox[name="' + localLabel + '"]:checked').each(function (index3) {
                            $(this).attr('checked', false);
                            $(this).addClass("search_init");
                        });
                        oTable.fnFilter('', index, true, false);
                        fnOnFiltered();
                        return false;
                    }
                },
                            {
                                text: "Close",
                                click: function () { $(this).dialog("close"); }
                            }
                        ]
            });


            $('#' + buttonId).click(function () {

                $('#' + checkToggleDiv).dialog('open');
                var target = $(this);
                $('#' + checkToggleDiv).dialog("widget").position({ my: 'top',
                    at: 'bottom',
                    of: target
                });

                return false;
            });

            var fnOnFilteredCurrent = fnOnFiltered;

            fnOnFiltered = function () {
                var target = $('#' + buttonId);
                $('#' + checkToggleDiv).dialog("widget").position({ my: 'top',
                    at: 'bottom',
                    of: target
                });
                fnOnFilteredCurrent();
            };
            //reset
            /*
            $('#'+buttonId+"Reset").button();
            $('#'+buttonId+"Reset").click(function(){
            $('#'+buttonId).removeClass("filter_selected"); //LM remove border if filter selected
            $('input:checkbox[name="'+localLabel+'"]:checked').each(function(index3) {
            $(this).attr('checked', false);
            $(this).addClass("search_init");
            });
            oTable.fnFilter('', index, true, false);
            return false;
            }); 
            */
        }




        function _fnRangeLabelPart(iPlace) {
            switch (iPlace) {
                case 0:
                    return sRangeFormat.substring(0, sRangeFormat.indexOf("{from}"));
                case 1:
                    return sRangeFormat.substring(sRangeFormat.indexOf("{from}") + 6, sRangeFormat.indexOf("{to}"));
                default:
                    return sRangeFormat.substring(sRangeFormat.indexOf("{to}") + 4);
            }
        }




        var oTable = this;

        var defaults = {
            sPlaceHolder: "foot",
            sRangeSeparator: "~",
            iFilteringDelay: 500,
            aoColumns: null,
            sRangeFormat: "Fecha inicio {from} Fecha fin {to}",
            sDateFromToken: "from",
            sDateToToken: "to"
        };

        var properties = $.extend(defaults, options);

        return this.each(function () {

            if (!oTable.fnSettings().oFeatures.bFilter)
                return;
            asInitVals = new Array();

            var aoFilterCells = oTable.fnSettings().aoFooter[0];

            var oHost = oTable.fnSettings().nTFoot; //Before fix for ColVis
            var sFilterRow = "tr"; //Before fix for ColVis

            if (properties.sPlaceHolder == "head:after") {
                var tr = $("tr:first", oTable.fnSettings().nTHead).detach();
                //tr.appendTo($(oTable.fnSettings().nTHead));
                if (oTable.fnSettings().bSortCellsTop) {
                    tr.prependTo($(oTable.fnSettings().nTHead));
                    //tr.appendTo($("thead", oTable));
                    aoFilterCells = oTable.fnSettings().aoHeader[1];
                }
                else {
                    tr.appendTo($(oTable.fnSettings().nTHead));
                    //tr.prependTo($("thead", oTable));
                    aoFilterCells = oTable.fnSettings().aoHeader[0];
                }

                sFilterRow = "tr:last";
                oHost = oTable.fnSettings().nTHead;

            } else if (properties.sPlaceHolder == "head:before") {

                if (oTable.fnSettings().bSortCellsTop) {
                    var tr = $("tr:first", oTable.fnSettings().nTHead).detach();
                    tr.appendTo($(oTable.fnSettings().nTHead));
                    aoFilterCells = oTable.fnSettings().aoHeader[1];
                } else {
                    aoFilterCells = oTable.fnSettings().aoHeader[0];
                }
                /*else {
                //tr.prependTo($("thead", oTable));
                sFilterRow = "tr:first";
                }*/

                sFilterRow = "tr:first";

                oHost = oTable.fnSettings().nTHead;

                
            }

            //$(sFilterRow + " th", oHost).each(function (index) {//bug with ColVis
            $(aoFilterCells).each(function (index) {//fix for ColVis
                i = index;
                var aoColumn = { type: "text",
                    bRegex: false,
                    bSmart: true,
                    iMaxLenght: -1,
                    iFilterLength: 0
                };
                if (properties.aoColumns != null) {
                    if (properties.aoColumns.length < i || properties.aoColumns[i] == null)
                        return;
                    aoColumn = properties.aoColumns[i];
                }
                //label = $(this).text(); //Before fix for ColVis
                label = $($(this)[0].cell).text(); //Fix for ColVis
                if (aoColumn.sSelector == null) {
                    //th = $($(this)[0]);//Before fix for ColVis
                    th = $($(this)[0].cell); //Fix for ColVis
                }
                else {
                    th = $(aoColumn.sSelector);
                    if (th.length == 0)
                        th = $($(this)[0].cell);
                }

                if (aoColumn != null) {
                    if (aoColumn.sRangeFormat != null)
                        sRangeFormat = aoColumn.sRangeFormat;
                    else
                        sRangeFormat = properties.sRangeFormat;
                    switch (aoColumn.type) {
                        case "null":
                            break;
                        case "number":
                            fnCreateInput(oTable, true, false, true, aoColumn.iFilterLength, aoColumn.iMaxLenght);
                            break;
                        case "select":
                            if (aoColumn.bRegex != true)
                                aoColumn.bRegex = false;
                            fnCreateSelect(oTable, aoColumn.values, aoColumn.bRegex, aoColumn.selected, aoColumn.multiple);
                            break;
                        case "number-range":
                            fnCreateRangeInput(oTable);
                            break;
                        case "date-range":
                            fnCreateDateRangeInput(oTable);
                            break;
                        case "checkbox":
                            fnCreateCheckbox(oTable, aoColumn.values);
                            break;
                        case "twitter-dropdown":
                        case "dropdown":
                            fnCreateDropdown(aoColumn.values);
                            break;
                        case "text":
                        default:
                            bRegex = (aoColumn.bRegex == null ? false : aoColumn.bRegex);
                            bSmart = (aoColumn.bSmart == null ? false : aoColumn.bSmart);
                            fnCreateInput(oTable, bRegex, bSmart, false, aoColumn.iFilterLength, aoColumn.iMaxLenght);
                            break;

                    }
                }
            });

            for (j = 0; j < aiCustomSearch_Indexes.length; j++) {
                //var index = aiCustomSearch_Indexes[j];
                var fnSearch_ = function () {
                    var id = oTable.attr("id");
                    return $("#" + id + "_range_from_" + aiCustomSearch_Indexes[j]).val() + properties.sRangeSeparator + $("#" + id + "_range_to_" + aiCustomSearch_Indexes[j]).val()
                }
                afnSearch_.push(fnSearch_);
            }

            if (oTable.fnSettings().oFeatures.bServerSide) {

                var fnServerDataOriginal = oTable.fnSettings().fnServerData;

                oTable.fnSettings().fnServerData = function (sSource, aoData, fnCallback) {

                    for (j = 0; j < aiCustomSearch_Indexes.length; j++) {
                        var index = aiCustomSearch_Indexes[j];

                        for (k = 0; k < aoData.length; k++) {
                            if (aoData[k].name == "sSearch_" + index)
                                aoData[k].value = afnSearch_[j]();
                        }
                    }
                    aoData.push({ "name": "sRangeSeparator", "value": properties.sRangeSeparator });

                    if (fnServerDataOriginal != null) {
                        try {
                            fnServerDataOriginal(sSource, aoData, fnCallback, oTable.fnSettings()); //TODO: See Issue 18
                        } catch (ex) {
                            fnServerDataOriginal(sSource, aoData, fnCallback);
                        }
                    }
                    else {
                        $.getJSON(sSource, aoData, function (json) {
                            fnCallback(json)
                        });
                    }
                };

            }

        });

    };
})(jQuery);