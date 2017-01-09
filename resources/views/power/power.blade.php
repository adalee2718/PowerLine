@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach(range(101,110) as $room)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        {{--<img src="..." alt="...">--}}
                        <h2>
                            {{--<span class="glyphicon glyphicon-home" aria-hidden="true"></span>--}}
                            {{$room}}
                        </h2>
                        <div class="caption">
                            <p>当前电量{{random_int(50,600)}} KW</p>
                            <p><a href="#" class="btn btn-danger" role="button">断电</a>
                                <a href="#" class="btn btn-warning" role="button">警告</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop