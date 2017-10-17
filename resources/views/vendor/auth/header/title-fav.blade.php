@section('title-fav')

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon_1.ico') }}">

    <title>{{ isset($title) ? 'Deliveryzi - '.$title: 'Devyzi - Deliverizy' }}</title>

@endsection