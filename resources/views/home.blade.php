@extends('adminlayout.main')

@section('style')
    <style>
        .bldtext{
            color: black;
            font-weight: bold;
        }

    </style>
@endsection
@section('content')

  
<div class="row">
{{--     
    <div class="col-lg-3 ">
        <a href="{{ url('outlet-managers')}}">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <div class="ibox-tools">
                    <span class="label label-info float-right">Sum Total </span>
                </div>
                <h5 class="bldtext">Outlet Managers 1</h5>
            </div>
            <div class="ibox-content bg-primary">
                <h1 class="no-margins bldtext"> {{ number_format($data['outlet_manager_count']) }}</h1>
                <div class="stat-percent font-bold text-info"> <i class="fa fa-level-up"></i></div>
                <small>total</small>
            </div>
        </div>
        </a>
    </div> --}}

    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <div class="ibox-tools">
                    <h5 class="bldtext"> O.M (App) </h5>
                </div>
                <h5 class="bldtext">  All O.M  </h5>
            </div>
            <div class="ibox-content bg-primary">

            <div class="row">
                <div class="col-md-6">
                    <a href="{{url('outlet-managers')}}"> <h1 class="no-margins bldtext"> {{ number_format( $data['outlet_manager_count'] ) }} </h1>  </a> 
                    <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small>Total </small></div>
                </div>
                <div class="col-md-6">
                        <a href="{{url('outlet-managers-from-app')}}"> <h1 class="no-margins"> <span class="bldtext"> {{ number_format( $data['OMFromApp'] ) }} </span> </h1> </a>
                    <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Total </small></div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title yellow-bg">
                <div class="ibox-tools">
                    <h5 class="bldtext"> Farmer Record </h5>
                </div>
                <h5 class="bldtext"> Farmer(App)  </h5>
            </div>
            <div class="ibox-content yellow-bg">

                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('farmer')}}"> <h1 class="no-margins bldtext"> {{ number_format( $data['farmerCount'] ) }} </h1>  </a> 
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small>Total </small></div>
                    </div>
                    <div class="col-md-6">
                         <a href="{{url('existing-farmers')}}"> <h1 class="no-margins"> <span class="bldtext"> {{ number_format( $data['oldFarmers'] ) }} </span> </h1> </a>
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Total </small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <div class="ibox-tools">
                    <h5 class="bldtext"> Survey </h5>
                </div>
                <h5 class="bldtext"> Product  </h5>
            </div>
            <div class="ibox-content bg-primary">

                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('product')}}"> <h1 class="no-margins bldtext"> {{ number_format( $data['productCount'] ) }} </h1>  </a> 
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small>Total </small></div>
                    </div>
                    <div class="col-md-6">
                         <a href="{{url('survey')}}"> <h1 class="no-margins"> <span class="bldtext"> {{ number_format( $data['surveyCount'] ) }} </span> </h1> </a>
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Total </small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title yellow-bg">
                <div class="ibox-tools">
                    <h5 class="bldtext"> inspection </h5>
                </div>
                <h5 class="bldtext"> POS Transactions  </h5>
            </div>
            <div class="ibox-content yellow-bg">

                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('pos-transaction')}}"> <h1 class="no-margins bldtext"> {{ number_format( $data['posTransactionCount'] ) }} </h1>  </a> 
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small>Total </small></div>
                    </div>
                    <div class="col-md-6">
                         <a href="{{url('inspection')}}"> <h1 class="no-margins"> <span class="bldtext"> {{ number_format( $data['inspectionCount'] ) }} </span> </h1> </a>
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Total </small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-3">
    <a href="{{ url('pos-transaction')}}">
        <div class="ibox ">
            <div class="ibox-title yellow-bg">
                <div class="ibox-tools">
                    <span class="label label-primary float-right"> Inspection Count </span>
                </div>
                <h5 class="bldtext">Pos Transactions </h5>
            </div>
            <div class="ibox-content yellow-bg">
                <h1 class="no-margins bldtext"> {{ number_format($data['posTransactionCount'] ) }} </h1>
                <div class="stat-percent font-bold text-primary">  </div>
                <small>total</small>
            </div>
        </div>
    </a>
    </div> --}}
   
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <div class="ibox-tools">
                    {{-- <span class="label label-primary float-right">For the year</span> --}}
                    <h5 class="bldtext"> Incoming Floats </h5>
                </div>
                <h5 class="bldtext">Outgoing Floats</h5>
            </div>
            <div class="ibox-content bg-primary">
                <div class="row">
                    <div class="col-md-6 ">
                        <a href="{{url('float-transactions')}}"> <h2 class="no-margins">  <span class="bldtext"> &#8358; {{ number_format($data['outGoingFloats']) }} </span>  </h2> </a>
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Sum</small></div>
                    </div>
                    <div class="col-md-6">
                        <a href="{{url('float-transactions')}}"> <h2 class="no-margins"> <span class="bldtext"> &#8358; {{ number_format($data['inComingFloats']) }} </span> </h2> </a>
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Sum</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="ibox ">
            <div class="ibox-title yellow-bg">
                <div class="ibox-tools">
                    <h5 class="bldtext"> Order Count</h5>
                </div>
                <h5 class="bldtext">Total Grain Point Records</h5>
            </div>
            <div class="ibox-content yellow-bg">

                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('grain-point-breakdown')}}"> <h1 class="no-margins"> <span class="bldtext"> {{ $data['grainPointRecordCount'] }} </span>  </h1> </a>
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Total </small></div>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('order')}}"> <h1 class="no-margins"> <span class="bldtext"> {{ $data['ordersCount'] }} </span> </h1> </a>
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Total </small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="ibox ">
            <div class="ibox-title bg-primary">
                <div class="ibox-tools">
                    <h5 class="bldtext"> Float Request </h5>
                </div>
                <h5 class="bldtext"> Float Repayment  </h5>
            </div>
            <div class="ibox-content bg-primary">

                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('list-float-repayment')}}"> <h1 class="no-margins bldtext"> {{ $data['floatRepaymentCount'] }}</h1>  </a> 
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small>Total </small></div>
                    </div>
                    <div class="col-md-6">
                         <a href="{{url('list-float-request')}}"> <h1 class="no-margins"> <span class="bldtext"> {{ $data['floatRequestCount'] }} </span> </h1> </a>
                        <div class="font-bold text-primary"> <i class="fa fa-level-up"></i> <small> Total </small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5> <b>Active vs Suspended Outlet Managers</b> </h5>
                <div class="ibox-tools">
                    <a class="btn btn-primary"  href="{{ url('outlet-managers')}}">
                        See more
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div id="active-example" ></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5> <b> Peformant vs Non Perormant - Active O.M </b> </h5>
                <div class="ibox-tools">
                    <a class="btn btn-primary"  href="#">
                        See more
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div id="performance-chart"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>POS TRANSACTION BREAK DOWN FOR THE MONTHS </h5>
            <div class="ibox-tools">
                <a class="btn btn-primary"  href="#">
                    See more
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-lg-12">
                    <div id="posTransactions"></div>
                </div>
          
            </div>
            </div>
    
        </div>
    </div>
