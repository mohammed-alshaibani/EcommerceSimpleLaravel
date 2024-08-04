@extends('layouts.dashboard.header')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>Create Product</h1>
      <form action="{{ route('Product.Store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" id="image" name="image[]" multiple>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" id="price" name="price" placeholder="Enter product price">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" id="category" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="subcategory">Subcategory</label>
          <select class="form-control" id="subcategory" name="subcategory_id">
            @foreach ($subcategories as $subcategory)
              <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="options">Options</label>
          <input type="text" class="form-control" id="options" name="options" placeholder="Enter product options">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
  </div>
</div>
@endsection
