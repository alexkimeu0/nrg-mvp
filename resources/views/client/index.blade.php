@extends('layouts.client')
@section('title')MVP @endsection
@section('content')
<img src="{{asset('assets/images/bg.png') }}" alt="MVP" class="banner">    
<div class="applications">
    <div class="radio">
        <img src="{{asset('assets/images/ngr1.png')}}" alt="NRG Radio">
        <a href="/apply" class="btn-apply btn-nrg">Apply</a>
    </div>

    <div class="fm">
        <img src="{{asset('assets/images/ngr2.png')}}" alt="NRG Radio">
        <a href="/apply" class="btn-apply btn-fm">Apply</a>
    </div>

</div>
@endsection
    