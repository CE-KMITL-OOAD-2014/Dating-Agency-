@extends('layout')

@section('content')

{{ Form::model($provider, array('route' => array('provider.update', $provider->id))) }}
            {{ Form::label('providerName', 'Full Name:')) }}
            {{ Form::text('providerName') }}
            {{ Form::text('providerSurname') }}

            {{ Form::label('providerEmail', 'E-Mail Address') }}
            {{ Form::text('providerEmail') }}

            {{ Form::submit('Send this form!') }}
        {{ Form::close() }}



@stop
 