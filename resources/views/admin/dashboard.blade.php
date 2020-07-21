@extends('admin.master')

@section('content')
Admin dashboard
</br>

@if(Auth::guard('admin')->check())

{{Auth::user()->email}}

@endif

@endsection
