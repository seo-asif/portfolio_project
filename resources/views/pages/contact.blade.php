@extends('master')
@section('title')
    <title>Contacts With Asif</title>
@endsection

@section('content')
    <div class="container page_margin w-50">



        <h4 class=" text-center mb-3" style="margin-top: 100px">Ready To Send Email!</h4>
        <p class="text-center text-success">Just fill up the form below and will get my reply as soon as possible</p>



        <form action="{{ route('submit.contact') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-success">Full Name</label>
                <input type="text" class="form-control"  name="name">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="mb-3">
                <label for="email" class="form-label text-success">Email address</label>
                <input type="email" class="form-control"  name="email">
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="mb-3">
                <label for="message" class="form-label text-success">Message</label>
                <textarea class="form-control"  name="message"></textarea>
            </div>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
