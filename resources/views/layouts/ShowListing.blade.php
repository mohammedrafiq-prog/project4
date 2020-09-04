@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{$item->name}} </div>

            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">Address: {{$item->address}}</li>
                <li class="list-group-item">Website: <a href="{{$item->website}}" target="_blank">{{$item->website}}</a></li>
                <li class="list-group-item">Email: {{$item->email}}</li>
                <li class="list-group-item">Phone: {{$item->phone}}</li>
            <a href="/project4/blog/home" class="pull-right btn btn-default btn-xs">Go Back</a>  
            </ul>
              <hr>
              <div class="well">
                {{$item->bio}}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
