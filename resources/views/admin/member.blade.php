@php
    use Carbon\Carbon;
@endphp
@extends('admin.layouts.app')

@section('content')
<div class="mx-5 mt-4"> 
  
        <div class="row">
          <div class="col-12 col-sm-12 col-md-11 table-responsive mt-3">
            <h3>Member List ({{count($members)}})</h3>

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role.</th>
                        <th scope="col">Event</th> 
                        <th scope="col">Register_At</th> 
                    </tr>
                </thead>
                <tbody>
                @if (count($members) > 0)             
                    @foreach ($members as $m) 
                        <tr>
                          <td>{{ $loop->iteration}}</td> 
                          <td>{{ $m->Username }}</td>
                          <td>{{ $m->Role }}</td>   
                          <td> {{count($m->events)}}</td>
                          <td>{{ $m->created_at->format('Y M d g:i A') }}</td>  
                        </tr>
                    @endforeach
                @else

                  <tr>
                    <td colspan="5">no member</td>
                  </tr>
                @endif 
                </tbody>
            </table>
          </div>
          <div class="col-sm-4 col-md-2 sticky-col"> 
          </div>
        </div>

      </div>
@endsection