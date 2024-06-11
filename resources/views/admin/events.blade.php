@php
    use Carbon\Carbon;
@endphp
@extends('admin.layouts.app')

@section('content')
<div class="mx-5 mt-4"> 
  
        <div class="row">
          <div class="col-12 col-sm-12 col-md-11 table-responsive mt-3">
            <h3>Events List ({{count($events)}})</h3>

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Desc.</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Location</th>
                        <th scope="col">Members</th>
                        <th scope="col">Created_At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @if (count($events) > 0)             
                    @foreach ($events as $event) 
                        <tr>
                          <td>{{ $loop->iteration}}</td> 
                          <td>{{ $event->EventName }}</td>
                          <td>{{ $event->Description }}</td>
                          <td>{{ $event->Date }}</td>
                          <td>{{ Carbon::createFromFormat('H:i:s', $event->Time)->format('h:i A')   }}</td>
                          <td>{{ $event->Location }}</td>
                          <td> {{count($event->registrations)}}</td>
                          <td>{{ $event->created_at->format('Y M d g:i A') }}</td>

                          <td> <a href="/admin/eventDetail?id={{$event->EventID}}"><u>View</u></a></td> 
                        </tr>
                    @endforeach
                @else

                  <tr>
                    <td colspan="5">no event</td>
                  </tr>
                @endif 
                </tbody>
            </table>
          </div>
         
        </div>

      </div>
@endsection