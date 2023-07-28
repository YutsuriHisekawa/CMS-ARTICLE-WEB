@extends('layouts.admin')
@section('content')

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-bold ">Category</h1>
                        <a href="{{route('category.create')}}" class="btn btn-success shadow-sm btn-sm font-weight-bold"><i
                                class="fas fa-download fa-sm text-white-50 "></i> Add New Category</a>
                    </div>
                </div>
                  
                                <table class="table table-striped table hover table-sm table-bordered" >
                                    <thead>
                                        <tr>
                                        <td class="text-center font-weight-bold" >No.</td>
                                        <td class="text-center font-weight-bold" >Category</td>    
                                        <td class="text-center font-weight-bold" >Action</td>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        </tr>
                                    </tfoot>
                                    @foreach ($category as $data => $hasil)
                                    <tbody>
                                        <tr>
                                            <td class="text-center" >{{$data + $category->firstitem()}}</td>
                                            <td class="text-center" >{{ $hasil->name}}</td>
                                            <td class="text-center font-weight-bold" >
                                            <a href="" class="btn btn-primary btn-circle shadow-sm">
                                                <i class="fa-solid fa-gears"></i></a>
                                            <a href="#" class="btn btn-danger btn-circle shadow-sm">
                                            <i class="fas fa-trash"></i>
                                    </a></td>


                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                {{$category->links()}}


                @push('scripts')

                @endpush
@endsection