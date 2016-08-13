@extends('control-panel.layout.master')

@section('styles')

@endsection

@section('title')
    News
@endsection

@section('sub-title')
    Edit
@endsection

@section('news')
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
                    {!! Form::model($newsItem, ['route'=> ['control-panel.news.update', $newsItem->id], 'method'=>'patch', 'files'=>'true']) !!}

                    @include('control-panel.news._partials.form')

                    <div class="form-group">
                        <div class="btn-group">
                            <button class="btn btn-primary">Update</button>
                            <a class="btn btn-warning" href="{!! route('control-panel.news.index') !!}">Cancel</a>
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
                    @include('control-panel.news._partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection



