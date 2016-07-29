<div class="form-group {{$errors->first('year') ? 'has-error' : ''}}">
    <label for="year">Year</label>
    {!! Form::text('year', null, ['class'=>'form-control']) !!}
    <span class="help-block">{{$errors->first('year', ':message')}}</span>
</div>

<div class="form-group" {{$errors->first('project-type') ? 'has-error' : ''}}>
    <label for="type">Project Types</label>
    @foreach(\App\ProjectType::all() as $projectType)
        <div class="checkbox">
            <label>
                {!! Form::checkbox('project_type[]', $projectType->id,
                in_array($projectType->id, empty($project) ? array() : $checkedProjectTypes)) !!}
                {!! $projectType->project_type !!}
            </label>
        </div>
    @endforeach
    <span class="help-block">{{$errors->first('type', ':message')}}</span>

</div>

<div class="form-group {{$errors->first('country') ? 'has-error' : ''}}">
    <label for="country">Country</label>
    {!! Form::text('country', null, ['class'=>'form-control']) !!}
    <span class="help-block">{{$errors->first('country', ':message')}}</span>
</div>

<div class="form-group {{$errors->first('project_photo') ? 'has-error' : ''}}">
    <label for="project_photo">Project photo</label>
    {!! Form::file('project_photo', ['class'=>'primary']) !!}
    <span class="help-block">{{$errors->first('project_photo', ':message')}}</span>
</div>
