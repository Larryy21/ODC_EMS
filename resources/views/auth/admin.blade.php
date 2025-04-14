@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
  
         <livewire:admin/>
    <!-- Prevent Flickering -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
@endsection
