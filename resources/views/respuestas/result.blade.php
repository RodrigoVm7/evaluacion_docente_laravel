@extends('layouts.app')

@section('content')


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Evaluación Docente</title>

<<<<<<< HEAD
  <!-- Bootstrap core CSS -->
=======
  <!-- Bootstrap - CSS -->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
<<<<<<< HEAD
  <!-- Custom styling plus plugins -->
=======
  <!-- Plugins -->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="css/icheck/flat/green.css" rel="stylesheet" />
  <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/nprogress.js"></script>

</head>

<body class="nav-md">

  <div class="container body">

    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

         
        </div>
      </div>
      {{ csrf_field() }}
<<<<<<< HEAD
      <!-- top navigation -->
=======
      <!-- Barra superior de navegacion -->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
      <div class="top_nav">

        <div class="row">

<<<<<<< HEAD

          <div class="col-md-4 col-sm-4 col-xs-12">
=======
          <div class="col-md-4"></div>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
            <div class="x_panel tile fixed_height_320">
              <div class="x_title">
                <h2>Resultados de la Encuesta</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown"> </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

<<<<<<< HEAD


              @foreach($resultados as $resultado)
                
                <h4>{{$resultado->pregunta}}</h4>
=======
              <!--Se define una variable "numit" que corresponde a un contador, el que se imprime junto a cada pregunta-->
              @php
                $numit=0
              @endphp

              <!-- Ciclo for mediante el que se mostrará en pantalla los resultados de cada pregunta-->
              @foreach($resultados as $resultado)
              <!--Se incrementa el contador-->
              @php
                $numit=$loop->iteration
              @endphp

              <!--Se verifica que el denominador sea distinto de 0, en caso de que nadie haya respondido
                  la encuesta-->
              @php
                $denominador=$resultado->frecuencia_a+$resultado->frecuencia_b+$resultado->frecuencia_c+$resultado->frecuencia_d
              @endphp
              @php
                if($denominador==0)
                  $denominador=1
              @endphp

                <h4>{{$numit.". ".$resultado->pregunta}}</h4>
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                <div class="widget_summary">        
                  <div class="w_left w_25">
                    <span>{{$resultado->alternativa_a}}</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
<<<<<<< HEAD
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{( ($resultado->frecuencia_a)/($resultado->frecuencia_a+$resultado->frecuencia_b+$resultado->frecuencia_c+$resultado->frecuencia_d)*100)}}%;">
=======
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{( ($resultado->frecuencia_a)/($denominador)*100)}}%;">
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <span class="sr-only">30% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>{{$resultado->frecuencia_a}}</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <br>

                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>{{$resultado->alternativa_b}}</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
<<<<<<< HEAD
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: {{ ( ($resultado->frecuencia_b)/($resultado->frecuencia_a+$resultado->frecuencia_b+$resultado->frecuencia_c+$resultado->frecuencia_d)*100) }}%;">
=======
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: {{( ($resultado->frecuencia_b)/($denominador)*100)}}%;">
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <span class="sr-only">100% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>{{$resultado->frecuencia_b}}</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
<<<<<<< HEAD
                
                <br>

=======
                <br>

                <!-- si existía la alternativa C en la pregunta, se muestra sus resultados-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                @if(is_null($resultado->alternativa_c)==FALSE)
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>{{$resultado->alternativa_c}}</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
<<<<<<< HEAD
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: {{( ($resultado->frecuencia_c)/($resultado->frecuencia_a+$resultado->frecuencia_b+$resultado->frecuencia_c+$resultado->frecuencia_d)*100)}}%;">
=======
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: {{( ($resultado->frecuencia_c)/($denominador)*100)}}%;">
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>{{$resultado->frecuencia_c}}</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <br>
                @endif

<<<<<<< HEAD
=======
                <!-- si existía la alternativa D en la pregunta, se muestra sus resultados-->
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                @if(is_null($resultado->alternativa_d)==FALSE)
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>{{$resultado->alternativa_d}}</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
<<<<<<< HEAD
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: {{( ($resultado->frecuencia_d)/($resultado->frecuencia_a+$resultado->frecuencia_b+$resultado->frecuencia_c+$resultado->frecuencia_d)*100)}}%;">
=======
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: {{( ($resultado->frecuencia_d)/($denominador)*100)}}%;">
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>{{$resultado->frecuencia_d}}</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <br>
                @endif
                <br>
<<<<<<< HEAD

                @endforeach

                













    </div>

  </div>
    <a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar</a>

  @endsection




  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>

  <script src="js/custom.js"></script>

  <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="js/flot/date.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
  <script>
    $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
        },
        yaxis: {
          ticks: 8,
          tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
  <script type="text/javascript" src="js/maps/gdp-data.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script>
    $(function() {
      $('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  <!-- skycons -->
  <script src="js/skycons/skycons.min.js"></script>
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- dashbord linegraph -->
  <script>
    Chart.defaults.global.legend = {
      enabled: false
    };

    var data = {
      labels: [
        "Symbian",
        "Blackberry",
        "Other",
        "Android",
        "IOS"
      ],
      datasets: [{
        data: [15, 20, 30, 10, 30],
        backgroundColor: [
          "#BDC3C7",
          "#9B59B6",
          "#455C73",
          "#26B99A",
          "#3498DB"
        ],
        hoverBackgroundColor: [
          "#CFD4D8",
          "#B370CF",
          "#34495E",
          "#36CAAB",
          "#49A9EA"
        ]

      }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });
  </script>
  <!-- /dashbord linegraph -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
=======
                @endforeach

              <!--En caso de existir pregunta de desarrollo, esta se muestra junto con todas las respuestas-->
              @foreach($preguntaDes as $preg)
                @php
                  $numit=$numit+1
                @endphp
              <h4>{{$numit.". ".$preg->pregunta}}</h4>
              <table class="table table-light table-hover">
                <tbody>
                  @foreach($desarrollo as $des)      
                  <tr>
                      <td>{{$des->respuesta}}</td>
                  @endforeach
                  <tr>
                </tbody>
              </table>
              @endforeach
              
    </div>
    <div class="col-md-4"></div>
    <br>
    <a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar ←</a>
  </div>
  @endsection
>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
