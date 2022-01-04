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
        
        <table class="table col-3 mt-2">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Message</th>
      <th colspan="3">Действие</th>
   
    </tr>
  </thead>
  <tbody>
    @foreach($comments as $comment)
    <tr>
      <th scope="row">{{$comment->id}}</th>
      <td>{{$comment->message}}</td>
      <!-- <td><a href="{{route('admin.post.show', $comment->id)}}"><i class="far fa-eye"></i></a></td> -->
      <td><a href="{{route('personal.comment.edit', $comment->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
      <td>
      <form action="{{route('personal.comment.delete', $comment->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="border-0 bg-transparent">
          <i class="fas fa-trash text-danger" role="button"></i>
        </button>
        
       
      </form>
      </td>
      
  
    
    </tr>
    
    @endforeach
   
  </tbody>
</table>
   
        </div>
   
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection