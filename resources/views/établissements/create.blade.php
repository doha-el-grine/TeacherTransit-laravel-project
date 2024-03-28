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
                     <h2>Create New Établissement</h2>
                     <form method="POST" action="{{ route('établissements.store') }}">
                         @csrf
                         <div class="form-group">
                             <label for="établissement">Établissement Name</label>
                             <input type="text" class="form-control" id="établissement" name="établissement" value="{{ old('établissement') }}" required>
                             @error('établissement')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label for="code">Code</label>
                             <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}" required>
                             @error('code')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label for="adresse">Address</label>
                             <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse') }}" required>
                             @error('adresse')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label for="phone_number">Phone Number</label>
                             <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                             @error('phone_number')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label for="fax_number">Fax Number</label>
                             <input type="text" class="form-control" id="fax_number" name="fax_number" value="{{ old('fax_number') }}" required>
                             @error('fax_number')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label for="ville_id">Select a Ville</label>
                             <select class="form-control" id="ville_id" name="ville_id" required>
                                 @foreach($villes as $ville)
                                     <option value="{{ $ville->id }}">{{ $ville->ville_original }}</option>
                                 @endforeach
                             </select>
                             @error('ville_id')
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
