

<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create New Ville') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('villes.store') }}">
                            @csrf
                            <div class="form-group">
                              <label for="ville_original">{{ __('Ville Original Name') }}</label>
                              <input id="ville_original" type="text" class="form-control @error('ville_original') is-invalid @enderror" name="ville_original" value="{{ old('ville_original') }}" required autocomplete="ville_original" autofocus>
                              @error('ville_original')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                            <div class="form-group">
                              <label for="ville_migration">{{ __('ville_migration Name') }}</label>
                              <input id="ville_migration" type="text" class="form-control @error('ville_migration') is-invalid @enderror" name="ville_migration" value="{{ old('ville_migration') }}" required autocomplete="ville_migration" autofocus>
                              @error('ville_migration')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                            <div class="form-group">
                                <label for="region_id">{{ __('Region') }}</label>
                                <select id="region_id" class="form-control @error('region_id') is-invalid @enderror" name="region_id" required>
                                    <option value="">Select Region</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->region }}</option>
                                    @endforeach
                                </select>
                                @error('region_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('Create Ville') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
