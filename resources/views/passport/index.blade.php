@extends('layouts.app')

@section('title', __('passport.passport'))

@section('content')

<div class="px-4 py-6 sm:px-0">
    <div id="app" class="rounded-lg h-96">
        <passport-clients></passport-clients>
        <passport-authorized-clients></passport-authorized-clients>
        <passport-personal-access-tokens></passport-personal-access-tokens>
    </div>
</div>

@endsection
