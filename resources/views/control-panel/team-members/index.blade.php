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
    Slider Images
@endsection

@section('sub-title')
@endsection

@section('sub-title')

@endsection

@section('team-members')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Slider Images</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['route'=> ['control-panel.team-members.store'], 'files'=>'true']) !!}

                    @include('control-panel.team-members._partials.form')

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
                    <h3 class="box-title">Slider Image list</h3>
                </div>
                <div class="box-body">
                    @include('control-panel.team-members._partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="../../../../public/control-panel/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="../../../../public/control-panel/plugins/datatables/jquery.dataTables.js"></script>
@endsection



