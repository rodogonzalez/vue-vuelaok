
@extends(backpack_view('plain'))

@section('content')
    <div id="app" class="container-fluid">

        <div class="container-fluid">
            <country-part-destination-component country_slug="{{$country_slug}}" part_slug="{{$part_slug}}"  destination_slug="{{$destination_slug}}" />
        </div>


    </div>
@endsection
