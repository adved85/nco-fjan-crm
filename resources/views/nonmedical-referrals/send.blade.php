@extends('layouts.cardBase')

@section('css')
    <link href="{{ mix('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('card-header')
    Ստացված
    <div class="card-header-actions">
        @can('create patients')
            {{--    <button class="btn btn-primary" data-toggle="modal" data-target="#patient-create-modal">--}}
            {{--        <x-svg icon="cui-plus" />--}}
            {{--    </button>--}}
            <button class="btn btn-primary" onclick="window.open('{{route('patients.create')}}')">
                <x-svg icon="cui-plus" />
            </button>
        @endcan
        @cannot('create patients')
            <button class="btn btn-secondary" disabled><x-svg icon="cui-plus" /></button>
        @endcannot
    </div>
@endsection

@section('card-content')


    <table class="table table-md table-hover table-responsive table-cursor" style="width:100%;">
        <thead class="thead-info">
        <tr>
            <th>Id</th>
            <th>Ստացող</th>
            <th>Ստացողի բաժին</th>
            <th>Բովանդակություն</th>
            <th>Նկարագրություն</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $i => $element)
            <tr>
                <td>{{$data[$i]['receiver']['id']}}</td>
                <td>{{$data[$i]['receiver']['f_name']}} {{$data[$i]['receiver']['l_name']}} {{$data[$i]['receiver']['p_name']}}</td>
                <td>{{$data[$i]['department']['name']}}</td>
                <td>
                    @forelse($data[$i]['attachments'] as $attachment)
                        <a target="_blank" href="/storage/user/{{$data[$i]['receiver']['id']}}/NonMedicalReferral/{{$attachment->attachment_name}}">
                            {{$attachment->attachment_name}}
                        </a>
                    @empty
                        <p>-----------------------------</p>
                    @endforelse
                </td>
                <td>
                    @forelse($data[$i]['attachments'] as $attachment)
                        <p>{{$attachment->attachment_comment}}</p>
                    @empty
                        <p>-----------------------------</p>
                    @endforelse
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('javascript')
    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/datatables.js') }}"></script>
    <script>
        var dataTable = $(".table").CDataTable({
            "order": [[ 0, "desc" ]]
        });


    </script>
@endsection

