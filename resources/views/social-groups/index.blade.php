@extends('layouts.cardBase')

@section('css')
<link href="{{ mix('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('card-header')
<h4>Սոցիալական խմբեր</h4>
    <div class="card-header-actions">
        <a href="{{ route("socgroupes.create") }}" class="btn btn-primary float-right mr-4" type="button" target="_blank">
            <x-svg icon="cui-plus" />
            ավելացնել նորը
        </a>
    </div>
@endsection

@section('card-content')
    @if(session('updated'))
        <div class="alert alert-success">
            {{session('updated')}}
        </div>
    @elseif(session('deleted'))
        <div class="alert alert-danger ">
            {{session('deleted')}}
        </div>
    @endif
    @if(Session::has('msg'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Տվյալները հաջողությամբ պահպանված են։</strong>
        </div>
        @php
            Session::forget('msg');
        @endphp
    @endif

    <table class="table table-md table-hover table-responsive table-cursor datatable-default" style="width:100%;">
        <thead class="thead-info">
        <tr>
            <th>ID</th>
            <th>Անվանում</th>
            <th>Համար</th>
            <th>Գործողություններ</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($social as $element)
                <tr >
                    <td>{{ $element->id }}</td>
                    <td>{{ $element->name }}</td>
                    <td>{{ $element->pkey }}</td>
                    <td>
                        <form method="POST" action="{{route('socgroupes.destroy',$element->id)}}" class="d-inline">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger btn-sm" type="submit" name="status" value="{{$element->id}}">
                                <x-svg icon="cui-trash" />
                            </button>
                        </form>
                        <a href="{{route('socgroupes.edit',$element->id)}}">
                            <button class="btn btn-primary btn-sm text-white" type="submit">
                                <x-svg icon="cui-pencil" />
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('javascript')
<script src="{{ mix('js/jquery.js') }}"></script>
<script src="{{ mix('js/datatables.js') }}"></script>

@endsection
