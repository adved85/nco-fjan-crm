<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/print/awareness_sheet.css')}}">
    <title>ԻՐԱԶԵԿՄԱՆ ԹԵՐԹԻԿ</title>
</head>
<body>

<div class="page-wrap">
    <div class="new-page">
        <div class="main-container">
            <br>
            <div class="text-center"><strong>ՊԵՏՈՒԹՅԱՆ ԿՈՂՄԻՑ ԵՐԱՇԽԱՎՈՐՎԱԾ ԱՆՎՃԱՐ ԲԺՇԿԱԿԱՆ ՕԳՆՈՒԹՅԱՆ ԵՎ ՍՊԱՍԱՐԿՄԱՆ ՇՐՋԱՆԱԿՆԵՐՈՒՄ ԲԺՇԿԱԿԱՆ ՕԳՆՈՒԹՅՈՒՆ ԵՎ ՍՊԱՍԱՐԿՄՈՒՄ ՍՏԱՑՈՂ ՔԱՂԱՔԱՑՈՒՆ ՏՐՎՈՂ ԻՐԱԶԵԿՄԱՆ ԹԵՐԹԻԿ</strong></div>
            <br><br>
            <div class="display-flex">
                <div>Ամսաթիվ</div>
                <div class="bottom-line">{{$as->first_date}}</div>
            </div>
            <br><br>
            <div>
            ՀՀ ԱՆ << Վ.Ա. Ֆանարջյան անվան Ուռուցքաբանության կենտրոն >> ՓԲԸ -ն (այուսհետ Կատարող) ի դեմս տնօրեն <span> <strong>{{$as->director->full_name}}</strong></span> ,գործելով իր կանոնադրության,ինչպես նաև ՀՀ առողջապահության նախարարության հետ կնքված պետության կողմից երաշխավորված անվճար և արտոնյալ պայմաններով բժշկական օգնության և սպասարկման ծառայությունների մատուցման մասին պայմանագրի (այսուհետ Պայմանագրի) հիման վրա սույնով
            </div>

            <br><br>
            <div class="text-center"><strong>ԻՐԱԶԵԿՈՒՄ Է</strong></div>
            <br><br>
            <div class="display-flex">
                <div>Քաղաքացի</div>
                <div class="bottom-line">{{$patient->full_name}}</div>
                <div>-ին ներքոհիշյալի մասին</div>
            </div> 
            <br><br>
            <div class="text">
               1.Համձայան Հայաստանի Հանրապետության առողջապահության նախարարության և ՀՀ ԱՆ << Վ.Ա.Ֆանարջյանի անվան Ուռուցքաբանության կենտրոն>> ՓԲԸ-ի միջև կնքված Պայմանագրի,  Դուք օգտվում եք պետության կողմից երաշխավորված անվճար բժշկական օգնության և սպասարկման շրջանակներում անվճար բժշկական օգնություն և սպասարկում ստանալու իրավունքից:
            </div> 
            <div class="text">
                2.Պետության կողմից երաշխավորված անվճար բժշկական օգնությունը և սպասարկումը ընդգրկվում է դրա կազմակերպման համար անհրաժաշտ միջոցների ամբողջ ծավալը,այդ թվում բժշկական կազմակերպություն ընդունման,վարման և դուրս գրման հետ կապված փաստաթղթային ձևակերպումները,լաբարատոր և գործիքային ախտորոշիչ հետազոտությունները, դեղերով և բժշկական պարագաներով ապահովումը բացառությամբ Հայաստանի Հանրապետության առողջապահության նախարարի հրամաններվ հաստատված առանձին ծառայությունների,որոնք ընդգրկված չեն պետության կողմից երաշխավորված անվճար բժշկական օգնության և սպասարկման ծավալներում, ընդ որում նման դեպքերում բժշկական օգնության և սպասարկում ստացող քաղաքացու պահանջով բժշկական կազմակերպությունը պարտավոր է վերջինիս հնարավորություն  ընձեռնել նշված հրամանների  հետ ծանոթանալու համար:
            </div>
            <div class="text">
                3.Առանձին դեպքերում  բժշկական օգնություն և սպասարկում ստացող քաղաքացու կողմից ձեռք բերված դեղերով բուժումը թույլատրվում է կազմակերպել միայն քաղաքացու գրավոր համաձայնությամբ,  հիվանդության պատմագրի մեջ ձևակերպված հիմնավորվածությամբ և բժշկական կազմակերպության ղեկավար կամ նրա կողմից լիազորված անձի թույլտվությամբ:
            </div>
            <div class="text">
                4.Պետության կողմից երաշխավորված բժշկական օգնություն և սպասարկում ստացող քաղաքացուն վճարովի հաևբժշկական ծառայությունների մատուցման դեպքում (օրինակ տեսակցության վճար ,խնամողի համար նախատեսված վճար,լրացուցիչ հարմարութուններով հիվանդասենյակի համար վճար և այլն) ծառայության տվյալ տեսակի համար պետք է գործի նաև անվճար այլընտրանքային տարբերակ:
            </div>
            <div class="text">
                5.Բժշկական կազմակերպությունը պարտավորվում է տեղեկացնել բժշկական օգնություն և սպասարկում ստացող քաղաքացուն (կամ նրա հարազատին)պետության կողմից երաշխավորված անվճար և արտոնյալ պայմաններով բժշկական օգնությունից և սպասարկումից օգտվելու հնարավորությունների, ծավալների, իրավունքների և դրանց իրականացման մեխանիզմների, ինչպես նաև բուժման ընթացքի, ակնկալվող արդյունքների և հնարավոր բարդությունների մասին:
            </div>
            <div class="text">
                6.Բժշկական կազմակերպությունը պարտավորվում է պահպանել քաղաքացու առողջությանը վերաբերվող և բժշկական գաղտնիք հանդիսացող տեղեկության գաղտնիությունը ՀՀ օրենսդրությամբ սահմանված կարգով:
            </div>
            <div class="text">
                7.Միաժամանակ դուք իրազեկվում եք, որ Դուք և Ձեր հարազատները բժշկական կազմակերպությունում գտնվելու ողջ ժամանակահատվածի ընթացքում պարտավոր եք պահպանել բժշկական կազմակերպության ներքին կանոնակարգը, բուժման ընթացքում հեևել բուժող բժշկի և այլ իրավասու բժշկական անձնակազմի նշանակաումներին և ցուցումներին, չմիջամտել բժշկական անջնակազմի գործողություններին և չխոչընդոտել նրանց կողմից իրենց մասնագիտական պարտականությունների կատարմանը ,դրսևորել հարգալից վերաբերմունք բժշկական կազմակերպության աշխատակիցների նկատպմամբ:
            </div>
            <div class="text">
                8.Բժշկական օգնության և սպասարկման գործընթացի կազմակերպման հետ կապված պարզաբանումներ համար ինչպես նաև հարցերի կամ բողոքների դեպքում Դուք կարող եք դիմել Ձեր բուժող բժշկին,կազմակերպության տնօրինությանը կամ ՀՀ առողջապահության նախարարության <<Թեժ գիծ>> ծառայությանը (հեռ.010 52-88-72):
            </div>
            <br><br>
            <div class="display-flex">
                <div> ՈՒԱԿ ՓԲԸ-ի ընդունարանի վարիչ</div>
                <div class="bottom-line">{{$as->department_head->full_name}}</div>
            </div>
            <br>
            <div>
                Իրազեկվում եմ և <span><strong>
                    @if($as->accept)    
                        Համաձայն 

                        @else
                        Համաձայն չեմ

                    @endif

                </strong></span>եմ ստանալ պետության կողմից երաշխավորված բժշկական օգնություն և սպասարկում:
            </div>
            <br>
            <div>
                <div>Բժշկական օգնություն և սպասարկում ստացող անձի կամ նրա օրինական ներկայացուցչի</div>
                <br>
                <div class="display-flex">
                    <div>Ազգանուն, անուն, հայրանուն</div>
                <div class="bottom-line">{{$as->service_recipient}}</div>
                </div>
                <br>
                <div class="display-flex">
                    <div>Ամսաթիվ</div>
                <div class="bottom-line">{{$as->second_date}}</div>
                </div>
                <br>
                <div>
                    Սույն իրավունքը չի տարածվում <<Բնակչության բժշկական օգնության և սպասարկման մասին>> ՀՀ օրենքի 16-րդ հոդվածով սահմանված դեպքերի վրա:
                </div>
                <br><br><br>
            </div>
        </div>
     </div>
</div>                        
</body>
</html>