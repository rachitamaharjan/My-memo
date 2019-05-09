<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NoteBook App</title>
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="#">My Memo App</a>
        </nav>
        <!-- /navbar -->
        <!-- Main component for call to action -->
        @yield('content')
    <!-- /container -->

    <script src="{{asset('/js/jquery3.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
</body>

</html>
