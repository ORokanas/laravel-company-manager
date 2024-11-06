@extends('layouts.clean')

@section('childContent')
        @include('layouts.partials.nav')
        @yield('content')
        @include('layouts.partials.footer')
@endsection
