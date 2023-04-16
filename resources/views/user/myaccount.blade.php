@extends('layouts.app')

@section('content')

@livewire('u-profile',['user_id'=>$user_id])

@endsection
