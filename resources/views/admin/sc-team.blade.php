@extends('admin.layouts')

@section('addCss')
<link href="{{ asset('srcAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

    @if(session('sukses'))
      <div class="alert alert-success a" role="alert">
          <i class="icon fa fa-check"></i>
          {{session('sukses')}}
      </div>
    @endif
    @if(session('gagal'))
      <div class="alert alert-danger a" role="alert">
          <i class="icon fas fa-exclamation-triangle"></i>
          {{session('gagal')}}
      </div>
    @endif

@include('admin.modal-hapus')

<div class="row">
<!-- Galeri -->
<div class="col-lg-7 col-md-7">
    <div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Team</div>
            </div>
            <div class="col-auto m-2">
                <button type="button" class="btn btn-sm btn-info btn-icon-split" data-toggle="modal" data-target="#modalTeam">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Tambah</span>
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="teamTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Gambar</th>
                        <th>Label</th>
                        <th>Quote</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
    </div>

    </div>
</div>
<!-- Galeri -->
</div>
@endsection

@section('addScript')
<!-- Page level plugins -->
<script src="{{ asset('srcAdmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('srcAdmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('srcAdmin/js/demo/datatables-demo.js')}}"></script>

<script>
    var table;
    $(function(){
       $("#sc-abt").addClass("active"); 
    });
</script>
@endsection