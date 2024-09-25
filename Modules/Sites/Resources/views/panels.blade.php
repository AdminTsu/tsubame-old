@extends('sites::layouts.admin')

@section('styles')
  @parent
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <style>
    .content-wrapper{
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
  </style>
@endsection

@section('content')
<div class="content-wrapper bg-light">
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Users List</h2>
            <p>Laboris dolore ad id consequat tempor Lorem do cillum.</p>
            <div class="card">
              <div class="card-body">
                  <table class="table" id="myTable">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>email</th>
                          <th>gender</th>
                          <th>birth date</th>
                          <th>in company ?</th>
                          <th>company_name</th>
                          <th>actions</th>

                        </tr>
                      </thead>
                    </table>
              </div>
            </div>
            
          </div>
        </div>

        <div class="row pt-3">
            <div class="col-sm-12">
              <h2>Users List in Company</h2>
              <p>Laboris dolore ad id consequat tempor Lorem do cillum.</p>
              <div class="card">
                <div class="card-body bg-primary text-light">
                    <table class="table table-primary text-dark" id="in_company_table">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>email</th>
                            <th>gender</th>
                            <th>birth date</th>
                            <th>in company ?</th>
                            <th>company_name</th>
                          </tr>
                        </thead>
                      </table>
                </div>
              </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-sm-12">
              <h2>Users List not in Company</h2>
              <p>Laboris dolore ad id consequat tempor Lorem do cillum.</p>
              <div class="card">
                <div class="card-body bg-warning">
                    <table class="table table-warning text-dark" id="out_company_table">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>email</th>
                            <th>gender</th>
                            <th>birth date</th>
                            <th>in company ?</th>
                            <th>company_name</th>
                          </tr>
                        </thead>
                      </table>
                </div>
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
<script>
    $(document).ready( function () {
      $('#myTable').DataTable({
        data: @json($users),
        columns:[
          {data: 'id', name: 'users.id'},
          {data: 'email', name: 'users.email'},
          {data: 'gender', name: 'users.gender'},
          {data: 'date_of_birth', name: 'users.date_of_birth'},
          {data: 'is_in_company', name: 'users.is_in_company'},
          {data: 'company_name', name: 'users.company_name'},
          {data: 'actions', name: 'users.actions'},

        ]
      });
  } );

  $(document).ready( function () {
    $('#in_company_table').DataTable({
      data: @json($users_in_company),
      columns:[
        {data: 'id', name: 'users.id'},
        {data: 'email', name: 'users.email'},
        {data: 'gender', name: 'users.gender'},
        {data: 'date_of_birth', name: 'users.date_of_birth'},
        {data: 'is_in_company', name: 'users.is_in_company'},
        {data: 'company_name', name: 'users.company_name'},
      ]
    });
} );

$(document).ready( function () {
  $('#out_company_table').DataTable({
    data: @json($users_not_in_company),
    columns:[
      {data: 'id', name: 'users.id'},
      {data: 'email', name: 'users.email'},
      {data: 'gender', name: 'users.gender'},
      {data: 'date_of_birth', name: 'users.date_of_birth'},
      {data: 'is_in_company', name: 'users.is_in_company'},
      {data: 'company_name', name: 'users.company_name'},
    ]
  });
} );
</script>
@endsection
