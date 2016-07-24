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
    @if(!empty($newsItems))
        @foreach($newsItems as $newsItem)
            <tr>
                <td>{!! $newsItem->id !!}</td>
                <td>{!! $newsItem->date !!}</td>
                <td>{!! $newsItem->title !!}</td>
                <td>{!! $newsItem->news !!}</td>
                <td><img width="75px" src="{!! asset('images/projects/'.$newsItem->id.'.jpg') !!}" alt=""></td>
                <td>{!! $newsItem->country !!}</td>
                <td>
                    <div class="btn-group">
                        {!! Form::open(['route'=>['control-panel.projects.destroy', $newsItem->id], 'method'=>'delete']) !!}
                        <a class="btn btn-sm btn-primary"
                           href="{!! route('control-panel.projects.edit', $newsItem->id) !!}">
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