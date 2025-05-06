@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                @session('success')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $value }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession

                <div class="bg-white border-b border-gray-100 rounded-lg shadow-sm">
                    <div class="flex justify-between items-center p-4 bg-white border-b border-gray-100">
                        <div class="flex items-center">
                            <h4 class="text-lg font-semibold text-gray-800">Register</h4>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline hover:text-gray-900">
                                Login
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('register.post') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">
                                    Full Name
                                </label>
                                <div class="mt-1">
                                    <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-red-500 @enderror" 
                                        id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="text-sm text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email Address
                                </label>
                                <div class="mt-1">
                                    <input type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('email') border-red-500 @enderror" 
                                        id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="text-sm text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Password
                                </label>
                                <div class="mt-1">
                                    <input type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('password') border-red-500 @enderror" 
                                        id="password" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="text-sm text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password-confirm" class="block text-sm font-medium text-gray-700">
                                    Confirm Password
                                </label>
                                <div class="mt-1">
                                    <input type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                                        id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
