@extends('layouts.app')

@section('title', __('auth.check_email_for_verification_link'))

@section('content')
@if (session('resent'))
{{ __('auth.verification_link_sent') }}
@endif

{{ __('auth.check_email_for_verification_link') }}
{{ __('auth.if_you_did_not_receive_email') }},
<form method="POST" action="{{ route('verification.resend') }}">
    @csrf
    <button type="submit">{{ __('auth.click_here_to_request_another') }}</button>.
</form>
@endsection
