<?php
    foreach($cake as $cakes){ 
?>
<div class="container edit-container">
    <form action="<?php echo base_url('/product/update/'.$cakes->product_id); ?>" method="post">
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" name="product_name" value="<?php echo $cakes->cake_name;?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" value="<?php echo $cakes->price;?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <input type="text" name="description" value="<?php echo $cakes->description;?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">Category</label>
            <select class="form-control" name="Category" id="category">
            <option value="">Select Category</option>
                <?php 
                    foreach($cate as $categories)
                    {
                        echo' <option value="'.$categories->id.'">'.$categories->category_name.'</option>';
                    }
                ?>       
            </select>
        </div>
        <?php }
        ?>
        <div class="modal-footer">
            <a class="btn btn-primary" href="<?php echo base_url('product') ?>">Back</a>
            <button type="submit" class="btn save-product">Save changes</button>
        </div>
    </form>
</div>