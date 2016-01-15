@extends('adminBase')

@section('admin')

    <form class="col-md-4 col-md-push-4" action="{{ action('CmsProductsController@update', $product->product_id) }}" method="POST">
        {{ csrf_field() }}
        <h1 class="text-center">Edit Product</h1>

        <input type="hidden" name="_method" value="put">

        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{ $product->name }}">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
        </div>
        
        <div class="form-group">
            <label for="img">Image</label>
            <input type="text" class="form-control" name="img" value="{{ $product->img }}">
            </br>
            <img src="{{ $product->img }}" alt="" width="50px" height="50px">
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" value="{{ $product->description }}">
        </div>
        
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text" class="form-control" name="stock" value="{{ $product->stock }}">
        </div>

        <div class="form-group">
            <label for="is_sale">On sale</label>
            <select name="is_sale" class="form-control">
                @if($product->is_sale == 0)
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                @else
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                @endif
            </select>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" name="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ $category->category_id === $product->category_id ? "selected" : "" }}>{{old('input') ? old('input') : $category->category}}</option>
                @endforeach
            </select>
        </div>

        <input class="btn btn-warning" type="submit" value="Edit">

    </form>




@stop