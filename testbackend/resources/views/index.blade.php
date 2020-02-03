@extends('layouts.app')

@section('content')
<div class="container">
    @if ($courses->count()>0)
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif



                <!--************** start data of images  ******************** -->
                <div class="row">
                    @foreach ($images as $image)
                    @foreach ($courses as $course)
                    @if ($course->id==$image->imageable_id)
                <div class="col-md-4">

                        <div class="card">

                        <img src="{{ asset('storage/'.$image->file_name) }}" class="card-img-top" width="200" height="200" alt="{{$course->name}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$course->name}}</h5>
                                <p class="card-text">{{$course->description}}</p>
                                <p class="card-text"><small class="text-muted">Created {{$course->created_at}}</small></p>
                                <p class="card-text"><small class="text-muted">Last updated {{$course->updated_at}}</small></p>
                            </div>
                        </div>

                </div>
                @endif
                @endforeach
            @endforeach
            </div>
            <!--************** end data of images  ******************** -->
                </div>
            </div>
        </div>

    @else

                           <!--************** Start alert ************** -->

                           <div class="alert alert-danger" role="alert">
                           <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <h1>Bienvenu dans notre site web pour developper votre compétances <br></h1>
                                <p>Maintenent nous preparons pluseiurs formations sur les categories suivant : </p>
                            </li>
                           @foreach ($categories as $category)
                           <li class="nav-item active">
                            {{ $category->name }}
                           </li>
                           @endforeach
                           </ul>
                           </div>


                           <!--************** end alert ************** -->
    @endif
</div>
@endsection
