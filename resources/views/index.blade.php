
@extends(backpack_view('plain'))

@section('content')
    <div id="app" class="container-fluid">

        <div class="container-fluid">
            <countries-component countries="{{$countries}}"/>
        </div>


    </div>
@endsection
