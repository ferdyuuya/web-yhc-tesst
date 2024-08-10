@extends('adminlte::page')

@section('title', 'Material List')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h4>Materi</h4>
            <p class="text-muted mb-0">Kelola Materi</p>
        </div>
        <div>
            <a href="{{ route('material.create', ['courseId' => $courseId]) }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah Materi
            </a>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary ml-2">
                <i class="fas fa-arrow-left"></i> Back to Courses
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
                            <th>Description</th>
                            <th>Link</th>
                            <th>Action</th>
                            <th>Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($material->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">No data available</td>
                            </tr>
                        @else
                            @foreach ($material as $key => $materialItem)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $materialItem->title }}</td>
                                <td>{{ Str::limit($materialItem->description, 50, '...') }}</td>
                                <td><a href="{{ $materialItem->link }}" target="_blank">View Link</a></td>
                                <td>
                                    <a href="{{ route('material.edit', ['courseId' => $courseId, 'id' => $materialItem->id]) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('material.destroy', ['courseId' => $courseId, 'id' => $materialItem->id]) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $materialItem->created_at->diffForHumans() }}</td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                    </tbody>
                </table>

                <div class="mt-3">
                    {{ $material->links() }}
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* .table td a {
            color: #007bff;
            text-decoration: none;
        } */

        .table td a:hover {
            text-decoration: underline;
        }
    </style>
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
