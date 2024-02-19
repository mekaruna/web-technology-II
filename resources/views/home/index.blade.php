@extends('layouts.app-main')

@section('content')

<section class="services">
    <span class="servchead">
        <h2>We Offer Top Notch</h2>
        <p>Delectable dishes, tantalizing flavors - an unforgettable culinary experience.</p>
    </span>
    <div class="service-items">
        <div class="service-item">
            <img class="service1" src="photos/service-1.jpg" alt="">
            <p>Breakfast</p>
        </div>
        <div class="service-item">
            <img class="service2" src="photos/service-2.jpg" alt="">
            <p class="si">Appetizer</p>
        </div>
        <div class="service-item">
            <img class="service3" src="photos/service-3.jpg" alt="">
            <p class="di">Drinks</p>
        </div>
    </div>
</section>
<section id="about-section" class="about">
    <div class="about-content">
        <h2 id="abouth">Every Flavor Tells a Story</h2>
        <p id="aboutp">Discover our story and indulge in a memorable dining experience.</p>
        <p id="book">Book through call<br>01-123456</p>
        <button id="btn-read-more">Read More</button>
    </div>
    <img id="banner" src="photos/about-banner.jpg" alt="">
</section>
<section class="special" id="menu-section">
    <div class="special-container">
        <img id="specialb" src="photos/pizza-5179939_960_720.jpg" alt="" width="500">
        <div class="todayspecial">
            <h2 id="specialh">Today's Special</h2>
            <h3 id="menut">Pizza</h3>
            <p>Indulge in our mouthwatering pizza menu featuring a variety<br> of flavors, fresh ingredients, and perfect
                crusts crafted to <br> satisfy your cravings</p>
            <p id="price">Price: 450.00</p>
            <button id="btnmenus">View More</button>
        </div>
    </div>
</section>
<div class="Menulist">
    <div class="column">
        <div class="menuli">
            <img src="photos/steamed-momos-1.jpg" alt="dsd" width="185px">
            <div class="content">
                <h3>MoMo</h3>
                <p>jhol, Steam, Fried chilly</p>
                <p class="price">Price: 130</p>
            </div>
        </div>
        <div class="menuli">
            <img src="photos/Hot-dogs1.jpg" alt="dsd" width="185px">
            <div class="content">
                <h3>Hot Dogs</h3>
                <p>Sausage, Chicken, Veg</p>
                <p class="price">Price: 100</p>
            </div>
        </div>
        <div class="menuli">
            <img src="photos/kattiroll.jpg" alt="dsd" width="185px">
            <div class="content">
                <h3>Katti Rolls</h3>
                <p>Chicken,Veg,Eggs</p>
                <p class="price">Price: 150</p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="menuli">
            <img src="photos/burger.jpg" alt="dsd" width="180px">
            <div class="content">
                <h3>Burger</h3>
                <p>Chicken, Veg, Ham</p>
                <p class="price">Price: 100</p>
            </div>
        </div>
        <div class="menuli">
            <img src="photos/hakka-noodles-recipe.jpg" alt="dsd" width="160px">
            <div class="content">
                <h3>Hakka Noodles</h3>
                <p>Chicken, Veg, Egg</p>
                <p class="price">Price: 120</p>
            </div>
        </div>
        <div class="menuli">
            <img src="photos/laphing.jpg" alt="dsd" width="180px">
            <div class="content">
                <h3>Laphing </h3>
                <p>Chicken, Noodles,Veg</p>
                <p class="price">Price: 90</p>
            </div>
        </div>
    </div>
</div>
<div class="ourstrength">
    <p class="why-choose">Why Choose Us</p>
    <h1 class="our-strength-heading">Our Strength</h1>
    <div class="section-container">
        <section class="strength-section hygeinefood" onmouseover="rotateIcon(this)" onmouseout="stopRotation(this)">
            <img class="strength-icon" src="photos/features-icon-1.png" alt="Icon">
            <h4 class="strength-title">Hygiene Food</h4>
            <p class="strength-description">Lorem ipsum dolor sit amet.</p>
        </section>
        <section class="strength-section freshenvirnoment" onmouseover="rotateIcon(this)" onmouseout="stopRotation(this)">
            <img class="strength-icon" src="photos/features-icon-2.png" alt="Icon">
            <h4 class="strength-title">Fresh Environment</h4>
            <p class="strength-description">Lorem ipsum dolor sit amet.</p>
        </section>
        <section class="strength-section skilledchef" onmouseover="rotateIcon(this)" onmouseout="stopRotation(this)">
            <img class="strength-icon" src="photos/features-icon-3.png" alt="Icon">
            <h4 class="strength-title">Skilled Chefs</h4>
            <p class="strength-description">Lorem ipsum dolor sit amet.</p>
        </section>
        <section class="strength-section event-party" onmouseover="rotateIcon(this)" onmouseout="stopRotation(this)">
            <img class="strength-icon" src="photos/features-icon-4.png" alt="Icon">
            <h4 class="strength-title">Event & Party</h4>
            <p class="strength-description">Lorem ipsum dolor sit amet.</p>
        </section>
    </div>
