@extends('master')

@section('title')
    <title>My projects</title>
@endsection


@section('content')
    <div class="page_margin">


        <div class="container px-4 py-5 mt-5" >

            <h2 class="pb-4 border-bottom text-center ">My Project List </h2>
            <div class="row g-4 py-2 row-cols-1 row-cols-lg-3 d-flex flex-wrap">
            @foreach($data as $project => $value)
                
                <div class="col d-flex align-items-start p-2">
                    <div class="card ">
                        <div class="card-body">
                            <h4>{{ $value['title'] }}</h4>
                            <p>{{ $value['description'] }}</p>
                            <a href="#" class="btn btn-success">
                                Details
                            </a>
                        </div>
                        
                    </div>
                </div>  
                
                
                
                @endforeach
            </div>
        </div>
        
    </div>

  
    
@endsection
