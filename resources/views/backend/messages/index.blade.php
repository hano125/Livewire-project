@extends('backend.master')
@section('counters-active', 'active')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Messages /</span> Manage Messages
            </h4>

            @livewire('backend.messages.show-all-messages-component')

        </div>

        <!-- Content wrapper -->
    @endsection
