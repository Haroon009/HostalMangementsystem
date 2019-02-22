
@extends('layouts.master')
@yield('main-content')



<div class="container" style="background-color: mintcream">

    <form action='{{route('people.store')}}' method="post">
        @csrf
        <div class="form-group row">
            <label for="name" class="col"></label>
            <input type="text" id="name" class="form-control" name="name" placeholder="user name">
        </div>
        <div class="form-group row">
            <label for="cnic" class="col"></label>
            <input type="text" id="cnic" class="form-control" name="cnic" placeholder="cnic">
        </div>
        <div class="form-group row">
            <label for="age" class="col"></label>
            <input type="text" id="age" class="form-control" name="age" placeholder="age">
        </div>
        <div class="form-group row">
            <label for="city" class="col"></label>
            <input type="city" id="phone" class="form-control" name="city" placeholder="city">
        </div>
        <div class="form-group row">
            <label for="country" class="col"></label>
            <input type="text" id="country" class="form-control" name="country" placeholder="country">
        </div>
        <div class="form-group row">
            <label for="phone" class="col"></label>
            <input type="text" id="phone" class="form-control" name="phone" placeholder="mobile number">
        </div>
        <div class="form-group row">
            <label for="price" class="col"></label>
            <input type="text" id="price" class="form-control" name="price" placeholder="Amount">
        </div>
        <div class="form-group row">
            <label for="room_id" class="col"></label>
            <input type="text" id="room_id" class="form-control" name="room_id" placeholder="room_id">
        </div>
        <div class="form-group row">
            <label for="facilities" class="col"></label>
            <input type="text" id="facilities" class="form-control" name="facilities" placeholder="facilities">
        </div>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn-bd-primary btn-primary">save</button>
            </div>
        </div>


    </form>

</div>

