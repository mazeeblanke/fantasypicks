@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container top15 bottom15">
        <div class="alert alert-danger">
            Please Note: We are using a trial version of the SportRadar API. This means that we are limited to one request per second to their API.
        </div>
        <h1>Admin Panel&nbsp;{!! ($currentTournament) ? '<small>Currently set up for '.$currentTournament.'</small>' : '' !!}</h1>
        <hr>
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['method' => 'post', 'route' => 'admin.tournaments.set', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('id', 'Tournament', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::select('id', $tournaments, null , ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Update Website', ['class' => 'form-control btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@endsection