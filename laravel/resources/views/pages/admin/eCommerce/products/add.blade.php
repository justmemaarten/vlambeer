@extends('adminBase')

@section('admin')

    <form class="col-md-4 col-md-push-4" action="{{ action('CmsProductsController@store') }}" method="POST">
        {{ csrf_field() }}
        <h1 class="text-center">Add Product</h1>

        <input type="hidden" name="_method" value="put">
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
                <option value=""></option>
                @foreach($categories as $category)
                    <option value="{{ $category->category_id }}">{{old('input') ? old('input') : $category->category}}</option>
                @endforeach
            </select>
        </div>

        <input class="btn btn-success" type="submit" value="Add">



    </form>




@stop