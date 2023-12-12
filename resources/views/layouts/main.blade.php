<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tunas Siak Anugrah | {{ $judul }} </title>

    <!-- css me -->
    <link rel="stylesheet" href="{{ url('dist/assets/css/main/app.css') }}" />
    <link rel="stylesheet"
        href="{{ url('/dist/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/dist/assets/css/pages/datatables.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ url('dist/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ url('dist/assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ url('dist/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('dist/assets/images/logo/favicon.png') }}" type="image/png">
    <link href="{{ url('/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- css me -->

    <link rel="shortcut icon" href="logo/tsa.png" type="image/png" />
    <link rel="stylesheet" href="{{ url('dist/assets/css/shared/iconly.css') }}" />
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active" style="background-color: #8cd7ea;">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="sidebar-toggler x">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-20 mx-auto">
                            <a href="/">
                                <img src="logo/tsa1.png" class="mb-5 mb-lg-5" alt="Logo"
                                    style="width: 190px; height: auto" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="aside-user mb-5 mb-lg-10">
                    <div class="d-flex align-items-center flex-column">
                        <div class="symbol symbol-75px mb-4">
                            <img src="logo/firefighter.png" alt=""
                                style="height: 150px; border-radius: 50%; border-width: 5px; border-style: solid; border-color: #DCDCDC;">
                        </div>
                        <div class="text-center">
                            <p class="text-grey-900 text-hover-primary fs-5 fw-boldest">PT. Tunas Siak Anugrah</p>
                            <span class="text-gray-600 fw-bold d-block fs-7 mb-1">
                                Admin
                            </span>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Main Menu</li>
                        <hr />
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="Input" class="sidebar-link">
                                <i class="bi bi-save-fill"></i>
                                <span>Input Data Barang</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="" class="sidebar-link">
                                <i class="bi bi-menu-button-wide-fill"></i>
                                <span>Management Barang</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="DataBarang">Data Barang</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="BarangMasuk">Stok Barang</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="BarangKeluar">Barang Keluar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="MailBox" class="sidebar-link">
                                <i class="bi bi-mailbox2"></i>
                                <span>Pesan Masuk</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="Logout" class="sidebar-link">
                                <i class="bi bi-door-open-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('js/script.js') }}"></script>

    <!-- js me -->
    <script src="{{ url('dist/assets/js/app.js') }}"></script>
    <script src="{{ url('dist/assets/js/bootstrap.js') }}"></script>
    <script src="{{ url('dist/assets/js/mazer.js') }}"></script>
    <script src="{{ url('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- js me -->

    <!-- datatable -->
    <script src="{{ url('dist/assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ url('/dist/assets/js/pages/datatables.js') }}"></script>
    <script src="{{ url('/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ url('/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('/js/demo/datatables-demo.js') }}"></script>
    <!-- datatable -->

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- js bootstrap -->

    <!-- chart resource -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- chart resource -->

    <!-- line chart css -->
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
    <!-- line chart css -->

    <!-- pie chart  css -->
    <style>
        #piechartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
    <!-- pie chart  css -->

    <style>
        #chartstock {
            width: 100%;
            height: 500px;
        }
    </style>

    <!-- styling bar chart -->
    <script>
        am5.ready(function() {

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv");


            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root)
            ]);


            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: true,
                panY: true,
                wheelX: "panX",
                wheelY: "zoomX",
                pinchZoomX: true
            }));

            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
            cursor.lineY.set("visible", false);


            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xRenderer = am5xy.AxisRendererX.new(root, {
                minGridDistance: 30
            });
            xRenderer.labels.template.setAll({
                rotation: -90,
                centerY: am5.p50,
                centerX: am5.p100,
                paddingRight: 15
            });

            xRenderer.grid.template.setAll({
                location: 1
            })

            var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                maxDeviation: 0.3,
                categoryField: "country",
                renderer: xRenderer,
                tooltip: am5.Tooltip.new(root, {})
            }));

            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                maxDeviation: 0.3,
                renderer: am5xy.AxisRendererY.new(root, {
                    strokeOpacity: 0.1
                })
            }));


            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: "Series 1",
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "value",
                sequencedInterpolation: true,
                categoryXField: "country",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "{valueY}"
                })
            }));

            series.columns.template.setAll({
                cornerRadiusTL: 5,
                cornerRadiusTR: 5,
                strokeOpacity: 0
            });
            series.columns.template.adapters.add("fill", function(fill, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });

            series.columns.template.adapters.add("stroke", function(stroke, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });


            // Set data
            var data = [{
                country: "APAR/APAB",
                value: 367
            }, {
                country: "Fire Alarm System",
                value: 533
            }, {
                country: "Fire Hydrant System",
                value: 323
            }, {
                country: "Fire Hose",
                value: 312
            }, {
                country: "Fire Hose Coupling",
                value: 262
            }, {
                country: "Hose Reel",
                value: 132
            }, {
                country: "Foam Tank & Hose Reel",
                value: 212
            }, {
                country: "Nozzle",
                value: 162
            }, {
                country: "In-Line Foam Eductor",
                value: 262
            }, {
                country: "Fire Monitor",
                value: 432
            }, {
                country: "Master Stream Nozzle",
                value: 232
            }, {
                country: "WPOM",
                value: 536
            }, {
                country: "Fire Pump",
                value: 462
            }, {
                country: "CAFS",
                value: 262
            }, {
                country: "Foam Trailer",
                value: 367
            }, {
                country: "Pompa Apung",
                value: 267
            }, {
                country: "SCBA",
                value: 467
            }, {
                country: "Compressor Air SCBA",
                value: 567
            }, {
                country: "AFFF",
                value: 347
            }, {
                country: "Foam Troly",
                value: 247
            }, {
                country: "Racking Support Gudang",
                value: 147
            }, {
                country: "Racking Warehouse",
                value: 347
            }, {
                country: "Medium & Light Duty",
                value: 237
            }, {
                country: "Mezzanine Racking",
                value: 137
            }, ];

            xAxis.data.setAll(data);
            series.data.setAll(data);


            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
            chart.appear(1000, 100);

        }); // end am5.ready()
    </script>
    <!-- styling bar chart -->

    <!-- styling pie chart -->
    <script>
        am5.ready(function() {

            var root = am5.Root.new("piechartdiv");

            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            var chart = root.container.children.push(am5percent.PieChart.new(root, {
                layout: root.verticalLayout,
                innerRadius: am5.percent(50)
            }));

            var series = chart.series.push(am5percent.PieSeries.new(root, {
                valueField: "value",
                categoryField: "category",
                alignLabels: false
            }));

            series.labels.template.setAll({
                textType: "circular",
                centerX: 0,
                centerY: 0
            });

            // isi data chart
            series.data.setAll([{
                    value: 3533,
                    category: "Repair Fire Pump"
                },
                {
                    value: 3323,
                    category: "Refill & Service APAR"
                },
                {
                    value: 3323,
                    category: "Install Fire Pump Hydrant"
                },
            ]);

            // legend atau info kecil kecil dibawah chart
            var legend = chart.children.push(am5.Legend.new(root, {
                centerX: am5.percent(50),
                x: am5.percent(50),
                marginTop: 15,
                marginBottom: 15,
            }));

            legend.data.setAll(series.dataItems);

            series.appear(1000, 100);
        });
    </script>
    <!-- styling pie chart -->

    {{-- styling stock chart --}}
    <script>
        am5.ready(function() {


            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartstock");


            var myTheme = am5.Theme.new(root);

            myTheme.rule("Grid", ["base"]).setAll({
                strokeOpacity: 0.1
            });


            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root),
                myTheme
            ]);


            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(
                am5xy.XYChart.new(root, {
                    panX: false,
                    panY: false,
                    wheelX: "none",
                    wheelY: "none",
                    paddingLeft: 0
                })
            );


            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var yRenderer = am5xy.AxisRendererY.new(root, {
                minGridDistance: 10,
                minorGridEnabled: true
            });
            yRenderer.grid.template.set("location", 1);

            var yAxis = chart.yAxes.push(
                am5xy.CategoryAxis.new(root, {
                    maxDeviation: 0,
                    categoryField: "country",
                    renderer: yRenderer
                })
            );

            var xAxis = chart.xAxes.push(
                am5xy.ValueAxis.new(root, {
                    maxDeviation: 0,
                    min: 0,
                    renderer: am5xy.AxisRendererX.new(root, {
                        visible: true,
                        strokeOpacity: 0.1,
                        minGridDistance: 80
                    })
                })
            );


            // Create series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(
                am5xy.ColumnSeries.new(root, {
                    name: "Series 1",
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueXField: "value",
                    sequencedInterpolation: true,
                    categoryYField: "country"
                })
            );

            var columnTemplate = series.columns.template;

            columnTemplate.setAll({
                draggable: true,
                cursorOverStyle: "pointer",
                tooltipText: "drag to rearrange",
                cornerRadiusBR: 10,
                cornerRadiusTR: 10,
                strokeOpacity: 0
            });
            columnTemplate.adapters.add("fill", (fill, target) => {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });

            columnTemplate.adapters.add("stroke", (stroke, target) => {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });

            columnTemplate.events.on("dragstop", () => {
                sortCategoryAxis();
            });

            // Get series item by category
            function getSeriesItem(category) {
                for (var i = 0; i < series.dataItems.length; i++) {
                    var dataItem = series.dataItems[i];
                    if (dataItem.get("categoryY") == category) {
                        return dataItem;
                    }
                }
            }


            // Axis sorting
            function sortCategoryAxis() {
                // Sort by value
                series.dataItems.sort(function(x, y) {
                    return y.get("graphics").y() - x.get("graphics").y();
                });

                var easing = am5.ease.out(am5.ease.cubic);

                // Go through each axis item
                am5.array.each(yAxis.dataItems, function(dataItem) {
                    // get corresponding series item
                    var seriesDataItem = getSeriesItem(dataItem.get("category"));

                    if (seriesDataItem) {
                        // get index of series data item
                        var index = series.dataItems.indexOf(seriesDataItem);

                        var column = seriesDataItem.get("graphics");

                        // position after sorting
                        var fy =
                            yRenderer.positionToCoordinate(yAxis.indexToPosition(index)) -
                            column.height() / 2;

                        // set index to be the same as series data item index
                        if (index != dataItem.get("index")) {
                            dataItem.set("index", index);

                            // current position
                            var x = column.x();
                            var y = column.y();

                            column.set("dy", -(fy - y));
                            column.set("dx", x);

                            column.animate({
                                key: "dy",
                                to: 0,
                                duration: 600,
                                easing: easing
                            });
                            column.animate({
                                key: "dx",
                                to: 0,
                                duration: 600,
                                easing: easing
                            });
                        } else {
                            column.animate({
                                key: "y",
                                to: fy,
                                duration: 600,
                                easing: easing
                            });
                            column.animate({
                                key: "x",
                                to: 0,
                                duration: 600,
                                easing: easing
                            });
                        }
                    }
                });

                // Sort axis items by index.
                // This changes the order instantly, but as dx and dy is set and animated,
                // they keep in the same places and then animate to true positions.
                yAxis.dataItems.sort(function(x, y) {
                    return x.get("index") - y.get("index");
                });
            }

            // Set data
            var data = [{
                country: "APAR/APAB",
                value: 367
            }, {
                country: "Fire Alarm System",
                value: 533
            }, {
                country: "Fire Hydrant System",
                value: 323
            }, {
                country: "Fire Hose",
                value: 312
            }, {
                country: "Fire Hose Coupling",
                value: 262
            }, {
                country: "Hose Reel",
                value: 132
            }, {
                country: "Foam Tank & Hose Reel",
                value: 212
            }, {
                country: "Nozzle",
                value: 162
            }, {
                country: "In-Line Foam Eductor",
                value: 262
            }, {
                country: "Fire Monitor",
                value: 432
            }, {
                country: "Master Stream Nozzle",
                value: 232
            }, {
                country: "WPOM",
                value: 536
            }, {
                country: "Fire Pump",
                value: 462
            }, {
                country: "CAFS",
                value: 262
            }, {
                country: "Foam Trailer",
                value: 367
            }, {
                country: "Pompa Apung",
                value: 267
            }, {
                country: "SCBA",
                value: 467
            }, {
                country: "Compressor Air SCBA",
                value: 567
            }, {
                country: "AFFF",
                value: 347
            }, {
                country: "Foam Troly",
                value: 247
            }, {
                country: "Racking Support Gudang",
                value: 147
            }, {
                country: "Racking Warehouse",
                value: 347
            }, {
                country: "Medium & Light Duty",
                value: 237
            }, {
                country: "Mezzanine Racking",
                value: 137
            }, ];

            yAxis.data.setAll(data);
            series.data.setAll(data);


            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
            chart.appear(1000, 100);

        }); // end am5.ready()
    </script>

    {{-- styling stock chart --}}
</body>
@yield('container');
