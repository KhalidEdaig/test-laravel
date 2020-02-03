@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">


                <div class="card-header">Edit Category : {{$category->name}}</div>

                <div class="card-body">
                  <!--************** start form create ******************** -->
                <form action="{{route('category.update',['id'=>$category->id])}}" method="post" >
                    @csrf
                    <div class="form-group">
                      <label for="name">Name of category</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control" id="name" >
                    </div>


                    <button type="submit" class="btn btn-primary">update</button>
                  </form>
                  <!--************** end form create ******************** -->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
