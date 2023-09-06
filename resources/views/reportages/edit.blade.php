@extends('layouts.app');
@section('content')
    
    {!! Form::open(['action' => [
    'App\Http\Controllers\CRUDController@update', $reportage->id],
        'method' => 'POST']) !!}
    <div class="card mx-auto" style="width: 90%;">
        <div class="card-body">
            <h5 class="card-title">Edit reportage</h5>
            <div class="card-text">
            <p>Titel: {{$reportage->titel}}</p>
            <p>Door: {{$reportage->auteur}}</p>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $reportage->body,
                        ['class' =>'form-control', 'placeholder' => 'Body'])}}
                </div>
            </div>
        </div>
        <div class="card-footer">
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update',  ['class' => 'btn btn-success btn-block'])}}
        <a href="/reportages" class="btn btn-warning">Annuleren</a>
        </div>
        
    </div>
    {!! Form::close() !!}
@endsection
