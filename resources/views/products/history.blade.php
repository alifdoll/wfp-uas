@extends('layouts.index') 
<!--  -->

@section('ajax')

<script>

  function historyDetail(id) {
    console.log(id);
    $.ajax({
      type: 'POST',
      url: "{{route('order.history')}}",
      data: {
        _token: "<?= csrf_token() ?>",
        id: id,
      },
      success: function(data) {
        console.log(data);
        $("#msg_modal").html(data.msg);
      }
    })
  }
</script>
@endsection

<!--  -->
@section('content')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="/">Home</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black">History</strong>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    @if(count($order) == 0)
                    <h1 class="text-center">No Data</h1>
                    @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                              <th class="product-thumbnail">Id</th>
                                <th class="product-thumbnail">Order Date</th>
                                <th class="product-name">Action</th>
                                <th class="product-name">Status</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $o)
                            <tr class="table-td-content">
                              <td scope="row">{{ $o->id }}</td>
  
                              <td>{{ $o->created_at }}</td>
                              <td>
                                <a
                                      role="button"
                                      class="btn btn-primary"
                                      onclick="historyDetail('{{$o->id}}')"
                                      data-toggle="modal"
                                      data-target="#modal"
                                      ></i>Details</a
                                  >
                              </td>
  
                              <td>
                                  @if($o->paid_at == null)
                                  <p></i>Confirm</p>
                                  @else
                                  <p></i>Confirmed</p>
                                  @endif
                              </td>
                          </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="msg_modal" class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
