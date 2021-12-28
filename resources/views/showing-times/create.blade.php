@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New</div>

                <div class="card-body">
                   @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('showing-times.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="inputZip">Movie</label>
                                    <select name="movie"  class="form-control">
                                    <option value="">Select</option>
                                    @foreach($movies as $movie)
                                    <option value="{{ $movie->id}}">{{$movie->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="inputZip">Cinema</label>
                                    <select name="cinema"  class="form-control">
                                    <option value="">Select</option>
                                    @foreach($cinemas as $cinema)
                                    <option value="{{ $cinema->id}}">{{$cinema->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-row ">
                            <div class="form-group col-md-6 mb-2">
                                    <label for="inputZip">Showing Date</label>
                                    <input  name="showing_time" class="form-control"
                                        type="datetime-local">
                            </div>
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>                      






                        
                    </form>

                   
                </div>



                </div>
            </div>
        </div>
    </div>
</div>


@endsection
