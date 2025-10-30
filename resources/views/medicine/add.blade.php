@extends('layout.header')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title font-weight-bold text-uppercase"> Add Medicine Details </h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- Start Form  -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!--Include alert file-->
                        {{-- @include('include.alert') --}}

                        <h4 class="header-title text-uppercase"> Basic Info</h4>
                        <hr>
                        <form class="needs-validation" method="POST" action="{{ route('create-patient') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Medicine Name</label>
                                        <input type="text" name="generic_name" class="form-control border-bottom "
                                            id="validationCustom01" placeholder="Enter generic_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Brand Name</label>
                                        <input type="text" name="brand_name" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter brand name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Manufacturer</label>
                                        <input type="text" name="manufacturer" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter manufacturer">
                                    </div>
                                </div>
                            </div>
                            <h4 class="header-title text-uppercase">Strength Type</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Dosage Strength</label>
                                        <input type="text" name="dosage_strength" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter dosage_strength">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Drug Form</label>
                                        <select name="drug_form" required class="form-control border-bottom"
                                            id="validationCustom01" placeholder="Please select Type">
                                            <option value="">Please select</option>
                                            <option value="Tablet">Tablet</option>
                                            <option value="Syrup">Syrup</option>
                                            <option value="Capsule">Capsule</option>
                                            <option value="Injection">Injection</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Unit of Measure</label>
                                        <select name="unit_of_measure" required class="form-control border-bottom"
                                            id="validationCustom01" placeholder="Please select Type">
                                            <option value="">Please select</option>
                                            <option value="mg">mg</option>
                                            <option value="ml">ml</option>
                                            <option value="IU">IU</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h4 class="header-title text-uppercase">Other Details</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Side Effects</label>
                                        <input type="text" name="side_effects" class="form-control border-bottom "
                                            id="validationCustom02" placeholder="Enter side effects">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
