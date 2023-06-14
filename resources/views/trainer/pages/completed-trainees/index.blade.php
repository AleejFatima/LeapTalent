@extends('trainer.admin-master-template-with-datatable')
@section('content')
    <style>
        @font-face {
            font-family: myFirstFont;
            src: url(sansation_light.woff);
        }

        .commentcontainer {
            max-width: 640px;

            background: #fff;
            border-radius: 8px;

        }

        .comment {
            display: block;
            transition: all 1s;
        }

        .commentClicked {
            min-height: 0px;
            border: 1px solid #eee;
            border-radius: 5px;
            padding: 5px 10px
        }

        .commentcontainer textarea {
            width: 100%;
            border: none;
            background: #E8E8E8;
            padding: 5px 10px;
            height: 50%;
            border-radius: 5px 5px 0px 0px;
            border-bottom: 2px solid #016BA8;
            transition: all 0.5s;
            margin-top: 15px;
        }

        button.primaryContained {
            background: #016ba8;
            color: #fff;
            padding: 10px 10px;
            border: none;
            margin-top: 0px;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 4px;
            box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.25);
            transition: 1s all;
            font-size: 10px;
            border-radius: 5px;
        }

        button.primaryContained:hover {
            background: #9201A8;
        }
    </style>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title d-flex" style="justify-content: space-between;">
                                    <span>
                                        Trainees
                                    </span>
                                </h4>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>




                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($obj as $key => $val)
                                            @if ($val->end_date <= $val->updated_at)
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('view.trainee.profile', $val->trainees->id) }}">
                                                            <img src="{!! $val->trainees->image !!}" height="50" width="50"
                                                                class="img-fluid img-thumbnail" alt="">
                                                        </a>
                                                    </td>

                                                    <td>{!! $val->trainees->first_name ?? '' !!} {!! $val->trainees->last_name ?? '' !!}</td>
                                                    <td>{!! $val->trainees->email ?? '' !!}</td>



                                                    <td>
                                                        <span class="badge badge-success">Completed</span>

                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a class="p-1 m-1 view_details" rel="{!! $val->trainees->id ?? '' !!}"
                                                                crud="user" href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- content -->
    </div>

    <div class="modal fade" id="Administrative" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"
                                style="font-family: Times New Roman">Give reviews</i></h5>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">

                                    <div class="col-sm-12">
                                        <section id="app">
                                            <div class="commentcontainer">

                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="{{ route('store.reviews') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="trainee_id"
                                                                value="{!! $val->trainees->id ?? '' !!}" id="">

                                                            <textarea type="text" name="review" class="input" placeholder="Write a comment"></textarea>
                                                            <button class='primaryContained float-right' type="submit">Add
                                                                Comment</button>
                                                        </form>
                                                    </div><!-- End col -->
                                                </div>
                                                <!--End Row -->
                                            </div>
                                            <!--End Container -->
                                        </section><!-- end App -->


                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class='primaryContained float-right' data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
@endsection
