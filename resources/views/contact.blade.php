@extends('layouts.app')

@section('title') Contact @endsection

@section('content')
    <h1>Contact page</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Put name</label>
            <input type="text" name="name" placeholder="Put name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Put email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject theme</label>
            <input type="text" name="subject" placeholder="Subject theme" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Put your message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection











