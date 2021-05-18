<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
class Parcels extends Controller
{
    //
    public function index(){
        //eloquent models
           // all records will be saved in $parcels variable
           $parcels = Parcel::all();//not defined, inherited from model class
           //$parcels = Parcel::orderBy('name')->get();//order can be changed by adding second parameter as desc.
           //$parcels = Parcel::where('type', 'large parcel')->get();
           //$parcels = Parcel::latest()->get();
           return view('parcels.parcels', [
            'parcels' => $parcels,   
          
        ]);
        }
        public function show($id) {
           //parcel variable is storing result on bases of id
          $parcel = Parcel::findOrFail($id);// if not found it will show 404 not found page
           
          return view('parcels.details', ['parcel' => $parcel]);//gives details page from parcel folder
        }
           // create function
        public function create() {
          //returns create page view from parcels folder
            return view('parcels.create');
        }

          //store function
        public function store() {
            //instance of parel model getting stored in parcel veriable
            $parcel = new Parcel();

            $parcel->name = request('name');
            $parcel->type = request('type');
            $parcel->destination = request('destination');
            $parcel->save();// save() is from parcel model
            return redirect('/')->with('msg', 'Your order has been received');
        }

        public function destroy($id){
            $parcel = Parcel::findOrFail($id);//finds details and save it to parcel variable
            $parcel->delete();// delete data saved in the parcel variable
            // redirect to parcels page
            return redirect('/parcels');
        }

       
}
