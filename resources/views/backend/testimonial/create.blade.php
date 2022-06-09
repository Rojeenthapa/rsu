@extends('layout.app')
@section('content')
    <div style="margin-top:10rem" class="container">
    @if (session('message'))
                <h6 class="alert alert-success">{{ session('message') }}</h6>
            @endif
      <form action="/testimonials/create" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="enter name" name="name" class="form-control my-2" />
        <input type="text" placeholder="enter designation" name="designation"  class="form-control my-2" />
        <textarea name="description" type="text" placeholder="write description" class="form-control my-2"></textarea>
        <input type="file" name="image" class="form-control my-2" />

        <button class="btn btn-primary my-2" type="submit">submit</button>
      </form>
    </div>
  @endsection