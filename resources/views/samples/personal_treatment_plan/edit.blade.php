@extends('layouts.cardBase')

@section('css')
    <link href="{{mix("/css/jquery.magicsearch.min.css")}}" rel="stylesheet"/>

@endsection


@section('card-header')
@section('card-header-classes', '')

<div class="text-center">
    <h3>ԱՆՀԱՏԱԿԱՆ ԲՈՒԺՄԱՆ ՊԼԱՆ</h3>
    <h3>ՉԱՐՈՐԱԿ ՆՈՐԱԳՈՅԱՑՈՒԹՅՈՒՆՆԵՐՈՎ ՊԱՑԻԵՆՏԻ</h3>
    <h3>ՈՒՌՈՒՑՔԱԲԱՆԱԿԱՆ ԽՄԲԻ ՈՐՈՇՄԱՆ ՀԵՐԹԱԿԱՆ № <span>{{$plan->regular}}</span></h3>

</div>
@endsection


@section('card-content')

    <div class="container">
        <form action="{{route('samples.treatment.update',$plan->id)}}" method="POST">
            @csrf
            @method('put')
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>
                        <span class="badge badge-light mr-1"></span>
                        ՈՒՌՈՒՑՔԱԲԱՆԱԿԱՆ ԽՄԲԻ ՈՐՈՇՄԱՆ ՀԵՐԹԱԿԱՆ ՀԱՄԱՐ
                    </strong>
                    <ins class="ml-4"></ins>
                </li>
                <li class="list-group-item">
                    <h5 class="my-3  text-center">
                        <span class="badge badge-light mr-1">1.</span>
                        Պացիենտի անհատական տվյալնները</h5>
                    <strong>
                        <span class="badge badge-light mr-1">1)</span>
                        Ազգանուն, անուն, հայրանուն
                    </strong>
                    <ins class="ml-4">{{$patent->full_name}}</ins>
                    <div class="form-row align-items-center my-3">
                        <div class="col-md-2">
                            <strong>
                                <span class="badge badge-light mr-1">2)</span>
                                Ամսաթիվ
                            </strong>
                        </div>
                        <div class="col-md-10">

                            <input type="datetime-local" class="form-control" name="dateTime"
                                   value="{{\Illuminate\Support\Carbon::parse($plan->dateTime)->format('Y-m-d\TH:i')}}"
                                   required>

                            <input type="hidden" class="form-control" name="patient_id" value="{{$patent->id}}">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3 text-center">
                        <h5 class="my-3  text-center">
                            <span class="badge badge-light mr-1 ">2.</span>
                            Լաբարատոր գործիքային ախտորոշիչ հետազոտություններ
                        </h5>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">2.1</span>
                        Պացիենտի մոտ առկա իրականացվաց լաբարատոր գործիքային ախտորոշիչ հետազոտությունների արդյունքները
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="results" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->results}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3  text-center">
                        <h5>
                            <span class="badge badge-light mr-1">2.2</span>
                            Պլանավորվող լաբարատոր գործիքային ախտորոշիչ հետազոտությունները
                        </h5>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">1)</span>
                        Լաբարատոր հետազոտություններ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="laboratory_research"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->laboratory_research}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">2)</span>
                        Գործիքային հետազոտությունների
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="Instrumental_research"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->Instrumental_research}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">3)</span>
                        Ճառագայթային ախտորոշիչ հետազոտություն
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="radiation_research" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->radiation_research}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">4)</span>
                        Հյուսվածցքաբանական կամ բջջաբանական հետազոտություն
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="histological_research"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->histological_research}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">5)</span>
                        Այլ նշումներ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="other_research" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->other_research}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3  text-center">
                        <h5>
                            <span class="badge badge-light mr-1">3.</span>
                            Բժշկական օգնության և սպասարկման պլանավորվող
                        </h5>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">1)</span>
                        Վիրահատական միջամտություն
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="Surgical_intervention"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->Surgical_intervention}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">2)</span>
                        Քիմիաթերապևտիկ բուժում
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="chemotherapy_treatment"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->chemotherapy_treatment}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">3)</span>
                        Ճառագայթային թերապիա
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="radiation_therapy" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->radiation_therapy}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">4)</span>
                        Այլ միջամտություններ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="other_interventions"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->other_interventions}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3  text-center">
                        <h5>
                            <span class="badge badge-light mr-1">4.</span>
                            Միջփուլային հսկողություն
                        </h5>
                    </div>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="intermediate_control"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->intermediate_control}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3  text-center">
                        <h5>
                            <span class="badge badge-light mr-1">4.1</span>
                            Վիրահատական միջամտությունից հետո
                        </h5>
                        <div class="my-2">
                            <x-forms.text-field type="textarea" name="after_surgery" placeholder="լրացման ազատ դաշտ․․․"
                                                class="mt-2"
                                                value="{{$plan->after_surgery}}" label=""/>
                        </div>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">1)</span>
                        ԱԱՊ բժշկին ներկայանալ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="aap_surgery" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->aap_surgery}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">2)</span>
                        Նշանակումներ
                    </strong>
                    <table class="table" border="2">
                        <thead>
                        <tr>
                            <th>դեղամիջոցը</th>
                            <th>գրառման</th>
                            <th>ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($surgery as $surgerys)
                            <tr id="trashData{{$surgerys->id}}">
                                <td>{{$surgerys->medicine_name->name}}</td>
                                <td>{{$surgerys->comment}}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm clickTrash" type="button"
                                           onclick="clickTrash({{$surgerys->id}})">
                                        <x-svg icon="cui-trash"/>
                                    </button>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <strong>
                        <span class="badge badge-light mr-1"></span>
                        Ավելացնել դեղամիջոց
                    </strong>
                    <br>

                    <x-forms.add-reduce-button type="add" data-row=".side-effect-row"/>
                    <x-forms.add-reduce-button type="reduce" data-row=".side-effect-row"/>
                    <x-forms.hidden-counter class="side-effect-medicine-rows" name="medicine_length_surgery"/>

                    @for($i = 0; $i < $repeatables; $i++)
                        <div class="side-effect-row {{ $i < old('medicine_length_surgery', 1) ? ' ' : 'd-none' }}">
                            <div class="my-2">
                                <x-forms.magic-search class="medicines-search magic-search ajax"
                                                      data-catalog-name="medicines"
                                                      value='{{ old("medicines_surgery.$i") }}'
                                                      hidden-id="medicines_surgery{{ $i }}"
                                                      hidden-name="medicines_surgery[]"
                                                      placeholder="Ընտրել դեղամիջոցը․․"/>
                            </div>
                            <div class="my-2">
                                <textarea name="medicines_surgery_comment[]" class="form-control"
                                          placeholder="ազատ գրառման դաշտ․․․"></textarea>
                            </div>
                        </div>
                    @endfor

                    <strong>
                        <span class="badge badge-light mr-1">3)</span>
                        Մասնագիտացված կազմակերպության բուժող բժիշկ-ուռուցքաբանի մոտ ներկայանալ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="to_introduce" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->to_introduce}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3  text-center">
                        <h5>
                            <span class="badge badge-light mr-1">4.2</span>
                            Քիմիաթերապևտիկ բուժումից հետո
                        </h5>
                    </div>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="after_chemotherapy_treatment"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->after_chemotherapy_treatment}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">1)</span>
                        ԱԱՊ բժշկին ներկայանալ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="sap_chemotherapy" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->sap_chemotherapy}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">2)</span>
                        Նշանակումներ
                    </strong>
                    <table class="table" border="2">
                        <thead>
                        <tr>
                            <th>դեղամիջոցը</th>
                            <th>գրառման</th>
                            <th>ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($chemotherapy as $chemotherapys)
                            <tr id="trashData{{$chemotherapys->id}}">
                                <td>{{$chemotherapys->medicine_name->name}}</td>
                                <td>{{$chemotherapys->comment}}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm clickTrash" type="button"
                                            onclick="clickTrash({{$chemotherapys->id}})">
                                        <x-svg icon="cui-trash"/>
                                    </button>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <strong>
                        <span class="badge badge-light mr-1"></span>
                        Ավելացնել դեղամիջոց
                    </strong>
                    <x-forms.add-reduce-button type="add" data-row=".side-chemotherapy-row"/>
                    <x-forms.add-reduce-button type="reduce" data-row=".side-chemotherapy-row"/>
                    <x-forms.hidden-counter class="side-effect-medicine-rows" name="side_chemotherapy_length"/>
                    @for($i = 0; $i < $repeatables; $i++)
                        <div
                            class="side-chemotherapy-row {{ $i < old('side_chemotherapy_length', 1) ? ' ' : 'd-none' }}">
                            <div class="my-2">
                                <x-forms.magic-search class="medicines-search magic-search ajax"
                                                      data-catalog-name="medicines"
                                                      value='{{ old("medicines_chemotherapy.$i") }}'
                                                      hidden-id="medicines_chemotherapy{{ $i }}"
                                                      hidden-name="medicines_chemotherapy[]"
                                                      placeholder="Ընտրել դեղամիջոցը․․"/>
                            </div>
                            <div class="my-2">
                                <textarea name="medicines_chemotherapy_comment[]" class="form-control"
                                          placeholder="ազատ գրառման դաշտ․․․"></textarea>
                            </div>
                        </div>
                    @endfor
                    <strong>
                        <span class="badge badge-light mr-1">3)</span>
                        Մասնագիտացված կազմակերպության բուժող բժիշկ-ուռուցքաբանի մոտ ներկայանալ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="to_come_closer" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->to_come_closer}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3  text-center">
                        <h5>
                            <span class="badge badge-light mr-1">4.3</span>
                            Ճառագայթային թերապիայից հետո
                        </h5>
                    </div>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="after_radiation_therapy"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->after_radiation_therapy}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">1)</span>
                        ԱԱՊ բժշկին ներկայանալ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="aap_radiation" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->aap_radiation}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">2)</span>
                        Նշանակումներ
                    </strong>
                    <table class="table" border="2">
                        <thead>
                        <tr>
                            <th>դեղամիջոցը</th>
                            <th>գրառման</th>
                            <th>ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($radiation as $radiations)
                            <tr id="trashData{{$radiations->id}}">
                                <td>{{$radiations->medicine_name->name}}</td>
                                <td>{{$radiations->comment}}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm clickTrash" type="button"
                                            onclick="clickTrash({{$radiations->id}})">
                                        <x-svg icon="cui-trash"/>
                                    </button>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <strong>
                        <span class="badge badge-light mr-1"></span>
                        Ավելացնել դեղամիջոց
                    </strong>
                    <x-forms.add-reduce-button type="add" data-row=".side-radiation-row"/>
                    <x-forms.add-reduce-button type="reduce" data-row=".side-radiation-row"/>
                    <x-forms.hidden-counter class="side-effect-medicine-rows" name="side_radiation_length"/>
                    @for($i = 0; $i < $repeatables; $i++)
                        <div class="side-radiation-row {{ $i < old('side_radiation_length', 1) ? ' ' : 'd-none' }}">
                            <div class="my-2">
                                <x-forms.magic-search class="medicines-search magic-search ajax"
                                                      data-catalog-name="medicines"
                                                      value='{{ old("medicines_radiation.$i") }}'
                                                      hidden-id="medicines_radiation{{ $i }}"
                                                      hidden-name="medicines_radiation[]"
                                                      placeholder="Ընտրել դեղամիջոցը․․"/>
                            </div>
                            <div class="my-2">
                                <textarea name="medicines_radiation_comment[]" class="form-control"
                                          placeholder="ազատ գրառման դաշտ․․․"></textarea>
                            </div>
                        </div>
                    @endfor
                    <strong>
                        <span class="badge badge-light mr-1">3)</span>
                        Մասնագիտացված կազմակերպության բուժող բժիշկ-ուռուցքաբանի մոտ ներկայանալ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="doctor_oncologist_radiation"
                                            placeholder="լրացման ազատ դաշտ․․․" class="mt-2"
                                            value="{{$plan->doctor_oncologist_radiation}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3  text-center">
                        <h5>
                            <span class="badge badge-light mr-1">4.4</span>
                            Հատուկ նշումներ
                        </h5>
                    </div>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="special_note" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->special_note}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3  text-center">
                        <h5>
                            <span class="badge badge-light mr-1">5.</span>
                            Բուժումը ավարտելուց հետո հետագա հսկողությունը
                        </h5>
                    </div>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="further_control" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->further_control}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">1)</span>
                        ԱԱՊ բժշկին ներկայանալ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="aap_control" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->aap_control}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">2)</span>
                        Լաբարատոր գործիքային ախտորոշիչ հետազոտություններ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="diagnostic_tests" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->diagnostic_tests}}" label=""/>
                    </div>
                    <strong>
                        <span class="badge badge-light mr-1">3)</span>
                        Նշանակումներ
                    </strong>
                    <table class="table" border="2">
                        <thead>
                        <tr>
                            <th>դեղամիջոցը</th>
                            <th>գրառման</th>
                            <th>ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($diagnostic as $diagnostics)
                            <tr id="trashData{{$diagnostics->id}}">
                                <td>{{$diagnostics->medicine_name->name}}</td>
                                <td>{{$diagnostics->comment}}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm clickTrash" type="button"
                                            onclick="clickTrash({{$diagnostics->id}})">
                                        <x-svg icon="cui-trash"/>
                                    </button>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <strong>
                        <span class="badge badge-light mr-1"></span>
                        Ավելացնել դեղամիջոց
                    </strong>
                    <x-forms.add-reduce-button type="add" data-row=".side-diagnostic-row"/>
                    <x-forms.add-reduce-button type="reduce" data-row=".side-diagnostic-row"/>
                    <x-forms.hidden-counter class="side-effect-medicine-rows" name="side_diagnostic_length"/>
                    @for($i = 0; $i < $repeatables; $i++)
                        <div class="side-diagnostic-row {{ $i < old('side_diagnostic_length', 1) ? ' ' : 'd-none' }}">
                            <div class="my-2">
                                <x-forms.magic-search class="medicines-search magic-search ajax"
                                                      data-catalog-name="medicines"
                                                      value='{{ old("medicines_diagnostic.$i") }}'
                                                      hidden-id="medicines_diagnostic{{ $i }}"
                                                      hidden-name="medicines_diagnostic[]"
                                                      placeholder="Ընտրել դեղամիջոցը․․"/>
                            </div>
                            <div class="my-2">
                                <textarea name="medicines_diagnostic_comment[]" class="form-control"
                                          placeholder="ազատ գրառման դաշտ․․․"></textarea>
                            </div>
                        </div>
                    @endfor
                    <strong>
                        <span class="badge badge-light mr-1">4)</span>
                        Հատուկ նշումներ
                    </strong>
                    <div class="my-2">
                        <x-forms.text-field type="textarea" name="special_notes" placeholder="լրացման ազատ դաշտ․․․"
                                            class="mt-2"
                                            value="{{$plan->special_notes}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <strong>
                        Անհատական բուժման պլանի կազմելու ամսաթիվը
                    </strong>
                    <div class="col-md-13 my-2">
                        <x-forms.text-field name="date_treatment" validation-type="ajax" type="datetime-local"
                                            value="{{\Illuminate\Support\Carbon::parse($plan->date_treatment)->format('Y-m-d\TH:i')}}" label=""/>
                    </div>
                </li>
                <li class="list-group-item">
                    <strong>
                        Մասնագիտացված կազմակերպության բուժող բժիշկ-ուռուցքաբան
                    </strong>
                    <x-forms.magic-search hidden-id="ue_attending_doctor_id" hidden-name="doctor_oncologist"
                                          placeholder="Ընտրել բուժող բժիշկին․․․" class="magic-search ajax my-2"
                                          data-list-name="users"
                                          value="{{$plan->doctor_oncologist}}"/>
                    <strong>
                        <span class="badge badge-light mr-1">1)</span>
                        Վիրաբույժ-ուռուցքաբան
                    </strong>
                    <x-forms.magic-search hidden-id="oncologist_surgeon" hidden-name="oncologist_surgeon"
                                          placeholder="Ընտրել բուժող բժիշկին․․․" class="magic-search ajax my-2"
                                          data-list-name="users" value="{{$plan->oncologist_surgeon}}"
                    />
                    <strong>
                        <span class="badge badge-light mr-1">2)</span>
                        Քիմիաթերապևտ
                    </strong>
                    <x-forms.magic-search hidden-id="ue_attending_chemotherapist_id" hidden-name="chemotherapist"
                                          placeholder="Ընտրել բուժող բժիշկին․․․" class="magic-search ajax my-2"
                                          data-list-name="users" value="{{$plan->chemotherapist}}"
                    />
                    <strong>
                        <span class="badge badge-light mr-1">3)</span>
                        Հյուսվածցքաբան
                    </strong>
                    <x-forms.magic-search hidden-id="histologist" hidden-name="histologist"
                                          placeholder="Ընտրել բուժող բժիշկին․․․" class="magic-search ajax my-2"
                                          data-list-name="users" value="{{$plan->histologist}}"
                    />
                    <strong>
                        <span class="badge badge-light mr-1">4)</span>
                        Ճառագայթաբան
                    </strong>
                    <x-forms.magic-search hidden-id="radiologist" hidden-name="radiologist"
                                          placeholder="Ընտրել բուժող բժիշկին․․․" class="magic-search ajax my-2"
                                          data-list-name="users" value="{{$plan->radiologist}}"
                    />
                    <strong>
                        <span class="badge badge-light mr-1">5)</span>
                        Ճառագայթային ախտորոշման մասնագետ
                    </strong>
                    <x-forms.magic-search hidden-id="specialist" hidden-name="specialist"
                                          placeholder="Ընտրել բուժող բժիշկին․․․" class="magic-search ajax my-2"
                                          data-list-name="users" value="{{$plan->specialist}}"
                    />
                </li>
                @include('shared.forms.list_group_item_submit', ['btn_text'=>'Ուղարկել'])
            </ul>
        </form>
    </div>
@endsection
@section('javascript')
    <script>
        var repeatables = {{$repeatables}};
    </script>
    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/all.magicsearch.js') }}"></script>
    <script>
        function clickTrash(data) {
            let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{url('samples/treatment/trash/medication/')}}'+'/'+data,
                type:"get",
                success: function (data) {
             $('#trashData'+data).remove()
                }
            });
        }
    </script>

@endsection
