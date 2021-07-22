
<h5 class="label container">Your wishlist</h5>

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
                                <th>Edit/Delete</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach($wishlist as $wd) : ?>
                            <tr>
                                <td> <?=$wd->date; ?></td>
                                <td> <?=$wd->title; ?></td>
                                <td> <?=$wd->description; ?></td>
                                <td><a href="<?php echo base_url('home/edit/'.$wd->id) ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url('home/delete/'.$wd->id) ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    