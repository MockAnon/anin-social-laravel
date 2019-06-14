@extends('layouts.master')

@section('title')
 Welcome!
@endsection

@section('content')
    @include('component.contact')
    @include('component.credits')

    @include('component.message')

    <div class="flex-row">
        <p class="flex-1"> Woah </p>
        <p class="flex-1"> Woah2 </p>
        <p class="flex-1"> woah 3 </p>
    

    </div>
    @include('component.message')
    @include('component.message')
    @include('component.message')
    @include('component.message')
    @include('component.message')
    
    
@endsection