</div>
<div class="testimonial-container">
    <h1 class="testh1">Testimonial</h1>
    <div class="testimonial-item active">
        <img src="images/image-1.jpg" alt="Model 1">
        <h4>Jane Doe</h4>
        <div class="stars">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
        </div>

        <p>"I had an incredible dining experience at your restaurant! The food was absolutely delicious, and the service
            was top-notch. The cozy ambiance added to the overall enjoyment. I highly recommend trying out their
            mouthwatering dishes.<br><br>Can't wait to visit again!"</p>
    </div>

    <div class="testimonial-item">
        <img src="images/image-2.jpg" alt="Model 2">
        <h4>John Smith</h4>
        <div class="stars">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9734;</span>
        </div>
        <p>"I celebrated a special occasion at your restaurant, and it was the perfect choice. The elegant atmosphere,
            attentive staff, and exquisite cuisine made the evening truly remarkable. The attention to detail in every dish
            was remarkable, and the flavors were simply outstanding.<br><br>Thank you for creating such a delightful dining
            experience!"</p>
    </div>

    <div class="testimonial-item">
        <img src="images/image-3.jpg" alt="Model 3">
        <h4>Lisa Johnson</h4>
        <div class="stars">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9734;</span>
            <span class="star">&#9734;</span>
        </div>
        <p>"What a hidden gem! Your restaurant exceeded my expectations. The menu selection was fantastic, offering a wide
            variety of flavors. The staff was friendly, accommodating, and provided excellent recommendations.<br><br>Each
            dish was beautifully presented and bursting with flavors. It was a truly memorable culinary experience!"</p>
    </div>

    <!-- Add more testimonial items as needed -->

    <div class="testimonial-indicators">
        <div class="indicator active" onclick="switchTest(0)"></div>
        <div class="indicator" onclick="switchTest(1)"></div>
        <div class="indicator" onclick="switchTest(2)"></div>
        <!-- Add more indicators as needed -->
    </div>
</div>
<div id="modal-overlay" class="modal-overlay">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <div class="col-md-6">
            <h2 class="section-title">About Hamro Restaurant</h2>
            <p class="section-description">Welcome to Hamro Restaurant, where culinary delights meet extraordinary
                experiences. We are a modern and vibrant restaurant dedicated to serving you the finest cuisine in an
                exceptional setting.</p>
            <p class="section-description">At Hamro Restaurant, we believe that dining is not just about satisfying your
                hunger; it's about creating unforgettable memories. Our team of talented chefs, dedicated staff, and warm
                hospitality will ensure that every visit is a remarkable culinary journey.</p>
            <p class="section-description">With a passion for innovation and a commitment to using only the freshest,
                locally sourced ingredients, our menu is crafted to tantalize your taste buds. From delectable appetizers to
                mouthwatering main courses and indulgent desserts, every dish is a masterpiece.</p>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>



