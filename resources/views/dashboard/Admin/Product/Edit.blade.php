@extends('layouts.dashboard.header')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>Update Product</h1>
      <form action="{{ route('Product.Update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" id="image" name="image[]" multiple>
          @if ($product->images)
            <div class="mt-3">
              <p>Existing Images</p>
              @foreach ($product->images as $image)
                <img src="{{ asset($image->path) }}" alt="{{ $image->name }}" class="img-thumbnail">
              @endforeach
            </div>
          @endif
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" rows="5">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" id="category" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="subcategory">Subcategory</label>
          <select class="form-control" id="subcategory" name="subcategory_id">
            @foreach ($subcategories as $subcategory)
              <option value="{{ $subcategory->id }}" @if ($subcategory->id == $product->subcategory_id) selected @endif>{{ $subcategory->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="options">Options</label>
          <input type="text" class="form-control" id="options" name="options" value="{{ $product->options }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
@endsection