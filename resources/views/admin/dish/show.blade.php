@extends('admin.layouts.main')

@section('template_title')
    {{ $dish->name ?? "{{ __('Show') Dish" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Dish</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dishes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $dish->title }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $dish->price }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $dish->content }}
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $dish->category }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection