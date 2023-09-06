@extends('layouts.app')
@section('content')
    {!! Form::open(['action' =>'App\Http\Controllers\CRUDController@store', 'method' => 'POST','files'=>'true']) !!}
    <div class="card mx—auto"  style="width:  90%;">
        <div class="card—body">

            <h5 class="card—title">Nieuwe reportage</h5>
            <div class="card—text">
                <div class="form—group">
                    {{Form:: text('titel', '', ['class' => 'form-control',
                    'placeholder' => 'Titel'])}}
                </div>
                <div class="form—group">
                    {{Form:: text('auteur', '', ['class' => 'form-control',
                    'placeholder' => 'Auteur'])}}
                </div>
                <div  class="form—group">
                    {{Form:: textarea('body', '', ['class' =>'form-control',
                    'placeholder' => 'Body'])}}
                </div>
            </div>
            <div>
                Upload een afbeelding
                {{Form::file('image')}}
                {{Form::submit('Upload File')}}
            </div>
        </div>
    </div>
    <div class="card—footer">
        {{Form::submit('Submit', ['class' =>
        'btn btn-success btn-block'])}}
        <a href="/reportages" class="btn  btn-warning btn-block">
            Annuleren</a>
    </div>
    {!!  Form::close() !!}
@endsection