<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUNGREZY.com</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-utensils"></i> HUNGREZY </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#popular">menu</a>
            <a href="#order">order</a>
            <?php
                session_start();
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
                    echo '<a href="./logout.php">Logout</a>';
                }else{
                    echo '<a href="./login.html">Log in</a>';
                    echo '<a href="./signup.html">Sign Up</a>';
                }
            ?>
            <!-- <a href="./login.html">Login</a>
            <a href="./signup.html">Sign Up</a> -->
            <!-- <a href=""><i class='fa fa-shopping-cart'></i></a> -->
            <a href="" class="cartno"><i class='fa fa-shopping-cart'></i>0</a>
            <!--a href="#blogs">blogs</a -->
        </nav>

        <!--div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="social" class="fab fa-facebook-f"></div>
            <div id="social" class="fab fa-instagram"></div>
            <div id="social" class="fab fa-twitter"></div>
        </div -->

    </header>

    <!-- header section ends  -->



    <!-- home section starts  -->
    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true)
            echo '<div> Welcome, '.$_SESSION['name'].'</div>';
    ?>
    
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/random/300x300/?burger" style="width:1400px;height:500px;" class="d-block w-60" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/random/300x300/?samosa" style="width:1400px;height:500px;" class="d-block w-60" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/random/300x300/?jalebi" style="width:1400px;height:500px;" class="d-block w-60" alt="...">
              </div>
            </div>
           <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
    </div>

    <section class="home" id="home">

        <div class="content">
            <span>welcome foodies</span>
            <h3>Gain Some Good Calories 😋</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis unde dolores temporibus hic quam debitis
                tenetur harum nemo.</p>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="image">
            <img src="" alt="" class="home-img">
            <img src="" alt="" class="home-parallax-img">
        </div>

    </section>

    <!-- home section ends  -->



    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="image">
            <img src="image/about-img.png" alt="">
        </div>

        <div class="content">
            <span>About Us</span>
            <h3 class="title">what's make our food delicious!</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ut explicabo, numquam iusto est a ipsum
                assumenda tempore esse corporis?</p>
            <a href="#" class="btn">read more</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="image/serv-1.png" alt="">
                    <h3>fast delivery</h3>
                </div>
                <div class="icons">
                    <img src="image/serv-2.png" alt="">
                    <h3>fresh food</h3>
                </div>
                <div class="icons">
                    <img src="image/serv-3.png" alt="">
                    <h3>best quality</h3>
                </div>
                <div class="icons">
                    <img src="image/serv-4.png" alt="">
                    <h3>24/7 support</h3>
                </div>
            </div>
        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <!--section class="menu" id="menu">

    <div class="heading">
        <span>our menu</span>
        <h3>our top dishes</h3>
    </div>

    <div class="box-container">

        <a href="#" class="box">
            <img src="image/menu-1.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-2.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-3.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-4.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-5.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-6.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

    </div>

