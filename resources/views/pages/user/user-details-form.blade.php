@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}

    <div>
        <form method="post" action="{{ route('user-details-submit') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="school">School</label>
                <input name="school_name" type="text" class="form-control" id="school" placeholder="School Name">
            </div>

            <div class="form-group">
                <label for="school_document">School Documents</label>
                <input type="file" id="school_document" name="school_document">
            </div>

            <div class="form-group">
                <label for="college">College</label>
                <input name="college_name" type="text" class="form-control" id="college" placeholder="College Name">
            </div>

            <div class="form-group">
                <label for="collegedocuments">College Documents</label>
                <input type="file" id="collegedocuments" name="college_document">
            </div>

            <div class="form-group">
                <label for="university">University</label>
                <input name="university_name" type="text" class="form-control" id="university" placeholder="University Name">
            </div>

            <div class="form-group">
                <label for="universitydocuments">University Documents</label>
                <input type="file" id="universitydocuments" name="university_document">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
