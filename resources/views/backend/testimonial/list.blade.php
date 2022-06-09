@extends('layout.app')
@section('content')
    <div style="margin-top:10rem" class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl</th>
      <th scope="col">name</th>
      <th scope="col">designation</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($testimonials as $testimonial)

      <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$testimonial->name}}</td>
      <td>{{$testimonial->designation}}</td>
      <td>{{$testimonial->description}}</td>
      <td><img src="/uploads/testimonial/{{$testimonial->image}}" class="w-25" ></td>
      <td class="btn-group">
          <button class="btn btn-secondary"><a href="{{route('edit_testimonial',['id' => $testimonial->id])}}">edit</a></button>
          <form action="{{route('delete_testimonial',$testimonial->id) }}" method="POST">
           @csrf
           @method('delete')
          <button type="submit" class="btn btn-outline-danger">Delete</button>
         </form>
      </td>
    </tr>


      @endforeach
 
  </tbody>
</table>
    </div>
  @endsection