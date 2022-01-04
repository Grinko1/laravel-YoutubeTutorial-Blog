@extends('admin.layouts.main')
@section('content')



<div class="content-wrapper">


  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактирование поста</h1>
        
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

          <form action="{{route('admin.post.update', $post->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PATCH')
            <div class="form-group w-25" >
              <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Название поста">
            
            @error('title')
            <div class="text-danger">
              <p>{{$message}}</p>
            </div>
            @enderror
            </div>

            <div class="form-group">
                <textarea id="summernote" name="content">{{$post->content}}</textarea>
                @error('content')
            <div class="text-danger">
              <p>{{$message}}</p>
            </div>
            @enderror
            </div>
            <div class="form-group w-50">
              <div class="w-25 mb-3">
                <img src="{{url('storage/' . $post->preview_image)}}" alt="" class="w-50">
              </div>
            <!-- <label class="custom-file-label" for="exampleInputFile">Добавить превью</label> -->
            <div class="input-group ">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="preview_image">
                        <label class="custom-file-label" >Изменить превью</label>
                        
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                    @error('preview_image')
            <div class="text-danger">
              <p>{{$message}}</p>
            </div>
            @enderror
            </div>

            <div class="form-group w-50">
            <div class="w-25 mb-3">
                <img src="{{url('storage/' .$post->main_image)}}" alt="" class="w-50">
              </div>
            <!-- <label class="custom-file-label" for="exampleInputFile">Добавить главное изображение</label> -->
            <div class="input-group ">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="main_image">
                        <label class="custom-file-label" >Изменить главное изображение</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                    @error('main_image')
            <div class="text-danger">
              <p>{{$message}}</p>
            </div>
            @enderror
            </div>

            <div class="form-group w-50">
                        <label>Выберите категорию</label>
                      
                        <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}"
                          {{$category->id == $post->category_id ? 'selected' : ''}}  
                          >{{$category->title}}</option>
                          @endforeach
                       
                        </select>
                        @error('category_id')
            <div class="text-danger">
              <p>{{$message}}</p>
            </div>
            @enderror
                      </div>

                      <div class="form-group">
                  <label>Тэги</label>
                  <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                  @foreach($tags as $tag)
                    <option value="{{$tag->id}}"
                    {{ is_array( $post->tags->pluck('id')->toArray()) && in_array($tag->id , $post->tags->pluck('id')->toArray()) ? 'selected' : ''}}   
                    >{{$tag->title}}</option>
                    @endforeach
              
                  </select>
                  @error('tag_ids')
            <div class="text-danger">
              <p>{{$message}}</p>
            </div>
            @enderror
                </div>
           

           
            <input type="submit" class="btn btn-primary mt-3" value="Обновить">


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