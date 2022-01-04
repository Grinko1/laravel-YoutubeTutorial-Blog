@extends('admin.layouts.main')
@section('content')



<div class="content-wrapper">


  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактирование Пользователя</h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
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

          <form action="{{route('admin.user.update', $user->id)}}" method="post" class="col-4">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="email">
              @error('email')
              <div class="text-danger">
                <p>{{$message}}</p>
              </div>
              @enderror
            </div>
            <div class="form-group">
              <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Имя">
              @error('name')
              <div class="text-danger">
                <p>{{$message}}</p>
              </div>
              @enderror
            </div>

            <div class="form-group w-50">
              <label>Выберите роль пользователя</label>

              <select name="role" class="form-control">
                @foreach($roles as $id => $role)
                <option value="{{$id}}" {{$id == $user->role ? 'selected' : ''}}>{{$role}}</option>
                @endforeach

              </select>
              @error('role')
              <div class="text-danger">
                <p>{{$message}}</p>
              </div>
              @enderror
            </div>
            
            <div class="form-group">
              <input type="hidden" name="user_id" value="{{$user->id}}" class="form-control" placeholder="Имя">
            </div>



            <input type="submit" class="btn btn-primary" value="Обновить">
          </form>
        </div>


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