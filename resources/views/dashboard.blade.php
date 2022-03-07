@extends('admin_temp')
@section('style')
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('../assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/default-dark.css')}}" id="theme" rel="stylesheet">
@endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">{{trans('admin.creative_bank')}}</h3>
          </div>
          <div class="col-md-7 align-self-center">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.creative_bank')}}</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>
              </ol>
          </div>
      </div>
     <!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
   <!-- Stats box -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="{{asset('assets/images/icon/income.png')}}" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">{{trans('admin.total_ideas')}}</h6>
                                        <h2 class="m-t-0">{{$ideacount}}</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="{{asset('assets/images/icon/expense.png')}}" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">{{trans('admin.total_users')}}</h6>
                                        <h2 class="m-t-0">{{$totaluser}}</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="{{asset('assets/images/icon/assets.png')}}" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">{{trans('admin.total_news')}}</h6>
                                        <h2 class="m-t-0">{{$newscount}}</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="{{asset('assets/images/icon/staff.png')}}" alt="Income" /></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">{{trans('admin.total_staff')}}</h6>
                                        <a class="m-t-0 text-black bold text-lg-left" href="">{{$employees}}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  <!-- ==========================endbox==================================== -->
  <!-- ==========================Start chart==================================== -->
  <div class="row">
          <!-- start idea chart -->
              <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{trans('admin.ideas')}}</h4>
                            <div>
                                <canvas id="chart3" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- end idea chart -->
              <!-- user chart -->
                <div class="col-lg-6">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">{{trans('admin.activity')}}</h4>
                          <div>
                              <canvas id="chart1" height="150"></canvas>
                          </div>
                      </div>
                  </div>
                </div>
          <!-- end user -->
  </div>
@endsection
@section('scripts')
    <script src="{{asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>

    <script>
       // idea chart script
       var ctx3 = document.getElementById("chart3").getContext("2d");
    var data3 = [
		 {
            value: {!! $refusedidea !!},
            color: "#2f3d4a",
            highlight: "#2f3d4a",
            label: "refused idea"
        },
		 {
            value: {!! $acceptedidea !!},
            color: "#55ce63",
            highlight: "#55ce63",
            label: "acceptedidea"
        },
    ];
    var myPieChart = new Chart(ctx3).Pie(data3,{
        segmentShowStroke : true,
        segmentStrokeColor : "#fff",
        segmentStrokeWidth : 0,
        animationSteps : 100,
	    	tooltipCornerRadius: 0,
        animationEasing : "easeOutBounce",
        animateRotate : true,
        animateScale : false,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
        responsive: true
    });
      // end idea chart script
      //start idea chart scripts
      var ctx1 = document.getElementById("chart1").getContext("2d");
      var data= {!! $idea_count !!}
    var data1 = {
        labels: ["January","February","March","April","May","June","July","August","September","October","November","December"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "#009efb",
                strokeColor: "#009efb",
                pointColor: "#009efb",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "#009efb",
                data: data
            }
        ],
    };
    Chart.types.Line.extend({
      name: "LineAlt",
      initialize: function () {
        Chart.types.Line.prototype.initialize.apply(this, arguments);
        var ctx = this.chart.ctx;
        var originalStroke = ctx.stroke;
        ctx1.stroke = function () {
          ctx1.save();
          ctx1.shadowColor = 'rgba(0, 0, 0, 0.4)';
          ctx1.shadowBlur = 10;
          ctx1.shadowOffsetX = 8;
          ctx1.shadowOffsetY = 8;
          originalStroke.apply(this, arguments)
          ctx1.restore();

        }
      }
    });
    var chart1 = new Chart(ctx1).LineAlt(data1, {
        scaleShowGridLines : true,
        scaleGridLineColor : "rgba(0,0,0,.005)",
        scaleGridLineWidth : 0,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: true,
        bezierCurve : true,
        bezierCurveTension : 0.4,
        pointDot : true,
        pointDotRadius : 4,
        pointDotStrokeWidth : 2,
        pointHitDetectionRadius : 2,
        datasetStroke : true,
		tooltipCornerRadius: 2,
        datasetStrokeWidth : 0,
        datasetFill : false,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        responsive: true
    });
       //end idea chart scripts
    </script>
@endsection
