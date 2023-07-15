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
                <h3 class="card-title">تعديل مشاريع</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.product.index')}}"> المشاريع</a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">


                <div class="form-group">
                  <label>النوع</label>
                  <select name="category_id" class="form-control">
                      <option value="">الانواع</option>
                      @foreach ($category as $cat)
                          <option value="{{ $cat->id }}"
                              {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}
                          </option>
                      @endforeach
                  </select>
              </div>
                
                <div class="form-group">
                  <label >اسم المشروع</label>
                  <input type="text" name="name" value="{{$product->name}}" class="form-control">
                </div>
                <div class="form-group">
                  <label >وصف المشروع</label>
                  <input type="text" name="description" value="{{$product->description}}"  class="form-control">
                </div>
   
                <div class="form-group">
                  <label >منفذ المشروع </label>
                  <input type="text" name="user" value="{{$product->user}}"   class="form-control">
                </div>
                
                <div class="form-group">
                  <label >تاريخ </label>
                  <input type="text" name="date_at" value="{{$product->date_at}}"  class="form-control">
                </div>
                <div class="form-group">
                  <label>المقال 1 </label>
                  <input type="text" name="description1" value="{{$product->description1}}"  class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>المقال 2 </label>
                  <input type="text" name="description2" value="{{$product->description2}}"  class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>المقال 3 </label>
                  <input type="text" name="description4" value="{{$product->description3}}"  class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>المقال 4 </label>
                  <input type="text" name="description4" value="{{$product->description4}}"  class="form-control"></textarea>
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
