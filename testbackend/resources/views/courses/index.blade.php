@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <div class="ml-auto p-2">
            <a  href="{{route('course.create')}}" class="btn btn-dark" title="Ajouter">
                <i class="fa fa-plus fa-2x"></i>
            </a>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Data of courses </div>

                <div class="card-body">
                  <!--************** start data of category ******************** -->
                  <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Courses</th>
                            <th scope="col">Description</th>
                            <th scope="col">categories</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->name}}</td>
                            <td>{{$course->description}}</td>
                            @foreach ($categories as $category)
                            @if ($course->category_id==$category->id)
                            <td>{{$category->name}}</td>
                            @endif
                            @endforeach
                            <td>
                                <a  href="{{route('course.edit',['id'=>$course->id])}}" class="btn btn-success">
                                    <i class="fa fa-pencil-square fa-2x"></i>
                                </a>
                            </td>
                            <td>
                                <a  href="{{route('course.delete',['id'=>$course->id])}} " class="btn btn-danger">
                                    <i class="fa fa-trash-o fa-2x"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                  </table>
                  <div class="row">
                    <div class="col">
                        {!! $courses->render() !!}
                    </div>
                </div>
                  <!--************** end data of category  ******************** -->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
