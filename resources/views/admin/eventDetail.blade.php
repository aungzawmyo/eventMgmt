@extends('admin.layouts.app')

@section('content')
<style>
        body {
            background-color: #f9f9f9;
        }
        
</style>
<div>
<a class="m-2 mx-3"href="/admin/dashboard"><img height="20" src="/asset/img/left.png">Back to dashboard</a>
 
    <div class="container mt-5">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
        @endif
    <div class="card">
        @foreach ($event as $ev )      

            <div class="card-header">
                <h1 class="h4">{{$ev->EventName}}</h1>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{$ev->Description}}</p>
                <p><strong>Date:</strong> {{$ev->Date}}</p>
                <p><strong>Time:</strong> {{$ev->Time}}</p>
                <p><strong>Location:</strong> {{$ev->Location}}</p>
                <p><strong>Members:</strong></p>
                <ul class="list-group mb-3">
                    @if(count($ev->users)>0)
                        @foreach($ev->users as $r) 
                            <li class="list-group-item">{{$r->Username}}</li>
                        @endforeach
                    @else
                        <li class="list-group-item">There is no Member.</li>
                    @endif 
                </ul>
                <p><strong>Created Time:</strong> June 10, 2024, 09:00 AM</p>
                <div class="d-flex">
                    <a href="/admin/updateEvent?id={{$ev->EventID}}" class="btn btn-success me-2">Edit</a>
                    <a href="/admin/deleteEvent?id={{$ev->EventID}}" class="btn btn-danger mx-3">Delete</a>
                </div>
            </div>
        @endforeach

    </div>
</div>
    
</div>
</div>
@endsection