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
                <h3 class="card-title">المقال</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.product.index')}}"> المشاريع</a>
                    <a class="breadcrumb-item active">/ المقال</a>
                </div>
              </div>


              <div class="card-body">
                <div class="form-group">
                  <b> {{$product->name}} </b> 
                </div>
                <div class="form-group">
                  <b> {{$product->description}} </b> 
                </div>
                <div class="form-group">
                  <sub> {{$product->description1}} </sub> 
                </div>
                <div class="form-group">
                  <sub> {{$product->description2}} </sub> 
                </div>
                <div class="form-group">
                  <sub> {{$product->description3}} </sub> 
                </div>
                <div class="form-group">
                  <sub> {{$product->description4}} </sub> 
                </div>
                <div class="form-group">
                  <img class="w-50" src="{{ $product->image_path }}" alt="Image">
                </div>
                    </div>
                  </div>
                    <a class="btn btn-info btn-sm" href="{{route('dashboard.product.index')}}"> رجوع</a>
                </div>
              
              </div>
              <!-- /.card-body -->
           
            </div>
        
            <!-- /.card -->
          </div>
     
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
