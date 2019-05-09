@extends('layouts.base')
         
 @section('content')

    <!-- Main component for call to action -->

    <div class="container">
        <!-- heading -->
        <h1>
            Create Memos
        </h1>

    <form action = "">
        <div class = "form-group">
            <label for = "name">
                Memo Name
            </label>
            <input class = "form-control" type = "text" name = "name">
        </div>
            <input class = "btn btn-primary" type = "submit" value = "Done">
            </input>
    </form>
        <div class="clearfix">
        </div>

    </div>

    <!-- /container -->
 @endsection

