<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <p>
                                {!! $obj->first_name ?? '' !!} {!! $obj->first_name ?? '' !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <p>
                                <?= isset($obj->email) && !empty($obj->email) ? $obj->email : '' ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <p>
                                <?= isset($obj->phone_number) && !empty($obj->phone_number) ? $obj->phone_number : '' ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <p>
                                <?= isset($obj->city) && !empty($obj->city) ? $obj->city : '' ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            <label>Image</label>
                            <div>
                                <?php $image = isset($obj->image) && !empty($obj->image) ? $obj->image : ''; ?>

                                <img src="<?= $image ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
