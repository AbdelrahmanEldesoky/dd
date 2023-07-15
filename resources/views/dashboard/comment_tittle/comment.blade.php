@extends('layouts.dashboard.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> تفاصيل الشكاوي</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">تفاصيل الشكاوي</li>
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
            <h3 class="card-title">  الشكاوي</h3>
            <div class="card-tools">
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>الاسم</th>
                  <th>  الاميل </th>
                  <th>  عنوان الموضوع </th>
                  <th>  الموضوع </th>
                  <th>  التاريخ </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($comments as $comment)
                <tr>
                  <td>{{$comment->name}}</td>
                  <td>{{$comment->email}}</td>
                  <td>{{$comment->tittle}}</td>
                  <td>{{$comment->comment}}</td>
                  <td>{{$comment->created_at}}</td>
                </tr>
                @endforeach
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