</div>


{{-- <div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5> Outlet Manager Distribution By State </h5>
            <div class="ibox-tools">
                
            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-lg-12">
                    <div id="myfirstchart"></div>
                </div>
          
            </div>
            </div>
    
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>  Outlet Manager Distribution By State </h5>
            <div class="ibox-tools">
                <a class="btn btn-primary"  href="{{url('state-distribution-breakdown')}}">
                    See more
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-lg-12">
                    <div id="distribution-by-state"></div>
                </div>
          
            </div>
            </div>
    
        </div>
    </div>
</div>

{{-- <div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Orders</h5>
            <div class="ibox-tools">
                <div class="btn-group">
                    <button type="button" class="btn btn-xs btn-white active">Today</button>
                    <button type="button" class="btn btn-xs btn-white">Monthly</button>
                    <button type="button" class="btn btn-xs btn-white">Annual</button>
                </div>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
            <div class="col-lg-9">
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                </div>
            </div>
            <div class="col-lg-3">
                <ul class="stat-list">
                    <li>
                        <h2 class="no-margins">2,346</h2>
                        <small>Total orders in period</small>
                        <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                        <div class="progress progress-mini">
                            <div style="width: 48%;" class="progress-bar"></div>
                        </div>
                    </li>
                    <li>
                        <h2 class="no-margins ">4,422</h2>
                        <small>Orders in last month</small>
                        <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                        <div class="progress progress-mini">
                            <div style="width: 60%;" class="progress-bar"></div>
                        </div>
                    </li>
                    <li>
                        <h2 class="no-margins ">9,180</h2>
                        <small>Monthly income from orders</small>
                        <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                        <div class="progress progress-mini">
                            <div style="width: 22%;" class="progress-bar"></div>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
            </div>

        </div>
    </div>
</div> --}}





{{-- @include('adminlayout.home') --}}
@endsection

@section('scripts')
<script>

let posTransactionsForMonth = {!! json_encode($data['posTransactionFormForMonth'], JSON_HEX_TAG) !!}
let posmonths = {!! json_encode($data['posMonth'], JSON_HEX_TAG) !!}



var options = {
  chart: {
    height: 280,
    type: "area"
  },
  dataLabels: {
    enabled: true,
    style: {
  }
  },

  series: [
    {
      name: "Amount",
      data: posTransactionsForMonth
    }
  ],
  fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.7,
      opacityTo: 0.9,
      stops: [0, 90, 100]
    },
    colors: ['#ffffff'],
  },
  xaxis: {
    categories: posmonths
  }
};

var chart = new ApexCharts(document.querySelector("#posTransactions"), options);

chart.render();

//test morris for line
// new Morris.Line({
//   element: 'myfirstchart',
//   data: [
//     { year: '2008', value: 20 },
//     { year: '2009', value: 10 },
//     { year: '2010', value: 5 },
//     { year: '2011', value: 5 },
//     { year: '2012', value: 20 }
//   ],
//   xkey: 'year',
//   ykeys: ['value'],
//   labels: ['Value']
// });

   
// performat morris 🍩 
Morris.Donut({
  element: 'performance-chart',
  data: [
    {label: "Performing Manager", value: {{ $data['PerformantOM'] }}},
    {label: "Non Performing Manager", value: {{ $data['nonPerformantOM'] }}},
  ],
  colors: [
      '#1AB394',
    '#F8AC59',
  ],
});

// active morris 🍩 2
Morris.Donut({
  element: 'active-example',
  data: [
    {label: "Not Suspended", value: {{ $data['active_outlet_manager_count'] }}},
    {label: "Suspended ", value: {{ $data['inactive_outlet_manager_count'] }}}
  ],
  colors: [
    '#F8AC59',
    '#1AB394',
   
  ],
});

//bar chart
Morris.Bar({
        element: 'distribution-by-state',
        data: [  {!!  $data['managersByState'] !!} ],
        xkey: ['y'],
        ykeys: ['a'],
        labels: ['Number of Outletmanagers'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#1ab394'],
    });


</script>
    
@endsection
