@extends('layouts.adminLayout')
@section('content')
        <div class="container">
            <div class="row">
                <h1>Teachers List</h1>
                <div class="col-10">
                    <a href="{{ route('teacher.create') }}" class="btn btn-primary mb-3">Create</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <th scope="row">{{ $teacher->id }}</th>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->phone }}</td>
                                <td class="d-flex gap-2">
                                    <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info">Show</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
