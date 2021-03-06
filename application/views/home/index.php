
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>Your Wishlist
                        <a href="<?php echo base_url('addwish') ?>" class="btn btn-primary float-end">Add Wish</a>
                    </h5>
                    <br>
                    <div class="card-body">
                    <table class="table table-bordered">
                        <?php foreach($wishlist as $wd) : ?>
                            <div class="card mb-3">
                                <img src="<?php echo "/uploads/images/".$wd->wish_img ?>" class="card-img-top w-50 p-3" alt="Wish Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$wd->title; ?></h5>
                                    <p class="card-text"><?=$wd->description; ?></p>
                                    <p class="card-text"><small class="text-muted"><?=$wd->date; ?></small></p>
                                    <a href="<?php echo base_url('home/edit/'.$wd->id) ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url('home/delete/'.$wd->id) ?>" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </table>
                </div>
                </div>
                
              
            </div>
        </div>
    </div>
</div>

    