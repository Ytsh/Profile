@extends('layouts.app')
@section('content')
<!-- Success message -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@elseif(Session::has('errors'))
    <div class="alert alert-danger">
        {{Session::get('errors')}}
    </div>
@endif

@if($professional)

<form action="/professional/update" method="post">
    @csrf
    @method('put')
    <div style="text-align: center " >

    <input type="text" name="c_profession" value="{{$professional->c_profession}}"/>
    @livewire('edit-professional',['experiences'=>$professional->experiences])
    <input name="user_id" type="hidden" value="{{auth()->user()->id}}"/>
    


    <input type="submit" value="Create" class="p-2 border rounded" />
</div>

</form>



@else


<form action="/professional" method="post">
    @csrf
    <div style="text-align: center " >

    <input type="text" name="c_profession" placeholder="Current Professsion">
    @livewire('add-professional')
    <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
    


    <input type="submit" value="Create" class="p-2 border rounded" />

</form>
</div>
@endif


@endsection