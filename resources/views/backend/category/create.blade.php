@extends('backend.master')

@section('title','Add-Category')

@section('content')
<div class="container-fluid px-4">
    <div class="row mt-5">
        <div class="col-12 col-sm-8 offset-sm-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Add Category</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-sm btn-success">Add Category</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection