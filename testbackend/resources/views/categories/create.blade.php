@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">


                <div class="card-header">Create Category</div>

                <div class="card-body">
                  <!--************** start form create ******************** -->
                <form action="{{route('category.store')}}" method="POST" >
                    @csrf
                    <div class="form-group">
                      <label for="name">Name of category</label>
                      <input type="text" name="name" class="form-control" id="name" >
                    </div>


                    <button type="submit" class="btn btn-success">Add</button>
                  </form>
                  <!--************** end form create ******************** -->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
