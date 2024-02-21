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
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1>Manage Events</h1>
                <div class="float-right">
                    <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">Create New</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>price</td>
                    <td>Photo</td>
                    <td>Content</td>
                    <td>-</td>
                </tr>
                <?php foreach ($items as $item) { ?>

                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->title ?></td>
                        <td><?= $item->price ?></td>
                        <td><?= $item->photo ?></td>
                        <td><?= $item->content ?></td>
                        <td>
                            <form action="{{ route('events.destroy',$item->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary" href="{{ route('events.show',$item->id) }}">Show</a>
                                <a class="btn btn-sm btn-success" href="{{ route('events.edit',$item->id) }}">Update</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</section>
<!-- /.content -->




@endsection