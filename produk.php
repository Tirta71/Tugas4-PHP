<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Products</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Set background color */
            padding-top: 20px; /* Add some padding at the top */
        }
        .product {
            background-color: #fff; /* Set product background color */
            padding: 20px; /* Add padding */
            margin-bottom: 20px; /* Add margin bottom */
            border-radius: 10px; /* Add border-radius for a rounded appearance */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
        }
        .product img {
            max-width: 100%; /* Make images responsive */
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">List of Products</h1>
        <div class="row">
            <?php 
          
            require_once 'list-produk.php'; 

            foreach ($products as $product): 
            ?>
            <div class="col-md-4">
                <div class="product">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width: 100%; height: 200px; object-fit: fill;">
                    <h2><?php echo $product['name']; ?></h2>
                    <p><?php echo $product['description']; ?></p>
                    <p>Price: <?php echo $product['price']; ?></p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>