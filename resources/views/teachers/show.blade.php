@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-col justify-content-center items-center "> 
    <h1>Teacher Details</h1>
    <div class="flex flex-col sm:flex-row sm:items-center border-b border-gray-100 pb-4">
                <span class="text-sm font-medium text-gray-500 w-32">Name</span>
                <span class="text-lg text-gray-900">{{ $teacher->name }}</span>
            </div>
    <div class="flex flex-col sm:flex-row sm:items-center border-b border-gray-100 pb-4">
                <span class="text-sm font-medium text-gray-500 w-32">Email</span>
                <span class="text-lg text-gray-900">{{ $teacher->email }}</span>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center border-b border-gray-100 pb-4">
                <span class="text-sm font-medium text-gray-500 w-32">Phone</span>
                <span class="text-lg text-gray-900">{{ $teacher->phone }}</span>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center border-b border-gray-100 pb-4">
                <span class="text-sm font-medium text-gray-500 w-32">Address</span>
                <span class="text-lg text-gray-900">{{ $teacher->address }}</span>
            </div>
            <a href="{{ route('teacher.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection