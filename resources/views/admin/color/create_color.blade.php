@extends('admin.layout')
@section('admin_content')

    <div status="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    Create Color
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('color.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('color.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-12 col-md-1 form-label ">{{ __('Name') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="code" class="col-12 col-md-1 form-label ">{{ __('Code') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="code" type="text" class="form-control  @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}"  autocomplete="code" autofocus>
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6 py-3">
                                <label for="status" class="form-label   ">{{ __('Status') }}</label>
                                <input type="checkbox" name="status" id="status"class="form-check-inline mx-5 @error('status') is-invalid @enderror" {{ old('status')==true ? 'checked':'' ;}}  autocomplete="status">
                                <label for="status" class="form-label  ">{{ __('In Active') }}</label>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-12 text-center ">
                                <button type="submit" class="btn btn-custom fw-bold">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
