@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>{{ __('messages.home') }}</h1>
                <div>
                    {{ __('messages.app_description') }}
                </div>
            </div>
        </div>
    </div>
@endsection
