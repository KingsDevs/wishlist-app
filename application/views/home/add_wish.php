<h5 class="label">Add Wish</h5>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h6>Wishlist
                        <a href="<?php echo base_url('addwish') ?>" class="btn btn-primary float-end">Submit</a>
                    </h6>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Desription</label>
                        <input type="text" class="form-control description">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="<?php echo base_url('home') ?>" class="btn btn-danger float-start">Back</a>
</div>