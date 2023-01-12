@extends('layout.master') @section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ url('/') }}" class="btn btn-sm btn-info">All Product</a>
    </div>
    <div class="card-body">
        <h2>Create Product</h2>
        <form
            action="{{ route('product.store') }}"
            method="post"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="form-group">
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    id=""
                    placeholder="Enter name"
                />
            </div>

            <div class="form-group">
                <input
                    type="text"
                    name="price"
                    class="form-control"
                    id=""
                    placeholder="Enter price"
                />
            </div>

            <div class="form-group">
                <input type="file" name="image" class="form-control" id="" />
            </div>

            <input
                type="submit"
                value="Create"
                class="btn btn-sm btn-outline-success"
            />
        </form>
    </div>

    @endsection
</div>
