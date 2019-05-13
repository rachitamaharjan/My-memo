@extends('layouts.base')
         
 @section('content')

    <!-- Main component for call to action -->

    <div class="container">
        <!-- heading -->
        <h1>
            Edit Memo
        </h1>

<form action = "/notebook/{{$notebook -> id}}" method = "POST" # laravel protects via csrf i. e only this form can access database so we need to pass csrf token
>

    {{csrf_field()}}
    <b #browser won't understand the put method in web.php i.e (    Route::put('/notebook/{notebook}', 'NotebooksController@update'); ) so, specify put like this --->
    </b>

    {{method_field('PUT')}}
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

