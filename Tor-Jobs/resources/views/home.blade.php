@extends('layouts.app')
<style>
  
</style>
@section('content')

<div class="container quote">
    <div class="img-decor-bg">
        <img src="/storage/cover.jpg" alt="" class="float-right rounded img-thumbnail img-fluid" style="width: 350px; height: 300px;">
    </div>
    <h2>Don't search for jobs.
        <br>
    Find the right fit instead.
    </h2>
    
</div>
<div class="container">
    <form class="form-inline my-2 my-lg-0" method="get" action="/search">
        <input class="form-control form-control-lg mr-sm-4 " name="search" type="search" placeholder="Search" aria-label="Search">
        <input class="form-control form-control-lg mr-sm-4" name="location" type="search" placeholder="location" aria-label="Search">
        <button class="btn btn-dark my-2 my-sm-0" type="submit" style=" border-radius: 10px;">Find Jobs</button>
    </form>
   
</div>
@endsection

