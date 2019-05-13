@extends('layouts.base')
         
         @section('content')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Memos
                </h1>
                <div class="pull-xs-right">
                <a class="btn btn-primary" href="{{route('notebooks.create')}}" role="button">
                <b //<a class="btn btn-primary" href="/notebook/create" role="button">
                </b>
                        New Memo +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Notebooks==================== -->
                <!-- notebook1 -->

                @foreach($notebooks as $notebook)

                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="/notebook/{{$notebook -> id}}">
                                <h4 class="card-title">
                                {{$notebook -> name}}
                                </h4>
                            </a>
                        </div>
                        <a href="#">
                            <img alt="Responsive image" class="img-fluid" src="/img/notebook.jpg"/>
                        </a>
                        <div class="card-block">
                <a class="card-link" href="/notebook/{{$notebook->id}}/edit">
                                Edit Memo
                            </a>
                <form action="/notebook/{{$notebook -> id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline" //used method is DELETE but browser won't understand it, so use POST and specify put like this --->
                {{csrf_field()}}
                {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

            <!-- /container -->
         @endsection

