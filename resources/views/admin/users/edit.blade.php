@extends('layouts.admin')

@section('title', 'Create New User')

@section('content')
    <div class="space-y-6">
        <h1 class="text-3xl font-semibold mb-6">Create New User</h1>

        <form action="{{ route('admin.users.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('name') border-red-500 @enderror"
                    id="name" type="text" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('email') border-red-500 @enderror"
                    id="email" type="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('password') border-red-500 @enderror"
                    id="password" type="password" name="password" required>
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="password_confirmation">
                    Confirm Password
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    id="password_confirmation" type="password" name="password_confirmation" required>
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="role">
                    Role
                </label>
                <select
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('role') border-red-500 @enderror"
                    id="role" name="role" required>
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-[#F15A24] hover:bg-[#dc4e1d] text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    type="submit">
                    Create User
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-[#00294B] hover:text-[#001f3b]"
                    href="{{ route('admin.users.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
