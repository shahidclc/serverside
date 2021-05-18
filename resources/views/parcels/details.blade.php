
@extends('layout')    

    @section('content')
    <div class="wrapper parcel-details">
    <h1>This order is for {{ $parcel->name }}</h1>
    <p class="type">Type - {{ $parcel->type }}</p>
    <p class="destination">Destination - {{ $parcel->destination }}</p>
    
    <form action="/parcels/{{ $parcel->id }}" method="POST">
        @csrf
        @method('DELETE')
    <button>Complete Order</button>
   </form>
   
   </div>
   <a href="/parcels" class="return"><-Return to parcels</a>

        
    @endsection
    
    