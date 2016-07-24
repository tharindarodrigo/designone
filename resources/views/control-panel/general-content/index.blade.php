@extends('control-panel.layout.master')

@section('styles')

@endsection

@section('title')
    Test
@endsection

@section('sub-title')
    test sub title
@endsection

@section('sub-title')

@endsection

@section('test')
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
                        {!! Form::open(['route'=>['control-panel.general.store'],'files'=>'true']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone 1</label>
                                {!! Form::text('phone1', null, [ 'class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone 2</label>
                                {!! Form::text('phone2', null, [ 'class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Fax</label>
                                {!! Form::text('fax', null, [ 'class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">About</label>
                                {!! Form::textarea('about', null, [ 'class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">

                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.box -->

            </div>
        </div>

@endsection

@section('scripts')

@endsection



