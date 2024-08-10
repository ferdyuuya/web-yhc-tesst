@extends('adminlte::page')

@section('title', 'Edit Course')

@section('content_header')
    <h1>Edit Course</h1>
@stop

@section('content')
    @if(session('success'))
        <x-adminlte-alert theme="success" title="Success">
            {{ session('success') }}
        </x-adminlte-alert>
    @endif

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <x-adminlte-input name="title" label="Judul Kursus" placeholder="Masukkan judul kursus"
            value="{{ old('title', $course->title) }}" fgroup-class="col-md-6" disable-feedback/>

        <x-adminlte-textarea name="description" label="Deskripsi Kursus" placeholder="Masukkan deskripsi kursus"
            rows=5 fgroup-class="col-md-6">
            <x-slot name="prependSlot">
                <div class="input-group-text text-lightblue">
                    <i class="fas fa-info-circle"></i>
                </div>
            </x-slot>
            {{ old('description', $course->description) }}
        </x-adminlte-textarea>

        <x-adminlte-input name="duration" label="Durasi Kursus (dalam jam)" placeholder="Enter course duration"
            type="number" min=1 max=100 value="{{ old('duration', $course->duration) }}" fgroup-class="col-md-6">
            <x-slot name="prependSlot">
                <div class="input-group-text text-lightblue">
                    <i class="fas fa-clock"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        <x-adminlte-button type="submit" label="Update Course" theme="primary" icon="fas fa-save"/>
    </form>
@stop

@section('css')
@stop

