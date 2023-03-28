@extends('students.layout')
@section('content')
<div class="row">

  <div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Add Student Information</h2>
  </div>

  <div class="pull-right">

    <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
</div>
</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong> There were problems with your input<br><br>
    <ul>
@foreach($errors->all( ) as $error)
        <li>{{$error}}</li>

        @endforeach
</ul>
</div>
@endif
      
      <form action="{{ route('students.store') }}" method="POST">
       @csrf
       <div class="row">
        <div class="form-group">
            <strong> Student ID: </strong>  
        <input type="text" name="sid" class="form-control" >
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">
            
                <strong> Student Name: </strong>
            <input type="text" name="sname" class="form-control" >
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">
            
                <strong> Student Email: </strong>
            <input type="email" name="semail" class="form-control" >
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">
            
                <strong> Student Contact: </strong>
            <input type="tel" name="scontact" class="form-control" >
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">

    
<button type="submit"  class="btn btn-success">Submit</button>
  </div>
</div>
</form>

