@extends('layout.app')
@section('content')
<div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @if (session('message'))
                        <h5 class="alert alert-success">{{ session('message') }}</h5>
                    @endif

                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>Add Contact with Form Request Validation in Laravel 8
                                <a href="{{ url('contacts') }}" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('contacts') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control">
                                </div>    
                                <div class="mb-3">
                                    <label>Email ID</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Phonenumber</label>
                                    <input type="text" name="phonenumber" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Message</label>
                                    <input type="text" name="message" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit message" class="btn btn-primary">Submit Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection