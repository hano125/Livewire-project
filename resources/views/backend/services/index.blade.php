@extends('backend.master')
@section('services-active', 'active')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Counters /</span> Manage Counters
            </h4>

            @livewire('backend.services.show-service-component')

        </div>
        @livewire('backend.services.create-service-component')
        @livewire('backend.services.update-service-component')
        @livewire('backend.services.view-service-component')
        @livewire('backend.services.delete-services-component')


        <!-- Content wrapper -->
    @endsection
