@extends('layouts.app')
<style>
    .quote{
        padding: 30px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: rgb(100, 120, 115);
    }
    .quote h2{
        font-size: 50px;
        font-weight:1000;
    }
   .rounded{
       margin-bottom: 20px;
   }
   .img-decor-bg {
    background-color: #00b6b4;
    margin: auto;
    top: -15px;
    bottom: 0;
    right: 15px;
    }
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

