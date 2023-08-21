@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class='mt-4'>Modifica dati progetto</h4>
        <div class="row">
            <div class="col-12">
    
                {{-- INIZIO FORM --}}
                <form action="{{route('admin.works.update', $project->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- TITOLO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Titolo</label>
                        <input type="text"class="form-control" id="title" name="title" value="{{$project->title}}">
                    </div>
    
                    {{-- IMG --}}
                    <div class="form-group">
                        <label for="" class="control-label">Immagine</label>
                        <input type="text"class="form-control" id="image" name="image" value="{{$project->image}}">
                    </div>
    
                    {{-- LINK --}}
                    <div class="form-group">
                        <label for="" class="control-label">Link al progetto</label>
                        <input type="text"class="form-control" id="link" name="link" value="{{$project->link}}">
                    </div>
    
                    {{-- DESCRIZIONE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Descrizone</label>
                        <textarea type="text"class="form-control" id="description" name="description">
                            {{$project->description}}
                        </textarea>
                    </div>
    
                    {{-- FIGURE PROFESSIONALI --}}
                    {{-- Back-ender --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome back-ender</label>
                        <input type="text"class="form-control" id="back_ender" name="back_ender" value="{{$project->back_ender}}">
                    </div>
    
                    {{-- Front-ender --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome front-ender</label>
                        <input type="text"class="form-control" id="front_ender" name="front_ender" value="{{$project->front_ender}}">
                    </div>
    
                    {{-- UX --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome UX</label>
                        <input type="text"class="form-control" id="ux" name="ux" value="{{$project->ux}}">
                    </div>
    
                    {{-- UI --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome UI</label>
                        <input type="text"class="form-control" id="ui" name="ui" value="{{$project->ui}}">
                    </div>
    
                    {{-- Illustratore --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome Illustratore</label>
                        <input type="text"class="form-control" id="illustrator" name="illustrator" value="{{$project->illustrator}}">
                    </div>
    
                    {{-- PULSANTE --}}
                    <div class="form-group">
                        <button class="btn btn-success mt-3" type="submit"class="form-control">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection