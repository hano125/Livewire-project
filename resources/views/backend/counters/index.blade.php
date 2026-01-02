@extends('backend.master')
@section('counters-active', 'active')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Counters /</span> Manage Counters
            </h4>

            @livewire('backend.counters.view-counter-component')

        </div>
        @livewire('backend.counters.create-component')
        @livewire('backend.counters.show-record-by-id-componenet')
        @livewire('backend.counters.update-counter-component')
        @livewire('backend.counters.delete-counter-component')
        <!-- Content wrapper -->
    @endsection
