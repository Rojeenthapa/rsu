@extends('layout.app')
@section('content')

    <div style="margin-top:10rem" class="container">
      <form action="/testimonials/edit" method="PUT" enctype="multipart/form-data">
        @csrf
        <input type="text"   value="{{$testimonial->name}}" name="name" class="form-control my-2" />
        <input type="text" value="{{$testimonial->designation}}" name="designation"  class="form-control my-2" />
        <textarea name="description" type="text" class="form-control my-2">{{$testimonial->description}}</textarea>
        <input type="file" name="image" class="form-control my-2" />
        <button class="btn btn-primary my-2" type="update">update</button>
      </form>
    </div>
  @endsection