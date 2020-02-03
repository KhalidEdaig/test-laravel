@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Images </div>
                   <!--************** start data of images  ******************** -->
                    <div class="row">
                        @foreach ($images as $image)
                      <div class="col-md-4">
                        <div class="card">

                        <img src="{{ asset('storage/'.$image->file_name) }}" class="card-img-top" height="200" width="200" alt="">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Created {{$image->created_at}}</small></p>
                                <p class="card-text"><small class="text-muted">Last updated {{$image->updated_at}}</small></p>
                                <a  class="btn btn-success" href="{{route('image.edit',['id'=>$image->id])}}">
                                  <i class="fa fa-pencil-square"></i>
                              </a>
                                <a  class="btn btn-danger" href="{{route('image.delete',['id'=>$image->id])}}">
                                  <i class="fa fa-trash-o"></i>
                                  </a>
                            </div>
                          </div>

                    </div>
                    @endforeach
                  </div>
                <!--************** end data of images  ******************** -->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
