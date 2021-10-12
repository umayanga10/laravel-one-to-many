@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3><b>Retrive  all Mobile numbers belog to one customer:</b></h3>
                            <p>Combine customers and passports table </p>
                                   
                                <table class="table table-dark table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mobile Number</th>
                                        <th>Customer_ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mobiles as $mobile)
                                    <tr>
                                        <td>{{$mobile->id}}</td>
                                        <td>{{$mobile->number}}</td>
                                        <td>{{$mobile->customer_id}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
