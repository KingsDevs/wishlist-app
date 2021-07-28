
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6>Edit Wish
                        <a href="<?php echo base_url('home') ?>" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <form action="<?php echo base_url('home/edit/'.$wishlist->id.'/update') ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Input title here" required value="<?= $wishlist->title?>"> 
                        </div>

                        <div class="form-group">
                            <label for="">Desription</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"><?= $wishlist->description?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <br>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add Image</label>
                                <input class="form-control" type="file" id="formFile" name="wish_img" required>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary float-start" placeholder="Your description(Optional)">Update</button>
                    </div>
                </form>


            </div>
        </div>
        <div class="col-6 col-md-4">
            <img src="<?php echo "/uploads/images/".$wishlist->wish_img ?>" class="img-thumbnail" alt="...">
        </div>
    </div>

    
</div>