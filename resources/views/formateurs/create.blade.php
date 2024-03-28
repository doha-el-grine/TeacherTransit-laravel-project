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
                     <h2>Create Formateur</h2>
                     <form action="{{ route('formateurs.store') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                             <label for="matricule">Matricule:</label>
                             <input type="text" class="form-control" id="matricule" name="matricule" required>
                         </div>
             
                         <div class="form-group">
                             <label for="nom">Nom:</label>
                             <input type="text" class="form-control" id="nom" name="nom" required>
                         </div>
             
                         <div class="form-group">
                             <label for="prenom">Prénom:</label>
                             <input type="text" class="form-control" id="prenom" name="prenom" required>
                         </div>
             
                         <div class="form-group">
                             <label for="photo">Photo:</label>
                             <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                         </div>
             
                         <div class="form-group">
                             <label for="grade">Grade:</label>
                             <input type="text" class="form-control" id="grade" name="grade" required>
                         </div>
             
                         <div class="form-group">
                             <label for="date_naissance">Date de Naissance:</label>
                             <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                         </div>
             
                         <div class="form-group">
                             <label for="date_recrutement">Date de Recrutement:</label>
                             <input type="date" class="form-control" id="date_recrutement" name="date_recrutement" required>
                         </div>
             
                         <div class="form-group">
                             <label for="poste">Poste:</label>
                             <input type="text" class="form-control" id="poste" name="poste" required>
                         </div>
             
                         <div class="form-group">
                             <label for="phone_number">Numéro de Téléphone:</label>
                             <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                         </div>
             
                         <div class="form-group">
                             <label for="email">Email:</label>
                             <input type="email" class="form-control" id="email" name="email" required>
                         </div>
             
                         <div class="form-group">
                             <label for="établissement_id">Établissement:</label>
                             <select class="form-control" id="établissement_id" name="établissement_id" required>
                                 @foreach($établissements as $établissement)
                                     <option value="{{ $établissement->id }}">{{ $établissement->établissement }}</option>
                                 @endforeach
                             </select>
                         </div>
             
                         <div class="form-group">
                             <label for="metier_id">Métier:</label>
                             <select class="form-control" id="metier_id" name="metier_id" required>
                                 @foreach($metiers as $metier)
                                     <option value="{{ $metier->id }}">{{ $metier->metier }}</option>
                                 @endforeach
                             </select>
                         </div>
             
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                 </div>
               </div>
           </div>
       </div>
   </div>
</x-app-layout>
