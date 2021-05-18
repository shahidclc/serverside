@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
           List of parcels order
        </div>  
                          
           @foreach($parcels as $parcel) 
               <div>
                  {{ $parcel->name }} - {{ $parcel->type }} - {{ $parcel->destination }} 
               </div>
           @endforeach       
           <button> <a href="/">go back</a> </button>          
                  
    </div>
    
</div>
                 
@endsection