</section -->

    <!-- menu section ends -->


    <!-- popular section starts  -->

    <section class="popular" id="popular">

        <div class="heading">
            <span>Our Menu</span>
            <h3>our special dishes</h3>
        </div>

        <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <div class="image">
                    <img src="image/momos.png" alt="">
                </div>
                <div class="content">
                    <h3>Momos</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <!--span> (50) </span -->
                    </div>
                    <div class="price">RS40.00 <!--span>$50.00</span --></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <div class="image">
                    <img src="image/samosa.jpg"
                        alt="">
                </div>
                <div class="content">
                    <h3>Samosa</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <!--span> (50) </span -->
                    </div>
                    <div class="price">Rs40.00 <!--span>$50.00</span --></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <div class="image">
                    <img src="image/pizza.png" alt="">
                </div>
                <div class="content">
                    <h3>Pizza</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <!--span> (50) </span -->
                    </div>
                    <div class="price">Rs 140.00 <!--span>$50.00</span --></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <div class="image">
                    <img id="burger-image" src="image/burger.jpg"alt="">
            <div class=" content">
                    <h3>Burger</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <!--span> (50) </span -->
                    </div>
                    <div class="price">Rs 140.00 <!--span>$50.00</span --></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <!--div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-5.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-6.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-7.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-8.png" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div -->

        </div>

    </section>

    <!-- popular section ends -->



    <!-- blogs section starts  -->

    <!--section class="blogs" id="blogs">

    <div class="heading">
        <span>our blogs</span>
        <h3>our daily stories</h3>
    </div>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section -->

    <!-- blogs section ends -->

    <!-- order section starts  -->

    <section class="order" id="order">

        <div class="heading">
            <span>order now</span>
            <h3>fastest home delivery</h3>
        </div>

        <div class="icons-container">

            <!--div class="icons">
                <img src="image/icon-1.png" alt="">
                <h3>7:00am to 10:30pm</h3>
            </div -->

            <div class="icons">
                <img src="image/icon-2.png" alt="">
                <h3>+91-9021358638</h3>
            </div>

            <div class="icons">
                <img src="image/icon-3.png" alt="">
                <h3>Goa, India</h3>
            </div>

        </div >

        <form action="">

            <div class="flex">
                <div class="inputBox">
                    <span>your name</span>
                    <input type="text" placeholder="customer's name" name="" id="">
                </div>
                <div class="inputBox">
                    <span>your number</span>
                    <input type="number" placeholder="customer's number" name="" id="">
                </div>
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>your order</span>
                    <select name="" id="">
                        <option value="Momo">Momo</option>
                        <option value="Samosa">Samosa</option>
                        <option value="Pizza">Pizza</option>
                        <option value="Burger">Burger</option>
                        
                    </select>
                </div>
                <div class="inputBox">
                    <span>how much</span>
                    <input type="number" placeholder="number or orders" name="" id="">
                </div>
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>your details</span>
                    <input type="text" placeholder="your message" name="" id="">
                </div>
              

            <div class="flex">
                <div class="inputBox">
                    <textarea placeholder="your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="inputBox">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d492479.7588170677!2d73.67703644911028!3d15.349486364312314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfba106336b741%3A0xeaf887ff62f34092!2sGoa!5e0!3m2!1sen!2sin!4v1684298108011!5m2!1sen!2sin" width="600" height="450" style="border:0;" ></iframe>
                </div>
            </div>

            <input type="submit" value="proceed to order" class="btn">

        </form>

    </section>

    <!-- order section ends -->


    <!-- footer section starts  -->

    <section class="footer">


        <div class="box-container">

            <div class="box">
                <h3>our menu</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> pizza</a>
                <a href="#"><i class="fas fa-arrow-right"></i> burger</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Momo</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Samosa</a>
                <a href="#"><i class="fas fa-arrow-right"></i> and more...</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i> home</a>
                <a href="#about"> <i class="fas fa-arrow-right"></i> about</a>
                <a href="#popular"> <i class="fas fa-arrow-right"></i> menu</a>
                <!--a href="#menu"> <i class="fas fa-arrow-right"></i> menu</a-->
                <a href="#order"> <i class="fas fa-arrow-right"></i> order</a>
                <!--a href="#blogs"> <i class="fas fa-arrow-right"></i> blogs</a -->
            </div>

            <!--div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my order</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my favorite</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> terms of use</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privary policy</a>
        </div -->

            <!--div class="box">
            <h3>opening hours</h3>
            <p>monday : 7:00am to 10:00pm</p>
            <p>tuesday : 7:00am to 10:00pm</p>
            <p>wednesday : 7:00am to 10:00pm</p>
            <p>friday : 7:00am to 10:00pm</p>
            <p>saturday and sunday closed</p>
        </div -->

        </div>

        <!--div class="bottom">
 

        <div class="credit"> created <span>foolishdeveloper.com</span> | all rights reserved! </div>
        
    </div -->

    </section>

    <!-- footer section ends -->



    <!-- custom js file link  -->
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            let c = 0;
            $(".btn").click(function () {
                c++;
                $(this).html("<a href='cart.html'>Go to cart</a>");
                $(".cartno").html('<a href="" class="cartno"><i class="fa fa-shopping-cart"></i> ' + c.toString() + '</a>');
                let imageSrc = $(this).closest('.box').find('img').attr('src');
                let h3Content = $(this).closest(".box").find("h3").text();
                console.log(imageSrc);
                console.log(h3Content);
                $.ajax({
                    url: "backend.php",
                    type: "POST",
                    data: { imageSrc: imageSrc, h3Content: h3Content },
                    success: function (response) {
                        console.log("Data sent to the backend successfully!");
                        // Display the response from the backend
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            $(".fas fa-heart").click(function () {
                $(this).html('<i class="fa fa-heart" style="color:green"></i>');
            });
        });
    </script>

</body>

</html>