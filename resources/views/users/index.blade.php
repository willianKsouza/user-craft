@extends('layouts.main')
@section('title', 'List')
@section('content')
    <div>
    <div class="flex">
        <div>
            <a href="{{ route('auth.create') }}" class="block bg-blue-500 px-6 py-2 mr-2 rounded text-white">Add</a>
        </div>
        <div class="grow">
            <input type="text" class="w-full border border-blue-950 rounded px-2 py-2" placeholder="Search">
        </div>
    </div>

        <div class="mt-8 ">
            @foreach ($users as $user)
                <x-card  :name="$user->name" :email="$user->email" :address="$user->address" :phone="$user->phone" />
            @endforeach
        </div>
    </div>
@endsection
