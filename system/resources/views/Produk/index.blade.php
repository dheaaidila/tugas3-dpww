@extends('Template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Product
                        <a href="{{url('Produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach($list_produk as $Produk)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('Produk', $Produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('Produk', $Produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('Template.utils.delete', ['url' => url('Produk', $Produk->id)])
                                        </div>
                                    </td>
                                    <td>{{$Produk->nama}}</td>
                                    <td>{{$Produk->harga}}</td>
                                    <td>{{$Produk->stok}}</td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
