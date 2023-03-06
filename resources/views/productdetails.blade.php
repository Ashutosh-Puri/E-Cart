@extends('layouts.app')

@section('content')
@livewire('product-details',['prod'=>$product])
@endsection
