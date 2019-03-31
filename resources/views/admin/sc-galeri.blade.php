@extends('admin.layouts')

@section('addCss')
<link href="{{ asset('srcAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<!-- <div class="col-xl-12 col-md-12 mb-12">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
</div> -->

<div class="card shadow mb-4 border-left-primary">
<div class="card-header py-3">
    <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Gallery</div>
        </div>
        <div class="col-auto m-2">
            <button type="button" class="btn btn-sm btn-info btn-icon-split" data-toggle="modal" data-target="#addGaleri">
                <span class="icon text-white-50">
                <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Tambah</span>
            </button>
        </div>
    </div>
</div>
@include('admin.add-galeri')
<div class="card-body">
    <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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

@endsection

@section('addScript')
<!-- Page level plugins -->
<script src="{{ asset('srcAdmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('srcAdmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('srcAdmin/js/demo/datatables-demo.js')}}"></script>

<script>
    $(function(){
       $("#sc-gal").addClass("active");

       $("input[type='file'][id$='addGaleri']").change(function(e){
          var fileName = e.target.files[0].name;
          $('.inp-galeri').html(fileName);
       });

       $('#dataTable').dataTable({
            "bDestroy": true,
            processing:true,
            serverSide:true, 
            "lengthMenu": [[5, 10, 25,], [5, 10, 25]],
            ajax: "{!! route('listGaleri') !!}",
            order:[0,'desc'],
            columns:[
              {data:'id',name:'id'},
              {data:'foto',name:'foto'},
              {data:'label',name:'lavel'},
              {data:'quote',name:'quote'},
              {data:'action',name:'action'}
            ]
        });
    });
</script>
@endsection