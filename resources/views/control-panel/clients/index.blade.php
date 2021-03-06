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
    Clients
@endsection

@section('sub-title')

@endsection

@section('sub-title')

@endsection

@section('clients')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Client</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['route'=> ['control-panel.clients.store'], 'files'=>'true']) !!}

                    @include('control-panel.clients._partials.form')

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
                    <h3 class="box-title">Client List</h3>
                </div>
                <div class="box-body">
                    @include('control-panel.clients._partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="../../../../public/control-panel/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="../../../../public/control-panel/plugins/datatables/jquery.dataTables.js"></script>
@endsection



