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
                  <div class="container">
                     <h2>Create New Metier</h2>
                     <form method="POST" action="{{ route('metiers.store') }}">
                         @csrf
                         <div class="form-group">
                             <label for="metier">Metier Name</label>
                             <input type="text" class="form-control" id="metier" name="metier" value="{{ old('metier') }}" required>
                             @error('metier')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                 </div>
               </div>
           </div>
       </div>
   </div>
</x-app-layout>
