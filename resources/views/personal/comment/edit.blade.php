@extends('personal.layouts.main')
@section('content')



<div class="content-wrapper">

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Комментарии</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
        <div class="col-12">

<form action="{{route('personal.comment.update', $comment->id)}}" method="post" class="col-4">
  @csrf
  @method('PATCH')
  <div class="form-group">
    <label>Введите комментарий</label>
    <textarea name="message" class="form-control">{{$comment->message}}</textarea>
  </div>
  @error('message')
<div class="text-danger"><p>{{$message}}</p> </div>
  @enderror
  <input type="submit" class="btn btn-primary" value="Обновить">
</form>
</div>
   
        </div>
   
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection