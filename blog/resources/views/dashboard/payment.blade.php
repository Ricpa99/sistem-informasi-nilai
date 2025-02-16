@extends('dashboard.layout.main')
@section('container')
<div class="card">
   <div class="card-body">
       <h4 class="card-title">{{ Auth::user()->name }} </h4>
       <div class="table-responsive"> 
           <table class="table table-bordered table-striped verticle-middle">
               <thead>
                   <tr>
                       <th scope="col">No</th>
                       <th scope="col">Semester</th>
                       <th scope="col">Status</th>
                   </tr>
               </thead>
               <tbody>
                    @foreach ($Payment as $payment)
                        @php
                        $sk = explode('.', $payment->id_semester );
                        $result = $sk[1].' '.$sk[2];
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $result }}</td>
                            <td>{{ $payment->pembayaran }}</td>
                        </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
@endsection