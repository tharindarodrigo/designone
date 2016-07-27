@extends('control-panel.layout.master')

@section('styles')

@endsection

@section('title')
    General Content
@endsection

@section('sub-title')

@endsection

@section('sub-title')

@endsection

@section('general-content')
    active
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">General Content</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($generalContent,['route'=>['control-panel.general-contents.update', $generalContent->id], 'method' => 'patch','files'=>'true']) !!}

                @include('control-panel.general-content._partials.form')
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.box -->

        </div>
    </div>

@endsection

@section('scripts')

@endsection



