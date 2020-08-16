@extends('layouts.profile')

@section('title', 'Edo Freriks')

@section('content')
<div class="px-4 py-6">
    <div class="bg-white border-gray-200 rounded-lg p-2">

        <img class="h-24 w-24 object-cover rounded-full mx-auto" src="{{ asset('img/edo.png') }}">

        <h1>Edo Freriks</h1>

        <div >
            <i class="fab fa-github"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-twitter"></i>

            <i class="fas fa-at"></i>
        </div>
    </div>
</div>
@endsection
