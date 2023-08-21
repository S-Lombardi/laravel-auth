@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row mt-5">
            {{-- COL LEFT - IMMAGINE--}}
            <div class="col-6">
                
                {{-- IMMAGINE --}}
                <div class="card-img-top">
                    <img class="img-fluid" src="{{$work->image}}" alt="{{$work->title}}">
                </div>

            </div>

            {{-- COL RIGHT - DESCRIZIONE--}}
            <div class="col-6">
                {{-- TITOLO --}}
                <h5 class="card-title text-uppercase mb-2">{{$work->title}}</h5>

                {{-- DESCRIZIONE --}}
                <p class="card-text">{{$work->description}}</p>

                {{-- LINK --}}
                <div class="mb-3">   
                    Link: 
                    <em><a href="#">{{$work->link}}</a></em>
                </div>

                {{--FIGURE PROFESSIONALI del progetto--}}

                <div>Back-ender: {{$work->back_ender}}</div>

                <div>Front-ender: {{$work->front_ender}}</div>

            </div>

        </div>


    </div>

@endsection