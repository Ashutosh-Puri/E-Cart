@extends('layouts.app')

@section('content')
    <div class="row m-5 ">
        @if (session()->has('s-status'))
            <div class="alert my-2 mx-2 alert-success d-flex align-items-center">
                {{ session('s-status') }}
            </div>
        @endif
        @if (session()->has('d-status'))
            <div class="alert my-2 mx-2  alert-danger d-flex align-items-center">
                {{ session('d-status') }}
            </div>
        @endif
        
    </div>
@endsection
