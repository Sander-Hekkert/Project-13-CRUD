@extends('layouts.app')
@section('content')

    <h3>Alle Reportages</h3>
    @if(!$reportages)
        <p>Kon geen reportages vinden</p>
    @else
        @foreach($reportages as $reportage)
            <div class="card mx-auto" style="width: 70%;">
                <img src = "/uploads/{{$reportage->afbeelding}}"/>
                <div class="card-body">
                    <h5 class="card-title">Titel: {{$reportage->title}}</h5>
                    <div class="card-text">
                        <h5>Door: {{$reportage->auteur}}</h5>
                        <p>{{$reportage->created_at}}</p>
                        <small class="text-muted">Laatst geüpdatet:
                            {{$reportage->updated_at}}</small>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/reportages/{{$reportage->id}}"
                    class="btn btn-primary btn-block">Lees verder</a>
                </div>
            </div>
        @endforeach
    @endif
@endsection
