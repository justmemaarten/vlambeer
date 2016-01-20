@extends('adminBase')

@section('admin')

    <form class="col-md-4 col-md-push-4" action="{{ action('CmsProductsController@store') }}" method="POST">
        {{ csrf_field() }}
        <h1 class="text-center">Add Product</h1>

        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" name="name" type="text">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="img">Image</label>
            <input type="text" name="img" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text" name="stock" class="form-control">
        </div>

        <div class="form-group">
            <label for="is_sale">On sale</label>
            <select name="is_sale" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" name="category" class="form-control">
                <option value=""></option>
                @foreach($categories as $category)
                    <option value="{{$category->category_id}}">{{$category->category}}</option>
                @endforeach
            </select>
        </div>

        <input class="btn btn-success" type="submit" value="Add">



    </form>




@stop