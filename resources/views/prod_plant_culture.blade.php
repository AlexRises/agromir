<?php
/*use App\Staff;
$s = new Staff();*/
?>

{{--@extends('layouts.dashboard')--}}

{{--@section('title','Сотрудники | Дэшборд')--}}

{{--@section('content')--}}
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="/css/staff.css">
<link rel="stylesheet" href="/css/dashboard.css">
<section id="staff">

    {{--<h3 align="center">Get Multiple Types And Branches</h3><br />--}}
    {{--<h4>Select Branch</h4><br />--}}

    {{--<form method="post" action="/products/products_branch_filter">--}}
    {{--{{csrf_field()}}--}}
    {{--<p><input type="checkbox" name="branch[]" value="1" /> Vinnytsa</p>--}}
    {{--<p><input type="checkbox" name="branch[]" value="2" /> Kherson</p>--}}
    {{--<p><input type="checkbox" name="branch[]" value="3" /> Odessa</p>--}}
    {{--<p><input type="submit" name="submit_branch" class="btn btn-info" value="Submit Branch" /></p>--}}
    {{--</form>--}}
    <form action="/predict">

        <button class="table-add-block" onclick="" >
            <i class="fas fa-plus"></i>
            <span>Просчитать</span>
        </button>
    </form>

    <form method="post" action="/prod_plant_culture/culture_filter">
        {{ csrf_field() }}
    <div class="popup-form-row">
    <select name="plant_culture_id" id="product-add">
        @foreach($culture as $pp)
            <option value="{{$pp->plant_culture_id}}">{{$pp->culture_name}} </option>
        @endforeach
    </select>
        {{--<select name="branch" id="product-add" required>--}}
            {{--@foreach($branch as $in)--}}
                {{--<option value="{{$in->branch_id}}">{{$in->city}} </option>--}}
            {{--@endforeach--}}
        {{--</select>--}}
        <div class="popup-form-button">
            <button class="table-add-block" onclick="" >
                <i class="fas fa-plus"></i>
                <span>Отфильтровать</span>
            </button>
        </div>
        </div>
        </form>

    <div class="container">
        <div class="dashboard-content">
            <div class="staff table">
                <h1>Культуры</h1>

                <div class="table-heading-black">
                    <div class="table-section-small">Product Name</div>
                    <div class="table-section-small">Product Type </div>
                    <div class="table-section-small">Culture Name</div>
                    {{--@if(!$role->isStaff()) --}}{{-- RESTRICTED FOR STAFF --}}
                    <<div class="table-section-small">Branch Number</div>
                    {{--@endif--}}>
                    <div class="table-section-small">City</div>

                    {{--@if($role->isAdmin()) --}}{{-- ADMIN ONLY --}}
                    {{--<div class="table-section-small">--}}
                    {{--<i class="fas fa-edit"></i>--}}
                    {{--</div>--}}
                    {{--@endif--}}
                </div>
                <ul class="table-list">
                    @foreach($prod_plant as $pp)
                        {{--                            @if($s->user->activated)--}}
                        <li class="table-list-item">
                            <div class="table-section-small">{{ $pp->product_name or '?' }}</div>
                            <div class="table-section-small">{{ $pp->product_type or '?' }}</div>
                            <div class="table-section-small">{{ $pp->culture_name or '?' }}</div>
                            {{--@if(!$role->isStaff()) --}}{{-- RESTRICTED FOR STAFF --}}
                            <div class="table-section-small">{{ $pp->branch_number or '?' }}</div>
                            <div class="table-section-small">{{ $pp->city or '?' }}</div>

                            {{--@endif--}}

                            {{--<div class="table-section-small">--}}
                            {{--<input type="checkbox" name="activated" value="true"--}}
                            {{--                                               @if($s->user->activated) checked @endif disabled>--}}
                            {{--</div>--}}
                            {{--@if($role->isAdmin()) --}}{{-- ADMIN ONLY --}}
                            {{--<button id="{{$s->id}}"--}}
                            {{--class="table-section-small table-edit table-edit-staff"--}}
                            {{--onclick="togglePopupEdit();">--}}
                            {{--<i class="fas fa-edit"></i>--}}
                            {{--</button>--}}
                            {{--@endif--}}
                        </li>
                        {{--@endif--}}
                    @endforeach
                </ul>
                {{--{!! $staff->render() !!}--}}
                {{--@if($role->isAdmin())--}}
                {{--@include('popup.popup-staff-edit')--}}
                {{--@endif--}}
            </div>

            {{--<div class="flex-row space-between">--}}
            {{--<div class="flex-item-half">--}}
            {{--<p class="flex-item-half-heading">Неактивные сотрудники</p>--}}

            {{--<div class="table-light">--}}
            {{--<div class="table-light-heading">--}}
            {{--<div class="table-section-small">#</div>--}}
            {{--<div class="table-section-big">Полное Имя</div>--}}
            {{--<div class="table-section">Телефон</div>--}}
            {{--<div class="table-section-small">--}}
            {{--<div class="table-section-small">--}}
            {{--<i class="fas fa-check"></i>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<ul class="table-light-content">--}}
            {{--@foreach($staff as $s)--}}
            {{--@if(!$s->user->activated)--}}
            {{--<li>--}}
            {{--<div class="table-section-small">{{$s->id}}</div>--}}
            {{--<div class="table-section-big">{{$s->surname.' '.$s->name}}</div>--}}
            {{--<div class="table-section">{{$s->phone}}</div>--}}
            {{--<div id="{{$s->id}}" class="table-section-small profile-activator--}}
            {{--color-green cursor-pointer">--}}
            {{--<i class="fas fa-check"></i>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--@endif--}}
            {{--@endforeach--}}
            {{--</ul>--}}

            {{--</div>--}}

            {{--</div>--}}
            {{--<div class="flex-item-half">--}}
            {{--<p></p>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>

{{--<script>--}}
{{--var x = $('div #2 .profile-activator');--}}
{{--console.log(x);--}}
{{--</script>--}}
{{--@endsection--}}


</body>
</html>
