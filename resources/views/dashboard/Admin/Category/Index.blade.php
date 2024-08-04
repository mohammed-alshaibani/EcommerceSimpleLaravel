@extends('layouts.dashboard.header')

@section('content')
<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                <i class="fa fa-dashboard"></i> Dashboard / View Categories
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-10"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    <i class="fa fa-tags fa-fw"></i> View Categories
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Category Title </th>
                                <th> Image </th>
                                <th> Category Description </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->

                        <tbody><!-- tbody begin -->
                            @foreach($categories as $category)
                            <tr><!-- tr begin -->
                                <td>{{ $category->title }}</td>
                                <td><img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->title }}" width="100"></td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <a href="{{ route('Category.Edit', $category->id) }}">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('Category.Destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr><!-- tr finish -->
                            @endforeach
                        </tbody><!-- tbody finish -->
                    </table><!-- table table-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
@endsection