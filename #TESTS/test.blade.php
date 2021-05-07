@extends('layouts.cardBase')
@php
    $route = route('patients.ambulator.update', ["patient" => $patient, "ambulator" => $ambulator]);
    $route_attendances = route('patients.ambulator.updateattendances', ["patient" => $patient, "ambulator" => $ambulator]);
    $route_diagnosis = route('patients.ambulator.update_diagnosis', ["patient" => $patient, "ambulator" => $ambulator]);

@endphp

@section('css')
    <link href="{{mix("/css/tail.select-default.css")}}" rel="stylesheet" />
    <link href="{{mix("/css/jquery.magicsearch.min.css")}}" rel="stylesheet" />
@endsection

@section('card-header')
@section('card-header-classes', 'text-center')
<h5>{{$patient->all_names}}</h5>
<h3>Ամբուլատոր քարտ № <span>{{$ambulator->number}}</span></h3>
@endsection


@section('card-content')

    <!-- session errors|success|warning|fail -->
    @include('shared.info-box')
    {{-- @if ($errors->any())
        <div class="col-md-12">
            <ul style="list-style:none; padding:0">
                @foreach ($errors->all() as $error)
                    <li>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $error }}!</strong>
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    {{-- <form action="{{$route}}" method="POST" id="pepon" name="pepon">
        @csrf
        @method("PATCH")
        <button class="btn btn-primary">
            Ուղարկել
        </button>
    </form> --}}

    <ul class="list-group">
        <li class="list-group-item">
            <strong>
                Նախնական ախտորոշում
                <x-forms.prev-posts-link href='{{$route."#preliminary_diagnosis"}}' />
            </strong>
            @if ($preliminary_diagnosis->user_id === auth()->id() || empty($preliminary_diagnosis->user_id))

                <form action="{{$route_diagnosis}}" method="POST" class="ajax-submitable dont-reset">
                    @csrf
                    @method('PATCH')
                    {{-- @dump($preliminary_diagnosis->id) --}}
                    {{-- <input type="hidden" name="id" value="{{$preliminary_diagnosis->id}}"> --}}
                    <input type="hidden" name="type" value="{{$preliminary_diagnosis->type}}">
                    <div class="col-md-12 my-2">
                        <x-forms.magic-search class="magic-search ajax" data-catalog-name="diseases"
                                              hidden-id="preliminary_disease_id" hidden-name="disease_id" placeholder="Ընտրել ախտորոշումը․․․"
                                              value='{{old("disease_id", $preliminary_diagnosis->disease_id)}}' />
                    </div>
                    <div class="col-md-12 my-2">
                        <x-forms.text-field type="date" name="diagnosis_date" validationType="ajax"
                                            value='{{old("diagnosis_date",$preliminary_diagnosis->diagnosis_date)}}'/>
                    </div>
                    <div class="col-md-12 my-2">
                        <x-forms.text-field type="textarea" name="diagnosis_comment" placeholder="ազատ լրացման դաշտ․․․"
                                            value='{{old("diagnosis_comment", $preliminary_diagnosis->diagnosis_comment)}}' validationType="ajax" />
                    </div>
                    <div class="col-md-12 my-2">
                        @include('shared.forms.list_group_item_submit', [
                            'btn_text'=>$preliminary_diagnosis->id ? 'փոփխել' : 'ավելացնել'
                        ])
                    </div>
                </form>
            @else
                բժիշկ՝ {{$preliminary_diagnosis->user->full_name}}
            @endif
        </li>
    </ul>

    <ul class="list-group">
        <li class="list-group-item">
            <strong>
                Վերջնական ախտորոշում
                <x-forms.prev-posts-link href='{{$route."#final_diagnosis"}}' />
            </strong>
            @if ($final_diagnosis->user_id === auth()->id() || empty($final_diagnosis->user_id))

                <form action="{{$route_diagnosis}}" method="POST" class="ajax-submitable dont-reset">
                    @csrf
                    @method('PATCH')
                    {{-- @dump($final_diagnosis->id) --}}
                    {{-- <input type="hidden" name="id" value="{{$final_diagnosis->id}}"> --}}
                    <input type="hidden" name="type" value="{{$final_diagnosis->type}}">
                    <div class="col-md-12 my-2">
                        <x-forms.magic-search class="magic-search ajax" data-catalog-name="diseases"
                                              hidden-id="final_disease_id" hidden-name="disease_id" placeholder="Ընտրել ախտորոշումը․․․"
                                              value='{{old("disease_id", $final_diagnosis->disease_id)}}'/>
                    </div>
                    <div class="col-md-12 my-2">
                        <x-forms.text-field type="date" name="diagnosis_date" validationType="ajax"
                                            value='{{old("diagnosis_date",$final_diagnosis->diagnosis_date)}}'/>
                    </div>
                    <div class="col-md-12 my-2">
                        <x-forms.text-field type="textarea" name="diagnosis_comment" placeholder="ազատ լրացման դաշտ․․․"
                                            value='{{old("diagnosis_comment", $final_diagnosis->diagnosis_comment)}}' validationType="ajax" />
                    </div>
                    <div class="col-md-12 my-2">
                        @include('shared.forms.list_group_item_submit', [
                            'btn_text'=>$final_diagnosis->id ? 'փոփոխել' : 'ավելացնել'
                        ])
                    </div>
                </form>
            @else
                բժիշկ՝ {{$final_diagnosis->user->full_name}}
            @endif
        </li>
    </ul>

    <ul class="list-group">
        <li class="list-group-item">
            <!-- forms of updation -->
            @if ($previous_diagnoses->count())
                <div class="collapse previous-diagnoses-collapse">
                    <button class="btn btn-primary btn-sm float-right" type="button"
                            data-toggle="collapse" data-target=".previous-diagnoses-collapse">
                        <x-svg icon="cui-pencil" />
                    </button>
                    @foreach ($previous_diagnoses as $pd_key => $item)
                        <strong>
                            Ինչ հիվանդություններով է հիվանդացել (#-{{$pd_key + 1}})
                        </strong>
                        <div class="col-md-11">
                            @include('shared.forms.stationary_edit_sections.stationary_diagnoses', [
                                'item' => $item,
                                'included_action_route' => $route_diagnosis,
                                'included_form_method' => 'PATCH',
                                'included_submit_txt' => 'փոփոխել',
                                'has_hidden_type' => true,
                                'has_diagnosis_date' => true,
                            ])
                        </div>
                    @endforeach
                </div>
        @endif

        <!-- form of creation -->
            <div class="collapse show previous-diagnoses-collapse">
                <strong>
                    Ինչ հիվանդություններով է հիվանդացել
                    <x-forms.prev-posts-link href='{{$route."#last_disease"}}' />
                </strong>

                @if ($previous_diagnoses->count())
                    <button class="btn btn-primary btn-sm float-right" type="button"
                            data-toggle="collapse" data-target=".previous-diagnoses-collapse">
                        <x-svg icon="cui-pencil" />
                    </button>
                @endif

                <form action="{{$route_diagnosis}}" method="POST" class="ajax-submitable dont-reset-off">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="type" value="previous">
                    {{-- <input type="hidden" name="id" value="4"> --}}
                    <div class="col-md-12 my-2">
                        <x-forms.magic-search class="magic-search ajax" data-catalog-name="diseases"
                                              hidden-id="disease_id" hidden-name="disease_id" placeholder="Ընտրել ախտորոշումը․․․"
                                              value='{{old("disease_id")}}'/>
                    </div>
                    <div class="col-md-12 my-2">
                        <x-forms.text-field type="date" name="diagnosis_date" validationType="ajax"
                                            value='{{old("diagnosis_date")}}'/>
                    </div>
                    <div class="col-md-12 my-2">
                        <x-forms.text-field type="textarea" name="diagnosis_comment" placeholder="ազատ լրացման դաշտ․․․"
                                            value='{{old("diagnosis_comment")}}' validationType="ajax" />
                    </div>
                    <div class="col-md-12 my-2">
                        @include('shared.forms.list_group_item_submit', [
                            'btn_text'=>'ավելացնել'
                        ])
                    </div>
                </form>
            </div>
        </li>
    </ul>

    <ul class="list-group">
        <li class="list-group-item" id="koko">
            <form action="{{$route_attendances}}" method="POST" class="ajax-submitable-off" id="att-date">
                @csrf
                @method('PATCH')
                <div class="form-row align-items-center my-2">
                    <div class="col-md-4"><h5>Հաճախումների հսկողություն</h5></div>
                    <div class="col-md-6">
                        <x-forms.text-field type="datetime-local" name="attendance_date" form="att-date"/>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary float-right" type="submit" form="att-date">
                            <x-svg icon="cui-plus" />ավելացնել
                        </button>
                    </div>
                </div>
            </form>
            <hr class="hr-dashed">

            <div class="form-row">
                @forelse ($ambulator->attendances as $item)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                {{-- {{now()}} --}}
                                {{$item->attendance_date}}
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
                {{-- @for ($i = 0; $i < 15; $i++)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            {{now()}}
                        </div>
                    </div>
                </div>
                @endfor --}}
            </div>
        </li>
    </ul>
    <hr>

    <ul class="list-group">
        <li class="list-group-item">
            <table class="table table-stripped table-bordered">
                <thead>
                <tr>
                    <th>Ստացիոնար ընդունման ամսաթիվը</th>
                    <th>Հիվանդության պատմություն №</th>
                    <th>Կատարված վիրահատության ամսաթիվը</th>
                    <th>Դուրս գրման ամսաթիվը</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($stationaries as $item)
                    @php
                        $s_route = route('patients.stationary.show', ["patient" => $patient, "stationary" => $item->stationary_id]);
                    @endphp
                    <tr>
                        <td>{{$item->admission_date}}</td>
                        <td class="text-center">
                            <span class="mr-3">{{$item->number}}</span>
                            <x-forms.prev-posts-link href='{{$s_route}}' size='md' />
                        </td>
                        <td class="text-center">
                            <span class="mr-3">{{$item->surgery_date}}</span>
                            <x-forms.prev-posts-link href='{{$s_route."#stationary_surgeries"}}' size='md' />
                        </td>
                        <td>{{$item->discharge_date}}</td>
                    </tr>
                @empty
                @endforelse

                </tbody>
            </table>
        </li>
    </ul>

    <x-forms.section title="Հիվանդի Գանգատներ">
        <ul class="list-group">
            @forelse ($ambulator->complaints as $complaint)
                <x-quote-item :source="$complaint->user->full_name">
                    {{$complaint->complaint_text}}
                </x-quote-item>
            @empty

            @endforelse
        </ul>
        <div class="form-group mt-2">
            <x-forms.text-field name="complaints" type="textarea" label="Հիվանդի Գանգատներ" />
        </div>
    </x-forms.section>

    <div class="row">
        <div class="form-group col-sm-12 col-md-6">
            <x-forms.text-field name="number_of_births" type="number" label="Ծննդաբերություններ թիվը" />
        </div>
        <div class="form-group col-sm-12 col-md-6">
            <x-forms.text-field name="number_of_abortions" type="number" label="Վիժումների թիվը" />
        </div>
    </div>

    <div class="form-group">
        <x-forms.text-field name="date_of_last_birth" type="date" label="Վերջին ծննդաբերության ամսաթիվը" />
    </div>

    <div class="form-group">
        <x-forms.text-field name="breast_inflammation" type="textarea" label="Կրծքագեղձի բորբոքում" />
    </div>

    <div class="form-group">
        <x-forms.text-field name="menstruation" type="textarea" label="Դաշտանը" />
    </div>

    <div class="form-group">
        <x-forms.text-field name="breastfeeding_complications" type="textarea"
                            label="Բարդություններ կրծքով կերակրելու շրջանում" />
    </div>

    <x-forms.section title="Ուռուցքի նկարագրություն, տեղակայումը">
        <ul class="list-group">
            @forelse ($ambulator->tumor_infos as $tumor_info)
                <x-quote-item :source="$tumor_info->user->full_name">
                    {{$tumor_info->tumor_description}}
                </x-quote-item>
            @empty

            @endforelse
        </ul>
        <div class="form-group mt-2">
            <x-forms.text-field name="tumor_description" type="textarea" label="Ուռուցքի նկարագրություն, տեղակայումը" />
        </div>
    </x-forms.section>

    <x-forms.section title="Հիվանդության զարգացումը, հանդես գալը">
        <ul class="list-group">
            @forelse ($ambulator->onset_and_developments as $oad)
                <x-quote-item :source="$oad->user->full_name">
                    {{$oad->oad_comment}}
                </x-quote-item>
            @empty

            @endforelse
        </ul>
        <div class="form-group mt-2">
            <x-forms.text-field name="disease_progression" type="textarea"
                                label="Հիվանդության զարգացումը, հանդես գալը" />
        </div>
    </x-forms.section>

    <div class="form-group">
        <label>Հիվանդը ունի երկվորյակ</label>
        <div class="form-check">
            <input class="form-check-input" id="has-twin-true" type="radio" value="1" name="has_twin">
            <label class="form-check-label" for="has-twin-true">Այո</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="has-twin-false" type="radio" value="0" name="has_twin">
            <label class="form-check-label" for="has-twin-false">Ոչ</label>
        </div>
        @error("has_twin")
        <em class="error text-danger">{{$message}}</em>
        @enderror
    </div>

    <div class="duplicatable">
        <div class="d-flex justify-content-between">
            <h5>Հիվանդի Վիճակը.
                <a
                    href="{{ route('patients.ambulator.show', ['ambulator' => $ambulator, 'patient' => $patient, '#health_statuses']) }}">
                    Նախորդ գրառումներ
                </a>
            </h5>
            <div>
                <button type="button" class="btn btn-primary btn-duplicatable">
                    <x-svg icon="cui-plus" />
                </button>
            </div>
        </div>
        <div class="duplicatable-content">
            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                    <x-forms.text-field name="health_status_dates[]" type="date" label="Ներկայացել է" />
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <x-forms.text-field name="heath_status_texts[]" type="textarea" label="Վիճակը, նշանակումներ" />
                </div>
            </div>
        </div>
    </div>



@endsection

@section('javascript')
    <script src="{{mix('/js/select-pure.js')}}"></script>
    <script src="{{mix('/js/components/Select.js')}}"></script>

    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/all.magicsearch.js') }}"></script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", () => alert());

    </script> --}}
@endsection
