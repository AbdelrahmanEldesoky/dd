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
                <h3 class="card-title">اضافة مشاريع</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.product.index')}}"> المشاريع</a>
                    <a class="breadcrumb-item active">/ اضافة</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.product.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

              <div class="card-body">

                <div class="form-group">
                    <label>القسم</label>
                    <select name="category_id" class="form-control">
                        <option value="">اختار الاقسم</option>
                        @foreach ($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                  <label >اسم المشروع</label>
                  <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                  <label >وصف المشروع</label>
                  <input type="text" name="description"  class="form-control">
                </div>
   
                <div class="form-group">
                  <label >منفذ المشروع </label>
                  <input type="text" name="user"  class="form-control">
                </div>
                
                <div class="form-group">
                  <label >تاريخ </label>
                  <input type="text" name="date_at"  class="form-control">
                </div>
                <div class="form-group">
                  <label>المقال 1 </label>
                  <textarea type="text" name="description1"  class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>المقال 2 </label>
                  <textarea type="text" name="description2"  class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>المقال 3 </label>
                  <textarea type="text" name="description3"  class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>المقال 4 </label>
                  <textarea type="text" name="description4"  class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>وصورة</label>
                  <input type="file" name="image" class="form-control image">
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
                <input type="submit" value="اضافة" class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
