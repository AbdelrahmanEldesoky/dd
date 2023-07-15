@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">خطة العمل</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active"> خطة العمل</li>
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
            <h3 class="card-title">خطة العمل</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.plan.edit',$plan->id) }}" class="btn btn-primary"><i class="fa fa-plus"></i>   تعديل</a>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th >
                            العنوان
                        </th>
                        <th >
                          الوصف
                      </th>
                        <th>
                            اظهار مقال كامل
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a>
                                {{$plan->name}}
                            </a>
                        </td>
                        <td>
                          <a>
                              {{$plan->description}}
                          </a>
                      </td>
                        <td>
                          <a class="btn btn- btn-sm" href="{{route('dashboard.plan.show',$plan->id)}}">
                            <i class="fas fa-eye">
                            </i>
                            
                        </a>
                        </td>
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
