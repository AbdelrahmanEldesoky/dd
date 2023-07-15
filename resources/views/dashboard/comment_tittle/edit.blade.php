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
                <h3 class="card-title">تعديل تفاصيل الشكاوي </h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.comment_tittle.index')}}">تفاصيل الشكاوي   </a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.comment_tittle.update',$comment_tittle->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">
                <div class="form-group">
                 
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>عنوان</th>
                        <th> رقم الهاتف </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>   
                       <td> <input type="text" name="tittle"  value="{{$comment_tittle->tittle}}" class="form-control"></td>
                       <td> <input type="text" name="phone"  value="{{$comment_tittle->phone}}" class="form-control"></td>
                      </tr>
                    </tbody>
                        <thead>
                          <tr>
                            <th>عنوان</th>
                            <th>وصف</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <input type="text" name="feture1"  value="{{$comment_tittle->feture1}}" class="form-control"></td>
                            <td> <input type="text" name="description1"  value="{{$comment_tittle->description1}}" class="form-control"></td>
                          </tr>
                          <tr>
                            <td> <input type="text" name="feture2"  value="{{$comment_tittle->feture2}}" class="form-control"></td>
                            <td> <input type="text" name="description2"  value="{{$comment_tittle->description2}}" class="form-control"></td>
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
