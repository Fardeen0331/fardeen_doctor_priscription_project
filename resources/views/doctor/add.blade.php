@extends('layout.header')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title font-weight-bold text-uppercase"> Add Doctor Details </h4>
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
                        {{-- <form class="needs-validation" method="post" action="{{ route('create-party') }}"> --}}
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Full Name</label>
                                    <input type="text" name="full_name" class="form-control border-bottom "
                                        id="validationCustom01" placeholder="Enter client's full name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Age</label>
                                    <input type="text" name="age" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter age">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Gender</label>
                                    <select name="party_type" required class="form-control border-bottom"
                                        id="validationCustom01" placeholder="Please select Type">
                                        <option value="">Please select</option>
                                        <option value="client">Male</option>
                                        <option value="vendor">Female</option>
                                        <option value="employee">Transgender</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Phone/Mobile Number</label>
                                    <input type="text" name="phone_no" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter phone/mobile number">
                                    <div class="invalid-feedback">
                                        Please provide a Number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input required type="email" name="email" class="form-control border-bottom"
                                        id="validationCustom01">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">Date of Birth</label>
                                    <input required type="text" name="date_of_birth" class="form-control border-bottom"
                                        id="validationCustom01" placeholder="Enter doctors appointment time">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-18">
                                <div class="form-group mb-3">
                                    <label for="validationCustom03">Address</label>
                                    <input type="text" name="address" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter address">
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Enter CNIC</label>
                                    <input required type="text" name="cnic" class="form-control border-bottom"
                                        id="validationCustom02" placeholder="Enter cnic">
                                </div>
                            </div>
                        </div>

                        <h4 class="header-title text-uppercase">Professional Details</h4>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Specialization</label>
                                    <input type="text" name="specialization" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter specialization">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for=""> Qualification </label>
                                    <input required type="text" name="qualification" class="form-control border-bottom"
                                        id="validationCustom01" placeholder="Enter qualification">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">PMDC Registrtion No</label>
                                    <input required type="text" name="pmdc_registrtion_no" class="form-control border-bottom"
                                        id="validationCustom01" placeholder="Enter pmdc registrtion no">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Clinic Hospital Name</label>
                                    <input type="text" name="clinic_hospital_name" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter clinic hospital name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for=""> Consultaion Fee </label>
                                    <input required type="text" name="consultaion_fee" class="form-control border-bottom"
                                        id="validationCustom01" placeholder="Enter consultaion fee">
                                </div>
                            </div>
                        </div>

                        <h4 class="header-title text-uppercase">Availability - Medicines Details</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="validationCustom04">Availability</label>
                                    <input type="text" name="availability" class="form-control border-bottom "
                                        id="validationCustom04" placeholder="Enter availability">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="validationCustom05">Medicines</label>
                                    <input type="text" name="medicines" class="form-control border-bottom "
                                        id="validationCustom05" placeholder="Enter medicines">
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
