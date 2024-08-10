@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h4>Kursus</h4>
            <p class="text-muted mb-0">Kelola Kursus</p>
        </div>
        <div>
            <a href="{{ route('courses.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Kursus
            </a>
        </div>
    </div>
@stop

@section('content')
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
                        <td>{{ $course->duration }} hours</td>
                        <td>{{ \Str::limit($course->description, 120) }}</td> <!-- Limit the description length -->
                        <td>
                            <a href="{{ route('material.index', $course->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> Pratinjau
                            </a>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this course?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                        <td>{{ $course->created_at->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $courses->links() }}
        </div>
    </div>
</div>
@stop

@section('css')
    <style>
        .table th, .table td {
            text-align: center;
        }
    </style>
@stop

@section('js')
    <!-- Optional custom scripts -->
    <script>
    </script>
@stop
