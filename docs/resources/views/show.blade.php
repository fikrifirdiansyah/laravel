@extends('master')

@section('content')
    <div class="mt-3 ml-3"> 
        <h4> {{ $pertanyaan->judul}}</h4>
        <p> {{ $pertanyaan->isi}}</P>
    </div>
    
@endsection