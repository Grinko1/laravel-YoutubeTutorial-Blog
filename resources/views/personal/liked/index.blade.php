@extends('personal.layouts.main')
@section('content')



<div class="content-wrapper">

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Понравившиеся посты</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Понравившиеся посты</li>
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
      



        <div class="row w-50">
        <!-- <div class="col-1">
                <a href="{{route('admin.post.create')}}" class="btn btn-block btn-primary">Создать</a>
            </div> -->
            <div class="">
    

      
         <table class="table col-3 mt-2">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th colspan="2">Действие</th>
   
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td><a href="{{route('admin.post.show', $post->id)}}"><i class="far fa-eye"></i></a></td>
      <!-- <td><a href="{{route('admin.post.edit', $post->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td> -->
      <td>
      <form action="{{route('personal.liked.delete', $post->id)}}" method="post">
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

        </div>
   
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection