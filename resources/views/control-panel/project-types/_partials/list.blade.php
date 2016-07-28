<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Project Type</th>
        <th>Controls</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($projectTypes))
        @foreach($projectTypes as $projectType)
            <tr>
                <td>{!! $projectType->id !!}</td>
                <td>{!! $projectType->project_type !!}</td>
                <td>
                    <div class="btn-group">
                        {!! Form::open(['route'=>['control-panel.projects.destroy', $projectType->id], 'method'=>'delete']) !!}
                        <a class="btn btn-sm btn-primary"
                           href="{!! route('control-panel.project-types.edit', $projectType->id) !!}">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <button class="btn btn-sm btn-danger" type="submit">
                            <span class="glyphicon glyphicon-trash delete"></span>
                        </button>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>

        @endforeach
    @endif
    </tbody>
</table>

@section('scripts')

@endsection