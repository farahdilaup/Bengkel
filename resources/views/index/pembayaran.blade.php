@extends('home')
    @section('csscustom')
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    @endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
     <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                  <h4 class="card-title">Data Pembayaran</h4>
                                <div class="table-responsive">
                           <!--  <a href="tambah_lokasi" class="btn btn-primary" >+ Tambah Lokasi</a>
                                <br/></br> -->
                    </div>
                    <div class="card-body">
                       <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                            <tr>
                              <th>ID Pembayaran</th>
                              <th>ID Penjualan</th>
                              <th>Nama pegawai</th>
                              <th>Waktu pembayaran</th>
                              <th>Total pembayaran</th>
                              <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pembayaran as $data)
                            <tr>
                                <td>{{ $data->id_pembayaran }}</td>
                                <td>{{ $data->id_penjualan }}</td>
                                <td>{{ $data->id}}</td>
                                <td>{{ $data->waktu_pembayaran }}</td>
                                <td> 
                                <td>{{ $data->total_pembayaran }}</td>
                                <td>
                                <a href="#" class="btn btn-danger btn-xs">EDIT
                                    <i class="fa fa-trash-o"></i> HAPUS</a>
                               </td>
                            </tr>
                            @endforeach
                             </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
@endsection

@section('jscustom')
    <script src="{{ asset('asset/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
<script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

@endsection
