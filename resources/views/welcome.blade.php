@extends('layouts.master')

@section('title')
 Welcome!
@endsection

@section('content')
    @include('component.contact')
    @include('component.credits')

    @include('component.message')
    
@endsection