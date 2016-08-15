@extends('control-panel.layout.master')

@section('styles')

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
                    <h3 class="box-title">Edit Client</h3>
                </div>
                <div class="box-body">
                    {!! Form::model($client, ['route'=> ['control-panel.clients.update', $project->id], 'method'=>'patch', 'files'=>'true']) !!}

                    @include('control-panel.clients._partials.form')

                    <div class="form-group">
                        <div class="btn-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a class="btn btn-warning" href="{!! route('control-panel.clients.index') !!}">Cancel</a>
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

@endsection



