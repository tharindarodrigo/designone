<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Thumb</th>
        <th>Controls</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($sliderImages))
        @foreach($sliderImages as $sliderImage)
            <tr>
                <td>{!! $sliderImage->id !!}</td>
                <td>{!! $sliderImage->title !!}</td>
                <td>{!! $sliderImage->description !!}</td>
                <td>{!! $sliderImage->status==0 ? 'Inactive' : 'active'!!}</td>
                <td><img width="100px" src="{!! asset('control-panel/images/slider-images/'.$sliderImage->id.'.jpg') !!}"
                         alt=""></td>
                <td>
                    <div class="btn-group">
                        {!! Form::open(['route'=>['control-panel.slider-images.destroy', $sliderImage->id], 'method'=>'delete']) !!}
                        <a class="btn btn-sm btn-primary"
                             href="{!! route('control-panel.slider-images.edit', $sliderImage->id) !!}">
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