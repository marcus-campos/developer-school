@extends('template')

@section('container')
    <div class="row">
        <div class="masonry-container">
            <div class="col-sm-6 col-lg-3 col-md-4">
                <!--<div class="card-box">-->
                <p>
                    <img src="{{ $video->image }}" class="thumb-img" alt="work-thumbnail">
                </p>
                <!--</div>-->
            </div>
        </div>
    </div>
@endsection