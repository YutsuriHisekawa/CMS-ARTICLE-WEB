@extends('layouts.admin')
@section('content')

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold ">Create</h1>
                    </div>
                </div>

        <form action="{{ route('category.store') }}" method="POST"> 
            @csrf
                <div class="form-group">
                <label> Name Category </label>
                <input type="text" class="form-control" name="name" placeholder=" Input Category Name">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block">Save</button>
                </div>
        </form>
@endsection