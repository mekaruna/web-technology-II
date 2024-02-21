@extends('admin.layouts.main')

@section('template_title')
    {{ $testimonial->name ?? "{{ __('Show') Testimonial" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Testimonial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('testimonials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $testimonial->title }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $testimonial->price }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $testimonial->content }}
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $testimonial->category }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection