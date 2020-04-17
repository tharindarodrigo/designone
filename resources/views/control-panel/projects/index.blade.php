@extends('control-panel.layout.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css') }}">

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
    Projects
@endsection

@section('sub-title')
    Edit
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
                    <h3 class="box-title">Create Project</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['route'=> ['control-panel.projects.store'], 'files'=>'true']) !!}

                    @include('control-panel.projects._partials.form')

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
                    <h3 class="box-title">Projects List</h3>
                </div>
                <div class="box-body">
                    @include('control-panel.projects._partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@push('scripts')--}}
{{--    <script type="text/javascript" src="{{ asset('//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js') }}"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        $(document).ready( function () {--}}
{{--            $('#projects_table').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}
{{--@push--}}



