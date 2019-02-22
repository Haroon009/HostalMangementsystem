<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*dd($request->all());*/
       $name=$request->name;
       $cnic=$request->cnic;
       $age=$request->age;
       $city=$request->city;
       $country=$request->country;
       $phone=$request->phone;
       $price=$request->price;
       $room_id=$request->room_id;
       Person::create(['room_id'=>$room_id,'name'=>$name,'cnic'=>$cnic,'age'=>$age,'city'=>$city,'country'=>$country,'phone'=>$phone,'price'=>$price]);
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {

        $name=$request->name;
        $cnic=$request->cnic;
        $age=$request->age;
        $city=$request->city;
        $country=$request->country;
        $phone=$request->phone;
        $price=$request->price;
        $room_id=$request->room_id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
