@extends('admin.layouts.main')

@section('template_title')
    {{ $banner->name ?? "{{ __('Show') Banner" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Banner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('banners.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $banner->title }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $banner->content }}
                        </div>
                        <div class="form-group">
                            <strong>Photo:</strong>
                            {{ $banner->photo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection