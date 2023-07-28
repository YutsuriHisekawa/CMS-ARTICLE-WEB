@extends('layouts.admin')
@section('content')


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    <a href="{{route('category.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
</div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session('success') }}
                </div>
                @endif          

                                <table class="table table-striped table-hover table-sm table-bordered" >
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
                                                <form action="{{route('category.destroy' , $hasil->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <a href="{{ route('category.edit', $hasil->id ) }}" class="btn btn-primary btn-circle shadow-sm">
                                                    <i class="fas fa-solid fa-gears"></i></a>
                                                
                                                    <button type="submit"  class="bg-red-500 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 w-72 h-72 rounded-full ">
                                                        <i class="fa-solid fa-trash-can" style="color: #fff;"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                {{$category->links()}}


                                
                @push('scripts')

                @endpush
@endsection

