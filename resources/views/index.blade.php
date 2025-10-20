@extends('layouts.app')
@section('title', __('app.title'))
@section('content')
    @include('layouts.title_section')
    @include('layouts.section_top')
    @include('layouts.section_middle')
    @include('layouts.section_bot')
@endsection
