@section('episode-list')
    @if(!\Illuminate\Support\Facades\Auth::check())
        @if(isset($episodesList))
            <li class="hidden-xs">
                <a href="#" class="btn btn-default waves-effect waves-light">Entrar</a>
            </li>
        @endif
    @endif
@endsection