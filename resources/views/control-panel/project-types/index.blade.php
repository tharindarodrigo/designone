@extends('control-panel.layout.master')

@section('styles')
    <style src="../../../../public/plugins/datatables/dataTables.bootstrap.css"></style>

    <style src="../../../../public/plugins/datatables/jquery.dataTables.css"></style>

    <style type="text/css">
        th {
            text-align: center;
        }
        td {
            text-align: center;
            vertical-align: bottom;
        }
    </style>
@endsection

@section('title')
    Project Types
@endsection

@section('sub-title')

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
                    <h3 class="box-title">Create Project Type</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['route'=> ['control-panel.project-types.store']]) !!}

                    @include('control-panel.project-types._partials.form')

                    <div class="form-group">
                        <div class="btn-group">
                            <button class="btn btn-primary" type="submit">Save</button>
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
    <script src="../../../../public/control-panel/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="../../../../public/control-panel/plugins/datatables/jquery.dataTables.js"></script>
@endsection



