@extends('backend.master')
@section('Skills-active', 'active')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Skills /</span> Manage Skills
            </h4>

            @livewire('backend.skills.backend-skills-show-data')

        </div>
        <!-- Content wrapper -->
    @endsection
