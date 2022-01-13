@extends('layouts.app')
@section('content')
<div class="container mt-5">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @elseif(Session::has('errors'))
        <div class="alert alert-danger">
            {{Session::get('errors')}}
        </div>
    @endif

    @if($academic)
    <form action="/academic/update" method="post">
        @csrf
        @method('put')
        
    <div style="text-align: center ">
        <label justify>Update/View you academic details</label> 
    </div>
    @livewire('edit-academic',['academic'=>$academic])
    <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
    <div style="text-align: center ">


    <input type="submit" value="Update" class="p-2 border rounded " />
    </div>



        
    </form>

    @else
    <form action="/academic" method="post">
        @csrf
        
    <div style="text-align: center ">
        <label justify>Enter your academic details</label> 
    </div>
    @livewire('add-academic')
    <input name="user_id" type="hidden" value="{{auth()->user()->id}}">

    <div style="text-align: center ">
    <input type="submit" value="Create" class="p-2 border rounded" />
    </div>


        
    </form>
    @endif

</div>

@endsection

