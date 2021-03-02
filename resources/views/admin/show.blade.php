@extends('layouts.admin')

@section('title') {{$application->full_name}} @endsection

@section('content')
<div class="row">
    <div class="col-md-3 show-profile">
        <img src="/storage/profile_images/{{$application->image}}" alt="" class="p-photo">
        <h5><strong>Name:</strong> {{$application->full_name}}</h5>
        <p><strong>Phone:</strong> {{$application->phone}}</p>
        <p><strong>Email:</strong> {{$application->email}}</p>
        <p><strong>Link:</strong> <a href="{{$application->link}}" target="_blank"> {{$application->link}}</a></p>
    </div>

    <div class="col-md-8 video">
        <video width="100%" height="450" controls>
            <source src="/storage/videos/{{$application->video}}" type="video/mp4">
          </video>
    </div>
</div>
@endsection