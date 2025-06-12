@extends('backend.layouts.master')
@section('title','E-RPEXO || Subscription Page')
@section('main-content')

<style>
.switch .btn-toggle {
  top: 50%;
}
.btn-toggle { 
  padding: 0;
  position: relative;
  border: none;
  height: 1.5rem;
  width: 3rem;
  border-radius: 1.5rem;
  color: #6b7381;
  background: #bdc1c8;
}

.btn-toggle.active {
  background-color: #008000;
}
.btn-toggle.btn-lg {
  height: 1.7rem;
  width: 4rem;
}

.btn-toggle.btn-lg > .handle {
  position: absolute;
  top: 0.3125rem;
  left: 0.3125rem;
  width: 1.100rem;
  height: 1.100rem;
  border-radius: 1.875rem;
  background: #fff;
  transition: left 0.25s;
}
.btn-toggle.btn-lg.active {
  transition: background-color 0.25s;
}
.btn-toggle.btn-lg.active > .handle {
  left: 2.600rem;
  transition: left 0.25s;
}
</style>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Subscription List</h6>
      <!-- <a href="{{route('subscription.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Subscription</a> -->
    </div>
    <div id="statusMessage" class="alert d-none" role="alert"></div>

    <div class="card-body">
      <div class="table-responsive">
        @if(count($subscription)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.N.</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>S.N.</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
              </tr>
          </tfoot>
          <tbody>
            @foreach($subscription as $sub)   
                <tr>
                    <td>{{$sub->id}}</td>
                    <td>{{$sub->email}}</td>
                    <td>
                      <button type="button"
                              class="btn btn-lg btn-toggle status-change"
                              data-toggle="button"
                              aria-pressed="{{ $sub->status ? 'true' : 'false' }}"
                              autocomplete="off"
                              data-id="{{ $sub->id }}"
                              data-status="{{ $sub->status ? 1 : 0 }}">
                          <div class="handle"></div>
                      </button>
                    </td>
                    <td>
                        <form method="POST" action="{{route('subscription.destroy',[$sub->id])}}">
                          @csrf 
                          @method('delete')
                              <button class="btn btn-danger btn-sm dltBtn" data-id={{$sub->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                    {{-- Delete Modal --}}
                    {{-- <div class="modal fade" id="delModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="#delModal{{$user->id}}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="#delModal{{$user->id}}Label">Delete user</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{ route('subscription.destroy',$user->id) }}">
                                @csrf 
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="margin:auto; text-align:center">Parmanent delete user</button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div> --}}
                </tr>  
            @endforeach
          </tbody>
        </table>
        <span style="float:right">{{ $subscription->links('pagination::bootstrap-4') }}</span>
        @else
          <h6 class="text-center">No Subscription found!!! Please create Subscription</h6>
        @endif
      </div>
    </div>
</div>
@endsection

@push('styles')

  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
      .zoom {
        transition: transform .2s; /* Animation */
      }

      .zoom:hover {
        transform: scale(3.2);
      }
  </style>
@endpush

@push('scripts')


  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script>
      
      $('#banner-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[2,3]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){
            
        }
  </script>
  <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
          })
      })
  </script>
  <script>
  $(document).ready(function () {
      $(document).on('click', '.status-change', function () {

          var id =$(this).data('id');
          var status =$(this).data('status');
          let newStatus = status === 1 ? 0 : 1;
          $.ajax({
              url: '/admin/changestatus/change-status',
              type: 'POST',
              data: {
                  _token: '{{ csrf_token() }}',
                  id: id,
                  status: newStatus
              },
              success: function (response) {
                  toastr.options.timeOut = 2000; // time in milliseconds (2000ms = 2 seconds)
                  toastr.success(response.message);
              },
              error: function () {
                  toastr.options.timeOut = 2000; // time in milliseconds (2000ms = 2 seconds)
                  toastr.error(response.message);
              }
          });
      });
  });
  </script>
 
@endpush