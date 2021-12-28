@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Movies') }}</div>

                <div class="card-body">
                   
                    <div class="table-responsive">
                        <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Date</th>
                                    <th>Movie Name</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <td scope="row">{{ $key + 1 }}</td>
                                <td>{{ $value->created_at->format('y-m-d') }}</td>
                                <td>{{ $value->name }}</td>
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
