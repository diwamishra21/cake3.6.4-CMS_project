//code for getting data from controller displaying onboard graph
function getfilter(){
    $('#chartdiv').remove();
    $('#chartConfirmation').remove();
    $('#loader1').show();
    $('#loader2').show();
    var business_unit = $('#bu_unit').val();
    var department = $('#department').val();
    var sub_department = $('#sub_department').val();
    var location = $('#location').val();
    var days = $('#days').val();
    $.ajax({
        url: webroot + 'dashboard/get-filter-dashbordData',
        type: 'POST',
        dataType: 'JSON',
        data: {"business_unit":business_unit, "department":department, "sub_department":sub_department,
    "location":location, "days":days},
        
        success: function(data){
            console.log(data);
            var chartdiv2 = AmCharts.makeChart("chartdiv2", {
                "type": "serial",
                "theme": "light",
                "marginRight": 40,
                "marginLeft": 40,
                "autoMarginOffset": 20,
                "mouseWheelZoomEnabled":true,
                "dataDateFormat": "YYYY-MM-DD",
                "valueAxes": [{
                    "id": "v1",
                    "axisAlpha": 0,
                    "position": "left",
                    "ignoreAxisWidth":true,
                    "integersOnly": true,
                    "title": 'Number of Onboard'
                }],
                "balloon": {
                    "borderThickness": 1,
                    "shadowAlpha": 0
                },
                "legend": {
                    "useGraphSettings": true,
                    "position": "top"
                },
                "graphs": [{
                    "id": "g1",
                    "balloon":{
                      "drop":true,
                      "adjustBorderColor":false,
                      "color":"#ffffff"
                    },
                    "bullet": "round",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 8,
                    "hideBulletsCount": 50,
                    "lineThickness": 3,
                    "title": "Onboard",
                    "useLineColorForBulletBorder": true,
                    "valueField": "value",
                    "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                }],
                "chartScrollbar": {
                    "graph": "g1",
                    "oppositeAxis":false,
                    "offset":30,
                    "scrollbarHeight": 80,
                    "backgroundAlpha": 0,
                    "selectedBackgroundAlpha": 0.1,
                    "selectedBackgroundColor": "#888888",
                    "graphFillAlpha": 0,
                    "graphLineAlpha": 0.5,
                    "selectedGraphFillAlpha": 0,
                    "selectedGraphLineAlpha": 1,
                    "autoGridCount":true,
                    "color":"#AAAAAA"
                },
                "chartCursor": {
                    "pan": true,
                    "valueLineEnabled": true,
                    "valueLineBalloonEnabled": true,
                    "cursorAlpha":1,
                    "cursorColor":"#258cbb",
                    "limitToGraph":"g1",
                    "valueLineAlpha":0.2,
                    "valueZoomable":true
                },
//                "valueScrollbar":{
//                  "oppositeAxis":false,
//                  "offset":50,
//                  "scrollbarHeight":10
//                },
                "categoryField": "date",
                "categoryAxis": {
                    "parseDates": true,
                    "dashLength": 1,
                    "minorGridEnabled": true
                },
                "dataProvider": data
            });

            chartdiv2.addListener("rendered", zoomChartdiv2);

            zoomChartdiv2();

            function zoomChartdiv2() {
                chartdiv2.zoomToIndexes(chartdiv2.dataProvider.length - 40, chartdiv2.dataProvider.length - 1);
            }
//            
            $('#loader1').remove();
            $('#chartdiv2').show();
        }
    });
    
    getConfirmation(business_unit,department,sub_department,location,days);
}

//script for getting data and displaying confirmation graph on ajax hit
function getConfirmation(business_unit,department,sub_department,location,days){
    $.ajax({
        url: webroot + 'dashboard/get-filter-confirmation',
        type: 'POST',
        dataType: 'JSON',
        data: {"business_unit":business_unit, "department":department, "sub_department":sub_department,
    "location":location, "days":days},
        
        success: function(response){
            console.log(response);
                   var chartConf = AmCharts.makeChart("chartConfirmation2", {
                        "type": "serial",
                        "theme": "light",
                        "marginRight": 40,
                        "marginLeft": 40,
                        "autoMarginOffset": 20,
                        "mouseWheelZoomEnabled":true,
                        "dataDateFormat": "YYYY-MM-DD",
                        "valueAxes": [{
                            "id": "v1",
                            "axisAlpha": 0,
                            "position": "left",
                            "ignoreAxisWidth":true,
                            "integersOnly": true,
                            "title":"Number of values(Active/confirmed/Rejected/Inactive)"
                        }],
                        "balloon": {
                            "borderThickness": 1,
                            "shadowAlpha": 0,
                            "adjustBorderColor":false,
                            "color":"#ffffff"
                        },
                        "legend": {
                        "useGraphSettings": true,
                        "position": "top"
                        },
                        "graphs": [{
                            "id": "g1,g2,g3,g4",
                    //        "balloon":{
                    //          "drop":true,
                    //          "adjustBorderColor":false,
                    //          "color":"#ffffff",
                    //          "fillColor": "#FFFFFF"
                    //        },
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#FFFFFF",
                            "bulletSize": 8,
                            "hideBulletsCount": 50,
                            "lineThickness": 3,
                            "title": "Active",
                            "showBalloon": true,
                            "useLineColorForBulletBorder": true,
                            "valueField": "value1",
                            "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                        },
                            {
                            "id": "g2",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#00FF00",
                            "bulletSize": 8,
                            "hideBulletsCount": 50,
                            "lineThickness": 3,
                            "title": "Confirmed",
                            "lineColor": "green",
                            "useLineColorForBulletBorder": true,
                            "valueField": "value2",
                            "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                        },
                            {
                            "id": "g3",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#ff003f",
                            "bulletSize": 8,
                            "hideBulletsCount": 50,
                            "lineThickness": 3,
                            "title": "Rejected",
                            "lineColor": "red",
                            "useLineColorForBulletBorder": true,
                            "valueField": "value3"
                        },
                            {
                            "id": "g4",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#ff003f",
                            "bulletSize": 8,
                            "hideBulletsCount": 50,
                            "lineThickness": 3,
                            "title": "Inactive",
                            "lineColor": "orange",
                            "useLineColorForBulletBorder": true,
                            "valueField": "value4"
                        }],
                        "chartScrollbar": {
                            "graph": "g1,g2,g3,g4",
                            "oppositeAxis":false,
                            "offset":30,
                            "scrollbarHeight": 80,
                            "backgroundAlpha": 0,
                            "selectedBackgroundAlpha": 0.1,
                            "selectedBackgroundColor": "#888888",
                            "graphFillAlpha": 0,
                            "graphLineAlpha": 0.5,
                            "selectedGraphFillAlpha": 0,
                            "selectedGraphLineAlpha": 1,
                            "autoGridCount":true,
                            "color":"#AAAAAA"
                        },
                        "chartCursor": {
                            "pan": true,
                            "valueLineEnabled": true,
                            "valueLineBalloonEnabled": true,
                            "cursorAlpha":1,
                            "cursorColor":"#258cbb",
                            "limitToGraph":"g1,g2,g3,g4",
                            "valueLineAlpha":0.2,
                            "valueZoomable":true
                        },
                    //    "valueScrollbar":{
                    //      "oppositeAxis":false,
                    //      "offset":50,
                    //      "scrollbarHeight":10
                    //    },
                        "categoryField": "date",
                        "categoryAxis": {
                            "parseDates": true,
                            "dashLength": 1,
                            "minorGridEnabled": true
                        },
                        "dataProvider": response
                    });

            chartConf.addListener("rendered", zoomChartConf);

            zoomChartConf();

            function zoomChartConf() {
                chartConf.zoomToIndexes(chartConf.dataProvider.length - 40, chartConf.dataProvider.length - 1);
            }
            
            $('#loader2').remove();
            $('#chartConfirmation2').show();
        }
    });
    
}
