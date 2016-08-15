<div class="form-group {{$errors->first('client') ? 'has-error' : ''}}">
    <label for="year">Client</label>
    {!! Form::text('client', null, ['class'=>'form-control']) !!}
    <span class="help-block">{{$errors->first('client', ':message')}}</span>
</div>

<div class="form-group {{$errors->first('client_logo') ? 'has-error' : ''}}">
    <label for="project_photo">Client Logo</label>
    {!! Form::file('client_logo', ['class'=>'primary']) !!}
    <span class="help-block">{{$errors->first('client_logo', ':message')}}</span>
</div>
