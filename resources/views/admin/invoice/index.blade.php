@extends("layouts.index")

@section("content")
    <div class="container-fluid">
        <button class="btn btn-primary"><a href="/admin/invoice/create" style="color: white" class="text-white text-decoration-none mb-5">Add new Customer</a></button>
        <hr>
        <table class="table table-responsive">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
            <tbody>
{{--                @foreach($customers as $customer)--}}
{{--                  <tr>--}}
{{--                      <td>{{$i=$i+1}}</td>--}}
{{--                      <td>{{$customer->name}}</td>--}}
{{--                      <td>{{$customer->phone}}</td>--}}
{{--                      <td>{{$customer->email}}</td>--}}
{{--                      <td>{{$customer->address}}</td>--}}
{{--                      <td><button class="btn btn-warning"><a href="/customer/edit/{{$customer->id}}" class="text-white text-decoration-none" style="color: white;">Edit</a></button></td>--}}
{{--                      <td>--}}
{{--                          @include("customer.delete")--}}
{{--                          <button class="btn btn-danger"><a data-toggle="modal" href="#delete{{$customer->id}}" title="Delete this Promotion" style="color: white">--}}
{{--                                  <i class="icon-trash text-danger"></i>Delete--}}
{{--                              </a></button>--}}
{{--                      </td>--}}
{{--                  </tr>--}}
{{--                    @else()--}}
{{--                        <td colspan="7"><h1 class="text-center">No data available</h1></td>--}}
{{--                @endforeach--}}
            </tbody>
        </table>
    </div>

@endsection
