@extends('admin.layouts.main')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dish Content
                </div>
                <div class="card-body">
                    <form name="add-dish-form" id="add-dish-form" method="post" action="{{route('dishes.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" id="title" name="title" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <input type="text" id="category" name="category" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Content</label>
                            <textarea name="content" class="form-control" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" id="price" name="price" class="form-control" required="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /.content -->


@endsection