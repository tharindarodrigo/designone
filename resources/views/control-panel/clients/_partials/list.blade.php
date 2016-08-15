<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Client</th>
        <th>Thumb</th>
        <th>Controls</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($clients))
        @foreach($clients as $client)
            <tr>
                <td>{!! $client->id !!}</td>
                <td>{!! $client->client !!}</td>

                <td><img width="100px" src="{!! asset('control-panel/images/clients/'.$client->id.'.jpg') !!}" alt="">
                </td>
                <td>
                    <div class="btn-group">
                        {!! Form::open(['route'=>['control-panel.clients.destroy', $client->id], 'method'=>'delete']) !!}
                        <a class="btn btn-sm btn-primary"
                           href="{!! route('control-panel.projects.edit', $client->id) !!}">
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