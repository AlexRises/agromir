<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<link rel="stylesheet" href="/css/orders.css">
<link rel="stylesheet" href="/css/dashboard.css">
<h1 id="popup-heading">Добавление заказа</h1>

<form class="popup-form" method="POST" action="/invoice_add">
    {{ csrf_field() }}
<div id="popupAdd" class="popup-orders">
    {{--<div class="popup-content">--}}
        {{--<div class="popup-close">--}}
            {{--<i class="fas fa-times" onclick="togglePopupAdd();"></i>--}}
        {{--</div>--}}
        <div class="popup-form-row">
            <label for="product-add">
                    <span class="required" title="Required field">
                        Продукт:
                    </span>
            </label>
            <select name="product_id[]" id="product-add" required>
                @foreach($products_prices as $pp)
                    <option value="{{$pp->product_id && $pp->price}}">{{ $pp->product_name.' ('.$pp->price.'₴)' }} </option>

                @endforeach
            </select>
        </div>
        <div class="popup-form-row">
            <label for="quantity-add">
                    <span class="required" title="Required field">
                        Количество:
                    </span>
            </label>
            <select name="quantity[]" id="quantity-add">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <label for="product-add">
                    <span class="required" title="Required field">
                        Счёт за :
                    </span>
            </label>
            <select name="invoice[]" id="product-add" required>
                @foreach($invoice_info as $in)
                    <option value="{{$in->invoice_id}}">{{'№ '. $in->invoice_id. ' Дата ( '. $in->date_of_delivery. ' )' }} </option>
                @endforeach
            </select>
            <span class="required" title="Required field">
                           Введите меру исчисления:
                    </span>
            <input type="text" class="form-control" id="title" name="units" placeholder="Введите меру">
            <label for="product-add">
                    <span class="required" title="Required field">
                        Филиал:
                    </span>
            </label>
            <select name="branch[]" id="product-add" required>
                @foreach($branch as $b)
                    <option value="{{$b->branch_id}}">{{$b->city}} </option>
                @endforeach
            </select>
        </div>

        <div class="popup-form-button">
            <button class="table-add-block" onclick="" >
                <i class="fas fa-plus"></i>
                <span>Добавить новый заказ</span>
            </button>
        </div>
    </div>
    </div>
</form>



        <section id="orders">
            <div class="container">
                <div class="orders table">
                    <h1>Заказы</h1>
                    <div class="table-heading-black">
                        <div class="table-section-small">Technic Name</div>
                        <div class="table-section">Necessary Parts</div>

                    </div>
                    <ul class="table-list">
                        @foreach($plist as $pl)
                            <li class="table-list-item">
                                <div class="table-section-small">{{$pl->technic_name or '?'}}</div>

                                <div class="table-section-small">{{ $pl->parts or '?'}}</div>


                            </li>
                        @endforeach
                    </ul>






                    {{--@include('popup.popup-order-add')--}}
                    {{--@include('popup.popup-order-add')--}}

                    {{--{!! $orders->render() !!}--}}
                </div>
            </div>
        </section>


        {{--<form class="popup-form" action="/invoice_add" method="post">--}}
            {{--{{ csrf_field() }}--}}
            {{--<div class="popup-form-row">--}}
                {{--<label for="product-add">--}}
                    {{--<span class="required" title="Required field">--}}
                        {{--Продукт:--}}
                    {{--</span>--}}
                {{--</label>--}}
                {{--<select name="product_id[]" id="product-add" required>--}}
                    {{--@foreach($products as $product)--}}
                        {{--<option value="{{$product->id}}">{{ $product->title.' ('.$product->price.'₴)' }} </option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</form>--}}
            {{--<div class="popup-form-row">--}}
                {{--<label for="quantity-add">--}}
                    {{--<span class="required" title="Required field">--}}
                        {{--Количество:--}}
                    {{--</span>--}}
                {{--</label>--}}
                {{--<select name="quantity[]" id="quantity-add">--}}
                    {{--<option value="1">1</option>--}}
                    {{--<option value="2">2</option>--}}
                    {{--<option value="3">3</option>--}}
                    {{--<option value="4">4</option>--}}
                    {{--<option value="5">5</option>--}}
                {{--</select>--}}
                {{--<input type="number" step="0.01" min="0" max="999999"--}}
                {{--name="amount" id="amount-add" placeholder="500.0" required>--}}
            {{--</div>--}}
            {{--<hr style="width: 100%">--}}
            {{--<div class="extra-products">--}}

            {{--</div>--}}
            {{--<div class="popup-form-button">--}}
                {{--<button--}}
                        {{--@if(Auth::user()->role->display_name == 'Стафф') disabled @endif>--}}
                    {{--Добавить--}}
                {{--</button>--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<div class="popup-form-button extra-product">--}}
            {{--<button--}}
                    {{--@if(Auth::user()->role->display_name == 'Стафф') disabled @endif>--}}
                {{--Еще продукт--}}
            {{--</button>--}}
        {{--</div>--}}
        {{--<p>Итого к Оплате: </p>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<script>--}}
    {{--$('.extra-product').on('click', function () {--}}
        {{--$('.extra-products').append(--}}
                {{--'<div class="extra-product"> <div class="popup-form-row"> <label for="product-add"> <span class="required" title="Required field"> Продукт: </span> </label> <select name="product_id[]" id="product-add" required> @foreach($products as $product) <option value="{{$product->id}}">{{ $product->title." (".$product->price."грн)" }} </option> @endforeach </select> </div> <div class="popup-form-row"> <label for="quantity-add"> <span class="required" title="Required field"> Количество: </span> </label> <select name="quantity[]" id="quantity-add"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> <hr style="width: 100%"> </div>'--}}
        {{--)--}}
    {{--})--}}
{{--</script>--}}
</body>
</html>
