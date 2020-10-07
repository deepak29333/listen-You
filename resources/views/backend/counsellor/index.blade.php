@extends('backend.layout.app')
@section('header')
    @include('backend.layout.top_nav')
@endsection
@section('sidebar')
    @include('backend.layout.nav')
@endsection
@section('content')

<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">

              <h4 class="c-grey-900 mB-20">All Counsellors</h4>
              @if(session()->get('success'))
              <div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                  {{ session()->get('success') }}
                  </div>
              @endif
              @if(session()->get('error'))
                  <div class="notification is-danger">
                  {{ session()->get('error') }}
                  </div>
              @endif
              <a href="{{ url('/Counsellor/create')}}"><button  class="btn btn-info" > Add New</button></a>
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>email</th>
                        <th>Half hour Amount</th>
                        <th>Full hour Amount</th>
                        {{-- <th>Timing</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>email</th>
                        <th>Half hour Amount</th>
                        <th>Full hour Amount</th>
                        {{-- <th>Timing</th> --}}
                        <th>Action</th>
                    </tr>
                  </tr>
                </tfoot>
                <tbody>
                    @php $i=1 @endphp

                    @foreach ($counsellor as $counsellor)
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$counsellor->name}}</td>
                    <td>{{$counsellor->email}}</td>
                    <td>{{$counsellor->half_hour_amt}}</td>
                    <td>{{$counsellor->one_hour_amt}}</td>

                    {{-- <td><?php $data=$timing->getTiming($counsellor->id);
                        foreach($data as $key => $value) {
                           ?>
                           <div>
                           <h4>{{$key}}</h4>
                           @foreach ($value as $time)
                           <div class="timing">
                             <span>{{$time[0]}}</span>-
                             <span>{{$time[1]}}</span>
                            </div>
                           @endforeach
                         </div>
                           <?php
                        }
                    ?>  </td> --}}
                    <td>
                        <a href="{{ route('Counsellor.edit',$counsellor->id)}}"><button class="btn btn-primary">View & edit</button></a>
                        <form action="{{ route('Counsellor.destroy', $counsellor->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-danger" onclick=" return  confirm('Are you Want To Delete It')" type="submit">Delete</button>
                      </form></td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @endsection
@section('footer')
   @include('backend.layout.footer')
@endsection
