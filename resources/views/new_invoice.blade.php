<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<link rel="stylesheet" href="/css/orders.css">
<link rel="stylesheet" href="/css/dashboard.css">

<h1 id="popup-heading">Добавление нового инвойса</h1>

<form class="popup-form" method="POST" action="/new_invoice">
    {{ csrf_field() }}
    <div class="popup-form-row">
        <label for="title">Имя</label>
        <input type="text" class="form-control" id="title" name="date_of_delivery" placeholder="Введите дату">
        <span class="required" title="Required field">
                           Вводите дату в формате ГГ-ММ-ДД
                    </span>
    </div>
<div class="popup-form-row">
    <label for="product-add">
                    <span class="required" title="Required field">
                        Поставщик:
                    </span>
    </label>
<select name="provider_id" id="product-add" required>
    @foreach($provlist as $prov)
        <option value="{{$prov->id}}">{{ $prov->company }} </option>
    @endforeach
</select>
    </div>
    <div class="popup-form-button">
        <button class="table-add-block" onclick="" >
            <i class="fas fa-plus"></i>
            <span>Добавить новый инвойс</span>
        </button>
    </div>
</form>

</body>
</html>