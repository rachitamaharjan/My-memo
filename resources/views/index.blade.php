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
        <div class="jumbotron">
            <h1>My Memo</h1>
            <p>Store and organise your thoughts in <b> My Memo </b> and NoteBook web app makes this easier than ever</p>
            <p>
                <a class="btn btn-lg btn-primary" href="notebooks.html" role="button">Your Memos</a>
            </p>
        </div>
    </div>
    <!-- /container -->

    <script src="{{asset('/js/jquery3.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
</body>

</html>
