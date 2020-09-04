
@extends('layouts.app')
@section('content')
    
<div class="container">
{!! Form::open(['action' => ['listc@update',$Listing->id],'method' => 'POST']) !!}

<div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('Name', $Listing->name, ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
      {{Form::label('Address', 'Address')}}
      {{Form::text('Address',$Listing->address, ['class' => 'form-control','placeholder'=>'Enter Address'])}}
    </div>
      <div class="form-group">
      {{Form::label('Website', 'Website')}}
      {{Form::text('Website', $Listing->website, ['class' => 'form-control','placeholder'=>'Enter Website'])}}
    </div>
      <div class="form-group">
      {{Form::label('Email', 'Email')}}
      {{Form::email('Email', $Listing->email, ['class' => 'form-control','placeholder'=>'Enter Email'])}}
    </div>
      <div class="form-group">
      {{Form::label('Phone', 'Phone')}}
      {{Form::text('Phone', $Listing->phone, ['class' => 'form-control','placeholder'=>'Enter Phone'])}}
    </div>
    <div class="form-group">
      {{Form::label('Bio', 'Bio')}}
      {{Form::textarea('Bio', $Listing->bio, ['class' => 'form-control', 'placeholder' => 'Enter Your Bio'])}}
    </div>
    <div>
     {{ Form::hidden('_method', 'PUT') }}
      {{Form::submit('save', ['class'=> 'btn btn-primary'])}}
      <a href="/project4/blog/home" class="btn btn-danger ">Go Back</a>
    </div></div>
  {!! Form::close() !!}
    
@endsection