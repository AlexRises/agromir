<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<link rel="stylesheet" href="/css/orders.css">
<link rel="stylesheet" href="/css/dashboard.css">
{{--<script src="/js/dashboard.js">--}}

{{--</script>--}}
<form action="/new_invoice">

    <button class="table-add-block" onclick="" >
        <i class="fas fa-plus"></i>
        <span>Добавить новый инвойс</span>
    </button>
</form>

<form action="/invoice_add">

    <button class="table-add-block" onclick="" >
        <i class="fas fa-plus"></i>
        <span>Добавить продукты для заказа</span>
    </button>
</form>




<section id="orders">
    <div class="container">
        <div class="orders table">
            <h1>Заказы</h1>
            <div class="table-heading-black">
                <div class="table-section-small">#</div>
                <div class="table-section-small">Part</div>
                <div class="table-section-small">Date of Delivery</div>
                <div class="table-section-small">Price</div>
                <div class="table-section-small">Amount</div>
                <div class="table-section-small">Unit</div>
                <div class="table-section-small">Sum</div>
                <div class="table-section-small">Branch</div>

            </div>
            <ul class="table-list">
                @foreach($invoice as $in)
                    <li class="table-list-item {{$in->invoice_id}}">
                        <div class="table-section-small">{{ $in->invoice_id or '?' }}</div>
                        <div class="table-section-small">{{ $in->part or '?'}}</div>
                        <div class="table-section-small">{{ $in->date_of_delivery}}</div>
                        <div class="table-section-small">{{ $in->price}}</div>
                        <div class="table-section-small">{{ $in->amount}}</div>
                        <div class="table-section-small">{{ $in->unit}}</div>
                        <div class="table-section-small">{{ $in->sum}}</div>
                        <div class="table-section-small">{{ $in->provider}}</div>

                    </li>
                @endforeach
            </ul>



            {{--@include('popup.popup-order-add')--}}
            {{--@include('popup.popup-order-add')--}}

            {{--{!! $orders->render() !!}--}}
        </div>
    </div>
</section>

{{--@endsection--}}

</body>
</html>


