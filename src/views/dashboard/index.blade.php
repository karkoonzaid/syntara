@extends('syntara::layouts.dashboard.master')

@section('content')
{{ Breadcrumbs::create(array(array('title' => 'My Dashboard', 'link' => 'dashboard', 'icon' => 'icon-home'))); }}
@stop