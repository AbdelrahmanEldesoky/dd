@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">الاقسام</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active"> الاقسام</li>
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
            <h3 class="card-title">القسم</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.section.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            الاسم
                        </th>
                        <th >
                            التفاصيل
                        </th>
                        <th>
                            النوع
                        </th>
                        <th>
                            الصور
                        </th>
                        <th style="width: 8%" class="text-center">
                            الحالة
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($sections)
                    @foreach ($sections as $index=>$section)
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                            <a>
                                {{$section->name}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$section->description}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$section->type->name}}
                            </a>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                </li>
                            </ul>
                        </td>

                        <td class="project-state">

                            @if($section->is_active ==1)
                            <span class="badge badge-success">مفعل</span>
                            @else
                            <span class="badge badge-danger">غير مفعل</span>
                            @endif
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{route('dashboard.section.edit',$section->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                تعديل
                            </a>

                            <form action="{{ route('dashboard.section.destroy', $section->id) }}" method="post" style="display: inline-block">
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
