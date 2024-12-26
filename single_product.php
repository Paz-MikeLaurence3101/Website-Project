<?php

include('server/connection.php');

if(isset($_GET['product_id'])){

   $product_id = $_GET['product_id'];

    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->bind_param("i",$product_id);

    $stmt->execute();
    
    
    $product = $stmt->get_result();//[1]



    
    //no product id was given
}else{

    header('location: index.php');

}



?>





<?php include('layouts/header.php'); ?>






<!--Single product-->
<section class="container single-product my-5 pt-5">
    <div class="row mt-5">

     <?php while($row = $product->fetch_assoc()){ ?>


        <div class="col-lg-5 col-md-6 col-sm-12">
            <img class="img-fluid w-100 pb-1" src="assets/imgs/<?php echo $row['product_image']; ?>" id="mainImg"/>
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="assets/imgs/<?php echo $row['product_image']; ?>" width="100%" class="small-img"/>
                </div>
                <div class="small-img-col">
                    <img src="assets/imgs/<?php echo $row['product_image2']; ?>" width="100%" class="small-img"/>
                </div>
                <div class="small-img-col">
                    <img src="assets/imgs/<?php echo $row['product_image3']; ?>" width="100%" class="small-img"/>
                </div>
                <div class="small-img-col">
                    <img src="assets/imgs/<?php echo $row['product_image4']; ?>" width="100%" class="small-img"/>
                </div>
            </div>
        </div>

    

        <div class="col-lg-6 col-md-12 col-12">
            <h6>DJ Controllers</h6>
            <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
            <h2>$<?php echo $row['product_price']; ?></h2>

            <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>" />
                <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/> 
                <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
                <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>     

                    <input type="number" name="product_quantity" value="1"/>
                    <button class="but-btn" type="submit" name="add_to_cart" >Add to cart</button>
             </form>
            
            <h4 class="mt-5 mb-5">Product details</h4>
            <span><?php echo $row['product_description']; ?>
            </span>
        </div>

        <?php } ?>

    </div>
</section>


  <!--Related products-->
  <section id="related-products" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>Related Products</h3>
        <hr class="mx-auto">
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/Pioneer DJ DDJ-200.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Pioneer DJ DDJ-200</h5>
            <h4 class="p-price">$200</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/Roland DJ-202.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Roland DJ-202</h5>
            <h4 class="p-price">$200</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/Numark Party Mix.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Numark Party Mix</h5>
            <h4 class="p-price">$200</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/Denon DJ MC4000.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Denon DJ MC4000</h5>
            <h4 class="p-price">$200</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
    </div>
  </section>









 <!--Footer-->
 <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img src="assets/imgs/logo.png"/>
            <p class="pt-3">We provide the best beginner and professional DJ Gear</p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase">
                <li><a href="#">Beginner DJ Controllers</a></li>
                <li><a href="#">Professional DJ Gear</a></li>
                <li><a href="#">DJ Headphone</a></li>
            </ul>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact us</h5>
            <div>
                <h6 class="text-uppercase">Address</h6>
                <p>Aiport road, Baclaran Paranaque City</p>
            </div>
            <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>(888) 555-0012</p>
            </div>
            <div>
                <h6 class="text-uppercase">Email</h6>
                <p>djdepotgear@gmail.com</p>
            </div>
        </div>
    </div>

        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                <img src="assets/imgs/Paypal.png"/>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                <p>DJ Depot @ 2024 All Right Reserved</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
  </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b4gtLAV8zq9z3O1uqIb5xX+ndtP6Ft/m6v5f2frNrEIIwkuW0k6J3j3FD2CeO8/m" crossorigin="anonymous"></script>
    <script>
     var mainImg = document.getElementById("mainImg");
     var smallImg = document.getElementsByClassName("small-img");

     for(let i=0; i<4; i++){
                    smallImg[i].onclick = function(){
                    mainImg.src = smallImg[i].src;
                }
    }



    </script>




<?php include('layouts/footer.php'); ?>