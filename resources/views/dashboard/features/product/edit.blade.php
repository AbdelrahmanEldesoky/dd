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
                <h3 class="card-title">اضافة نوع حجز جديد</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.type.index')}}">انوع الحجوزات</a>
                    <a class="breadcrumb-item active">/ اضافة</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="form-group">
                    <label>النوع</label>
                    <select name="section_id" class="form-control">
                        <option value="">الانواع</option>
                        @foreach ($sections as $section)
                            <option value="{{ $section->id }}"
                                {{ $product->section_id == $section->id ? 'selected' : '' }}>{{ $section->name }}
                            </option>
                        @endforeach
                    </select>
                </div>



              <div class="card-body">
                <div class="form-group">
                  <label >الاسم</label>
                  <input type="text" name="name"  value="{{$product->name}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>الوصف</label>
                  <input class="form-control" name="description" value="{{$product->description}}" rows="3">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">الصورة</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">اختر الصورة</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>السعر</label>
                    <input type="number" class="form-control" name="total_price" value="{{$product->total_price}}" >
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="is_active" @if ($product->is_active == 1)
                    checked value="1"
                    @else
                    value ="0"
                    @endif  id="exampleCheck1">
                    <label >الحالة</label>
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
