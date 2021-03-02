@extends('layouts.admin')

@section('title')Applications @endsection

@section('content')
<div class="text-center">
    <h3 class="text-primary">Applications</h3>
</div>

<div class="row">
    <table class="table table-bordered table-condensed table-striped table-hover">
        <thead>
            <th>#</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>LInk</th>
            <th>Photo</th>
            <th>Video</th>
            <th>Action</th>
        </thead>

        <tbody>
            @foreach ($applications as $application)
            <tr>
                <td>{{$application->id}}</td>
                <td>{{$application->full_name}}</td>
                <td>{{$application->phone}}</td>
                <td>{{$application->email}}</td>
                <td> <a href="{{$application->link}}" target="_blank">{{$application->link}}</a></td>

                <td><img src="/storage/profile_images/{{$application->image}}" class="img-circle profile"></td>
                <td>
                    <video width="50" height="50" controls>
                        <source src="/storage/videos/{{$application->video}}" type="video/mp4">
                    </video>
                </td>
                <td>
                    <a href="/application/{{$application->id}}" class="btn btn-info btn-sm">View</a>
                    <form action="/application/{{$application->id}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button 
                        type="submit" 
                        class="btn btn-danger btn-sm" 
                        onclick="return confirm('Are you sure you want to delete this item?');">
                        <i class="fas fa-trash"></i>
                    </a>
                    </form>
                </td>                
            </tr>                
            @endforeach
        </tbody>
    </table>
</div>
@endsection