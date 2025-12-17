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

            <!-- Skills Table -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Skills List</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSkillModal">
                        <i class="bx bx-plus me-1"></i> Add New Skill
                    </button>
                </div>

                <div class="card-body">
                    <!-- Search Input -->
                    <div class="mb-4">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search skills..." id="searchSkill">
                        </div>
                    </div>

                    <!-- Skills Table -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Skill Name</th>
                           <th>Progress</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl-php text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">PHP</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-3" style="height: 8px; width: 200px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted">90%</small>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-warning" title="Edit">
                                            <i class="bx bx-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-danger" title="Delete">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl-laravel text-danger me-2 fs-4"></i>
                                            <span class="fw-medium">Laravel</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-3" style="height: 8px; width: 200px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%"
                                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted">85%</small>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-warning" title="Edit">
                                            <i class="bx bx-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-danger" title="Delete">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl-javascript text-warning me-2 fs-4"></i>
                                            <span class="fw-medium">JavaScript</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-3" style="height: 8px; width: 200px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted">80%</small>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-warning" title="Edit">
                                            <i class="bx bx-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-danger" title="Delete">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl-vuejs text-success me-2 fs-4"></i>
                                            <span class="fw-medium">Vue.js</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-3" style="height: 8px; width: 200px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted">75%</small>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-warning" title="Edit">
                                            <i class="bx bx-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-danger" title="Delete">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl-css3 text-info me-2 fs-4"></i>
                                            <span class="fw-medium">CSS3</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-3" style="height: 8px; width: 200px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 95%"
                                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted">95%</small>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-warning" title="Edit">
                                            <i class="bx bx-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-danger" title="Delete">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl-react text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">React</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-3" style="height: 8px; width: 200px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted">70%</small>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-warning" title="Edit">
                                            <i class="bx bx-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-danger" title="Delete">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Skills Table -->

            <!-- Add Skill Modal -->
            <div class="modal fade" id="addSkillModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Skill</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="skillName" class="form-label">Skill Name</label>
                                    <input type="text" class="form-control" id="skillName"
                                        placeholder="Enter skill name">
                                </div>
                                <div class="mb-3">
                                    <label for="skillProgress" class="form-label">Progress (%)</label>
                                    <input type="number" class="form-control" id="skillProgress" placeholder="0-100"
                                        min="0" max="100">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">
                                <i class="bx bx-save me-1"></i> Save Skill
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Add Skill Modal -->


        </div>
        <!-- Content wrapper -->
    @endsection
