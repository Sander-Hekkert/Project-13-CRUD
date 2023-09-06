@extends('layouts.app')
@section('content')

    <h3>Show Reportage</h3>
    {{$reportage->id}}
    @if(!$reportage)
        <p>Kon geen reportage vinden</p>
    @else
        <div class="card mx-auto" style="width: 70%;">
            <img src = "/uploads/{{$reportage->afbeelding}}"/>
            <div class="card-body">
                <h5 class="card-title">Titel: {{$reportage->titel}}</h5>
                <div class="card-text">
                    <h5>Door: {{$reportage->auteur}}</h5>
                    <h5>Afbeelding: {{$reportage->afbeelding}}</h5>
                    <p>{{$reportage->created_at}}</p>
                    <p>{{$reportage->body}}</p>
                    <small class="text-muted">Laatst geüpdatet:
                        {{$reportage->updated_at}}</small>
                </div>
            </div>
            <div class="card-footer row mx-auto">
                <a href="/reportages/{{$reportage->id}}/edit"
                    class="btn btn-success mr-5">Edit</a>
                    
                <a href="/reportages" class="btn btn-primary">Terug</a>

                {!!Form::open(
                    ['action' =>
                        ['App\Http\Controllers\CRUDController@destroy', $reportage->id],
                        'method' => 'POST', 'class' => 'pull-right'])
                !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger mr-5'])}}
                {!!Form::close()!!}
            </div>
        </div>
    @endif
@endsection
