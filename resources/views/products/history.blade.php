@extends('layouts.index')

@section('content')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">History</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total">Total</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-thumbnail">
                    <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">Top Up T-Shirt</h2>
                  </td>
                  <td>$49.00</td>
                  <td>
                  1

                  </td>
                  <td>$49.00</td>
                  
                </tr>

                <tr>
                  <td class="product-thumbnail">
                    <img src="images/cloth_2.jpg" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">Polo Shirt</h2>
                  </td>
                  <td>$49.00</td>
                  <td>
                    1

                  </td>
                  <td>$49.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </form>
      </div>

      
    </div>
  </div>

@endsection