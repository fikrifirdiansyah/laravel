@extends('master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Post {{$pertanyaan->id}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="card-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old ('judul', $pertanyaan->judul)}}" placeholder="Masukkan judul">
                        @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Isi</label>
                        <input type="text" class="form-control" id="isi" name="isi" value="{{ old ('isi', $pertanyaan->isi)}}" placeholder="Isi pertanyaan">
                        @error('isi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
        </div>
    </div>
    

@endsection