@extends('layout.master') @section('content')
<div class="card-header">
    <h2>Laravel-CRUD</h2>
</div>
<div class="card-body">
    <a href="{{ route('product.create') }}" class="btn btn-sm btn-success mb-3"
        >Create Product</a
    >
    <table class="table table-striped rounded">
        
                    <tr class="bg-dark text-white">
            
                <th>Product</th>
                <th>Image</th>
                <th>Price</th>
                <th>Option</th>
            
        </tr>
        
    

        @foreach($product as $p)
            
                        <tr>
        
                <td>{{ $p->name }}</td>
                <td>
                    <img src="{{ $p->image }}" style="width: 60px" />
                </td>
                <td>{{ $p->price }}</td>
                <td>
                    <a
                        href="{{ route('product.edit',$p->id) }}"
                        class="badge badge-warning"
                        >Update</a
                    >&nbsp;
                    <form
                        action="{{ route('product.destroy',$p->id) }}"
                        method="post" class="d-inline"

                    >
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Do you want to delete it?')"
                            class="badge badge-danger"
                            >Delete</a
                        >
                    </form>
                </td>
            
        </tr>
            
    
        @endforeach
    </table>
</div>
<div class="ml-2">
{{ $product->links() }}

</div>

@endsection
