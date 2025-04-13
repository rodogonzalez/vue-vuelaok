@extends(backpack_view('blank'))

@section('content')

    <div id="order_alive" class="container ">
        <h1>{{ __('messages.payment.title') }} {{ __('messages.order.title') }} : {{ $order->id }}</h1>
        <hr>

        <div id="payment_details" class='row '>
            <div class="col-6 card align-text-bottom">
                <div class="cart  row">
                    <div class='col-4 '>
                        Tienda / Comercio : <br>
                        Direccion Destino:<br>
                        Monto Crypto: <br>
                        Currency :<br>

                        Total USD :<br>
                    </div>
                    <div class='col-8'>
                        {{$store->name}}<br>
                        {{$order->crypto_wallet_transaction}}<br>
                        {{$order->crypto_wallet_total_amount}}<br>
                        {{$order->currency}}<br>
                        {{$order->total()}}


                    </div>
                </div>
                <hr>
                <div class="container text-center">
                    <div id="app">
                        <order-component  :order="{{$order->toJson()}}" :products="{{$products->toJson()}}" :expanded="true"/>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
