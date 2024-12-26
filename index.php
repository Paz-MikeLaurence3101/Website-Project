

<?php include('layouts/header.php'); ?>
  
  <!--Home-->
  <section id="home">
      <div class="container">
          <h5>POWERFUL CONTROLLERS</h5>
          <h1><span>Command</span> the Crowd</h1>
          <p>Unleash the Beat: Elevate Your Sound with Precision DJ Gear</p>
          <button>Shop Now</button>
      </div>
  </section>

  <!--Brand-->
  <section id="brand" class="container">
    <div class="row">
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand-pioneer.png"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand-denon.png"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand-akai.png"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand-roland.png"/>
    </div>
  </section>

  <!--New-->
  <section id="new" class="w-100">
    <div class="row p-0 m-0">
    <!--One-->
    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/imgs/1.png"/>
        <div class="details">
            <h2>Roland DJ-202</h2>
            <button class="text-uppercase">Shop Now</button>
            </div>
        </div>
    <!--Two-->
       <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/imgs/2.png"/>
        <div class="details">
            <h2>Numark Mixtrack Pro 3</h2>
            <button class="text-uppercase">Shop Now</button>
            </div>
        </div>
    <!--Three-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
         <img class="img-fluid" src="assets/imgs/3.png"/>
         <div class="details">
             <h2>Pioneer DJ DDJ-SB3</h2>
             <button class="text-uppercase">Shop Now</button>
             </div>
        </div>
    </div>
  </section>

  <!--featured-->
  <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>Our Featured</h3>
        <hr class="mx-auto">
        <p>Here you can check out our featured products</p>
    </div>
    <div class="row mx-auto container-fluid">

    <?php include('server/get_featured_products.php'); ?>

    <?php while($row= $featured_products->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        

        <?php } ?>
    </div>
  </section>

  <!--Banner-->
  <section id="banner" class="my-5 py-5">
    <div class="container">
        <h4>HOLIDAYS SEASON'S SALE</h4>
        <h1>Christmas Collection <br> UP to 20% OFF</h1>
        <button class="text-uppercase">shop now</button>
    </div>
  </section>

  <!--CDJ-->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
        <h3>CDJ</h3>
        <hr class="mx-auto">
        <p>Here you can check out our CDJ'S</p>
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/Pioneer CDJ NEXUS 3000.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Pioneer CDJ Nexus 3000</h5>
            <h4 class="p-price">$200</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/Pioneer DJM V10.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Pioneer DJM V10</h5>
            <h4 class="p-price">$200</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/Denon SC 6000.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Denon SC 6000</h5>
            <h4 class="p-price">$200</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/Denon X1850.png"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Denon X1850</h5>
            <h4 class="p-price">$200</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
    </div>
  </section>

  <!--Headphones-->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
        <h3>DJ Headphones</h3>
        <hr class="mx-auto">
        <p>Here you can check out our DJ Headphones</p>
    </div>
    <div class="row mx-auto container-fluid">

    <?php include('server/get_headphones.php'); ?>

    <?php while($row=$headphones_products->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        
        <?php } ?>

    </div>
  </section>


  
<?php include('layouts/footer.php'); ?>