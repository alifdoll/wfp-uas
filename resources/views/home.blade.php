@extends('layouts.index')

@section('content')

<div class="row mb-5 mt-5">
@foreach ($product as $item)
<div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
    <div class="block-4 text-center border">
      <figure class="block-4-image">
        <a href="/productsdetail"><img src="{{ $item->image }}" alt="Image placeholder" style="width: 400px; height: 300px;"></a>
      </figure>
      <div class="block-4-text p-4">
        <h3><a href="/productsdetail">{{ $item->name }}</a></h3>
        <p class="mb-0" style="overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        ">{{ $item->description }}</p>
        <p class="text-primary font-weight-bold">{{ $item->price }}</p>
      </div>
    </div>
  </div>

@endforeach
</div>
    
    
@endsection


