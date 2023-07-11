@extends('frontend.master',['title' => 'SixSigma 404'])

@section('content')

<!DOCTYPE html>
    <div class="d-flex align-items-center justify-content-center mt-5">
        <div class="text-center">
            <h1 class="display-1 fw-bold">500</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Something went wrong.</p>
            <a href="{{route('home')}}" class="btn btn-primary">Go Home</a>
        </div>
    </div>
@endsection
