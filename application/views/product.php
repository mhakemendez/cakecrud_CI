
<div class="container-fluid">
    
    <h2>Product List</h2>
    
    <!-- Button trigger modal -->
    <button type="button" class="btn-add-product" data-bs-toggle="modal" data-bs-target="#addmodal">+</button>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('product/add'); ?>" method="post">
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn save-product">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- product table list -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product as $products) {
                ?>
            <tr>
                <th> <?php echo $products->product_id;?></th>
                <td><?php echo $products->cake_name;?></td>
                <td><?php echo $products->price;?></td>
                <td><?php echo $products->description;?></td>
                <td><?php echo $products->category_name;?></td>
                <td>  
                    <a class="btb-update btn btn-success" href="<?php echo base_url('product/edit/').$products->product_id;?>">
                        Edit
                    </a>     
                    <a class="btb-update btn btn-danger" href="<?php echo base_url('product/delete/').$products->product_id;?>">
                        Delete
                    </a> 
                </td>
            </tr>
            <?php }
                ?>
        </tbody>
    </table>
    <!-- product table list -->

    <!-- Modal -->
    

</div>