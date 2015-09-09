@extends('auth.layout')

@section('pageTitle', trans('passwords.reset_password'))

@section('content')
    <h2>{{ trans('passwords.reset_password') }}</h2>

    @include('auth.error')

    <form method="POST" action="/reactor/password/reset">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group form-group-icon-label">
            <input type="email" name="email" id="email" placeholder="{{ trans('validation.attributes.email') }}" value="{{ old('email') }}" required>
            <label class="icon-label" for="email">
                <i class="icon-mail"></i>
            </label>
        </div>

        <div class="form-group form-group-icon-label">
            <input type="password" name="password" id="password" placeholder="{{ trans('validation.attributes.password') }}" required>
            <label class="icon-label" for="password">
                <i class="icon-lock"></i>
            </label>
        </div>

        <div class="form-group form-group-icon-label">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="{{ trans('validation.attributes.password_confirmation') }}" required>
            <label class="icon-label" for="password_confirmation">
                <i class="icon-lock"></i>
            </label>
        </div>

        <div class="auth-buttons">
            <button class="button button-emphasized button-icon" type="submit">{{ uppercase(trans('passwords.reset_password')) }} <i class="icon-right-open-big"></i></button>
        </div>
    </form>
@endsection