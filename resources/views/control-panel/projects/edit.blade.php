@extends('control-panel.layout.master')

@section('styles')

@endsection

@section('title')
    Projects
@endsection

@section('sub-title')
    test sub title
@endsection

@section('sub-title')

@endsection

@section('projects')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">General Content</h3>
                </div>
                <div class="box-body">
                    {!! Form::model($project, ['route'=> ['control-panel.projects.update', $project->id], 'method'=>'patch', 'files'=>'true']) !!}

                    @include('control-panel.projects._partials.form')

                    <div class="form-group">
                        <div class="btn-group">
                            <button class="btn btn-primary">Update</button>
                            <a class="btn btn-warning" href="{!! route('control-panel.projects.index') !!}">Cancel</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List</h3>
                </div>
                <div class="box-body">
                    @include('control-panel.projects._partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection



