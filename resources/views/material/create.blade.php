@extends('adminlte::page')

@section('title', 'Create Material')

@section('content_header')
    <h1>Tambahkan Materi</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Tambahkan Materi Baru</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('material.store', ['courseId' => $courseId]) }}" method="POST">
                @csrf
                <input type="hidden" name="course_id" value="{{ $courseId }}">

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Nama Materi" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="4" placeholder="Masukkan Deskripsi Materi" required></textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="url" name="link" id="link" class="form-control @error('link') is-invalid @enderror" placeholder="Link dari Materi" required>
                    @error('link')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('material.index', ['courseId' => $courseId]) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@stop

@section('js')
    <script>
    </script>
@stop
