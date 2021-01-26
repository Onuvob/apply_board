@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Programs</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($appliedPrograms as $appliedProgram)
                            <tr>
                                @if( $appliedProgram->schoolProgram)
                                <td>{{ $appliedProgram->schoolProgram->title }}</td>
                                @elseif( $appliedProgram->collegeProgram)
                                <td>{{ $appliedProgram->collegeProgram->title }}</td>
                                @else 
                                <td>{{ $appliedProgram->universityProgram->title }}</td>
                                @endif
                                <td>{{ $appliedProgram->created_at }}</td>
                                <td>Pending</td>
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
