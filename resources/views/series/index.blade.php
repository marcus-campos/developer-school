@extends('template')

@section('container')
    <div class="row">
        <div class="masonry-container">
            @foreach($series as $s)
                <div class="col-sm-6 col-lg-3 col-md-4">
                    <!--<div class="card-box">-->
                        <p>
                            <img src="{{ $s->image }}" class="thumb-img" alt="work-thumbnail">
                        </p>
                    <!--</div>-->
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="text text-center">
            {{ $series->links() }}
        </div>
    </div>
@endsection