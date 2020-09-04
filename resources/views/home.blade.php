
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
               
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your listings</h3>
                    @if (count($list))
                        
                    
                    <table class="table table-striped">
                      <tr>
                          <th>compony</th>
                          <th></th>
                          <th></th>
                        </tr>
                    @foreach ($list as $item)
                       <tr>
                      <td><a class="btn-link"href="listm/{{$item->id}}">{{$item->name}}</a></td>
                      <td><a href="listm/{{$item->id}}/edit" class="btn btn-light ">Edit</a></td> 
                      <td>
                   {!! Form::open(['action' => ['listc@destroy',$item->id],'method' => 'POST','onsubmit'=>'return confirm("Are You Sure ?")']) !!}   
                   {{ Form::hidden('_method', 'DELETE') }}  
                    {{Form::submit('save', ['class'=> 'btn btn-danger'])}}
                    {!! Form::close() !!}
                    </td>      
                    </tr>                        
                    @endforeach
                    </table>
                    @endif
                     <a href="listm/create" class="btn btn-success ">Add Listing</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
