@extends('layouts.dashboard.header')

@section('content')
<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                <i class="fa fa-dashboard"></i> Dashboard / Edit Category
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-10"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    <i class="fa fa-tags fa-fw"></i> Edit Category
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <form method="POST" action="{{ route('Category.Update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group"><!-- form-group begin -->
                        <label for="title">Category Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}" required>
                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                        <label for="image">Category Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                        <label for="description">Category Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5" required>{{ $category->description }}</textarea>
                    </div><!-- form-group finish -->

                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div><!-- panel-body finish -->
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
@endsection