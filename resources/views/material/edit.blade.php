@extends('adminlte::page')

@section('title', 'Edit Material')

@section('content_header')
    <h1>Edit Materi</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Detail dari Materi</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('material.update', ['courseId' => $courseId, 'id' => $material->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $material->title) }}" placeholder="Masukkan Judul dari Materi" required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Masukkan Deskripsi untuk Materi" required>{{ old('description', $material->description) }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" class="form-control" value="{{ old('link', $material->link) }}" placeholder="Link Materi" required>
                    @error('link')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('material.index', ['courseId' => $courseId]) }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
    </script>
@stop
