@extends('layouts.auth')

@section('title', __('auth.check_email_for_verification_link'))

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    {{ __('auth.login') }}
                </div>

                @if(session('resent'))
                <div class="p-6 pb-2">
                    <div class="border rounded shadow text-sm text-green-700 bg-green-100 p-2" role="alert">
                        {{ __('auth.verification_link_sent') }}
                    </div>
                </div>
                @endif

                <div class="p-6">
                    <div class="text-gray-700" role="alert">
                        {{ __('auth.check_email_for_verification_link') }}
                    </div>
                </div>

                <form class="w-full text-center pt-2 p-6" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button class="bg-blue-500 hover:bg-blue-700 text-gray-100 py-1 px-3 rounded focus:outline-none focus:shadow-outline ml-auto" type="submit">
                        {{ __('auth.click_here_to_request_another') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
