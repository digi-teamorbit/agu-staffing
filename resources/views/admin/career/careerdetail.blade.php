@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Career </h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/career/inquiries') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $career->id }}</td>
                            </tr>
                            <tr><th> Name </th>
                            <td> {{ $career->name }} </td>
                            </tr>
                            <tr><th> Phone </th>
							<td> {{ $career->phone }} </td>
							</tr>
							<tr><th> Email </th>
							<td> {{ $career->email }} </td>
							</tr>
                            <tr><th> Job Sector </th>
                            <td> {{ $career->job_sector }} </td>
                            </tr>
							<tr><th> Comment </th><td> {{ $career->comment }} </td></tr>
                            <tr><th> CV </th>
                            <td><a class="btn btn-success" href="{{asset($career->resume)}}" download=""><i class="icon-arrow-left-circle" aria-hidden="true"></i>Download</a></td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

