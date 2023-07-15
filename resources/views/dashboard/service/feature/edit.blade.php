@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل  عنوان الخدمة</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.service_feature.index')}}"> خصائص الخدمة  </a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.service_feature.update',$service_feature->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">
                <div class="form-group">
                 
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>اسم</th>
                        <th>وصف </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>   
                       <td> <input type="text" name="name"  value="{{$service_feature->name}}" class="form-control"></td>
                       <td> <input type="text" name="description"  value="{{$service_feature->description}}" class="form-control"></td>
                      </tr>
                    </tbody>
                      </table>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value="تعديل " class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
