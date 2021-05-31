@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
                    <a href="{{route('products.index')}}" class="btn btn-secondary">Back</a>
                    <h2>Edit Product</h2><br><br>
                </div>
            </div>
                <form method="POST" action="{{ route('products.update', $product->id) }}">
                    @method('PATCH')
                    @csrf

                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>
                                <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" @error('name') is-invalid @enderror"  placeholder="Product Name" name="name" value="{{ $product->name }}" required  autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>
                                <div class="col-md-6">
                            <input id="brand" type="text" class="form-control" category="brand" @error('category') is-invalid @enderror"  placeholder="Brand" name="brand" value="{{ $product->brand }}" required  autofocus>
                                @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                                <div class="col-md-6">
                            <input id="category" type="text" class="form-control" category="category" @error('category') is-invalid @enderror"  placeholder="Category" name="category" value="{{ $product->category }}" required  autofocus>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description }}" required  autofocus>{{ $product->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                                <div class="col-md-6">
                            <input id="price" type="text" class="form-control" category="price" @error('price') is-invalid @enderror"  placeholder="Price" name="price" value="{{ $product->price }}" required  autofocus>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="countInStock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>
                                <div class="col-md-6">
                            <input id="countInStock" type="text" class="form-control" category="countInStock" @error('countInStock') is-invalid @enderror"  placeholder="Stock" name="countInStock" value="{{ $product->countInStock }}" required  autofocus>
                                @error('countInStock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary float-right">
                                    {{ __('Update Product') }}
                                </button>
                            </div>
                        </div>
                </form>
        </div>
    </div>
</div>

@endsection  

