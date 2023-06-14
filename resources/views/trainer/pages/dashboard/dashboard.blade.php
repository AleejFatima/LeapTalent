@extends('trainer.admin-master-template')
@section('content')
  <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <div class="row">

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">My Total Trainees</h5>
                                    </div>
                                    <h3 class="mt-4">{!! $obj ?? '' !!}</h3>

                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Total Languages</h5>
                                    </div>
                                    <h3 class="mt-4">{{DB::table('languages')->get()->count();}}</h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Total Books</h5>
                                    </div>
                                    <h3 class="mt-4">{{DB::table('books')->get()->count();}}</h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-buffer bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">Total Contents</h5>
                                    </div>
                                    <h3 class="mt-4">{{DB::table('content')->get()->count();}}</h3>

                                </div>
                            </div>
                        </div> --}}

                    </div>

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->



        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
@endsection
