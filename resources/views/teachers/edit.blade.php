@extends('layouts.adminLayout')
@section('content')

<div class="container mt-5">
        <div class="row ">
            <div class="mx-auto max-w-3xl mt-12 p-8 bg-white rounded-2xl shadow-xl border border-gray-100">
                <h1 class="text-3xl font-extrabold text-gray-900 mb-8">Update | Teacher</h1>
                <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                        <input value="{{ $teacher->name }}" type="text" name="name" id="name" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200 bg-gray-50 hover:bg-white" 
                            placeholder="e.g. John Smith" >
                            @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input value="{{ $teacher->email }}" type="email" name="email" id="email" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200 bg-gray-50 hover:bg-white" 
                            placeholder="teacher@example.com" >
                            @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                        <input value="{{ $teacher->phone }}" type="text" name="phone" id="phone" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200 bg-gray-50 hover:bg-white" 
                            placeholder="01xxxxxxxxx" value="+998" >
                            @error('phone')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">Address</label>
                        <input value="{{ $teacher->address }}" type="text" name="address" id="address" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200 bg-gray-50 hover:bg-white" 
                            placeholder="United States" >
                            @error('address')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                    </div> 
                    <div class="pt-4">
                        <button type="submit" 
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform active:scale-[0.98] transition-all duration-150">
                            Create Teacher Account
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

@endsection