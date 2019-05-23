<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}

{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}


{{--    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{--    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>--}}

{{--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}

{{--    <script src="{{ asset('js/jquery.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/jquery-ui.js') }}" ></script>--}}
{{--    <script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}


{{--</head>--}}

</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
        @include('admin.includes.header')
<!-- Sidebar menu-->
        @include('admin.includes.menu')
<main class="app-content">
    @yield('body')
</main>
<!-- Essential javascripts for application to work-->
<!-- Scripts -->




<script src="{{ asset('/') }}admin/js/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('/') }}admin/js/popper.min.js"></script>
<script src="{{ asset('/') }}admin/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}admin/js/main.js"></script>


<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('/') }}admin/js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
{{--?<script type="text/javascript" src="{{ asset('/') }}admin/js/plugins/chart.js"></script>--}}


{{--<script type="text/javascript">--}}



{{--    var data = {--}}
{{--        labels: ["January", "February", "March", "April", "May"],--}}
{{--        datasets: [--}}
{{--            {--}}
{{--                label: "My First dataset",--}}
{{--                fillColor: "rgba(220,220,220,0.2)",--}}
{{--                strokeColor: "rgba(220,220,220,1)",--}}
{{--                pointColor: "rgba(220,220,220,1)",--}}
{{--                pointStrokeColor: "#fff",--}}
{{--                pointHighlightFill: "#fff",--}}
{{--                pointHighlightStroke: "rgba(220,220,220,1)",--}}
{{--                data: [65, 59, 80, 81, 56]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "My Second dataset",--}}
{{--                fillColor: "rgba(151,187,205,0.2)",--}}
{{--                strokeColor: "rgba(151,187,205,1)",--}}
{{--                pointColor: "rgba(151,187,205,1)",--}}
{{--                pointStrokeColor: "#fff",--}}
{{--                pointHighlightFill: "#fff",--}}
{{--                pointHighlightStroke: "rgba(151,187,205,1)",--}}
{{--                data: [28, 48, 40, 19, 86]--}}
{{--            }--}}
{{--        ]--}}
{{--    };--}}
{{--    var pdata = [--}}
{{--        {--}}
{{--            value: 300,--}}
{{--            color: "#46BFBD",--}}
{{--            highlight: "#5AD3D1",--}}
{{--            label: "Complete"--}}
{{--        },--}}
{{--        {--}}
{{--            value: 50,--}}
{{--            color:"#F7464A",--}}
{{--            highlight: "#FF5A5E",--}}
{{--            label: "In-Progress"--}}
{{--        }--}}
{{--    ]--}}

{{--    var ctxl = $("#lineChartDemo").get(0).getContext("2d");--}}
{{--    var lineChart = new Chart(ctxl).Line(data);--}}

{{--    var ctxp = $("#pieChartDemo").get(0).getContext("2d");--}}
{{--    var pieChart = new Chart(ctxp).Pie(pdata);--}}
{{--</script>--}}
{{--<!-- Google analytics script-->--}}
{{--<script type="text/javascript">--}}
{{--    if(document.location.hostname == 'pratikborsadiya.in') {--}}
{{--        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');--}}
{{--        ga('create', 'UA-72504830-1', 'auto');--}}
{{--        ga('send', 'pageview');--}}
{{--    }--}}
{{--</script>--}}
@yield('script')
</body>
</html>
