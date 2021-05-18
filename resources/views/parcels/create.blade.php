@extends('layout')
@section('content')
<div class="wrapper create-parcel">
    <h1>Customise your parcel</h1>
    <form action="/parcels" method="POST">
       @csrf
       <label for="name">Your name:</label>
       <input type="text" id="name" name="name">
       <label for="type">Size of the parcel:</label>
       <select name="type" id="type">
           <option value="small parcel">Small Parcel</option>
           <option value="medium parcel">Medium Parcel</option>
           <option value="large parcel">Large Parcel</option>
        </select>
        <label for="destination">Your destination:</label>       
       <select name="destination" id="destination">
           <option value="intercity">Intercity</option>
           <option value="national">National</option>
           <option value="international">International</option>
        </select>        
        <input type="submit" value="Order parcel">
    </form>
</div>
@endsection