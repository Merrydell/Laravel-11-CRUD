@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-bold mb-4">Welcome to your Dashboard!</h2>
                <p class="mb-4">You are logged in as {{ Auth::user()->name }}</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Your Profile</h3>
                        <p class="mb-2">Email: {{ Auth::user()->email }}</p>
                        <a href="{{ route('profile.edit') }}" class="text-indigo-600 hover:text-indigo-900">Edit Profile</a>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Quick Actions</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-indigo-600 hover:text-indigo-900">View Notifications</a></li>
                            <li><a href="#" class="text-indigo-600 hover:text-indigo-900">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
