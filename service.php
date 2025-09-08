<?php
// services.php
$services = [
    [
        "title" => "Web Development",
        "description" => "We create responsive and modern websites tailored to your needs."
    ],
    [
        "title" => "Digital Marketing",
        "description" => "Promote your brand effectively with our marketing strategies."
    ],
    [
        "title" => "Graphic Design",
        "description" => "Creative designs for logos, banners, and branding materials."
    ],
    [
        "title" => "E-commerce Solutions",
        "description" => "Custom online stores to help your business grow online."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Noyon Edition</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #34495e;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            padding: 10px 15px;
            display: inline-block;
        }
        nav ul li a:hover {
            background-color: #1abc9c;
            border-radius: 5px;
        }
        main {
            padding: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .service-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin: 15px;
            padding: 20px;
            width: 250px;
            text-align: center;
            transition: transform 0.2s;
        }
        .service-card:hover {
            transform: translateY(-5px);
        }
        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Our Services</h1>
        <p>Discover what Noyon Edition can do for you</p>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <main>
        <?php foreach($services as $service): ?>
            <div class="service-card">
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>&copy; 2025 Noyon Edition. All rights reserved.</p>
    </footer>
</body>
</html>
