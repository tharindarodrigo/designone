<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Thumb</th>
        <th>Controls</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($teamMembers))
        @foreach($teamMembers as $teamMember)
            <tr>
                <td>{!! $teamMember->id !!}</td>
                <td>{!! $teamMember->name !!}</td>
                <td>{!! $teamMember->designation !!}</td>
                <td>{!! $teamMember->status==0 ? 'Inactive' : 'active'!!}</td>
                <td><img width="100px" src="{!! asset('control-panel/images/team-members/'.$teamMember->id.'.jpg') !!}"
                         alt=""></td>
                <td>
                    <div class="btn-group">
                        {!! Form::open(['route'=>['control-panel.team-members.destroy', $teamMember->id], 'method'=>'delete']) !!}
                        <a class="btn btn-sm btn-primary"
                             href="{!! route('control-panel.team-members.edit', $teamMember->id) !!}">
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