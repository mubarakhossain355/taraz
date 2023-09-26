@extends('backend.master')

@section('title','Edit-Category')

@section('content')
<div class="container-fluid px-4">
    <div class="row mt-5">
        <div class="col-12 col-sm-8 offset-sm-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Edit Category</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{route('categories.update',$category->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type="text" value="{{$category->name}}" class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-sm btn-success">Update Category</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection