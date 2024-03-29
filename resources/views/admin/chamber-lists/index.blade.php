@extends('layouts.AdminCardBase')

@section('css')
<link href="{{ mix('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('card-header')
    <h4>Պալատներ</h4>
    <div class="card-header-actions">
        <a href="{{ route("admin.chamber-lists.create") }}" class="btn btn-primary float-right mr-4" type="button" target="_blank">
            <x-svg icon="cui-plus" />
            ավելացնել նորը
        </a>
    </div>
@endsection

@section('card-content')

    @include('shared.info-box')

    <table class="table table-md table-hover table-responsive table-cursor datatable-default" style="width:100%;">
        <thead class="thead-info">
        <tr>
            <th>ID</th>
            <th>Պալատի Համար</th>
            <th>Կ-վիճակ</th>
            <th>Բաժին</th>
            <th>Մահճակալ</th>
            <th>Գործողություններ</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($lists as $key => $list)
            @php
                $class = $list->status === 'active' ? 'text-success' : 'text-danger';
            @endphp
                <tr data-url='{{route("admin.chamber-lists.edit", $list->id)}}'>
                    <td>{{ $list->id }}</td>
                    <td>{{ $list->number }}</td>
                    <td class="{{$class}}">{{ $list->status === 'active' ? 'ակտիվ' : 'պասիվ' }}</td>
                    <td>{{ $list->department->name}}</td>
                    <td>{{ $list->beds->count()}}</td>
                    <td>
                        <form method="POST" action='{{route("admin.chamber-lists.update",  $list->id)}}' class="d-inline">
                            @csrf
                            @method("PATCH")
                            <input type="hidden" name="deactivate" value="1">
                            <button class="btn btn-danger btn-sm" type="submit" name="status" value="{{$list->status}}">
                                <x-svg icon="cui-trash" />
                            </button>
                        </form>

                        <a href="{{route("admin.chamber-lists.edit",  $list->id)}}" class="btn btn-primary btn-sm" target="_blank">
                            <x-svg icon="cui-pencil" />
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
