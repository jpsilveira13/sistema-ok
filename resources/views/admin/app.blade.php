
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>SysLab</title>

    <!-- Custom Theme Style -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
    @yield('left_col')

    <!-- top navigation -->
        <div class="top_nav">
            @yield('menu_header')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div style="background-color:#f2f2f2;" class="right_col" role="main">

            @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->

        <footer>
            <div class="pull-left">
                SysLab 1.0
            </div>
            <div class="pull-right">
                <a href="#"> Desenvolvido por 22Lab</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>


<!-- jQuery -->
<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>


<script src="https://use.fontawesome.com/9a93b47e91.js"></script>

</body>
</html>
