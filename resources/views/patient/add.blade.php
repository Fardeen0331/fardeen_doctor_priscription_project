@extends('layout.header')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title font-weight-bold text-uppercase"> Add Patient Details </h4>
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
                                    <label for="">Appointment Date *</label>
                                    <input required type="date" name="date" class="form-control border-bottom"
                                        id="validationCustom01">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">Time Slot</label>
                                    <input required type="text" name="time" class="form-control border-bottom"
                                        id="validationCustom01" placeholder="Enter doctors appointment time">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="validationCustom03">Address</label>
                                    <input type="text" name="address" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter address">
                                </div>
                            </div>
                        </div>
                        <h4 class="header-title text-uppercase">Professional Details</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Occupation</label>
                                    <input type="text" name="occupation" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter occupation">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for=""> Diet </label>
                                    <input required type="text" name="diet" class="form-control border-bottom"
                                        id="validationCustom01" placeholder="Enter he/she eat normally or not">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">Addiction</label>
                                    <input required type="text" name="addiction" class="form-control border-bottom"
                                        id="validationCustom01" placeholder="Enter any addiction you do most">
                                </div>
                            </div>
                        </div>

                        <h4 class="header-title text-uppercase">Health Details</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="validationCustom04">Mental Health</label>
                                    <input type="text" name="mental_health" class="form-control border-bottom "
                                        id="validationCustom04" placeholder="Enter mind health">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="validationCustom05">Lab Test</label>
                                    <input type="text" name="lab_test" class="form-control border-bottom "
                                        id="validationCustom05" placeholder="Enter laboratory test">
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
