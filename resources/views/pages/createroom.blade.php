
@yield('main-content')







<div class="container" style="background-color: mintcream">

<form action='{{route('.store')}}' method="post">
    @csrf
    <div class="form-group row">
        <label for="name" class="col"></label>
        <input type="text" id="name" class="form-control" name="name" placeholder="user name">
    </div>
</form>
</div>