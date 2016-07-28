@extends('control-panel.layout.master')

@section('styles')

@endsection

@section('title')
    Slider Images
@endsection

@section('sub-title')
@endsection

@section('sub-title')

@endsection

@section('slider-images')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Slider Images</h3>
                </div>
                <div class="box-body">
                    {!! Form::model($sliderImage, ['route'=> ['control-panel.slider-images.update', $sliderImage->id], 'method'=>'patch', 'files'=>'true']) !!}

                    @include('control-panel.slider-images._partials.form')

                    <div class="form-group">
                        <div class="btn-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a class="btn btn-warning" href="{!! route('control-panel.slider-images.index') !!}">Cancel</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Slider Image List</h3>
                </div>
                <div class="box-body">
                    @include('control-panel.slider-images._partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection



