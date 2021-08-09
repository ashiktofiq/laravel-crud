@extends('layouts.app')
@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
<div style="width:40%">
<h1 class="display-4 text-center text-white">Edit Todo List {{$crud->title}}</h1>
<form action="{{route('crud.update',$crud->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group mb-3 w-100">
        <input type="text" class="form-control form-control-lg" name="title" value="{{$crud->title}}" aria-label="Recipient Username" aria-describedby="button-addon2">
        <div class="input-group-append">
        <button class="btn btn-success" type="submit" id="button-addon2">Save</button>
        </div> 
    </div>
</form>

</div>
</div>
@endsection