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
                <h3 class="card-title">تعديل  بيانتنا</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.contact.index')}}">تواصل معنا  </a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.contact.update',$contact->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">
                <div class="form-group">
                 
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>عنوان</th>
                        <th>وصف </th>
                        <th> رقم الهاتف </th>
                        <th>الاميل </th>
                        <th>العنوان </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>   
                       <td> <input type="text" name="tittle"  value="{{$contact->tittle}}" class="form-control"></td>
                       <td> <input type="text" name="description"  value="{{$contact->description}}" class="form-control"></td>
                       <td> <input type="text" name="phone"  value="{{$contact->phone}}" class="form-control"></td>
                       <td> <input type="text" name="email"  value="{{$contact->email}}" class="form-control"></td>
                       <td> <input type="text" name="address"  value="{{$contact->address}}" class="form-control"></td>
                      </tr>
                    </tbody>
                        <thead>
                          <tr>
                            <th>Twitter</th>
                            <th>Facebook</th>
                            <th>Linkedin</th>
                            <th>Instagram</th>
                            <th>Youtube</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <input type="text" name="twitter"  value="{{$contact->twitter}}" class="form-control"></td>
                            <td> <input type="text" name="facebook"  value="{{$contact->facebook}}" class="form-control"></td>
                            <td> <input type="text" name="linkedin"  value="{{$contact->linkedin}}" class="form-control"></td>
                            <td> <input type="text" name="instagram"  value="{{$contact->instagram}}" class="form-control"></td>
                            <td> <input type="text" name="youtube"  value="{{$contact->youtube}}" class="form-control"></td>
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
