@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Record</h2>
</div>
<div class="pull-right">
    <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong> Error!</strong> There were problems with your input<br><br>
    <ul>

    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

</ul>
</div>

@endif
<form action="{{route('students.update',$student->id) }}" method="POST">

@csrf
@method('PUT')

<div class="row">

<div class="col-xs12 col-sm-12 col-md-12">
    <div class="form-group">

    <strong>Student ID:</strong>
    <input type="text" name="sid" value="{{$student->sid}}" class="form-control" placeholder="sid">
</div>
</div>
 
<div class="col-xs12 col-sm-12 col-md-12">
    <div class="form-group">

    <strong>Student Name:</strong>
    <input type="text" name="sname" value="{{$student->sname}}" class="form-control" >
</div>
</div>
    
<div class="col-xs12 col-sm-12 col-md-12">
    <div class="form-group">

    <strong>Student Email:</strong>
    <input type="email" name="semail" value="{{$student->semail}}" class="form-control" >
</div>
</div>

<div class="col-xs12 col-sm-12 col-md-12">
    <div class="form-group">

    <strong>Student Contact:</strong>
    <input type="tel" name="scontact" value="{{$student->scontact}}" class="form-control" >
</div>
</div>

<div class="col-xs12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

</form>
@endsection