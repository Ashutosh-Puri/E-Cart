@extends('admin.layout')
@section('admin_content')

    <div status="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    Create Product
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('product.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row ">
                            <label for="category_id" class="my-1 col-12 col-md-1 form-label ">{{ __('Category') }}</label>
                            <div class="col-12 col-md-5 my-1 ">
                                <div class="form-group ">
                                    <select class="form-control text-center @error('category_id') is-invalid @enderror" name="category_id" autocomplete="category_id" autofocus>
                                        <option hidden>-- Select Category --</option>
                                        @foreach ($categories as $c)
                                            <option class="text-start "  {{ (old('category_id')==$c->id)?'selected':''; }}
                                                value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <label for="brand_id" class="col-12 col-md-1 my-1 form-label ">{{ __('Brand') }}</label>
                            <div class="col-12 col-md-5 my-1 ">
                                <div class="form-group ">
                                    <select class="form-control text-center @error('brand_id') is-invalid @enderror" name="brand_id" autocomplete="brand_id" autofocus>
                                        <option hidden>-- Select Brand --</option>
                                        @foreach ($brands as $c)
                                            <option class="text-start "  {{ (old('brand_id')==$c->id)?'selected':''; }}
                                                value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-12 col-md-1  my-1 form-label ">{{ __('Name') }}</label>
                            <div class="col-12 col-md-5 my-1 ">
                                
                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="slug" class="col-12 col-md-1  my-1 form-label ">{{ __('Slug') }}</label>
                            <div class="col-12 col-md-5 my-1 ">
                                
                                <input id="slug" type="text" placeholder=" Space And Special Charater Not Allowed" class="form-control  @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}"  autocomplete="slug" autofocus>
                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row ">
                            <label for="small_description" class=" my-1 col-12 col-md-1 form-label ">{{ __('Small Description') }}</label>
                            <div class="col-12 col-md-5 my-1">
                                <textarea id="small_description"  class="form-control  @error('small_description') is-invalid @enderror" name="small_description"  autocomplete="small_description" autofocus cols="30" rows="1">{{ old('small_description') }}</textarea>
                                @error('small_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="description" class="col-12 col-md-1 my-1 form-label ">{{ __('Description') }}</label>
                            <div class="col-12 col-md-5 my-1">
                                <textarea id="description"  class="form-control  @error('description') is-invalid @enderror" name="description"    autocomplete="description" autofocus cols="30" rows="1">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="row ">
                            <label for="orignal_price" class="col-12 my-1 col-md-1 form-label ">{{ __('Orignal Price') }}</label>
                            <div class="col-12 col-md-5 my-1 ">                           
                                <input id="orignal_price" type="text" class="form-control  @error('orignal_price') is-invalid @enderror" name="orignal_price" value="{{ old('orignal_price') }}"  autocomplete="orignal_price" autofocus>
                                @error('orignal_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="selling_price" class="col-12 col-md-1 my-1 form-label ">{{ __('Selling Price') }}</label>
                            <div class="col-12 col-md-5 my-1">
                                
                                <input id="selling_price" type="text" class="form-control  @error('selling_price') is-invalid @enderror" name="selling_price" value="{{ old('selling_price') }}"  autocomplete="selling_price" autofocus>
                                @error('selling_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                            
                        </div>
                        <div class="row ">
                            <label for="quantity" class="col-12 col-md-1 my-1 form-label ">{{ __('Quantity') }}</label>
                            <div class="col-12 col-md-5 my-1">
                                
                                <input id="quantity"  type="text" class="form-control  @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}"  autocomplete="quantity" autofocus>
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                            <label for="meta_title" class="col-12 col-md-1 my-1 form-label ">{{ __('Meta Title') }}</label>
                            <div class="col-12 col-md-5 my-1 ">                           
                                <input id="meta_title" type="text" class="form-control  @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ old('meta_title') }}"  autocomplete="meta_title" autofocus>
                                @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     
                        <div class="row ">
                            
                            <label for="meta_keyword" class="col-12 col-md-1 my-1 form-label ">{{ __('Meta Keyword') }}</label>
                            <div class="col-12 col-md-5 my-1">
                                
                                <input id="meta_keyword" type="text" class="form-control  @error('meta_keyword') is-invalid @enderror" name="meta_keyword" value="{{ old('meta_keyword') }}"  autocomplete="meta_keyword" autofocus>
                                @error('meta_keyword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="meta_description" class="col-12 col-md-1 my-1 form-label ">{{ __('Meta Description') }}</label>
                            <div class="col-12 col-md-5 my-1">                           
                                <textarea id="meta_description"  class="form-control  @error('meta_description') is-invalid @enderror" name="meta_description"    autocomplete="meta_description" autofocus cols="30" rows="1">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 my-1">
                                <label for="trending" class="form-label   ">{{ __('Trending') }}</label>
                                <input id="trending" type="checkbox" class="form-check-inline mx-5 @error('trending') is-invalid @enderror" name="trending" {{ old('trending')==true? 'checked':'' ;}}  autocomplete="trending">
                                <label for="trending" class="form-label  ">{{ __('Not Trending') }}</label>
                            </div>
                            <div class="col-md-6 my-1">
                                <label for="status" class="form-label   ">{{ __('Status') }}</label>
                                <input id="status" type="checkbox" class="form-check-inline mx-5 @error('status') is-invalid @enderror" name="status" {{ old('status')==true? 'checked':'' ;}}  autocomplete="status">
                                <label for="status" class="form-label  ">{{ __('In Active') }}</label>
                            </div>
                        </div>
                        <div class="row">                
                            <label for="cover" class="col-12 col-md-1 my-1 form-label ">{{ __('Cover Image') }}</label>              
                            <div class="col-12 col-md-5 my-1">                           
                                <input id="cover" type="file" class="form-control  @error('cover') is-invalid @enderror" name="cover" value="{{ old('cover') }}"  autocomplete="cover" autofocus>
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>         
                            
                            <label for="image" class="col-12 col-md-1 my-1 form-label ">{{ __('Images') }}</label>              
                            <div class="col-12 col-md-5 my-1">                           
                                <input id="image" type="file" multiple class="form-control  @error('image') is-invalid @enderror" name="image[]" value="{{ old('image') }}"  autocomplete="image" autofocus>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row ">
                            
                            <label for="color" class="col-12 col-md-1 my-1 form-label ">{{ __('Select Color') }}</label>
                            <div class="col-12 col-md-11 my-1">
                                @forelse ($colors as $col)
                                    <div class="p-2 border d-inline-block" style="width:100px;">
                                        Color:<br>
                                        <input id="color" class="mx-1" type="checkbox"  value="{{ $col->id }}" class="form-checkbox " name="colors[{{ $col->id }}]" {{ old('color[]')==true?'checked':''; }}  autocomplete="color" autofocus>{{ $col->name }}
                                       
                                        Quantity:<br>
                                        <input type="number" class="" name="color_quantity[{{ $col->id }}]" style="width:70px;">
                                        
                                    </div>
                                    
                                @empty
                                    No Color Found
                                @endforelse
                            </div>
                            
                        </div>
                        
                        <div class="row my-1">
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
