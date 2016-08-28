<div class="form-group {{$errors->first('title') ? 'has-error' : ''}}">
    <label for="year">Name</label>
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    <span class="help-block">{{$errors->first('name', ':message')}}</span>
</div>

<div class="form-group {{$errors->first('description') ? 'has-error' : ''}}" >
    <label for="description">Designation</label>
    {!! Form::text('designation', null, ['class'=>'form-control']) !!}
    <span class="help-block">{{$errors->first('designation', ':message')}}</span>
</div>

<div class="form-group {{$errors->first('slider_image') ? 'has-error' : ''}}">
    <label for="slider_photo">Member photo <em>(Please resize the Images to <strong>123 x 456</strong> )</em></label>
    {!! Form::file('team_member_image', ['class'=>'primary']) !!}
    <span class="help-block">{{$errors->first('team_member_image', ':message')}}</span>
</div>


