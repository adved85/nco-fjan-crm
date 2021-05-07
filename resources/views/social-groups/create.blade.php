
@extends('layouts.cardBase')

@section('css')
    <link href="{{ mix('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('card-header')
    <div class="card-header-actions">
        <h4>Սոցիալական խմբեր</h4>
    </div>

@endsection

@section('card-content')
    <div class="container">
        @if(session()->has('error'))
            <strong class="alert-danger">Խնդրումենք ճիշտ լրացրեք</strong>
        @endisset
        <form method="post" action="{{route('socgroupes.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Անվանում</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="unit">Համար</label>
                <input type="number" name="pkey" id="pkey" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ավելացնել</button>
            </div>
        </form>


    </div>
@endsection

@section('javascript')
    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/all.magicsearch.js') }}"></script>
    <script src="{{ mix('/js/components/Select.js') }}"></script>

@endsection
