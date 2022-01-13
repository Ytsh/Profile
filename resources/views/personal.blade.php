@extends('layouts.app')
@section('content')

<div class="container mt-5">

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

        @if($personal)
            <form action="/personal/update" method="post">

                <!-- CROSS Site Request Forgery Protection -->
                @csrf
                @method('put')

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $personal->name }}" >
                </div>

                <div class="form-group">
                    <label>Father's Name</label>
                    <input type="text" class="form-control" name="father_name" id="father_name" value="{{ $personal->father_name }}">
                </div>

                <div class="form-group">
                    <label>Mother's Name</label>
                    <input type="text" class="form-control" name="mother_name" id="mother_name" value="{{ $personal->mother_name }}">
                </div>

                <div class="form-group">
                    <label>GrandFather's Name</label>
                    <input type="text" class="form-control" name="grandfather_name" id="grandfather_name" value="{{ $personal->grandfather_name }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $personal->email }}">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $personal->phone }}">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{ $personal->address }}">
                </div>

                <div class="form-group">
                    <label>Ward no.</label>
                    <input type="text" class="form-control" name="ward" id="ward" value="{{ $personal->ward }}">
                </div>
                <input type="submit" name="send" value="Update" class="btn btn-dark btn-block">

            </form>
        
        @else

            <form action="/personal" method="post">

                <!-- CROSS Site Request Forgery Protection -->
                @csrf

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="">
                </div>

                <div class="form-group">
                    <label>Father's Name</label>
                    <input type="text" class="form-control" name="father_name" id="name">
                </div>

                <div class="form-group">
                    <label>Mother's Name</label>
                    <input type="text" class="form-control" name="mother_name" id="name">
                </div>

                <div class="form-group">
                    <label>GrandFather's Name</label>
                    <input type="text" class="form-control" name="grandfather_name" id="name">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{auth()->user()->email}}">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>

                <div class="form-group">
                    <label>Ward no.</label>
                    <input type="text" class="form-control" name="ward" id="ward">
                </div>

                <input name="user_id" type="hidden" value="{{auth()->user()->id}}">

                <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">

            </form>
        
        @endif
        
</div>
@endsection
