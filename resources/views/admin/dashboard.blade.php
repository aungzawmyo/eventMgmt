@php
    use Carbon\Carbon;
@endphp
@extends('admin.layouts.app')

@section('content')
<div class="mx-5 mt-4"> 
  
        <div class="row">
          <div class="col-12 col-sm-12 col-md-8 table-responsive mt-3">
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
          <div class="col-sm-4 col-md-4 sticky-col">
            <div class="from_div mt-3 mx-4">
              <h2 class="form-header">Create Event</h2>
              <form action="{{route('add-event')}}" method="post" enctype="multipart/form-data">
                  @csrf
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
                  <div class="mb-3">
                      <label for="eventName" class="form-label">Event Name</label>
                      <input type="text" class="form-control" id="eventName" name="e_eventName" placeholder="Enter event name" required>
                      
                      <span class="text-danger">
                        @error('e_eventName')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" id="description" name="e_description" rows="3" placeholder="Enter event description" required></textarea>
                      <span class="text-danger">
                        @error('e_description')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                      <label for="date" class="form-label">Date</label>
                      <input type="date" class="form-control" id="date"  name="e_date" required>
                      <span class="text-danger">
                        @error('e_date')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                      <label for="time" class="form-label">Time</label>
                      <input type="time" class="form-control" id="time" name="e_time" required>
                      <span class="text-danger">
                        @error('e_time')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                      <label for="location" class="form-label">Location</label>
                      <input type="text" class="form-control" id="location" name="e_location" placeholder="Enter event location" required>
                      <span class="text-danger">
                        @error('e_location')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Create Event</button>
              </form>
            </div>
          </div>
        </div>

      </div>
@endsection