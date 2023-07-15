@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">منشورات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active"> منشورات</li>
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
            <h3 class="card-title">منشورات</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.post.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th >
                            الاسم
                        </th>
                        <th >
                          الصورة
                      </th>

                        <th>
                            الاكشن
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($posts)
                    @foreach ($posts as $index=>$post)
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                            <a>
                                {{$post->tittle}}
                            </a>
                        </td>
                        <td>

                            <img class="w-50" src="{{ $post->image_path }}" alt="Image">

                      </td>
                        <td>
                            
                        </a>
                            <a class="btn btn-info btn-sm" href="{{route('dashboard.post.edit',$post->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                تعديل
                            </a>

                            <form action="{{ route('dashboard.post.destroy', $post->id) }}" method="post" style="display: inline-block">
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
