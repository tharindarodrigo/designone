<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Date</th>
        <th>Title</th>
        <th>News</th>
        <th>Controls</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($news))
        @foreach($news as $newsBlock)
            <tr>
                <td>{!! $newsBlock->id !!}</td>
                <td>{!! $newsBlock->date !!}</td>
                <td>{!! $newsBlock->title !!}</td>
                <td>{!! $newsBlock->news !!}</td>
                <td>
                    <div class="btn-group">
                        {!! Form::open(['route'=>['control-panel.news.destroy', $newsBlock->id], 'method'=>'delete']) !!}
                        <a class="btn btn-sm btn-primary"
                           href="{!! route('control-panel.news.edit', $newsBlock->id) !!}">
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