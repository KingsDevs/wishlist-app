
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h6>Your Wishlist
                        <a href="<?php echo base_url('addwish') ?>" class="btn btn-primary float-end">Add Wish</a>
                    </h6>
                </div>
                
                <?php foreach($wishlist as $wd) : ?>
                    <div class="card mb-3">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$wd->title; ?></h5>
                            <p class="card-text"><?=$wd->description; ?></p>
                            <p class="card-text"><small class="text-muted"><?=$wd->date; ?></small></p>
                            <a href="<?php echo base_url('home/edit/'.$wd->id) ?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo base_url('home/delete/'.$wd->id) ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                
                  
                <?php endforeach; ?>
              
            </div>
        </div>
    </div>
</div>

    