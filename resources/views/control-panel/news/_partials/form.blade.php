<div class="form-group">
    <label for="year">Title</label>
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label for="type">Date</label>
    {!! Form::date('date', null, ['class'=>'form-control', 'type'=>'date']) !!}
</div>

<div class="form-group">
    <label for="type">News</label>
    {!! Form::textarea('news', null, ['class'=>'form-control']) !!}
</div>

