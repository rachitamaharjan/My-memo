@extends('layouts.base')
         
 @section('content')

    <!-- Main component for call to action -->

    <div class="container">
        <!-- heading -->
        <h1>
            Create Notes of Memo
        </h1>

<form action = "/notes" method = "POST" # laravel protects via csrf i. e only this form can access database so we need to pass csrf toke
>
    {{csrf_field()}}
        <div class = "form-group">
            <label for = "title">
                Note Title
            </label>
            <input class = "form-control" type = "text" name = "title">
        </div>
        <div class = "form-group">
            <label for = "body">
                Note Body
            </label>
<input class = "form-control" type = "text" name = "body">
</div>
            <input class = "btn btn-primary" type = "submit" value = "Done">
            </input>
    </form>
        <div class="clearfix">
        </div>

    </div>

    <!-- /container -->
 @endsection

