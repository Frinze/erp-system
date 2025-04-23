@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-xl mb-4">Edit User</h2>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label>Role</label>
            <input type="text" name="role" value="{{ $user->role }}" class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
    </form>
</div>
@endsection
