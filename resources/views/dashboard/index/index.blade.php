@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">الصفحة الرئسية</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active"> الصفحة الرئسية</li>
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
            <h3 class="card-title"> الصفحة الرئسية</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.index.edit',1) }}" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل</a>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>عنوان الموقع</th>
                  <th>وصف الموقع</th>
                  <th> زر اليمين</th>
                  <th>زر اليسار</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$index->tittle_small}}</td>
                  <td>{{$index->tittle_larg}}</td>
                  <td>{{$index->button_r}}</td>
                  <td>{{$index->button_l}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>  الزر اليمين</th>
                  <th>  الزر الوسط</th>
                  <th>  الزر اليسار</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$index->button_1t}}</td>
                  <td>{{$index->button_2t}}</td>
                  <td>{{$index->button_3t}}</td>
              </tbody>
              <tbody>
                <tr>
                  <td>{{$index->button_1r}}</td>
                  <td>{{$index->button_2c}}</td>
                  <td>{{$index->button_3l}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <table class="table table-bordered">
          <td><img class="w-50" src="{{ $index->image_path }}" alt="Image"></td>
          </table>


          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
