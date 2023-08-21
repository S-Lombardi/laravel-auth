@extends('layouts.admin')

@section('content')
    <div class="container">

        {{-- CREATE - Pulsante Form --}}
        <div class="d-flex justify-content-center">
            <button class="btn btn-sm btn-success mt-5">
                <a class="text-light text-decoration-none" href="{{route('admin.works.create')}}">
                    Aggiungi Progetto 
                </a>
            </button>
        </div>

        <div class="row">
            @foreach($works as $project)
                <div class="col-12 col-md-6 col-lg-4 d-flex flex-wrap">

                    <div class="card mt-5">
                        {{-- IMMAGINE --}}
                        <div class="card-img-top">
                            <img class="img-fluid" src="{{$project->image}}" alt="{{$project->title}}">
                        </div>

                        <div class="card-body ">
                            {{-- TITOLO --}}
                            <h5 class="card-title text-uppercase">{{$project->title}}</h5>

                            {{-- DESCRIZIONE --}}
                            <p class="card-text">{{$project->description}}</p>

                            {{-- LINK --}}
                            <div class="mb-3">   
                                Link: 
                                <em><a href="#">{{$project->link}}</a></em>
                            </div>
                            
                            {{-- FILE SHOW --}}
                            <a href="{{route('admin.works.show', $project->id)}}">
                                Dettagli-->
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
   

@endsection