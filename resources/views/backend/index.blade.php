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
              <h4 class="c-grey-900 mB-20">All Booking</h4>
            <form method="post" action="{{route('filterBooking')}}">
                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="start_date">From </label>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="end_date">TO </label>
                            <input type="date" name="end_date" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <br><br>
                            <button style="margin-top: -16px;" class="btn btn-info" type="submit"> Search</button>
                        </div>
                        <div class="col-md-2">
                            <br><br>
                            <a href="{{url('/Dashboard')}}"><button style="margin-top: -16px;" class="btn btn-primary" type="button"> Refresh</button></a>
                        </div>
                    </div>
             </form>
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                     <tr>
                        <th>Id</th>
                        <th>Counsellor Name</th>
                        <th>Counsellor Email</th>
                        <th>Client Name</th>
                        <th>Client Email</th>
                        <th>Client Mobile No</th>
                        <th>Timing</th>
                        <th>Payment Status</th>
                        <th>Amount</th>
                        <th>Booking Date</th>
                    </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Counsellor Name</th>
                    <th>Counsellor Email</th>
                    <th>Client Name</th>
                    <th>Client Email</th>
                    <th>Client Mobile No</th>
                    <th>Timing</th>
                    <th>Payment Status</th>
                    <th>Amount</th>
                    <th>Booking Date</th>
                  </tr>
                </tfoot>
                <tbody>
                    @php $i=0; @endphp
                    @foreach ($booking as $booking)
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$booking->counsellor_name}}</td>
                    <td>{{$booking->counsellor_email}}</td>
                    <td>{{$booking->f_name}} {{$booking->l_name}}</td>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->mobile_no}}</td>
                    <td>{{$booking->session_time}}</td>
                    <td>{{$booking->payment_status}}</td>
                    <td>{{$booking->amount}}</td>
                    <td>{{ date("d-m-Y", strtotime($booking->booking_date))}}</td>
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
