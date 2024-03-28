

<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>
   <br>
   <br>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Region') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('regions.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="region">{{ __('Region Name') }}</label>
                            <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{ old('region') }}" required autocomplete="region" autofocus>
                            @error('region')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Next
                            </button>
                        </div>
                        
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
