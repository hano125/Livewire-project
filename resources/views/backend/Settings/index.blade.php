@extends('backend.master')
@section('Settings-active', 'active')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Settings /</span> General Settings
            </h4>

            <!-- Settings Form -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Edit Settings</h5>
                </div>


                <div class="card-body">
                    @livewire('backend.Settings.update-setting-componet')

                </div>
            </div>
            <!--/ Settings Form -->


        </div>
        <!-- Content wrapper -->
    @endsection
