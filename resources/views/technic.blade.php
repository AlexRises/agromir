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

    <h3 align="center">Get Multiple Types And Branches</h3><br />
    <h4>Select Branch and Type</h4><br />

        <form method="post" action="/technic/branch_filter">
            {{csrf_field()}}
            <p><input type="checkbox" name="branch[]" value="1" /> Vinnytsa</p>
            <p><input type="checkbox" name="branch[]" value="2" /> Kherson</p>
            <p><input type="checkbox" name="branch[]" value="3" /> Odessa</p>
            <p><input type="submit" name="submit_branch" class="btn btn-info" value="Submit Branch" /></p>
        </form>
        <form method="post" action="/technic/technic_filter">
            {{csrf_field()}}
            <p><input type="checkbox" name="technic[]" value="Tipper" /> Tipper </p>
            <p><input type="checkbox" name="technic[]" value="Loader" /> Loader </p>
            <p><input type="checkbox" name="technic[]" value="Combine harvester" /> Combine harvester </p>
            <p><input type="checkbox" name="technic[]" value="Tractor" /> Tractor </p>
            <p><input type="checkbox" name="technic[]" value="Work Car" /> Work Car </p>
            <p><input type="checkbox" name="technic[]" value="Sprinkler" /> Sprinkler </p>

            <p><input type="submit" name="submit_technic" class="btn btn-info" value="Submit Type" /></p>


        </form>



    <div class="container">
        <div class="dashboard-content">
            <div class="staff table">
                <h1>Активные сотрудники</h1>

                <div class="table-heading-black">
                    <div class="table-section-small">#</div>
                    <div class="table-section-big">Name</div>
                    <div class="table-section">Branch</div>
                    {{--@if(!$role->isStaff()) --}}{{-- RESTRICTED FOR STAFF --}}
                    <div class="table-section">Necessary_parts</div>
                    {{--@endif--}}
                    <div class="table-section">Condition</div>
                    <div class="table-section">Type</div>
                    <div class="table-section-small">
                        <i class="fas fa-check"></i>
                    </div>
                    {{--@if($role->isAdmin()) --}}{{-- ADMIN ONLY --}}
                    {{--<div class="table-section-small">--}}
                    {{--<i class="fas fa-edit"></i>--}}
                    {{--</div>--}}
                    {{--@endif--}}
                </div>
                <ul class="table-list">
                    @foreach($technic as $t)
                        {{--                            @if($s->user->activated)--}}
                        <li class="table-list-item">
                            <div class="table-section-small">{{ $t->id or '?' }}</div>
                            <div class="table-section-big">{{ $t->name or '?' }}</div>
                            <div class="table-section">{{ $t->city or '?' }}</div>
                            {{--@if(!$role->isStaff()) --}}{{-- RESTRICTED FOR STAFF --}}
                            <div class="table-section">{{ $t->necessary_parts or '?' }}</div>
                            {{--@endif--}}
                            <div class="table-section">{{ $t->condition or '?' }}</div>
                            <div class="table-section">{{ $t->type or '?' }}</div>

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
