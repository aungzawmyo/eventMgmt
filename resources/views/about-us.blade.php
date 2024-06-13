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
        margin-top: 7rem;
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
        padding-top: 5rem;
        color: #fff;
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
   
   
    <div class="div-popular-evnets">
        <center>
            <img class="header-img" src="/asset/img/SSTag.webp">
        </center> 
        <div class="container "> 

            <div class="row g-4">
                     
           
            </div> 
        </div> 
    </div>
    <!-- <div class="page_header_footbg" > -->
    </div>
         
        
    <div>
    <h2 class="bo_title">"Unleash your passion, amplify your connections. Experience events redefined, where every moment becomes a memory worth cherishing. Join us in celebrating the power of community, innovation, and inspiration."</h2>
    
    </div> 
</div>
@endsection

@push('scripts')
    <!-- <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script> -->
@endpush