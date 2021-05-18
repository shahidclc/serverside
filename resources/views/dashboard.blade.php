<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Smart Parcels') }}
        </h2>        
    </x-slot>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
            <h1>Links to other pages</h1>
             <div> <ul>       
                  <li><a href="/parcels/create">Order your parcel--></a></li>
                  <li> <a href="/parcels"> Parcel details page--></a> </li>
                  <li><a href="/">Welcome page--></a></li>                                
              </ul>
              </div>
                
            </div>
        </div> 
   
    </x-app-layout>
<input type="submit" value="Order parcel">