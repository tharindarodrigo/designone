<div class="form-group {{$errors->first('title') ? 'has-error' : ''}}">
    <label for="year">Title</label>
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    <span class="help-block">{{$errors->first('title', ':message')}}</span>
</div>

<div class="form-group {{$errors->first('description') ? 'has-error' : ''}}" >
    <label for="description">Description</label>
    {!! Form::text('description', null, ['class'=>'form-control']) !!}
    <span class="help-block">{{$errors->first('description', ':message')}}</span>
</div>

<div class="form-group {{$errors->first('slider_image') ? 'has-error' : ''}}">
    <label for="slider_photo">Slider photo</label>
    {!! Form::file('slider_image', ['class'=>'primary']) !!}
    <span class="help-block">{{$errors->first('slider_image', ':message')}}</span>
</div>


