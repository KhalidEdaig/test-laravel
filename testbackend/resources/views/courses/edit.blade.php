@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">


                <div class="card-header">Edit Course</div>

                <div class="card-body">
                  <!--************** start form create ******************** -->
                <form action="{{route('course.update',['id'=>$course->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category">Category</label>

                        <select name="category_id" id="category" class="form-control">

                            @foreach ($categories as $category)
                            @if ($course->category_id == $category->id )
                            <option value="{{$course->category_id}}">{{$category->name}}</option>
                            @endif
                            @endforeach
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>

                      </div>
                    <div class="form-group">
                      <label for="name">Name of course</label>
                      <input type="text" name="name" class="form-control" id="name" value="{{$course->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  class="form-control" id="description" name="description" rows="8" cols="8">
                            {{$course->description}}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                  <!--************** end form create ******************** -->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
