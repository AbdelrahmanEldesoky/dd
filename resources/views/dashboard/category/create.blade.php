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
                <h3 class="card-title">اضافة قسم جديد</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.category.index')}}"> الاقسام</a>
                    <a class="breadcrumb-item active">/ اضافة</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.category.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

              <div class="card-body">



                <div class="form-group">
                  <label >القسم</label>
                  <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                  <label >وصف القسم</label>
                  <input type="text" name="description"  class="form-control">
                </div>


                    </div>
                  </div>

                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value="Create new Project" class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
