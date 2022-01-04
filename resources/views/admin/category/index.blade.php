@extends('admin.layouts.main')
@section('content')



<div class="content-wrapper">

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Admin</a></li>
              <li class="breadcrumb-item active">Категории</li>
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
        <div class="col-1">
                <a href="{{route('admin.category.create')}}" class="btn btn-block btn-primary">Создать</a>
            </div>
            <div class="col-12"></div>
    

      
         <table class="table col-4 mt-2">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th colspan="3">Действие</th>
   
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->title}}</td>
      <td><a href="{{route('admin.category.show', $category->id)}}"><i class="far fa-eye"></i></a></td>
      <td><a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
      <td>
      <form action="{{route('admin.category.delete', $category->id)}}" method="post">
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
       

         
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection