@extends('master')

@section('content')
    {{-- general-topmenu --}}
    @include('admin.includes.topmenu')
    {{-- general-helper --}}
    @include('admin.includes.helper.contanieropen')

    {{-- admin-sidebar & admin-dashboard --}}
    @includeWhen($is_admin,'admin.includes.system-interface.sidebar')
    @includeWhen($is_admin, 'admin.includes.system-interface.survey')

    @include('admin.includes.helper.containerclose')
@stop
