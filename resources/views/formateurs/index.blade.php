<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Formateurs</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach($formateurs as $formateur)
                            <div class="p-4 border rounded-lg">
                                <img src="{{ asset($formateur->photo) }}" class="w-full h-48 object-cover mb-4" alt="{{ $formateur->nom }}">
                                <h3 class="font-semibold text-lg">{{ $formateur->nom }} {{ $formateur->prenom }}</h3>
                                <p class="text-gray-600">{{ $formateur->grade }}</p>
                                <p class="text-gray-600">{{ $formateur->date_naissance }}</p>
                                <p class="text-gray-600">{{ $formateur->date_recrutement }}</p>
                                <p class="text-gray-600">{{ $formateur->poste }}</p>
                                <p class="text-gray-600">{{ $formateur->phone_number }}</p>
                                <p class="text-gray-600">{{ $formateur->email }}</p>
                                <p class="text-gray-600">{{ $formateur->établissement->établissement }}</p>
                                <p class="text-gray-600">{{ $formateur->metier->metier }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
