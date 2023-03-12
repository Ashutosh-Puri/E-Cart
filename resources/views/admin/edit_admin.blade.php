@extends('admin.layout')
@section('admin_content')

    <div class="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card  bg-custom">
                <div class="card-header fw-bold text-white">
                    Edit Admin / User
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('admin.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('admin.update',$admin->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $admin->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $admin->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        


                        <div class="row mb-3">
                            <label for="role" class="col-md-4 text-white col-form-label text-md-end">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="checkbox" class="form-checkbox" name="role" {{ $admin->role=='1'?'checked':''; }}>
                                <label for="role" class="col-md-4 text-white  mx-2">{{ __('Make Admin') }}</label>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-custom">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
