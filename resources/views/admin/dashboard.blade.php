@extends('master')

@section('content')
    {{-- general-topmenu --}}
    @include('admin.includes.topmenu')
    {{-- general-helper --}}
    @include('admin.includes.helper.contanieropen')

    {{-- admin-sidebar & admin-dashboard --}}
    @includeWhen($is_admin,'admin.includes.system-interface.sidebar')
    @includeWhen($is_admin, 'admin.includes.system-interface.admindashboard')

    {{-- @todo: We will implement the regular user interface here --}}
    {{-- user-sidebar & user-dashboard --}}
    @includeWhen(!$is_admin, 'admin.includes.user-interface.sidebar')
    @includeWhen(!$is_admin, 'admin.includes.user-interface.userdashboard')
    @include('admin.includes.helper.containerclose')
@stop
