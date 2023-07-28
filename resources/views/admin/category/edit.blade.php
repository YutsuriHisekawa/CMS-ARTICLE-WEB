@extends('layouts.admin')
@section('content')


                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold ">Edit</h1>
                    </div>
                </div>

                @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error}}
                </div>
                @endforeach

            @endif
        <form action="{{ route('category.update' , $category->id) }}" method="POST"> 
            @csrf
            @method('patch')
                <div class="form-group">
                <label> Name Category </label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block">Save</button>
                </div>
        </form>
@endsection