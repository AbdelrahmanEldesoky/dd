@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">البنود</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active"> البنود</li>
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
            <h3 class="card-title">البنود</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.product.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th>
                            الاسم
                        </th>
                        <th >
                            التفاصيل
                        </th>
                        <th>
                            السعر
                        </th>
                        <th>
                            النوع
                        </th>
                        <th>
                            الصور
                        </th>
                        <th>
                            الحالة
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($products)
                    @foreach ($products as $index=>$product)
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                            <a>
                                {{$product->name}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$product->description}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$product->total_price}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$product->section->name}}
                            </a>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                </li>
                            </ul>
                        </td>

                        <td>

                            @if($product->is_active ==1)
                            <span class="badge badge-success">مفعل</span>
                            @else
                            <span class="badge badge-danger">غير مفعل</span>
                            @endif
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{route('dashboard.product.edit',$product->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                تعديل
                            </a>

                            <form action="{{ route('dashboard.product.destroy', $product->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>حذف</button>
                            </form><!-- end of form -->


                        </td>
                    </tr>
                    @endforeach
                    @endisset
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
