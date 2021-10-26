@if(session("mensaje") )
    <div class="table-dark">
        {{session('mensaje')}}
    </div>
@endif