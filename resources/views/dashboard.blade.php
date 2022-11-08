@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    @if (Auth::user()->role_id==1 )
    @include('dashboard.admin_index')

    @endif

    @if (Auth::user()->role_id==4)
    @include('dashboard.student_info')

    @include('dashboard.student_index')

    @endif

    @if (Auth::user()->role_id==6)
    @include('dashboard.teacher_info')

    @endif

    @if (Auth::user()->role_id==7)
    @include('dashboard.charger_index')

    @endif





        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
