@extends('layouts.cardBase')

@section('css')
<link href="{{mix("/css/jquery.magicsearch.min.css")}}" rel="stylesheet" />
@endsection


@section('card-header')
@section('card-header-classes', '')

<div class="text-center">
    <h3>ՄԱՆՐԷԱԶԵՐԾՄԱՆ ՌԵԺԻՄ ՔՈՒՅՐ</h3>
    
</div>
@endsection


@section('card-content')

<div class="container">
    <form class="ajax-submitable" action="{{route('samples.patients.sterilization-mode-sister.store', ['patient'=> $patient])}}" method="POST">
        @csrf
        <ul class="list-group">
                <li class="list-group-item">
                    <div class="form-row align-items-center">
                        <div class="col-md-4">
                            <strong>Ամսաթիվ</strong>
                        </div>
                        <div class="col-md-8">
                            <x-forms.text-field name="main_date" type="date"  validationType="ajax" value="" label=""/>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                        ԲԺՇԿԱԿԱՆ ԻՐԵՐ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="name" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Անվանում" />
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field type="number" name="count" min="0" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Քանակ" />
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                        <div class="row my-2">
                                <div class="col-md-5">
                                        <strong>Մաքրման եղանակ</strong>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline mr-1">
                                        <strong></strong>
                                        <input class="form-check-input" id="wheelchair-radio1" type="radio" value="1" name="cleaning_method">
                                        <label class="form-check-label" for="wheelchair-radio1">Մեքենայացված</label>
                                    </div>
                                </div>
                                <div class="col-md-3 pr-0">
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" id="wheelchair-radio2" type="radio" value="0" name="cleaning_method">
                                        <label class="form-check-label" for="wheelchair-radio2">Ձեռքով</label>
                                    </div>
                                </div>
                        </div>
                </li>
                <li class="list-group-item">
                    <div>
                        <x-forms.text-field type="textarea" name="cleaning_method_name" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                        value="" label="Մաքրող նյութի անվանում" />
                    </div>
                </li>
                <li class="list-group-item">
                    <div>
                        <x-forms.text-field type="textarea" name="disinfection_method" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                        value="" label="Ախտահանման եղանակ" />
                    </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                    ԱԽՏԱՀԱՆՄԱՆ ՆՅՈՒԹԻ ԱՆՎԱՆՈՒՄ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="axt_name" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Անվանում" />
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="according"  validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Ըստ կից հրահանգի/%/" />
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                    ԱԽՏԱՀԱՆՄԱՆ ՌԵԺԻՄ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="start" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Սկիզբ" />
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="end" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Վերջ" />
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                    ՆԱԽԱՄԱՆՐԷԱԶԵՐԾՄԱՆ ՄՇԱԿՄԱՆ ԵՆԹԱՐԿՎԱԾ ԲԺՇԿԱԿԱՆ ԻՐԵՐ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="nax_name" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Անվանում" />
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field type="number" name="nax_count" min="0" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Քանակ" />
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                        <div>
                            <x-forms.text-field type="number" name="processing_number" min="0" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Մշակման ստուգման իրերի քանակ" />
                        </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                    ՆԱԽԱՄԱՆՐԷԱԶԵՐԾՄԱՆ ՈՐԱԿԻ ՀՍԿՈՂՈՒԹՅԱՆ ԱՐԴՅՈՒՆՔՆԵՐ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="presence_blood" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Արյան հետքերի առկայություն" />
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="traces_detergent"  validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Լվացող հեղուկի հետքերի առկայություն" />
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                        ԲԺՇԿԱԿԱՆ ԻՐԵՐԻ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="medical_name" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Անվանում" />
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field type="number" name="medical_count" min="0" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Քանակ" />
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-row align-items-center">
                        <div class="col-md-6">
                            <strong>Մանրէազերծիչ գործիքի միացման ժամ</strong>
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field name="sterilizer_tool_time" type="time"  validationType="ajax" value="" label=""/>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                        ՄԱՆՐԷԱԶԵՐԾՄԱՆ ՌԵԺԻՄ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field name="steril_tool_time" type="time"  validationType="ajax" value="" label="Մանրէազերծիչ գործիքի միացման ժամ"/>
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="steril_tool_temperature" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Ջերմաստիճան" />
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field name="steril_tool_endtime" type="time"  validationType="ajax" value="" label="Վերջ ժամ"/>
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field name="steril_tool_removetime" type="time"  validationType="ajax" value="" label="Հանելու ժամ"/>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div>
                        <x-forms.text-field type="textarea" name="control_sterilizers" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                        value="" label="Մանրէազերծիչ սարքերի աշխատանքի հսկողություն/քիմիական զգայորոշիչ/" />
                    </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                        ԲԺՇԿԱԿԱՆ ԻՐԵՐԻ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field type="text" name="medical_tools_name" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Անվանում" />
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field type="number" name="medical_tools_count" min="0" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                            value="" label="Քանակ" />
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div>
                        <x-forms.text-field type="textarea" name="medical_itemsname_disinfectant" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                        value="" label="Մանրէազերծող նյութի անվանում/խտություն ըստ հրահանգի պահանջի (%)" />
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-row align-items-center">
                        <div class="col-md-6">
                            <strong>Մանրէազերծող նյութի պատրաստման ամսաթիվ</strong>
                        </div>
                        <div class="col-md-6">
                            <x-forms.text-field name="steril_prep_date" type="date"  validationType="ajax" value="" label=""/>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div>
                        <x-forms.text-field type="textarea" name="test_result" validationType="ajax" placeholder="լրացման ազատ դաշտ․․․"
                        value="" label="Թեսթի արդյունքը" />
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-row align-items-center">
                        <div class="col-md-9">
                            <strong>Մանրէազերծող սարքի միացման ժամանակ քիմիական նյութի մեջ ընկղման ժամ</strong>
                        </div>
                        <div class="col-md-3">
                            <x-forms.text-field name="steril_material_time" type="time"  validationType="ajax" value="" label=""/>
                        </div>
                    </div>
                </li>
                <li class="list-group-item list-group-item-info">
                    <h4 class="text-center">
                        ՄԱՆՐԷԱԶԵՐԾՄԱՆ ՌԵԺԻՄ
                    </h4>
                </li>
                <li class="list-group-item ">
                    <div class="form-row">
                        <div class="col-md-6">
                            <x-forms.text-field name="steril_mode_start" type="time"  validationType="ajax" value="" label="Սկիզբ ժամ"/>
                        </div>
                        <div class="col-md-6">
                        <x-forms.text-field name="steril_mode_end" type="time"  validationType="ajax" value="" label="Վերջ ժամ"/>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <strong>Հետազոտությունը իրականացնող բժիշկ</strong>
                        <x-forms.magic-search hidden-id="attending_doctor_id" hidden-name="attending_doctor_id"
                        placeholder="Ընտրել բուժող բժիշկին․․․" class="my-2 user_search" value=""/>
                        <em class="error text-danger" data-input="attending_doctor_id"></em>
                </li>

                @include('shared.forms.list_group_item_submit', ['btn_text'=>'Ուղարկել'])
        </ul>
    </form>
</div>
@endsection
@section('javascript')
<script src="{{ mix('js/jquery.js') }}"></script>
<script src="{{ mix('js/all.magicsearch.js') }}"></script>

<script>
    const usersUrl = @json(route('lists.users_full'));
    $('.user_search').magicsearch(
        window.medexMagicSearch.assignConfigs({
            type: "ajax",
            dataSource: `${usersUrl}?groupByRole=doctor`,
            fields: ["f_name","l_name"],
            id: "id",
            format: "%f_name% %l_name%",
            success: function($input, data) {
                console.log(data)
                const hidden_input_id = $input.data('hidden');
                $(hidden_input_id).val($input.attr("data-id"));
            },
            afterDelete: function($input, data) {
                const hidden_input_id = $input.data("hidden");
                $(hidden_input_id).val("");
            }
        })
    );

</script>

@endsection
