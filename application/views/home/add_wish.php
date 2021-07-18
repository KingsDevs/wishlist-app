<h5 class="label">Add Wish</h5>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h6>Wishlist
                        <a href="<?php echo base_url('home') ?>" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <form action="<?php echo base_url('submit') ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" class="form-control" name="date">
                        </div>

                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <label for="">Desription</label>
                            <input type="text" class="form-control description" name="description">
                        </div>
                        <button type="submit" class="btn btn-primary float-start">Submit</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    
</div>