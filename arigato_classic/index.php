<?php
include ("./includes/header.php");
?>



<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Experience Authentic Japanese Cuisine</h1>
            <p>Discover the flavors of Japan with our traditional recipes and fresh ingredients</p>
            <div class="hero-buttons">
                <a href="menu.php" class="btn">View Our Menu</a>
                <a href="about.php" class="btn btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Our Categories</h2>
        <div class="categories-grid">
            <?php // foreach ($categories as $category): ?>
                <a href="" class="category-card">
                    <img src="https://source.unsplash.com/300x200/?japanese,<?= $category['key'] ?>,food" alt="">
                    <div class="category-overlay">
                        <div class="category-name">name</div>
                        <div class="category-count"> items</div>
                    </div>
                </a>
            <?php // endforeach; ?>
        </div>
    </div>
</section>

<!-- Best Selling Products Section -->
<section class="featured-products section">
    <div class="container">
        <h2 class="section-title">Best Sellers</h2>
        <div class="products-grid">
            <?php // foreach ($bestsellers as $product): ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://source.unsplash.com/300x300/?japanese">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">name</h3>
                        <rip class="product-description">discription</p>
                        <span class="product-price"></span>
                        <div class="product-actions">
                            <button class="btn add-to-cart" onclick="addToCart( 1, event)">
                                Add to Cart
                            </button>
                            <a href="menu.php?id=<?= $product['id'] ?>" class="view-product">View</a>
                        </div>
                    </div>
                </div>
            <?php // endforeach; ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section section">
    <div class="container">
        <div class="about-content">
            <div class="about-image">
                <img src="https://source.unsplash.com/600x400/?japanese,chef,restaurant" alt="About Us">
            </div>
            <div class="about-text">
                <h2>About Arigato Japanese Food</h2>
                <p>Arigato offers an authentic Japanese dining experience with a focus on traditional flavors and techniques. Our talented chefs prepare each dish with care and precision, using only the freshest ingredients.</p>
                <p>From sushi and sashimi to ramen and katsu, our diverse menu has something for everyone to enjoy. We take pride in bringing the tastes of Japan to your table.</p>
                <div class="about-features">
                    <div class="about-feature">
                        <i class="fas fa-utensils"></i>
                        <div>
                            <h4>Authentic Recipes</h4>
                            <p>Traditional dishes prepared with time-honored techniques</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-leaf"></i>
                        <div>
                            <h4>Fresh Ingredients</h4>
                            <p>High-quality ingredients sourced for maximum flavor</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-award"></i>
                        <div>
                            <h4>Expert Chefs</h4>
                            <p>Skilled chefs with years of culinary experience</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <i class="fas fa-truck"></i>
                        <div>
                            <h4>Fast Delivery</h4>
                            <p>Quick delivery to bring Japanese cuisine to your door</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section section">
    <div class="container">
        <h2 class="section-title">Talk to Us</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p>123 Sakura Street</p>
                            <p>Tokyo District, 12345</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <p>+1-234-567-8900</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <p>info@arigatofood.com</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-hours">
                    <h4>Opening Hours</h4>
                    <p>Monday - Friday: 11:00 AM - 10:00 PM</p>
                    <p>Saturday - Sunday: 12:00 PM - 11:00 PM</p>
                </div>
            </div>
            
            <div class="contact-form">
                <h3>Send us a Message</h3>
                <form action="contact.php" method="post">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>


<?php
include ("./includes/footer.php");
?>