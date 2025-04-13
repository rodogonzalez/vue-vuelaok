
@extends(backpack_view('plain'))

@section('content')
    <div id="app" class="container-fluid">

        <div class="container-fluid">
            <country-component country_slug="{{$country_slug}}"/>
        </div>


    </div>
@endsection
