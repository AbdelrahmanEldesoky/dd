@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">خدماتنا</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active"> خدمتنا</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> عنوان / وصف</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.service.edit',1) }}" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل</a>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>عنوان</th>
                  <th>وصف </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$service->titale}}</td>
                  <td>{{$service->description}}</td>

                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>
</section><!-- end of content -->
@endsection
