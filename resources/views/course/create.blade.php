@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Courses</h1>
@stop

@section('content')
    {{-- Display Success Message --}}
    @if(session('success'))
        <x-adminlte-alert theme="success" title="Success">
            {{ session('success') }}
        </x-adminlte-alert>
    @endif

    {{-- Course Form --}}
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        {{-- Title --}}
        <x-adminlte-input name="title" label="Course Title" placeholder="Enter course title"
            fgroup-class="col-md-6" disable-feedback/>

        {{-- Description --}}
        <x-adminlte-textarea name="description" label="Course Description" placeholder="Enter course description"
            rows=5 fgroup-class="col-md-6">
            <x-slot name="prependSlot">
                <div class="input-group-text text-lightblue">
                    <i class="fas fa-info-circle"></i>
                </div>
            </x-slot>
        </x-adminlte-textarea>

        {{-- Duration --}}
        <x-adminlte-input name="duration" label="Course Duration (in hours)" placeholder="Enter course duration"
            type="number" min=1 max=100 fgroup-class="col-md-6">
            <x-slot name="prependSlot">
                <div class="input-group-text text-lightblue">
                    <i class="fas fa-clock"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- Submit Button --}}
        <x-adminlte-button type="submit" label="Add Course" theme="primary" icon="fas fa-save"/>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
