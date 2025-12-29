@extends('backend.master')
@section('Subscribers-active', 'active')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Subscribers /</span> Manage Subscribers
            </h4>

            @livewire('backend.subscribers.subscriber-component')
        </div>


        <!-- Content wrapper -->
    @endsection
