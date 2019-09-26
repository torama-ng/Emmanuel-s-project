@extends('layouts.app')
@section('content')
@if (count($resumes) > 0)
    

    @foreach($resumes as $resume)
    {{$resume}}
    @endforeach
    @endif
@endsection