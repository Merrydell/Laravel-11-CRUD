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
                            <h4 class="text-lg font-semibold text-gray-800">Login</h4>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('register') }}" class="text-sm text-gray-700 underline hover:text-gray-900">
                                Register
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email Address
                                </label>
                                <div class="mt-1">
                                    <input type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('email') border-red-500 @enderror" 
                                        id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                        id="password" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="text-sm text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center">
                                    <input id="remember" name="remember" type="checkbox" 
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Log in
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
