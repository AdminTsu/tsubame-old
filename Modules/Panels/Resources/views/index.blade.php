@extends('panels::layouts.admin')

@section('styles')
  @parent
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap4.min.css">
  
  
  
@endsection

@section('content')
<div class="content-wrapper bg-light">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 mt-2">
            <h2>Daftar semua pengguna</h2>
            <p>-</p>
            <div class="card">
              <div class="card-body" style="overflow-x:scroll">
                  <table class="table table-responsive" id="myTable">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Foto</th>
                          <th>Email</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Lahir</th>
                          <th>Terdaftar di Perusahaan?</th>
                          <th>Nama Perusahaan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                    </table>
              </div>
            </div>
            
          </div>
        </div>

        
      
</div>

@endsection


@section('scripts')
@parent
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    $(document).ready( function () {
      $('#myTable').DataTable({
        responsive:true,
        data: @json($users),
        columns:[
          {data: 'first_name', name: 'users.first_name'},
          {data: 'photo', name: 'users.photo'},
          {data: 'email', name: 'users.email'},
          {data: 'gender', name: 'users.gender'},
          {data: 'date_of_birth', name: 'users.date_of_birth'},
          {data: 'is_in_company', name: 'users.is_in_company'},
          {data: 'company_name', name: 'users.company_name'},
          {data: 'actions', name: 'users.actions'},
        ]
      });

      $.ajaxSetup({
        
      });
      $('[data-type="delete-button"]').click(function(e){
        swal('Hapus','yakin untuk menghapus user dengan id: '+e.currentTarget.dataset['id'],'warning').then(function(){
          $.ajax({
            url : e.currentTarget.dataset['url'], 
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method : "DELETE"
          });
        });
      })
  } );
</script>
@endsection
