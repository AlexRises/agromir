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
                <div class="table-section">Date</div>
                <div class="table-section">Provider</div>

            </div>
            <ul class="table-list">
                @foreach($invoice as $in)
                    <li class="table-list-item {{$in->id}}">
                        <div class="table-section-small">{{ $in->id or '?' }}</div>
                        <div class="table-section">{{ $in->date_of_delivery or '?'}}</div>
                        <div class="table-section">{{ $in-> company}}</div>

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


