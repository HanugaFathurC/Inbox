@extends('layouts.backoffice.master', ['title' => 'Dashboard'])


@section('content')
    <x-container>
        @role('admin')
            <div class="col-6 col-lg-3">
                <x-widget title="Kategori" subtitle="{{ $categories }}" class="bg-azure">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category-2" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <circle cx="17" cy="17" r="3"></circle>
                        <circle cx="7" cy="7" r="3"></circle>
                    </svg>
                </x-widget>
            </div>
            <div class="col-6 col-lg-3">
                <x-widget title="Types" subtitle="{{ $types }}" class="bg-yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 4h6v6h-6z"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    </svg>
                </x-widget>
            </div>
            <div class="col-6 col-lg-3">
                <x-widget title="Warehouses" subtitle="{{ $warehouses }}" class="bg-red">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="7" cy="17" r="2"></circle>
                        <circle cx="17" cy="17" r="2"></circle>
                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                        <line x1="3" y1="9" x2="7" y2="9"></line>
                    </svg>
                </x-widget>
            </div>
            <div class="col-6 col-lg-3">
                <x-widget title="Produk" subtitle="{{ $products }}" class="bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                        <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                        <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                    </svg>
                </x-widget>
            </div>
            <div class="col-6 col-lg-3">
                <x-widget title="User" subtitle="{{ $users }}" class="bg-cyan">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <circle cx="12" cy="10" r="3"></circle>
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                    </svg>
                </x-widget>
            </div>
            <div class="col-6 col-lg-3">
                <x-widget title="Permintaan Produk" subtitle="{{ $orders->count() }}" class="bg-indigo">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    </svg>
                </x-widget>
            </div>
            <div class="col-6 col-lg-3">
                <x-widget title="Produk Masuk" subtitle="{{ $transactions }}" class="bg-teal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                        <path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6"></path>
                        <path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3"></path>
                    </svg>
                </x-widget>
            </div>
            <div class="col-6 col-lg-3">
                <x-widget title="Produk Masuk Bulan Ini" subtitle="{{ $transactionThisMonth }}" class="bg-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                        <path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6"></path>
                        <path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3"></path>
                    </svg>
                </x-widget>
            </div>
            <?php if(Auth::user()->hasRole('manajer')){ ?>
            <div class="col-12">
                @if ($orders->count() == 0)
                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fas fa-info-circle mr-2 fa-lg"></i>
                        Saat ini belum ada permintaan produk
                    </div>
                @else
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fas fa-info-circle mr-2 fa-lg"></i>
                        Saat ini terdapat {{ $orders->count() }} permintaan barang menunggu konfirmasi.
                        <a href="{{ route('backoffice.order.index') }}" class="ml-1">Lihat Detail Permintaan</a>
                    </div>
                @endif
            </div>
            <div class="col-6">
                <x-card title="Rekomendasi Produk Per {{ strftime('%e %B %Y - %H:%M', strtotime($recommendationCreated)) }}">
                    <div class="list list-row list-hoverable">
                        <div class="list list-row list-hoverable">
                            @foreach ($recommendationProducts as $product)
                                <div class="list-item">
                                    <div>
                                        <span class="badge bg-info">{{ $product['rank'] }}</span>
                                    </div>
                                    <div class="text-truncate">
                                        <p class="mt-3">{{ $product['order']->name }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </x-card>
            </div>
            <?php }?>
        @endrole
        @role('customer')
            <div class="col-6">
                <x-widget title="Permintaan Produk" subtitle="{{ $orders->count() }}" class="bg-indigo">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    </svg>
                </x-widget>
            </div>
            <div class="col-6">
                <x-widget title="Total Transaksi" subtitle="{{ $transactions->count() }}" class="bg-indigo">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    </svg>
                </x-widget>
            </div>
        @endrole
        @role('admin')
            <?php if(Auth::user()->hasRole('manajer')){ ?>
            <div class="col-6">
                <x-card title="Daftar produk dengan stok kurang dari 10">
                    <div class="list list-row list-hoverable">
                        @foreach ($productsOutStock as $product)
                            <div class="list-item">
                                <div>
                                    <span class="badge bg-danger">{{ $product->quantity }}</span>
                                </div>
                                <div class="text-truncate">
                                    <a href="{{ route('backoffice.stock-product.index') }}"
                                        class="text-body d-block">{{ $product->name }}</a>
                                    <small class="d-block text-muted  mt-n1">
                                        Kategori : {{ $product->category->name }}
                                    </small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </x-card>
                <div class="d-flex justify-content-end">{{ $productsOutStock->links() }}</div>
            </div>
            <div class="col-lg-6">
                <x-card title="Chart barang paling populer">
                    <div id="chart-total-best" class="my-3"></div>
                </x-card>
            </div>
            <div class="col-lg-6">
                <x-card title="Chart barang tidak paling populer">
                    <div id="chart-total-poor" class="my-3"></div>
                </x-card>
            </div>
            <div class="col-lg-12">
                <x-card title="Chart pendapatan tiap gudang">
                    <div id="chart-warehouse-income" class="my-3"></div>

                </x-card>
            </div>
            <?php } ?>
            <?php if(Auth::user()->hasRole('eksekutif-manajer')){ ?>
            <div class="col-lg-6">
                <x-card title="Pendapatan Gudang Tiap Tipe Per Bulan">
                    <div id="chart-type" class="my-3"></div>
                </x-card>
            </div>

            <div class="col-lg-6">
                <x-card title="Total Pendapatan Tiap Gudang Per Bulan">
                    <div id="chart-warehouse-income" class="my-3"></div>
                </x-card>
            </div>
            <div class="col-lg-12">
                <x-card title="All Time Traffic Pendapatan">
                    <div id="chart-allTimeIncome" class="my-3"></div>
                </x-card>
            </div>
            <?php } ?>
        @endrole
    </x-container>
@endsection

@push('js')
    <?php if(Auth::user()->hasRole('manajer')){ ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-total-best'), {
                chart: {
                    type: "donut",
                    fontFamily: 'inherit',
                    height: 400,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: true
                    },
                },
                fill: {
                    opacity: 1,
                },
                series: @json($totalBest),
                labels: @json($labelBest),
                grid: {
                    strokeDashArray: 4,
                },
                colors: ["#206bc4", "#79a6dc", "#bfe399", "#7891b3", "#2596be"],
                legend: {
                    show: true,
                    position: 'top'
                },
                tooltip: {
                    fillSeriesColor: true
                },
                dataLabels: {
                    enabled: true,
                },
                animations: {
                    enabled: true,
                    easing: 'easeinout',
                    speed: 800,
                    animateGradually: {
                        enabled: true,
                        delay: 150
                    },
                    dynamicAnimation: {
                        enabled: true,
                        speed: 350
                    }
                }
            })).render();
        });

        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-total-poor'), {
                chart: {
                    type: "donut",
                    fontFamily: 'inherit',
                    height: 400,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: true
                    },
                },
                fill: {
                    opacity: 1,
                },
                series: @json($totalPoor),
                labels: @json($labelPoor),
                grid: {
                    strokeDashArray: 4,
                },
                colors: ["#206bc4", "#79a6dc", "#bfe399", "#7891b3", "#2596be"],
                legend: {
                    show: true,
                    position: 'top'
                },
                tooltip: {
                    fillSeriesColor: true
                },
                dataLabels: {
                    enabled: true,
                },
                animations: {
                    enabled: true,
                    easing: 'easeinout',
                    speed: 800,
                    animateGradually: {
                        enabled: true,
                        delay: 150
                    },
                    dynamicAnimation: {
                        enabled: true,
                        speed: 350
                    }
                }
            })).render();
        });


        var chartData = [
            @foreach ($warehouseIncome as $data)
                {
                    month_year: '{{ $data->month_year }}',
                    warehouse: '{{ $data->warehouse }}',
                    income: {{ $data->income }},
                },
            @endforeach
        ];

        var categories = Array.from(new Set(chartData.map(item => item.month_year)));
        var series = [];

        chartData.forEach(item => {
            var index = categories.indexOf(item.month_year);
            if (!series[item.warehouse]) {
                series[item.warehouse] = Array(categories.length).fill(0);
            }
            series[item.warehouse][index] = item.income;
        });

        var options = {
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                },
            },
            dataLabels: {
                enabled: false,
            },
            series: Object.entries(series).map(([warehouse, data]) => ({
                name: warehouse,
                data: data,
            })),
            xaxis: {
                categories: categories,
            },
            legend: {
                position: 'bottom',
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "Rp" + val;
                    },
                },
            },
        };

        var chart = new ApexCharts(document.querySelector('#chart-warehouse-income'), options);
        chart.render();
    </script>
    <?php } ?>
    <?php if(Auth::user()->hasRole('eksekutif-manajer')){ ?>
    <script>
        (function() {
            var options = {
                chart: {
                    type: 'area',
                    height: 350,
                },
                series: [{
                    name: 'Income',
                    data: @json(array_values($allTimeIncome_incomeData))
                }],
                xaxis: {
                    categories: @json(array_keys($allTimeIncome_incomeData)),
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart-allTimeIncome"), options);
            chart.render();
        })();

        var chartData = [
            @foreach ($warehouseIncome as $data)
                {
                    month_year: '{{ $data->month_year }}',
                    warehouse: '{{ $data->warehouse }}',
                    income: {{ $data->income }},
                },
            @endforeach
        ];

        var categories = Array.from(new Set(chartData.map(item => item.month_year)));
        var series = [];

        chartData.forEach(item => {
            var index = categories.indexOf(item.month_year);
            if (!series[item.warehouse]) {
                series[item.warehouse] = Array(categories.length).fill(0);
            }
            series[item.warehouse][index] = item.income;
        });

        var options = {
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                },
            },
            dataLabels: {
                enabled: false,
            },
            series: Object.entries(series).map(([warehouse, data]) => ({
                name: warehouse,
                data: data,
            })),
            xaxis: {
                categories: categories,
            },
            legend: {
                position: 'bottom',
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "Rp" + val;
                    },
                },
            },
        };

        var chart = new ApexCharts(document.querySelector('#chart-warehouse-income'), options);
        chart.render();


        var incomeData = {!! json_encode($incomeByType) !!};

        var chartData = [];
        var categories = [];

        incomeData.forEach(function(item) {
            var monthYear = item.month_year;
            var warehouseType = item.warehouseType;
            var totalIncome = item.total_income;

            if (!categories.includes(monthYear)) {
                categories.push(monthYear);
            }

            var seriesIndex = chartData.findIndex(function(series) {
                return series.name === warehouseType;
            });

            var dataIndex = categories.indexOf(monthYear);

            if (seriesIndex === -1) {
                var series = {
                    name: warehouseType,
                    data: Array(categories.length).fill(0)
                };
                series.data[dataIndex] = totalIncome;
                chartData.push(series);
            } else {
                chartData[seriesIndex].data[dataIndex] = totalIncome;
            }
        });

        var options = {
            chart: {
                type: 'bar',
                height: 350,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                },
            },
            dataLabels: {
                enabled: false
            },
            series: chartData,
            xaxis: {
                categories: categories,
            },
            yaxis: {
                title: {
                    text: 'Total Income'
                }
            },
            legend: {
                position: 'bottom',
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "Rp" + val;
                    }
                }
            }
        };


        var chart = new ApexCharts(document.querySelector('#chart-type'), options);
        chart.render();
    </script>
    <?php } ?>
@endpush