<div id="myModal" class="modal">
    <div class="modal-header">
        <span class="close">&times;</span>
    </div>
    <div class="modal-bod">
        <div class="menu-container">
            <h2 class="menubar">Menu</h2>
            <div class="menu-item">
                <h2 class="titlehd">APPETIZER</h2>
                <ul class="appetizer">
                    <span class="firstone">
                        <li>CHICKEN MOMO WITH TOMATO PICKEL - RS. 764</li>
                        <li>VEGETABLE MOMO - RS. 690</li>
                        <li>CHICKEN SPRING ROLLS - RS. 914</li>
                        <li>VEGETABLE SPRING ROLLS - RS. 851</li>
                        <li>FISH FINGER WITH TARTER SAUCE - RS. 926</li>
                        <li>VEGETABLE PAKODA - RS. 690</li>
                    </span>
                    <span class="firstsecond">
                        <li>PANEER PAKODA - RS. 851</li>
                        <li>CHICKEN TIKKA - RS. 926</li>
                        <li>CHICKEN CHILLI - RS. 963</li>
                        <li>CHILLI PANEER - RS. 851</li>
                        <li>FRENCH FRIES - RS. 578</li>
                        <li>MASALA PEANUT - RS. 435</li>
                    </span>
                </ul>
                <h2 class="titlehd">SOUPS</h2>
                <ul class="appetizer">
                    <span class="firstone">
                        <li>CREAM OF MUSHROOM SOUP - RS. 615</li>
                        <li>CHICKEN NOODLE SOUP - RS. 615</li>
                    </span>
                    <span class="firstsecond">
                        <li>HOT & SOUR SOUP - RS. 615</li>
                        <li>MANCHOW SOUP - RS. 615</li>
                    </span>
                </ul>
                <h2 class="titlehd">SALADS</h2>
                <ul class="one">
                    <li>ORGANIC GARDEN GREEN SALAD - RS. 690</li>
                    <li>CAESAR SALAD WITH CHICKEN OR BACON - RS. 802</li>
                    <li>MIX GREEN SALAD - RS. 690</li>
                </ul>
                <h2 class="titlehd">NEPALI CUISINE</h2>
                <ul class="two">
                    <li>NEPALI THALI SET (VEG/CHICKEN/MUTTON) - RS. 1181</li>
                </ul>
                <h2 class="titlehd">CONTINENTAL CUISINE</h2>
                <ul class="appetizer">
                    <span class="firstone">
                        <li>PAN FRIED FISH - RS. 1013</li>
                        <li>GRILLED LEMON HERB PORK <br> CHOP WITH GARLIC POTATO - RS. 1181</li>
                        <li>HERB MARINATED GRILLED <br>CHICKEN - RS. 1013</li>
                        <li>PEPPER STEAK - RS. 1150</li>
                        <li>PASTA OF YOUR CHOICE - RS. 910</li>
                        <li>FISH N CHIPS - RS. 1013</li>
                    </span>
                    <span class="firstsecond">
                        <li>PIZZA OF YOUR CHOICE - RS. 914</li>
                        <li>SHANKER CLUB SANDWICH - RS. 963</li>
                        <li>CHICKEN BURGER - RS. 914</li>
                        <li>QUESADILLA VEG/CHICKEN - RS. 914</li>
                        <li>ROAST CHICKEN SANDWICH - RS. 914</li>
                        <li>CHEESE AND TOMATO SANDWICH - RS. 851</li>
                    </span>
                </ul>
                <h2 class="titlehd">INDIAN CUISINE</h2>
                <ul class="appetizer">
                    <span class="firstone">
                        <li>CHICKEN BIRYANI WITH CUCUMBER RAITA - RS. 1075</li>
                        <li>CHICKEN BUTTER MASALA - RS. 1013</li>
                        <li>MUTTON CURRY - RS. 1175</li>
                        <li>CHICKEN CURRY - RS. 1013</li>
                        <li>ALOO GOBI ADRAKI - RS. 740</li>
                        <li>PALAK PANEER - RS. 851</li>
                    </span>
                    <span class="firstsecond">
                        <li>MATER PANEER - RS. 851</li>
                        <li>MIX VEGETABLE CURRY - RS. 740</li>
                        <li>YELLOW DAL TADKA - RS. 615</li>
                        <li>DAL BUKHARA - RS. 615</li>
                        <li>NAAN OR ROTI - RS. 317</li>
                        <li>STEAM RICE - RS. 317</li>
                    </span>
                </ul>
                <h2 class="titlehd">CHINESE CUISINE</h2>
                <ul class="appetizer">
                    <span class="firstone">
                        <li>VEGETABLE/CHICKEN FRIED RICE - RS. 914</li>
                        <li>CHILLY GARLIC NOODLE - RS. 914</li>
                        <li>GOBI MANCHURIAN DRY - RS. 851</li>
                        <li>VEGETABLE HOT GARLIC SAUCE - RS. 851</li>
                    </span>
                    <span class="firstsecond">
                        <li>FISH WITH RED CURRY SAUCE - RS. 1013</li>
                        <li>KUNG PAO CHICKEN - RS. 1013</li>
                        <li>ROAST DUCK (CANTONESE STYLE) - RS. 1210</li>
                        <li>MAPU TOFU - RS. 850</li>
                    </span>
                </ul>
                <h2 class="titlehd">DESSERTS</h2>
                <ul class="appetizer">
                    <span class="firstone">
                        <li>FRESH CUT FRUIT PLATTER - RS. 590</li>
                        <li>ICE CREAM - RS. 590</li>
                        <li>CAKE OF THE DAY - RS. 590</li>
                    </span>
                    <span class="firstsecond">
                        <li>WALNUT BROWNIES - RS. 764</li>
                        <li>BAKED YOGHURT - RS. 590</li>
                        <li>CRÈME BRULEE - RS. 615</li>
                    </span>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="gallery-section" class="gallery">
    <h1 class="galleryheader">gallery</h1>
    <div class="gallery-row">
        <section class="gallery1">
            <img class="photos1" src="images/Hotel-Heritage-Bhaktapur-courtyard.png" alt="">
        </section>
        <section class="gallery2">
            <img class="photos2" src="images/1660040242.sidetrackimagehostel.jpg" alt="">
        </section>
    </div>
    <div class="gallery-row">
        <section class="gallery3">
            <img class="photos3" src="images/Bar-Inventory_Main.jpg" alt="">
        </section>
        <section class="gallery4">
            <img class="photos4" src="images/cover-image.jpg" alt="">
        </section>
    </div>
    <input type="button" class="gallerybtn" value="View More">
