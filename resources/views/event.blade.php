<!-- event -->
@php
    use Carbon\Carbon;
@endphp
<div class="col-md-4">
    <div class="card">
        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Event Image">
        <div class="card-body">
            <h5 class="card-title"><strong>{{$event->EventName}}</strong></h5> 
            <p class="card-text" title="{{$event->Description}}">{{ Illuminate\Support\Str::limit($event->Description, 100) }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Date:</strong> {{ Carbon::createFromFormat('Y-m-d', $event->Date)->format('Y M d') }}</li>
                <li class="list-group-item"><strong>Time:</strong> {{ Carbon::createFromFormat('H:i:s', $event->Time)->format('h:i A')  }}</li>
                <li class="list-group-item"><strong>Location:</strong> {{$event->Location}}</li>
            </ul>
            @php
                $isAlreadyRegister = 0;
            @endphp

            @foreach($event->users as $r) 
                @if($isAlreadyRegister == 0 && $r->UserID == Session()->get("loginId") )
                    @php $isAlreadyRegister = 1; @endphp
                    @break
                @else
                    @php $isAlreadyRegister = 0; @endphp
                @endif 
            @endforeach

            @if($isAlreadyRegister == 1)
                <a href="#" class="btn  btn-lg  btn-primary bg-dark text-light mt-3">Already Register</a>
            @else
                <a href="/register-event?id={{$event->EventID}}" class="btn  btn-lg  btn-primary mt-3">Register</a>
            @endif

        </div>
    </div>
</div>  
