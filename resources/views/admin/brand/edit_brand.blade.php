@extends('admin.layout')
@section('admin_content')

    <div class="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    Edit Brand
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('brand.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('brand.update',$brand->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-12 col-md-1 form-label my-3 ">{{ __(' Category') }}</label>
                            <div class="col-12 col-md-5  ">
                                <select class="form-control text-center @error('category_id') is-invalid @enderror" name="category_id" autocomplete="category_id" autofocus>
                                        <option hidden>-- Select Category --</option>
                                    @foreach ($categories as $c)
                                        <option class="text-start "  {{ ($brand->category_id==$c->id)?'selected':''; }} value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-12 col-md-1 form-label ">{{ __('Name') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ $brand->name }}"  autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="slug" class="col-12 col-md-1 form-label ">{{ __('Slug') }}</label>
                            <div class="col-12 col-md-5 ">
                                
                                <input id="slug" type="text" placeholder=" Space And Special Charater Not Allowed" class="form-control  @error('slug') is-invalid @enderror" name="slug" value="{{ $brand->slug }}"  autocomplete="slug" autofocus>
                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="status" class="form-label mx-3 text-md-end">{{ __('Status') }}</label>
                                <input id="status" type="checkbox" class="form-check-inline mx-3 @error('status') is-invalid @enderror" name="status" {{ $brand->status==1? 'checked':'' ;}}  autocomplete="status">
                                <label for="status" class="form-label mx-3 text-md-end">{{ __('In Active') }}</label>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-12 text-center ">
                                <button type="submit" class="btn btn-custom fw-bold">
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
