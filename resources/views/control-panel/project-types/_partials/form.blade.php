<div class="form-group {{$errors->first('project_type') ? 'has-error' : ''}}">
    <label for="year">Project Type</label>
    {!! Form::text('project_type', null, ['class'=>'form-control']) !!}
    <span class="help-block">{{$errors->first('project_type', ':message')}}</span>
</div>

