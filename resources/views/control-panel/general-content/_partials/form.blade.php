<div class="box-body">
    <div class="form-group {{$errors->first('phone1') ? 'has-error' : ''}}">
        <label for="phone">Phone 1</label>
        {!! Form::text('phone1', null, [ 'class'=>'form-control']) !!}
        <span class="help-block">{{$errors->first('phone1', ':message')}}</span>
    </div>

    <div class="form-group {{$errors->first('phone2') ? 'has-error' : ''}}">
        <label for="phone2">Phone 2</label>
        {!! Form::text('phone2', null, [ 'class'=>'form-control']) !!}
        <span class="help-block">{{$errors->first('phone2', ':message')}}</span>
    </div>

    <div class="form-group {{$errors->first('fax') ? 'has-error' : ''}}">
        <label for="fax">Fax</label>
        {!! Form::text('fax', null, [ 'class'=>'form-control']) !!}
        <span class="help-block">{{$errors->first('fax', ':message')}}</span>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        {!! Form::text('email', null, [ 'class'=>'form-control']) !!}
        <span class="help-block">{{$errors->first('email', ':message')}}</span>
    </div>

    <div class="form-group {{$errors->first('address') ? 'has-error' : ''}}">
        <label for="address">Address <small><em>(Use commas to seperate lines)</em></small></label>
        {!! Form::text('address', null, [ 'class'=>'form-control']) !!}
        <span class="help-block">{{$errors->first('address', ':message')}}</span>
    </div>

    <div class="form-group {{$errors->first('about') ? 'has-error' : ''}}">
        <label for="about">About</label>
        {!! Form::textarea('about', null, [ 'class'=>'form-control']) !!}
        <span class="help-block">{{$errors->first('about', ':message')}}</span>
    </div>

</div>