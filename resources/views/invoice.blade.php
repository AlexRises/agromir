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

            {{--<button class="table-add-block" onclick="togglePopupAdd();">--}}
                {{--<i class="fas fa-plus"></i>--}}
                {{--<span>Добавить</span>--}}
            {{--</button>--}}

            {{--@include('popup.popup-order-edit')--}}
            {{--@include('popup.popup-order-add')--}}

            {{--{!! $orders->render() !!}--}}
        </div>
    </div>
</section>

{{--@endsection--}}

</body>
</html>


