@extends('layouts.app')
@section('titolo','studenti')

@section('content')
    <div class="card-box">
        <div class="card-group">
            @foreach($data as $key => $student)
                <div class="card">
                    <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
                    <div class="card-body">
                        <a href="{{ route('Students.show', ['id' => $key]) }}"><h5 class="card-title">{{$student['nome']}}</h5></a>
                        <h6>Assunt{{ ($student['genere']== 'f') ? 'a' : 'o'}} da {{$student['azienda']}}</h6>
                        {{-- <p class="card-text">{{$student['descrizione']}}</p> --}}
                        <p class="card-text"><small class="text-muted">{{$student['eta']}}</small></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
