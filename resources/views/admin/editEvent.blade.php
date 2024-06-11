@extends('admin.layouts.app')

@section('content')
<style>
        body {
            background-color: #f9f9f9;
        }
        
</style>
<div> 
    <a class="m-2 mx-3"href="/admin/dashboard"><img height="20" src="/asset/img/left.png">Back to dashboard</a>
  
    <div class="container mt-3">
    <div class="card">
        @foreach ($event as $ev )   
            <div class="from_div mt-0 mx-4">
              <h2 class="form-header">Edit Event</h2>
              <form action="{{route('updateEvent')}}" method="post" enctype="multipart/form-data">
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
                  <input type="hidden" name="e_id" value="{{$ev->EventID}}">
                  <div class="mb-3">
                      <label for="eventName" class="form-label">Event Name</label>
                      <input type="text" class="form-control" value="{{$ev->EventName}}" id="eventName" name="e_eventName" placeholder="Enter event name" required>
                      <span class="text-danger">
                        @error('username')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control"  id="description" name="e_description" rows="3" placeholder="Enter event description" required>{{$ev->Description }}</textarea>
                      <span class="text-danger">
                        @error('e_description')
                            {{$message}}
                        @enderror
                    </span>
                    </div>
                  <div class="mb-3">
                      <label for="date" class="form-label">Date</label>
                      <input type="date" class="form-control" value="{{$ev->Date}}" id="date"  name="e_date" required>
                      <span class="text-danger">
                        @error('e_date')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                      <label for="time" class="form-label">Time</label>
                      <input type="time" class="form-control" value="{{$ev->Time}}"  id="time" name="e_time" required>
                      <span class="text-danger">
                        @error('e_time')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                      <label for="location" class="form-label">Location</label>
                      <input type="text" class="form-control"  value="{{$ev->Location}}"  id="location" name="e_location" placeholder="Enter event location" required>
                      
                      <span class="text-danger">
                        @error('e_location')
                            {{$message}}
                        @enderror
                    </span>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Edit Event</button>
              </form>
            </div>
        @endforeach

    </div>
</div>
    
</div>
</div>
@endsection