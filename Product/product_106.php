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
                <img src="../Img/product-12.jpg">

            </div>

            <div>
                <div class="productpage-2">
                    <h1> Black Jeans <br> By Easy</h1>

                    <h3>$9.00</h3>

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
                                <input type="hidden" value="Black Jeans" name="product_name" data-pure-attribute="">
                                <input type="hidden" value="9.00" name="unity_price" data-pure-attribute>
                                <input type="hidden" value="shirt" name="item_type" data-pure-attribute>
                                <input type="hidden" value="3" data-pure-item-id />
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
        <footer class="footer">
            <span class="storelogo"> 
             <a href="https://playstore.com" target="_" ><img src="../img/logo/playstore.png" ></a>
                       <br>
             <a href="https://appstore.com" target="_"  ><img src="../img/logo/appstore.png" ></a>
          </span>

            <div class="foot">
                <h5>Follow us on </h5>
                <ul>

                    <a href="https://facebook.com" target="_"><i class="fab fa-facebook"></i></a>

                    <a href="https://twitter.com" target="_"><i class="fab fa-twitter"></i></a>

                    <a href="https://instagram.com" target="_"><i class="fab fa-instagram"></i></a>

                    <a href="https://youtube.com" target="_"><i class="fab fa-youtube"></i></a>

                    <a href="https://linkedin.com" target="_"><i class="fab fa-linkedin"></i></a>

                    <a href="https://whatsapp.com" target="_"><i class="fab fa-whatsapp"></i></a>

                </ul>
                <hr>
                <div class="copy">
                    All copyright reserved to &copy;Pure Fashion
                </div>
            </div>

            <div class="policy">
                <ul>
                    <li><a href="../terms.php">Terms & Condition</a></li>
                    <li><a href="../return.php">Return Policy</a></li>
                    <li><a href="../affiliate.php">Affiliate Program</a></li>
                    <li><a href="../contract.php">Contract us</a></li>

                </ul>

            </div>

        </footer>

        <hr>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jStorage/0.4.12/jstorage.min.js"></script>
        <script src="../main.js"></script>
        <script type="application/javascript">
            $(document).ready(function() {
                $.Purefashion({
                    debug: false,
                    onItemAdded: function(item) {
                        console.log(item);
                    },
                    onItemUpdated: function(item) {
                        console.log(item);
                    }
                });
            });
        </script>

</body>

</html>