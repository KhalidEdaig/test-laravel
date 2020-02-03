@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">


                <div class="card-header">Upload file </div>

                <div class="card-body">
                  <!--************** start form create ******************** -->
                <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="course">Courses :</label>

                            <select name="course_id" id="courses" class="form-control">
                            @foreach ($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>

                          </div>
                        <div class="form-group">
                          <label for="file">Select Image </label>
                          <input type="file" name="image" class="form-control-file" id="file">
                        </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
                  </form>
                  <!--************** end form create ******************** -->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
