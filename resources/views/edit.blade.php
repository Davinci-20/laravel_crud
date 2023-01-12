@extends('layout.master') @section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ url('/') }}" class="btn btn-sm btn-info">All Product</a>
    </div>
    <div class="card-body">
        <h2>Edit Product</h2>
        <form
            action="{{ route('product.update',$product->id) }}"
            method="post"
            enctype="multipart/form-data"
        >
            @csrf @method('PUT')
            <div class="form-group">
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    id=""
                    value="{{ $product->name }}"
                    placeholder="Enter name"
                />
            </div>

            <div class="form-group">
                <input
                    type="text"
                    name="price"
                    class="form-control"
                    id=""
                    value="{{ $product->price }}"
                    placeholder="Enter price"
                />
            </div>

            <div class="form-group">
                <input type="file" name="image" class="form-control" id="" />
                <img
                    src="{{ asset($product->image) }}"
                    style="width: 50%"
                    alt=""
                    srcset=""
                />
            </div>

            <input
                type="submit"
                value="Update"
                class="btn btn-sm btn-outline-success"
            />
        </form>
    </div>

    @endsection
</div>
