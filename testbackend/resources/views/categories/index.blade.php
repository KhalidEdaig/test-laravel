@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <div class="ml-auto p-2">
            <a  href="{{route('category.create')}}" class="btn btn-dark" title="Ajouter">
                <i class="fa fa-plus fa-2x"></i>
            </a>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">


                <div class="card-header">Data of categories </div>

                <div class="card-body">
                  <!--************** start data of category ******************** -->
                  <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Categories</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)


                        <tr>
                            <td>{{$category->name}}</td>
                            <td>

                                <a  href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-success"  >
                                    <i class="fa fa-pencil-square fa-2x" ></i>
                                </a>

                            </td>
                            <td>
                                <a  href="{{route('category.delete',['id'=>$category->id])}}" class=" btn btn-danger " >
                                    <i class="fa fa-trash-o fa-2x" ></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>


                  </table>
                  <div class="row">
                    <div class="col">
                        {!! $categories->render() !!}
                    </div>
                </div>

                  <!--************** end data of category  ******************** -->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
