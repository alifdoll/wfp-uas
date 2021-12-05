@extends('layouts.index')

@section('content')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">

      <div class="row mb-5">
        <div class="col-md-9 order-2">

          <div class="row">
            <div class="col-md-12 mb-5">
              <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
              <div class="d-flex">
                <div class="dropdown mr-1 ml-md-auto">
                  
                  
                </div>
                
              </div>
            </div>
          </div>
          <div class="row mb-5">

            @foreach ($product as $p)
                
            
            <div class="col-sm-12 col-lg-4 mb-4" data-aos="fade-up">
              <div class="block-4 text-center border">
                <figure class="block-4-image">
                  <a href="/product/{{ $p->id }}"><img src="{{ $p->image }}" alt="Image placeholder" style="width: 200px; height: 150px;"></a>
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="/productsdetail">{{ $p->name }}</a></h3>
                  <p class="mb-0" style="overflow: hidden;
                  white-space: nowrap;
                  text-overflow: ellipsis;
                  ">{{ $p->description }}</p>
                  <p class="text-primary font-weight-bold">{{ $p->price }}</p>
                </div>
              </div>
            </div>
            @endforeach


          </div>
          
        </div>

        
      </div>

      
      
    </div>
  </div>

@endsection