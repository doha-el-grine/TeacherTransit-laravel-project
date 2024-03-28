<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                hello  <b> {{ auth()->user()->name }}</b> welcom here how we can assist you today ?
                </div>
            </div>
            <br>
            <a href="{{ route('regions.create') }}" class="btn btn-danger">If you want to postule click here</a>

        </div>
    </div>
</x-app-layout>
