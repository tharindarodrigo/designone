@extends('control-panel.layout.master')

@section('styles')

@endsection

@section('title')
    Project Types
@endsection

@section('sub-title')
    Edit
@endsection

@section('project-types')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Project</h3>
                </div>
                <div class="box-body">
                    {!! Form::model($projectType, ['route'=> ['control-panel.project-types.update', $projectType->id], 'method'=>'patch', 'files'=>'true']) !!}

                    @include('control-panel.project-types._partials.form')

                    <div class="form-group">
                        <div class="btn-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a class="btn btn-warning" href="{!! route('control-panel.project-types.index') !!}">Cancel</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Project Type List</h3>
                </div>
                <div class="box-body">
                    @include('control-panel.project-types._partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection



