
<h5 class="label">Your wishlist</h5>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h6>Wishlist
                        <a href="<?php echo base_url('addwish') ?>" class="btn btn-primary float-end">Add Wish</a>
                    </h6>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach($wishlist as $wd) : ?>
                            <tr>
                                <td> <?=$wd->date; ?></td>
                                <td> <?=$wd->title; ?></td>
                                <td> <?=$wd->description; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    