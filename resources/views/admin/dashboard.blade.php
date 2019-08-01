@extends('admin.layouts.app')

@section('content')
<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item" aria-current="page">CMS</li>
                    <li class="breadcrumb-item active" aria-current="page">Menu</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Menu Editor</h4>
        </div>
    </div>

    <div class="row row-sm">

        <div class="col-lg-12">
            <form>
                <div class="form-group mg-b-20">
                    <label class="d-block">Menu Name *</label>
                    <input type="text" class="form-control" required>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header pd-0" id="headingOne">
                        <h2>
                            <button class="btn btn-link btn-sm tx-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Pages
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="nav-pagelist">
                                <ul>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Home</label>
                                        </div>

                                        <ul>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Mission & Vision</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Company Profile</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Our Team</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Careers</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Contact Us</label>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm btn-secondary btn-uppercase pos-absolute l-30 b-30" type="submit"><i data-feather="plus"></i> Add to Menu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header pd-0" id="headingOne">
                        <h2>
                            <button class="btn btn-link btn-sm tx-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    URL
                                </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label class="d-block">Insert URL *</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Label *</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <button class="btn btn-primary btn-sm btn-secondary btn-uppercase" type="submit"><i data-feather="plus"></i> Add to Menu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8" id="sortablemulti">
            <section class="card card-fluid">
                <header class="card-header border-bottom-0">
                    <h5><strong>Structure</strong></h5>
                    <p class="pd-b-0 mg-b-0">Drag each item into the order you prefer.</p>
                </header>
                <!-- .nestable -->
                <div id="nestable01" class="dd">
                    <!-- .dd-list -->
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle bg-light">
                                <span class="drag-indicator"></span>
                                <div> Home </div>
                                <div class="dd-nodrag btn-group ml-auto">
                                    <nav class="nav justify-content-end nav-options">
                                        <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="chevron-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right wd-300">
                                            <form class="px-4 py-3">
                                                <div class="form-group">
                                                    <label>Edit menu label</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <button class="btn btn-primary btn-block btn-xs btn-uppercase">Save</button>
                                                <button class="btn btn-danger btn-block btn-xs btn-uppercase">Remove item</button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </li>
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle bg-light">
                                <span class="drag-indicator"></span>
                                <div> About Us </div>
                                <div class="dd-nodrag btn-group ml-auto">
                                    <nav class="nav justify-content-end nav-options">
                                        <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="chevron-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right wd-300">
                                            <form class="px-4 py-3">
                                                <div class="form-group">
                                                    <label>Edit menu label</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <button class="btn btn-primary btn-block btn-xs btn-uppercase">Save</button>
                                                <button class="btn btn-danger btn-block btn-xs btn-uppercase">Remove item</button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle bg-light">
                                <span class="drag-indicator"></span>
                                <div> Our Services </div>
                                <div class="dd-nodrag btn-group ml-auto">
                                    <nav class="nav justify-content-end nav-options">
                                        <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="chevron-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right wd-300">
                                            <form class="px-4 py-3">
                                                <div class="form-group">
                                                    <label>Edit menu label</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <button class="btn btn-primary btn-block btn-xs btn-uppercase">Save</button>
                                                <button class="btn btn-danger btn-block btn-xs btn-uppercase">Remove item</button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </li>
                    </ol>
                    <!-- /.dd-list -->
                </div>
                <!-- /.nestable -->
            </section>
            <div class="mg-t-20"></div>
            <div class="form-group">
                <!-- <label class="d-block">Set as active?</label> -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Inactive</label>
                </div>
            </div>
            <button class="btn btn-primary btn-sm btn-uppercase" type="submit">Save Menu</button>
            <button class="btn btn-outline-secondary btn-sm btn-uppercase" type="cancel">Cancel</button>
        </div>
    </div>
</div>
@endsection