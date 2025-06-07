<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>FlavorVerse</title>
    <link rel="stylesheet" href="css/cookbook.css"/>
</head>
<body>

<?php if (isset($_SESSION['alert'])): ?>
    <div id="alertBox" style="background: #d4edda; color: #155724; padding: 10px; text-align: center;">
        <?= $_SESSION['alert']; ?>
    </div>
    <script>
        setTimeout(() => {
            const box = document.getElementById("alertBox");
            if (box) box.remove();
        }, 1500);
    </script>
    <?php unset($_SESSION['alert']); ?>
<?php endif; ?>

<header>
    <h1>FlavorVerse</h1>
</header>

<nav>
    <a href="about.html">About Us</a>
    <a href="contact.html">Contact Us</a>

    <?php if (!isset($_SESSION['user'])): ?>
        <a href="login.php">Login</a>
        <a href="signUp.php">Sign Up</a>
    <?php else: ?>
        <span style="color:white; margin-right:15px;">
            Welcome, <?= htmlspecialchars($_SESSION['user']['username']); ?>
        </span>
        <a href="logout.php">Logout</a>
    <?php endif; ?>
</nav>

<div class="content">
        <h1>Welcome to FlavorVerse!</h1>
        <p>Explore a world full of delicious recipes shared by food lovers like you.</p>
        <!-- <img src="image/front page image.jpg" alt="Food Banner" /> -->
    </div>

    <!-- Recipes slider -->
    <section class="recipes">
        <h2 class="recipe-category">Chef's Kitchen</h2>

        <button class="pre-btn"><img src="image/arrow.jpg" alt="Previous"></button>
        <button class="nxt-btn"><img src="image/arrow.jpg" alt="Next"></button>

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="image/noodle.jpg" alt="Noodles" class="product-thumb" />
                    <a href="recipe page.html"><button class="card-btn">View recipe</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Noodles</h2>
                    <p class="product-short-description">A quick, flavorful noodle delight!</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="image/samosa.jpg" alt="Samosa" class="product-thumb" />
                    <a href="samosarecipe.html"><button class="card-btn">View recipe</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Samosa</h2>
                    <p class="product-short-description">Crispy and spicy Indian snack.</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="image/momo.jpg" alt="Momo" class="product-thumb" />
                    <a href="momo.html"><button class="card-btn">View recipe</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Momo</h2>
                    <p class="product-short-description">Steamed dumplings with tasty filling.</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="image/salad.jpg" alt="Salad" class="product-thumb" />
                    <a href="salad.html"><button class="card-btn">View recipe</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Salad</h2>
                    <p class="product-short-description">Fresh and healthy vegetable mix.</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="image/pastrey.jpg" alt="Pastry" class="product-thumb" />
                    <a href="pastry.html"><button class="card-btn">View recipe</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Pastry</h2>
                    <p class="product-short-description">Soft, sweet dessert for all occasions.</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="image/tacos.jpg" alt="Tacos" class="product-thumb" />
                    <a href="tacos.html"><button class="card-btn">View recipe</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Tacos</h2>
                    <p class="product-short-description">Mexican treat with spicy fillings.</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="image/pizza.jpg" alt="Pizza" class="product-thumb" />
                    <a href="pizza.html"><button class="card-btn">View recipe</button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Pizza</h2>
                    <p class="product-short-description">Cheesy and delicious Italian dish.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025, Idea and created by Ankit Kishore Sen</p>
        <p>&copy; 2025, Designed and Implemented by Ankit Kishore Sen and Manya Tripathi</p>
        <p>&copy; 2025, Cookbook Connect</p>
    </footer>

    <script src="javascript/fp.js"></script>
</body>
</html>
