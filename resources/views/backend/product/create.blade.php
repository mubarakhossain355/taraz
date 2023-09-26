@extends('backend.master')

@section('title','Add-Product')

@section('content')
<div class="container-fluid px-4">
    <div class="row mt-5">
        <div class="col-12 col-sm-8 offset-sm-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Add Product</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label  class="form-label">Category</label>
                                <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                                    <option selected>Open this select menu</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                
                                  </select>
                                  @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Price</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" id="" cols="30" rows="3"></textarea>
                                    @error('desc')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Image</label>
                                <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" name="image">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-sm btn-success">Add Product</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection