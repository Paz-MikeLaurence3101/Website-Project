<?php include('header.php'); ?>

<?php 
$products = []; 

if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->bind_param('i', $product_id);
    $stmt->execute();

    $result = $stmt->get_result();
    if($result->num_rows > 0) {
        $products = $result->fetch_all(MYSQLI_ASSOC);

    } else {
        header('Location: products.php');
        exit;
    }
    $stmt->close();
} else if(isset($_POST['edit_btn'])) {

    $product_id = $_POST['product_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $offer = $_POST['offer'];
    $color = $_POST['color'];
    $category = $_POST['category'];

    $stmt = $conn->prepare("UPDATE products SET product_name=?, product_description=?, product_price=?, product_special_offer=?, product_color=?, product_category=? WHERE product_id=?");
    $stmt->bind_param('ssssssi', $title, $description, $price, $offer, $color, $category, $product_id);

    if($stmt->execute()){
        header('Location: products.php?edit_success_message=Product has been updated successfully');
    } else {
        header('Location: products.php?edit_failure_message=Error occurred, try again');
    }
    $stmt->close();
    exit;

} else {
    header('Location: products.php');
    exit;
}
?>

<div class="container-fluid">
    <div class="row" style="min-height: 1000px">
        <?php include('sidemenu.php'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 b">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group-me-2">
                        <!-- Add your buttons here if needed -->
                    </div>
                </div>
            </div>

            <h2>Edit Product</h2>
            <div class="table-responsive">
                <div class="mx-auto container">
                    <form id="edit-form" method="POST" action="edit_product.php">
                        <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                        <?php foreach($products as $product) { ?>
                            <input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>"/>
                            <div class="form-group mt-2">
                                <label>Title</label>
                                <input type="text" class="form-control" id="product-name" value="<?php echo $product['product_name']?>" name="title" placeholder="Title" required/>
                            </div>
                            <div class="form-group mt-2">
                                <label>Description</label>
                                <input type="text" class="form-control" id="product-desc" value="<?php echo $product['product_description']?>" name="description" placeholder="Description" required/>
                            </div>
                            <div class="form-group mt-2">
                                <label>Price</label>
                                <input type="text" class="form-control" id="product-price" value="<?php echo $product['product_price']?>" name="price" placeholder="Price" required/>
                            </div>
                            <div class="form-group mt-2">
                                <label>Category</label>
                                <select class="form-select" required name="category"> 
                                    <option value="controller" <?php if($product['product_category'] == 'controller') echo 'selected'; ?>>Controller</option>
                                    <option value="cdj" <?php if($product['product_category'] == 'cdj') echo 'selected'; ?>>Cdj</option>
                                    <option value="headphones" <?php if($product['product_category'] == 'headphones') echo 'selected'; ?>>Headphones</option>
                                </select>
                            </div>
                            <div class="form-group mt-2"> 
                                <label>Color</label>
                                <input type="text" class="form-control" value="<?php echo $product['product_color']?>" id="product-color" name="color" placeholder="Color" required/>
                            </div>
                            <div class="form-group mt-2">
                                <label>Special Offer/Sale</label>
                                <input type="number" class="form-control" value="<?php echo $product['product_special_offer']?>" id="product_offer" name="offer" placeholder="Sale %" required/>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-primary" name="edit_btn" value="Edit"/>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
