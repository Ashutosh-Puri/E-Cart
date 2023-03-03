@extends('admin.layout')
@section('admin_content')

    <div status="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    Create Category
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('category.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('category.store') }}">
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
                            <label for="slug" class="col-12 col-md-1 form-label ">{{ __('Slug') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="slug" type="text" placeholder=" Space And Special Charater Not Allowed" class="form-control  @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}"  autocomplete="slug" autofocus>
                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-12 col-md-1 form-label ">{{ __('Description') }}</label>
                            <div class="col-12 col-md-5 ">
                                <textarea id="description"  class="form-control  @error('description') is-invalid @enderror" name="description"    autocomplete="description" autofocus cols="30" rows="1">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="meta_description" class="col-12 col-md-1 form-label ">{{ __('Meta Description') }}</label>
                            <div class="col-12 col-md-5 ">
                                <textarea id="meta_description"  class="form-control  @error('meta_description') is-invalid @enderror" name="meta_description"  autocomplete="meta_description" autofocus cols="30" rows="1">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="meta_title" class="col-12 col-md-1 form-label ">{{ __('Meta Title') }}</label>
                            <div class="col-12 col-md-5 ">                           
                                <input id="meta_title" type="text" class="form-control  @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ old('meta_title') }}"  autocomplete="meta_title" autofocus>
                                @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="meta_keyword" class="col-12 col-md-1 form-label ">{{ __('Meta Keyword') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="meta_keyword" type="text" class="form-control  @error('meta_keyword') is-invalid @enderror" name="meta_keyword" value="{{ old('meta_keyword') }}"  autocomplete="meta_keyword" autofocus>
                                @error('meta_keyword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="icon" class="col-12 col-md-1 form-label ">{{ __('Icon') }}</label>
                            <div class="col-12 col-md-5 ">
                                <input id="icon" type="text" placeholder=" Icon Class" class="form-control  @error('icon') is-invalid @enderror" name="icon" value="{{ old('icon') }}"  autocomplete="icon" autofocus>
                                @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 py-3">
                                <label for="status" class="form-label   ">{{ __('Status') }}</label>
                                <input id="status" type="checkbox" class="form-check-inline mx-5 @error('status') is-invalid @enderror" name="status" {{ old('status')==true? 'checked':'' ;}}  autocomplete="status">
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
