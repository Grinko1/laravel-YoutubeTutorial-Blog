@extends('admin.layouts.main')
@section('content')



<div class="content-wrapper">


  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 d-flex align-items-center">
          <h1 class="m-0 mr-2">{{$user->name}}</h1>
          <a href="{{route('admin.user.edit', $user->id)}}" class="text-success mr-2"><i class="fas fa-pencil-alt"></i></a>
          <form action="{{route('admin.user.delete', $user->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="border-0 bg-transparent">
              <i class="fas fa-trash text-danger" role="button"></i>
            </button>


          </form>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Admin</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
              <li class="breadcrumb-item active">{{$user->name}}</li>
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

        <div class="col-12"></div>



        <table class="table col-4 mt-2">

          <tbody>

            <tr>
              <th scope="row">ID</th>
              <td>{{$user->id}}</td>

            </tr>
            <tr>
              <th scope="row">Имя</th>
              <td>{{$user->name}}</td>

            </tr>



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