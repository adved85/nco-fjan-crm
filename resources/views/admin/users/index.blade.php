@extends('layouts.AdminCardBase')

@section('css')
    <link href="{{ mix('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
@endsection

@section('card-header')
    <div class="card-header-actions">
        <h4>Անձնակազմ</h4>
    </div>
    <div class="card-header-actions">
        <a href="{{ route("admin.users.create") }}" class="btn btn-primary float-right mr-4" type="button" target="_blank">
            <x-svg icon="cui-plus" />
            ավելացնել նորը
        </a>
    </div>
@endsection

@section('card-content')
    <table class="table table-md table-hover table-responsive table-cursor users-datatable" style="width:100%;">
        <thead class="thead-info">
            <tr>
                <th>ID</th>
                <th>Անուն</th>
                <th>Ազգանուն</th>
                <th>Լոգին</th>
                <th>Բաժանմունք</th>
                <th>Բաժանմունք code</th>
                <th>Էլ․ հասցե</th>
                <th>Կոչում</th>
                <th>Պաշտոն</th>
                <th width="280px">Գործողություններ</th>
            </tr>
        </thead>
        <tbody id="show">
            @foreach ($data as $key => $user)
                <tr data-url={{url("/admin/users/{$user->id}")}}>
                    {{-- <td>{{ ++$i }}</td> --}}
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->f_name }}</td>
                    <td>{{ $user->l_name}}</td>
                    <td>{{ $user->username}}</td>
                    <td>{{ $user->department->name ?? ' '}}</td>
                    {{-- <td>{{ $user->department_code ?? ' '}}</td> --}}
                    <td>{{ $user->department->code ?? ' '}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->position }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.users.show',$user->id) }}">
                            <x-svg icon="cui-external-link" />
                        </a>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit',$user->id) }}">
                            <x-svg icon="cui-pencil" />
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th><input oninput="quantity(this.value)" type="text" placeholder="ID" id="e"></th>
                <th><input oninput="quantity1(this.value)" type="text" placeholder="Անուն"></th>
                <th><input oninput="quantity2(this.value)" type="text" placeholder="Ազգանուն"></th>
                <th><input oninput="quantity3(this.value)" type="text" placeholder="Լոգին"></th>
                <th><input oninput="quantity4(this.value)" type="text" placeholder="Բաժանմունք"></th>
                <th><input oninput="quantity5(this.value)" type="text" placeholder="Բաժանմունք code"></th>
                <th><input oninput="quantity6(this.value)" type="text" placeholder="Էլ․ հասցե"></th>
                <th><input oninput="quantity7(this.value)" type="text" placeholder="Կոչում"></th>
                <th><input oninput="quantity8(this.value)" type="text" placeholder="Պաշտոն"></th>
                <th width="280px">Գործողություններ</th>
            </tr>
        </tfoot>

    </table>
    <script>
        function quantity(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtableid')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

        function quantity1(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtablename')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

        function quantity2(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtablelname')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

        function quantity3(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtableuname')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

        function quantity4(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtabledep')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

        function quantity5(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtabledepcode')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

        function quantity6(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtableemail')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

        function quantity7(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtableposition')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

        function quantity8(id){
            console.log(id);
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ route('searchtablerole')}}",data:{id:id},success: function(data,id){
                    if(data == "price"){
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }else{
                        console.log(data);
                        document.getElementById("show").innerHTML=data ;
                    }
                }
            });
        }

    </script>
@endsection

@section('javascript')
    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/datatables.js') }}"></script>
    <script>
        $(document).ready(function() {








            // $('.users-datatable tfoot th').each( function () {
            //    if($(this).text() !== 'Գործողություններ') {
            //         var title = $(this).text();
            //         console.log(title)
            //         $(this).html( '<input type="text" placeholder="Փնտրել '+title+'" />' );
            //    }
            // });
            var depsDt = $('.users-datatable').CDataTable({
                "pageLength": 3,
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;

                        $( 'input', this.footer() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value.trim() ) {
                                that.search( this.value ).draw();
                            }
                        });
                    });
                }
            });

        });
    </script>
@endsection
