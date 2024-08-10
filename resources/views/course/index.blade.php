@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex">
        <div>
            <h4>Kursus</h4>
            <p class="text-muted mb-0">Kelola Kursus </p>
        </div>
        <div class="ml-auto mt-auto">
            <a href="{{ route('courses.create') }}" class="btn btn-primary">Tambah Kursus</a>
        </div>
    </div>
@stop

@section('content')
{{-- Minimal example / fill data using the component slot --}}
<div class="card mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Description</th>
                        <th>Action</th>
                        <th>Date Added</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $key => $course)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->duration }}</td>
                        <td>{{ $course->description }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>{{ $course->created_at->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop