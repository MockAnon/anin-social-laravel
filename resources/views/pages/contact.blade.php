@extends('layouts.master')

@section('title')
 Welcome!
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h3> Sign Up </h3>
        <form action="{{ url('contact') }}" method="POST"> 
        <h1> Contact Me </h1>
        <hr>
            <div class="form-group">
                <label for="email"> Your E-Mail: </label>
                <label class="form-control" type="text" name="email" id="email"> Your Text </label>
            </div>
            <div class="form-group">
                <label for="subject"> Subject: </label>
                <label class="form-control" type="text" name="subject" id="subject"> Subject </label>
            </div>
            <div class="form-group">
                <label for="message"> Message: </label>
                <label class="form-control" type="message" name="message" id="message"> Your Text </label>
            </div>
            <button type="submit" value="Send Message" class="btn btn-primary"> Send Message </button>
        </form>
    </div>
</div>
    
@endsection