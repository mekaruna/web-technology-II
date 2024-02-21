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
                    Testimonial Content
                </div>
                <div class="card-body">
                    <form name="add-testimonial-form" id="add-testimonial-form" method="post" action="{{route('testimonials.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Photo</label>
                            <input type="text" id="photo" name="photo" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Designation</label>
                            <input type="text" id="designation" name="designation" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rating</label>
                            <input type="text" id="rating" name="rating" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Content</label>
                            <textarea name="content" class="form-control" required=""></textarea>
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