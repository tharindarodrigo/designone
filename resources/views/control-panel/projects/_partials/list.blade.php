<table class="table table-bordered" id="projects_table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Year</th>
        <th>Type</th>
        <th>country</th>
        <th>Order</th>
        <th>Thumb</th>
        <th>Controls</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($projects))
        @foreach($projects as $project)
            <tr>
                <td>{!! $project->id !!}</td>
                <td>{!! $project->name !!}</td>
                <td>{!! $project->year !!}</td>
                <td align="left">

                    @foreach($project->projectTypes as $projectType)
                        {!! $projectType->project_type !!}<br>
                    @endforeach
                </td>
                <td>{!! $project->country !!}</td>
                <td>{!! $project->order !!}</td>
                <td><img width="100px" src="{!! asset('control-panel/images/projects/'.$project->id.'.jpg') !!}" alt="">
                </td>
                <td>
                    <div class="btn-group">
                        {!! Form::open(['route'=>['control-panel.projects.destroy', $project->id], 'method'=>'delete']) !!}
                        <a class="btn btn-sm btn-primary"
                           href="{!! route('control-panel.projects.edit', $project->id) !!}">
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