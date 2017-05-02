@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Отчеты</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('roles/create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить завяку</a>
        </div>
    </div>
@endsection


@section('content')
    <div class="dx-warning hidden">
        <div>
            <h2>How to Include Charts Library in Xenon Theme</h2>

            <p>The reason why you don't see charts like in the Xenon demo website is because of license restrictions from DevExpress company. <a href="http://js.devexpress.com/DevExtremeWeb/?folder=EULAs" target="_blank">Click here</a> to read license agreement.</p>
            <p>Even that we have purchased the developer license we are not permitted to include the DevExtreme Web Charts JavaScript library in the default download file of Xenon theme, however you can include DevExpress Charts library manually and takes just few minutes:</p>

            <ol>
                <li>Download <strong>DevExtreme Web</strong> JavaScript library by clicking <a href="https://go.devexpress.com/DevExpressDownload_DevExtremeWebTrial.aspx" class="text-bold">here</a>. If the link doesn't work, then <a href="http://js.devexpress.com/Buy/" target="_parent"><strong>click this one</strong></a> and choose DevExtreme Web package to download.</li>
                <li>Extract the downloaded archive. There you will find <strong>Lib/</strong> folder. <strong>Copy</strong> the folders inside.</li>
                <li><strong>Paste</strong> copied files to <strong>assets/js/devexpress-web-14.1/</strong></li>
                <li>You are all set! Charts will look the same just like in the demo website.</li>
            </ol>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function($)
        {
            if( ! $.isFunction($.fn.dxChart))
                $(".dx-warning").removeClass('hidden');
        });
    </script>

    <script>
        var xenonPalette = ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'];
    </script>

    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Standard Bar</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            $("#bar-1").dxChart({
                                dataSource: [
                                    {day: "Monday", sales: 3},
                                    {day: "Tuesday", sales: 2},
                                    {day: "Wednesday", sales: 3},
                                    {day: "Thursday", sales: 4},
                                    {day: "Friday", sales: 6},
                                    {day: "Saturday", sales: 11},
                                    {day: "Sunday", sales: 4}
                                ],

                                series: {
                                    argumentField: "day",
                                    valueField: "sales",
                                    name: "Sales",
                                    type: "bar",
                                    color: '#68b828'
                                }
                            });

                            $("#bar-1-randomize").on('click', function(ev)
                            {
                                ev.preventDefault();

                                $('#bar-1').dxChart('instance').option('dataSource', [
                                    {day: "Monday", sales: between(1,25)},
                                    {day: "Tuesday", sales: between(1,25)},
                                    {day: "Wednesday", sales: between(1,25)},
                                    {day: "Thursday", sales: between(1,25)},
                                    {day: "Friday", sales: between(1,25)},
                                    {day: "Saturday", sales: between(1,25)},
                                    {day: "Sunday", sales: between(1,25)}
                                ]);
                            });
                        });

                        function between(randNumMin, randNumMax)
                        {
                            var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);

                            return randInt;
                        }
                    </script>
                    <div id="bar-1" style="height: 440px; width: 100%;"></div>
                    <br />
                    <a href="#" id="bar-1-randomize" class="btn btn-primary btn-small">Randomize</a>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Grouped Bars</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                { state: "China", oil: 4.95, gas: 2.85, coal: 45.56 },
                                { state: "Russia", oil: 12.94, gas: 17.66, coal: 4.13 },
                                { state: "USA", oil: 8.51, gas: 19.87, coal: 15.84 },
                                { state: "Iran", oil: 5.3, gas: 4.39 },
                                { state: "Canada", oil: 4.08, gas: 5.4 },
                                { state: "Saudi Arabia", oil: 12.03 },
                                { state: "Mexico", oil: 3.86 }
                            ];

                            $("#bar-2").dxChart({
                                equalBarWidth: false,
                                dataSource: dataSource,
                                commonSeriesSettings: {
                                    argumentField: "state",
                                    type: "bar"
                                },
                                series: [
                                    { valueField: "oil", name: "Oil Production", color: "#0e62c7" },
                                    { valueField: "gas", name: "Gas Production", color: "#2c2e2f" },
                                    { valueField: "coal", name: "Coal Production", color: "#7c38bc" }
                                ],
                                legend: {
                                    verticalAlignment: "bottom",
                                    horizontalAlignment: "center"
                                },
                                title: "Percent of Total Energy Production"
                            });
                        });
                    </script>
                    <div id="bar-2" style="height: 400px; width: 100%;"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Line Charts</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                { year: 1950, europe: 546, americas: 332, africa: 227 },
                                { year: 1960, europe: 705, americas: 417, africa: 283 },
                                { year: 1970, europe: 856, americas: 513, africa: 361 },
                                { year: 1980, europe: 1294, americas: 614, africa: 471 },
                                { year: 1990, europe: 321, americas: 721, africa: 623 },
                                { year: 2000, europe: 730, americas: 1836, africa: 1297 },
                                { year: 2010, europe: 728, americas: 935, africa: 982 },
                                { year: 2020, europe: 721, americas: 1027, africa: 1189 },
                                { year: 2030, europe: 704, americas: 1110, africa: 1416 },
                                { year: 2040, europe: 680, americas: 1178, africa: 1665 },
                                { year: 2050, europe: 650, americas: 1231, africa: 1937 }
                            ];

                            $("#bar-3").dxChart({
                                dataSource: dataSource,
                                commonSeriesSettings: {
                                    argumentField: "year"
                                },
                                series: [
                                    { valueField: "europe", name: "Europe", color: "#40bbea" },
                                    { valueField: "americas", name: "Americas", color: "#cc3f44" },
                                    { valueField: "africa", name: "Africa", color: "#8dc63f" }
                                ],
                                argumentAxis:{
                                    grid:{
                                        visible: true
                                    }
                                },
                                tooltip:{
                                    enabled: true
                                },
                                title: "Historic, Current and Future Population Trends",
                                legend: {
                                    verticalAlignment: "bottom",
                                    horizontalAlignment: "center"
                                },
                                commonPaneSettings: {
                                    border:{
                                        visible: true,
                                        right: false
                                    }
                                }
                            });
                        });
                    </script>
                    <div id="bar-3" style="height: 400px; width: 100%;"></div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Selection Charts</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                { country: "China", year2007: 0.1732, year2008: -0.1588 },
                                { country: "Germany", year2007: 0.0964, year2008: -0.2231 },
                                { country: "United States", year2007: 0.1187, year2008: -0.1878 },
                                { country: "Japan", year2007: 0.1081, year2008: -0.2614 },
                                { country: "France", year2007: 0.1014, year2008: -0.2222 },
                                { country: "Netherlands", year2007: 0.1355, year2008: -0.2015 }
                            ];

                            $("#bar-4").dxChart({
                                rotated: true,
                                dataSource: dataSource,
                                commonSeriesSettings: {
                                    argumentField: "country",
                                    type: "bar",
                                    hoverMode: "allArgumentPoints",
                                    selectionMode: "allArgumentPoints",
                                    label: {
                                        visible: true,
                                        format: "percent",
                                        precision: 1
                                    }
                                },
                                valueAxis: {
                                    label: {
                                        format: "percent",
                                        precision: 1
                                    }
                                },
                                series: [
                                    { valueField: "year2007", name: "2007 - 2008", color: "#0e62c7" },
                                    { valueField: "year2008", name: "2008 - 2009", color: "#00b19d" }
                                ],
                                title: {
                                    text: "Economy - Export Change"
                                },
                                legend: {
                                    verticalAlignment: "bottom",
                                    horizontalAlignment: "center"
                                },
                                pointClick: function(point) {
                                    point.select();
                                },
                                seriesClick: function(series) {
                                    series.isVisible() ? series.hide() : series.show();
                                }
                            });
                        });
                    </script>
                    <div id="bar-4" style="height: 450px; width: 100%;"></div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Stacked Bars with Selection (Rotated)</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                { country: "USA", gold: 36, silver: 38, bronze: 36 },
                                { country: "China", gold: 51, silver: 21, bronze: 28 },
                                { country: "Russia", gold: 23, silver: 21, bronze: 28 },
                                { country: "Britain", gold: 19, silver: 13, bronze: 15 },
                                { country: "Australia", gold: 14, silver: 15, bronze: 17 },
                                { country: "Germany", gold: 16, silver: 10, bronze: 15 }
                            ];

                            $("#bar-5").dxChart({
                                rotated: true,
                                pointSelectionMode: "multiple",
                                dataSource: dataSource,
                                commonSeriesSettings: {
                                    argumentField: "country",
                                    type: "stackedbar",
                                    selectionStyle: {
                                        hatching: {
                                            direction: "left"
                                        }
                                    }
                                },
                                series: [
                                    { valueField: "gold", name: "Gold Medals", color: "#ffd700" },
                                    { valueField: "silver", name: "Silver Medals", color: "#c0c0c0" },
                                    { valueField: "bronze", name: "Bronze Medals", color: "#cd7f32" }
                                ],
                                title: {
                                    text: "Olympic Medals in 2008"
                                },
                                legend: {
                                    verticalAlignment: "bottom",
                                    horizontalAlignment: "center"
                                },
                                pointClick: function(point) {
                                    point.isSelected() ? point.clearSelection() : point.select();
                                }
                            });
                        });
                    </script>
                    <div id="bar-5" style="height: 450px; width: 100%;"></div>
                </div>
            </div>

        </div>
    </div>



    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Bubble Charts with Selection</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                { total1: 9.5, total2: 168.8, total3: 127.2, older1: 2.4, older2: 8.8, older3: 40.0, perc1: 25.4, perc2: 5.3, perc3: 31.6, tag1: 'Sweden', tag2: 'Nigeria', tag3: 'Japan' },
                                { total1: 82.8, total2: 91.7, total3: 90.8, older1: 21.9, older2: 4.6, older3: 8.0, perc1: 26.7, perc2: 5.4, perc3: 8.9, tag1: 'Germany', tag2: 'Ethiopia', tag3: 'Viet Nam' },
                                { total1: 16.7, total2: 80.7, total3: 21.1, older1: 3.8, older2: 7.0, older3: 2.7, perc1: 22.8, perc2: 8.4, perc3: 12.9, tag1: 'Netherlands', tag2: 'Egypt', tag3: 'Sri Lanka' },
                                { total1: 62.8, total2: 52.4, total3: 96.7, older1: 14.4, older2: 4.0, older3: 5.9, perc1: 23.0, perc2: 7.8, perc3: 6.1, tag1: 'United Kingdom', tag2: 'South Africa', tag3: 'Philippines' },
                                { total1: 38.2, total2: 43.2, total3: 66.8, older1: 7.8, older2: 1.8, older3: 9.6, perc1: 20.4, perc2: 4.3, perc3: 13.7, tag1: 'Poland', tag2: 'Kenya', tag3: 'Thailand' },
                                { total1: 45.5, total3: 154.7, total4: 34.8, older1: 9.5, older3: 10.3, older4: 7.2, perc1: 21.1, perc3: 6.8, perc4: 20.8, tag1: 'Ukraine', tag3: 'Bangladesh', tag4: 'Canada' },
                                { total1: 143.2, total4: 120.8, older1: 26.5, older4: 11.0, perc1: 18.6, perc4: 9.5, tag1: 'Russian Federation', tag4: 'Mexico' }
                            ];

                            $("#bar-6").dxChart({
                                dataSource: dataSource,
                                commonSeriesSettings: {
                                    type: 'bubble'
                                },
                                title: 'Correlation between total population, population over 60 <br/>and % of population over 60',
                                tooltip: {
                                    enabled: true,
                                    customizeText: function () { return this.point.tag + '<br/>Total Population: ' + this.argumentText + 'M <br/>Population Over 60: ' + this.valueText + 'M <br/>% of population over 60: ' + this.size; }
                                },
                                argumentAxis: {
                                    label: {
                                        customizeText: function () {
                                            return this.value + 'M';
                                        }
                                    },
                                    title: 'Total Population'
                                },
                                valueAxis: {
                                    label: {
                                        customizeText: function () {
                                            return this.value + 'M';
                                        }
                                    },
                                    title: 'Population Over 60'
                                },
                                legend: {
                                    position: 'inside',
                                    horizontalAlignment: 'left',
                                    border: {
                                        visible: true
                                    }
                                },
                                palette: ["#00ced1", "#008000", "#ffd700", "#ff7f50"],
                                seriesClick: function(series) {
                                    series.isVisible() ? series.hide() : series.show();
                                },
                                series: [{
                                    name: 'Europe',
                                    argumentField: 'total1',
                                    valueField: 'older1',
                                    sizeField: 'perc1',
                                    tagField:'tag1',
                                    color: '#68b828'
                                }, {
                                    name: 'Africa',
                                    argumentField: 'total2',
                                    valueField: 'older2',
                                    sizeField: 'perc2',
                                    tagField: 'tag2',
                                    color: '#7c38bc'
                                }, {
                                    name: 'Asia',
                                    argumentField: 'total3',
                                    valueField: 'older3',
                                    sizeField: 'perc3',
                                    tagField: 'tag3',
                                    color: '#0e62c7'
                                }, {
                                    name: 'North America',
                                    argumentField: 'total4',
                                    valueField: 'older4',
                                    sizeField: 'perc4',
                                    tagField: 'tag4',
                                    color: '#f7aa47'
                                }]
                            });
                        });
                    </script>
                    <div id="bar-6" style="height: 450px; width: 100%;"></div>
                </div>
            </div>

        </div>
    </div>



    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Area Charts</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                { country: "China", y014: 320866959, y1564: 853191410, y65: 87774113 },
                                { country: "India", y014: 340419115, y1564: 626520945, y65: 47063757 },
                                { country: "United States", y014: 58554755, y1564: 182172625, y65: 34835293 },
                                { country: "Indonesia", y014: 68715705, y1564: 146014815, y65: 10053690 },
                                { country: "Brazil", y014: 50278034, y1564: 113391494, y65: 9190842 },
                                { country: "Russia", y014: 26465156, y1564: 101123777, y65: 18412243 }
                            ];

                            $("#bar-7").dxChart({
                                dataSource: dataSource,
                                commonSeriesSettings: {
                                    type: "area",
                                    argumentField: "country"
                                },
                                series: [
                                    { valueField: "y1564", name: "15-64 years", color: "#68b828" },
                                    { valueField: "y014", name: "0-14 years", color: "#4fcdfc" },
                                    { valueField: "y65", name: "65 years and older", color: "#333" }
                                ],
                                title: "Population: Age Structure (2000)",
                                argumentAxis:{
                                    valueMarginsEnabled: false
                                },
                                valueAxis:{
                                    label: {
                                        format: "millions"
                                    }
                                },
                                legend: {
                                    verticalAlignment: "bottom",
                                    horizontalAlignment: "center"
                                }
                            });
                        });
                    </script>
                    <div id="bar-7" style="height: 450px;"></div>
                </div>
            </div>

        </div>
    </div>



    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Range Bars</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                { date: new Date(2005,0,1), aVal1: 36, aVal2: 43.29, tVal1: 42.12, tVal2: 49.91 },
                                { date: new Date(2005,1,1), aVal1: 40.68, aVal2: 47.07, tVal1: 28.33, tVal2: 51.75 },
                                { date: new Date(2005,2,1), aVal1: 45.01, aVal2: 52.77, tVal1: 48.96, tVal2: 56.72 },
                                { date: new Date(2005,3,1), aVal1: 45.99, aVal2: 54.14, tVal1: 49.72, tVal2: 57.27 },
                                { date: new Date(2005,4,1), aVal1: 43.73, aVal2: 49.03, tVal1: 46.8, tVal2: 52.07 },
                                { date: new Date(2005,5,1), aVal1: 49.94, aVal2: 57.94, tVal1: 52.54, tVal2: 60.54 },
                                { date: new Date(2005,6,1), aVal1: 52.88, aVal2: 58.98, tVal1: 54.93, tVal2: 61.28 },
                                { date: new Date(2005,7,1), aVal1: 58.81, aVal2: 67.06, tVal1: 60.86, tVal2: 68.94 },
                                { date: new Date(2005,8,1), aVal1: 61, aVal2: 66.72, tVal1: 63 , tVal2: 69.47 },
                                { date: new Date(2005,9,1), aVal1: 57.86, aVal2: 63.47, tVal1: 59.76, tVal2: 65.47 },
                                { date: new Date(2005,10,1), aVal1: 54.24, aVal2: 59.98, tVal1: 56.14, tVal2: 61.78 },
                                { date: new Date(2005,11,1), aVal1: 55.22, aVal2: 59.22, tVal1: 57.34, tVal2: 61.37 }
                            ];

                            $("#bar-8").dxChart({
                                title: "Crude Oil Prices in 2005",
                                dataSource: dataSource,
                                commonSeriesSettings: {
                                    argumentField: "date",
                                    type: "rangeBar"
                                },
                                series: [
                                    {
                                        rangeValue1Field: "aVal1",
                                        rangeValue2Field: "aVal2",
                                        name: "ANS West Coast",
                                        color: "#7c38bc"
                                    }, {
                                        rangeValue1Field: "tVal1",
                                        rangeValue2Field: "tVal2",
                                        name: "West Texas Intermediate",
                                        color: "#0e62c7"
                                    }
                                ],
                                valueAxis: {
                                    title: {
                                        text: "$ per barrel"
                                    }
                                },
                                argumentAxis: {
                                    label: {
                                        format: "month"
                                    }
                                },
                                legend: {
                                    verticalAlignment: "bottom",
                                    horizontalAlignment: "center"
                                }
                            });
                        });
                    </script>
                    <div id="bar-8" style="height: 450px; width: 100%;"></div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Multiple Panes</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                { month: "January", avgT: 9.8, minT: 4.1, maxT: 15.5, prec: 109 },
                                { month: "February", avgT: 11.8, minT: 5.8, maxT: 17.8, prec: 104 },
                                { month: "March", avgT: 13.4, minT: 7.2, maxT: 19.6, prec: 92 },
                                { month: "April", avgT: 15.4, minT: 8.1, maxT: 22.8, prec: 30 },
                                { month: "May", avgT: 18, minT: 10.3, maxT: 25.7, prec: 10 },
                                { month: "June", avgT: 20.6, minT: 12.2, maxT: 29, prec: 2 },
                                { month: "July", avgT: 22.2, minT: 13.2, maxT: 31.3, prec: 2 },
                                { month: "August", avgT: 22.2, minT: 13.2, maxT: 31.1, prec: 1 },
                                { month: "September", avgT: 21.2, minT: 12.4, maxT: 29.9, prec: 8 },
                                { month: "October", avgT: 17.9, minT: 9.7, maxT: 26.1, prec: 24 },
                                { month: "November", avgT: 12.9, minT: 6.2, maxT: 19.6, prec: 64 },
                                { month: "December", avgT: 9.6, minT: 3.4, maxT: 15.7, prec: 76 }
                            ];

                            $("#bar-9").dxChart({
                                dataSource: dataSource,
                                commonSeriesSettings:{
                                    argumentField: "month"
                                },
                                panes: [{
                                    name: "topPane"
                                }, {
                                    name: "bottomPane"
                                }],
                                defaultPane: "bottomPane",
                                series: [{
                                    pane: "topPane",
                                    color: "#87CEEB",
                                    type: "rangeArea",
                                    rangeValue1Field: "minT",
                                    rangeValue2Field: "maxT",
                                    name: "Monthly Temperature Ranges, °C"
                                }, {
                                    pane: "topPane",
                                    valueField: "avgT",
                                    name: "Average Temperature, °C",
                                    label: {
                                        visible: true,
                                        customizeText: function (){
                                            return this.valueText + " °C";
                                        }
                                    },
                                    color: "#00b19d"
                                }, {
                                    type: "bar",
                                    valueField: "prec",
                                    name: "prec, mm",
                                    label: {
                                        visible: true,
                                        customizeText: function (){
                                            return this.valueText  + " mm";
                                        }
                                    },
                                    color: "#d5080f"
                                }
                                ],
                                valueAxis: [{
                                    pane: "bottomPane",
                                    grid: {
                                        visible: true
                                    },
                                    title: {
                                        text: "Precipitation, mm"
                                    }
                                }, {
                                    pane: "topPane",
                                    min: 0,
                                    max: 30,
                                    grid: {
                                        visible: true
                                    },
                                    title: {
                                        text: "Temperature, °C"
                                    }
                                }],
                                legend: {
                                    verticalAlignment: "bottom",
                                    horizontalAlignment: "center"
                                },
                                title: {
                                    text: "Weather in Glendale, CA"
                                }
                            });
                        });
                    </script>
                    <div id="bar-9" style="height: 450px; width: 100%;"></div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Multiple Panes</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            if( ! $.isFunction($.fn.dxChart))
                                return;

                            var dataSource = [
                                {region: "Asia", val: 4119626293},
                                {region: "Africa", val: 1012956064},
                                {region: "Northern America", val: 344124520},
                                {region: "Latin America and the Caribbean", val: 590946440},
                                {region: "Europe", val: 727082222},
                                {region: "Oceania", val: 35104756}
                            ], timer;

                            $("#bar-10").dxPieChart({
                                dataSource: dataSource,
                                title: "The Population of Continents and Regions",
                                tooltip: {
                                    enabled: false,
                                    format:"millions",
                                    customizeText: function() {
                                        return this.argumentText + "<br/>" + this.valueText;
                                    }
                                },
                                size: {
                                    height: 420
                                },
                                pointClick: function(point) {
                                    point.showTooltip();
                                    clearTimeout(timer);
                                    timer = setTimeout(function() { point.hideTooltip(); }, 2000);
                                    $("select option:contains(" + point.argument + ")").prop("selected", true);
                                },
                                legend: {
                                    visible: false
                                },
                                series: [{
                                    type: "doughnut",
                                    argumentField: "region"
                                }],
                                palette: xenonPalette
                            });

                        });
                    </script>
                    <div id="bar-10" style="height: 450px; width: 100%;"></div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('styles')
@endsection

@section('scripts')
    <script src="{{ url('assets/js/devexpress-web-14.1/js/dx.all.js') }}"></script>
@endsection