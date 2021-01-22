@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn bg-success text-decoration-none" href="{{ route('user-details-form') }}">Your Details</a>
                </div>

                <div>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Programs</th>
                            <th scope="col">Last</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach (auth()->user()->appliedPrograms as $appliedProgram)
                            <tr>
                                <td>{{ $appliedProgram->id }}</td>
                                <td>{{ $appliedProgram->created_at }}</td>
                                <td>@mdo</td>
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
