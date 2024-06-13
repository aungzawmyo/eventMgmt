@extends('layouts.app')

@section('title', 'Welcome')

@push('styles')
<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-img-top {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }
    .card-body {
        padding: 1.5rem;
    }
    .list-group-item {
        border: none;
        padding-left: 0;
    }
    .btn-primary {
        background-color: #f84300;  
        /* background-color: #007bff;  */
        border: none;
        
    }
    .btn-primary:hover {
        background-color: #fff;
        color: #000;
        border: 1px solid #f84300;
    
    }
    .div-popular-evnets{
        /* background-color: #6018a7; */
    }
    .bo_title {
        max-width: 38ch;
        margin-left: auto;
        margin-right: auto;
        margin-top: 9rem;
        margin-bottom: 6rem;
        text-align: justify;
    } 
    .page_header_footbg {
        position: relative;
        margin-top: -2px;
        height: 200px;
        background-repeat: no-repeat;
        background-position: 50% 100%;
        background-size: cover; 
        height: 300px;
        margin-bottom: -290px;
        background-image:url(/asset/img/bannerboo_gif_animation_wave_03.svg);
    }
    .header-img{
        margin-top: 8rem;
        height: 140px;
         
    }
    .newest-event{
        margin-bottom: 1rem; 
        padding-top: 15rem;
        color: #111;
    }
    .card-body .list-group li:last-child{
        height: 4rem;
    }
    .card-body .card-text {
        height: 2rem;

    }
    .card-title{
        height: 3rem;
    }
    footer{
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        padding: 17.5rem 0 0;
        font-family: "Roboto", Helvetica, Arial, sans-serif;
        font-size: 1rem;
        color: #fff;
        background: url(/asset/img/footer_wave_bg.svg?v4) 50% 0 no-repeat;
       p{
            background: #232426;
            margin: 0;
            padding:1rem;
       } 
    }
    .event-logo{
        /* width: 100%; */
        height: 50px;
        width: 73px;
    } 

</style>
@endpush

@section('content')
<div class="home">
   
   
    <div class="page_header_footbg" >
    </div>
         
    <div class="div-popular-evnets">
        <center>
            <!-- <img class="header-img" src="/asset/img/SSTag.webp"> -->
        </center>
        <!-- <div>
            <center>
                <h1>Popular Events</h1>
            </center>
        </div> -->
        <div class="container ">
             <!-- mt-5 -->
            <div class="row newest-event">
               
                <img class="col-2 event-logo" src="asset/img/event.png" alt="event">
                <h1 class="h1-popular col-8">Upcoming Events</h1>     
            </div>

            <div class="row g-4">
                     
                @if (count($eventList) > 0)             
                    @foreach ($eventList as $event)   
                        @php
                            $isAlreadyRegister = 0;
                        @endphp
                        @foreach($event->users as $r) 
                            @if($isAlreadyRegister == 0 && $r->UserID == Session()->get("loginId") )
                                @php $isAlreadyRegister = 1; @endphp
                                @break
                            @endif
                        @endforeach
                        @if($isAlreadyRegister == 1)
                            @include("event")
                        @endif
                    @endforeach
                @endif 
            </div> 
        </div> 
    </div>
        
    <div>
    <h2 class="bo_title">"Unleash your passion, amplify your connections. Experience events redefined, where every moment becomes a memory worth cherishing. Join us in celebrating the power of community, innovation, and inspiration."</h2>
    
    </div>
    <!-- <div class="container mt-5">
        <div class="row mt-2 mb-3">
            <img class="col-2 event-logo" src="asset/img/event.png" alt="event">
            <h1 class="col-8">All Upcoming Events</h1>

        </div>
        <div class="row g-4">  
            
        </div>
    </div> -->
</div>
@endsection

@push('scripts')
    <!-- <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script> -->
@endpush