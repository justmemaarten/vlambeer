@extends('adminBase')

@section('admin')

    <form class="col-md-4 col-md-push-4" action="">
        <h1 class="text-center">Edit Product</h1>


        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text">
        </div>

        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="">Image</label>
            <input type="text" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="">Stock</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ $category->category_id === $product->category_id ? "selected" : "" }}>{{old('input') ? old('input') : $category->category}}</option>
                @endforeach
            </select>
        </div>

        <input class="btn btn-warning" type="submit" value="Edit">



    </form>




@stop