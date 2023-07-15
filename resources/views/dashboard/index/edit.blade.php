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
                <h3 class="card-title">تعديل الصفحة الرئسية</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.index.index')}}">الصفحة الرئسية </a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.index.update',$index->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">
                <div class="form-group">
                 
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
                       <td> <input type="text" name="tittle_small"  value="{{$index->tittle_small}}" class="form-control"></td>
                       <td> <input type="text" name="tittle_larg"  value="{{$index->tittle_larg}}" class="form-control"></td>
                       <td> <input type="text" name="button_r"  value="{{$index->button_r}}" class="form-control"></td>
                       <td> <input type="text" name="button_l"  value="{{$index->button_l}}" class="form-control"></td>
                      </tr>
                    </tbody>
                    
                        <thead>
                          <tr>
                            <th>  الزر اليمين</th>
                            <th>  الزر الوسط</th>
                            <th>  الزر اليسار</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <input type="text" name="button_1t"  value="{{$index->button_1t}}" class="form-control"></td>
                            <td> <input type="text" name="button_2t"  value="{{$index->button_2t}}" class="form-control"></td>
                            <td> <input type="text" name="button_3t"  value="{{$index->button_3t}}" class="form-control"></td>
                        </tbody>
                        <tbody>
                          <tr>
                            <td><input type="text" name="button_1r"  value="{{$index->button_1r}}" class="form-control"></td>
                            <td><input type="text" name="button_2c"  value="{{$index->button_2c}}" class="form-control"></td>
                            <td><input type="text" name="button_3l"  value="{{$index->button_3l}}" class="form-control"></td>
                          </tr>
                        </tbody>
                      </table>


                      <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="image" class="form-control image">
                    </div>

                    <div class="form-group">
                        <img src="{{ $index->image_path }}" class="w-50"  class="img-thumbnail image-preview"
                            alt="">
                    </div>
                    
              
            
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
