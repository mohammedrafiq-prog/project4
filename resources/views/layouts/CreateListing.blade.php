
@extends('layouts.app')
@section('content')
    
<div class="container">
{!! Form::open(['action' => 'listc@store']) !!}
  
<div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
      {{Form::label('Address', 'Address')}}
      {{Form::text('Address', '', ['class' => 'form-control','placeholder'=>'Enter Address'])}}
    </div>
      <div class="form-group">
      {{Form::label('Website', 'Website')}}
      {{Form::text('Website', '', ['class' => 'form-control','placeholder'=>'Enter Website'])}}
    </div>
      <div class="form-group">
      {{Form::label('Email', 'Email')}}
      {{Form::email('Email', '', ['class' => 'form-control','placeholder'=>'Enter Email'])}}
    </div>
      <div class="form-group">
      {{Form::label('Phone', 'Phone')}}
      {{Form::text('Phone', '', ['class' => 'form-control','placeholder'=>'Enter Phone'])}}
    </div>
    <div class="form-group">
      {{Form::label('Bio', 'Bio')}}
      {{Form::textarea('Bio', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Bio'])}}
    </div>
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
      <a href="/project4/blog/home" class="btn btn-danger ">Go Back</a>
    </div></div>
  {!! Form::close() !!}
    
@endsection