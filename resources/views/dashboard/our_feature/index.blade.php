@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> لماذا نحن</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">  لماذا نحن</li>
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
            <h3 class="card-title">  لماذا نحن</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.our_feature.edit',1) }}" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل</a>
            </div>
          </div>


          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> عنوان</th>
                  <th>وصف </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$our_feature->tittle}}</td>
                  <td>{{$our_feature->description}}</td>
                </tr>
              </tbody>
            </table>
          </div>



          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>عنوان التقرير</th>
                  <th>وصف التقرير </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$our_feature->feture1}}</td>
                  <td>{{$our_feature->description1}}</td>
                </tr>
                <tr>
                  <td>{{$our_feature->feture2}}</td>
                  <td>{{$our_feature->description2}}</td>
                </tr>
                <tr>
                  <td>{{$our_feature->feture3}}</td>
                  <td>{{$our_feature->description3}}</td>
                </tr>
                <tr>
                  <td>{{$our_feature->feture4}}</td>
                  <td>{{$our_feature->description4}}</td>
                </tr>
            
              </tbody>
            </table>
          </div>

 


     

          <table class="table table-bordered">
          <td><img class="w-50" src="{{ $our_feature->image_path }}" alt="Image"></td>
          </table>


          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
