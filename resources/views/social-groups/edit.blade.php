@extends('layouts.cardBase')

@php

@endphp

@section('css')
<link href="{{mix("/css/jquery.magicsearch.min.css")}}" rel="stylesheet" />
@endsection

@section('card-header')
@section('card-header-classes', 'text-center')
<h2>Սոցիալական խմբեր</h2>
@endsection

@section('card-content')
<div class="container">
    <form method="post" action="{{ route('socgroupes.update', [$social->id]) }}">
        @method('put')
        @csrf()
        <div class="form-group">
            <div class="row">
                <div class="col-12">
                    <label for="name">Փոխել անվանումը</label>
                    <input type="text" name="name" id="name" value="{{ $social->name }}" class="form-control" placeholder="Անվանում">
                </div>
                <br>
                <div class="col-12">
                    <br>
                    <label for="name">Փոխել համարը</label>
                    <input type="text" name="pkey" id="pkey" value="{{ $social->pkey }}" class="form-control" placeholder="Անվանում">

                </div>
            </div>
            </div>
        <strong></strong>
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Թարմացնել</button>
        </div>
    </form>
<hr class="my-4">


@endsection

@section('javascript')
<script src="{{ mix('js/jquery.js') }}"></script>
<script src="{{ mix('js/all.magicsearch.js') }}"></script>
<script src="{{ mix('/js/components/Select.js')}}"></script>


@endsection
