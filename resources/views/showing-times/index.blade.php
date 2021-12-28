@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Showing Now (Movie Schedule & Location)') }}</div>

                <div class="card-body">
                   
                    <div class="table-responsive">
                        <table id="default-datatable" data-plugin="DataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Date</th>
                                    <th>Movie</th>
                                     <th><a class="btn btn-primary float-right" data-toggle="tooltip"
                                                    data-placement="bottom" title="new order"
                                                    href="{{ asset('showing-times/create') }}"> New  <i class="fas fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <td scope="row">{{ $key + 1 }}</td>
                                <td>{{ $value->created_at->format('y-m-d') }}</td>
                                <td>{{ $value->name }}</td>
                                <td>
                                @foreach ($value->cinemas as $cinema)
                                    <ul>
                                        <li>{{ strtoupper($cinema->name)}}  @ {{ $cinema->location}}  <br />  <span class='text-danger'>Time :     {{  ucwords(date('M j, Y: h:i A', strtotime($cinema->pivot->showing_time)))}} </span> </li>
                                    </ul>            
                                @endforeach
                                </td>
                           </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
