@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        {!! form_start($form) !!}

        {!! form_rest($form) !!}

        <div class="form-footer">
            <button type="submit" class="btn-success btn">Save</button>
        </div>

        {!! form_end($form) !!}
    </div>
</div>
@endsection