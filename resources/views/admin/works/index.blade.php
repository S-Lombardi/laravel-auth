@extends('layouts.admin')

@section('content')
    <div>
        <div class="container">
            <div class="row">
                {{-- Mostro a video i dati creati con Faker --}}
                @foreach($works as $project)
                    <div class="col-12 card">
                        {{$project->title}}

                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection