
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h6>Add Wish
                        <a href="<?php echo base_url('home') ?>" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <form action="<?php echo base_url('submit') ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Input title here" required> 
                        </div>

                        <div class="form-group">
                            <label for="">Desription</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Your description(Optional)"></textarea>
                        </div>

                        <div class="form-group">
                            <br>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add Image</label>
                                <input class="form-control" type="file" id="formFile" name="wish_img" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <br>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add Image</label>
                                <input class="form-control" type="file" id="formFile" name="wish_img" required>
                            </div>
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-primary float-start">Submit</a>
                    </div>
                    
                </form>

                
            </div>
        </div>
    </div>

    
</div>