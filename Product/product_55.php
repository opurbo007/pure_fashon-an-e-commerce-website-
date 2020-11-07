<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Cloth Store">
    <title>Pure Fashion || Stay Classy</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <!-- This is for navigation bar -->
    <div class="container">
        <nav class="navbar">
            <div class="logo">
                <img src="../Img/logo1.png" alt="Pure Fashion">
            </div>
            <ul class="navbar-list">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../product.php">Product</a></li>
                <li><a href="../singin.php">Account</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../contract.php">Contract</a></li>
                <li><a class="nav-link cart-item-count" href="../Cart.php" data-pure-items-count>Cart</a></li>
                <div id="btn">
                    <input type="text" class="in"><button class="in">Search</button>
                </div>
            </ul>
        </nav>

        <!------ to add more product--->


        <div class="product">

            <div class="productpage-1">
                <img src="../Img/product/women/shoes/shoes7.webp">

            </div>

            <div>
                <div class="productpage-2">
                    <h1> Heal</h1>

                    <h3>$99.00</h3>

                    <div class="card-footer">
                        <form action="" class="form" data-pure-form>
                            <div class="form-group">
                                <select class="form-control" name="observations" data-pure-attribute required>
                                  <option value="">Size</option>
                                  <option value="Red">M</option>
                                  <option value="Blue">XX</option>
                                  <option value="Black">XXL</option>
                              </select>
                            </div>
                            <!-- <input type="number" value="1"> -->
                            <!-- <div class="form-group"> -->
                            <input type="number" min="1" value="1" class="form-control" name="quantity" data-pure-attribute placeholder="Quantity">
                            <!-- </div> -->

                            <div class="button">
                                <!-- <a href="../cart.php" class="btn">Add To Cart</a> -->
                                <input type="hidden" value="Heal" name="product_name" data-pure-attribute="">
                                <input type="hidden" value="99.00" name="unity_price" data-pure-attribute>
                                <input type="hidden" value="shirt" name="item_type" data-pure-attribute>
                                <input type="hidden" value="../Img/product/women/shoes/shoes7.webp" data-pure-item-id />
                                <input type="submit" class="btn btn-primary" value="Add to Cart">
                            </div>
                        </form>

                        <h4>Product Details</h4>
                        &ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;
                        <p>This is a Black Jeans with black Design by Easy Brand. In this summer stay classy with Easy Brand</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="related">

            <h3>Related Product</h3>
            <div class="row-4">
                <div class="write">
                    <a href="product_1.php">
                        <img src="../Img/product-1.jpg">
                        <h4>Red T-Shirt</h4>
                        <p>Price:$10.00</p>
                    </a>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>

                </div>
                <div class="write">
                    <a href="product_2.php">
                        <img src="../Img/product-2.jpg">
                        <h4>Black Sneakers</h4>
                        <p>Price:$30.00</p>
                    </a>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>

                </div>
                <div class="write">
                    <a href="product_3.php">
                        <img src="../Img/product-12.jpg">
                        <h4>Jeans</h4>
                        <p>Price:$7.00</p>
                    </a>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>

                </div>
                <div class="write">
                    <a href="product_4.php">
                        <img src="../Img/product-4.jpg">
                        <h4>Dark-blue T-shirt</h4>
                        <p>Price:$29.00</p>
                    </a>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>

                </div>
            </div>
        </div>

        <!---------footer--->
        <?php
include("../include/footproduct.php")
 ?>