</div>

<div id="myModal2" class="modal12">
    <div class="modal-conten">
        <span id="closes" class="close">&times;</span> <!-- Close button -->
        <div class="gallersec2">

            <h1 class="galleryheader2">gallery</h1>
            <div class="gallery-rw2">
                <section class="gallery17">
                    <img class="photos17" src="images/gallery 1.jpg" alt="">
                </section>
                <section class="gallery18">
                    <img class="photos18" src="images/gallery 2.jpg" alt="">
                </section>
            </div>
            <div class="gallery-rw2">
                <section class="gallery19">
                    <img class="photos19" src="images/gallery4.jpg" alt="">
                </section>
                <section class="gallery20">
                    <img class="photos20" src="images/gallery5.jpg" alt="">
                </section>
            </div>
            <div class="gallery-rw2">
                <section class="gallery21">
                    <img class="photos21" src="images/gallery6.jpg" alt="">
                </section>
                <section class="gallery22">
                    <img class="photos22" src="photos/pizza-5179939_960_720.jpg" alt="">
                </section>
            </div>
            <div class="gallery-rw2">
                <section class="gallery23">
                    <img class="photos23" src="images/image-2.jpg" alt="">
                </section>
                <section class="gallery24">
                    <img class="photos24" src="images/image-3.jpg" alt="">
                </section>
            </div>
            <div class="gallery-rw2">
                <section class="gallery25">
                    <img class="photos25" src="images/images.jpg" alt="">
                </section>
                <section class="gallery26">
                    <img class="photos26" src="images/images.jpg" alt="">
                </section>
            </div>
            <div class="gallery-rw2">
                <section class="gallery27">
                    <img class="photos27" src="images/Hotel-Heritage-Bhaktapur-courtyard.png" alt="">
                </section>
                <section class="gallery28">
                    <img class="photos28" src="photos/burger.jpg" alt="">
                </section>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="form-container">
    <div class="contact-container">
        <div class="contactform">
            <h1 class="xh">Contact Us</h1>
            <form class="formcu" onsubmit="return showPrompt()">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" onkeypress="return blockNumericInput(event)" style="width: 250px;" required><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" style="width: 245px;" required><br><br>
                <label for="subject">Subject:</label><br>
                <input type="text" id="subject" name="subject" onkeypress="return blockNumericInput(event)" style="width: 250px;" required><br><br>
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="5" cols="30" style="width: 250px;" required></textarea><br><br>
                <input class="btnsubmit" type="submit" value="Submit" style="width: 260px;">
            </form>
        </div>
        <div class="contact-info">
            <p>Location: Kathamandu, Manamaiju 10</p>
            <p>Contact Number: 01-123456</p>
            <p>Email Address: hamrorestaurant@gmail.com</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d7032.114459592055!2d83.95830202346953!3d28.20557377878067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDEyJzIxLjgiTiA4M8KwNTcnNDAuNCJF!5e0!3m2!1sen!2snp!4v1689471481144!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<div id="reservationModal" class="modal">
    <div class="modal-content">
        <span class="closen">&times;</span>
        <h2>Reservation Form</h2>
        <form id="reservationForm">
            <label for="name">Name:</label>
            <input type="text" id="name" required>
            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" required>
            <label for="reservationDate">Reservation Date:</label>
            <input type="date" id="reservationDate" required>
            <label for="reservationTime">Reservation Time:</label>
            <input type="time" id="reservationTime" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection