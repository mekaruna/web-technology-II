@extends('admin.layouts.main')

@section('template_name')
    {{ $chef->name ?? "{{ __('Show') Chef" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-name">{{ __('Show') }} Chef</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('chefs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $chef->name }}
                        </div>
                        <div class="form-group">
                            <strong>Designation:</strong>
                            {{ $chef->designation }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection