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
                <h3 class="card-title">تعديل  لماذا نحن</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.our_feature.index')}}"> لماذا نحن </a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.our_feature.update',$our_feature->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">
                <div class="form-group">
                 
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th> عنوان</th>
                        <th>وصف </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>   
                       <td> <input type="text" name="tittle"  value="{{$our_feature->tittle}}" class="form-control"></td>
                       <td> <input type="text" name="description"  value="{{$our_feature->description}}" class="form-control"></td>
                      </tr>
                    </tbody>
                    
                        <thead>
                          <tr>
                            <th>عنوان التقرير</th>
                            <th>وصف التقرير </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <input type="text" name="feture1"  value="{{$our_feature->feture1}}" class="form-control"></td>
                            <td> <input type="text" name="description1"  value="{{$our_feature->description2}}" class="form-control"></td>
                          </tr>
                          <tr>
                            <td> <input type="text" name="feture2"  value="{{$our_feature->feture2}}" class="form-control"></td>
                            <td> <input type="text" name="description2"  value="{{$our_feature->description2}}" class="form-control"></td>
                          </tr>
                          <tr>
                            <td> <input type="text" name="feture3"  value="{{$our_feature->feture3}}" class="form-control"></td>
                            <td> <input type="text" name="description3"  value="{{$our_feature->description3}}" class="form-control"></td>
                          </tr>
                          <tr>
                            <td> <input type="text" name="feture4"  value="{{$our_feature->feture4}}" class="form-control"></td>
                            <td> <input type="text" name="description4"  value="{{$our_feature->description4}}" class="form-control"></td>
                          </tr>
                        </tbody>
              
                      </table>

                      <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="image" class="form-control image">
                    </div>

                    <div class="form-group">
                        <img src="{{ $our_feature->image_path }}" class="w-50"  class="img-thumbnail image-preview"
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
