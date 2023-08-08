@extends('admin.layouts.app')
@section('title','All Blog Posts')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['All Blog Posts' =>
        route(''), 'All Blog Posts' =>
        '']])
        
    </div>
</div>

@endsection
