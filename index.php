<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Cakes</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #fff8f0;
        }
        header {
            background-color: #ff8c00;
            color: white;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        header h1 {
            font-size: 2.5em;
            margin: 0;
            letter-spacing: 2px;
        }
        header p {
            font-size: 1.2em;
            margin: 10px 0 0;
        }
        .container {
            width: 85%;
            max-width: 1200px;
            margin: 20px auto;
            overflow: hidden;
            padding: 20px 0;
        }
        .intro {
            text-align: center;
            padding: 20px 0;
        }
        .intro h2 {
            font-size: 2.2em;
            color: #ff4500;
            margin-bottom: 15px;
        }
        .intro p {
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .gallery img {
            width: 280px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        .contact {
            background-color: #ffe5d0;
            padding: 30px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .contact h2 {
            font-size: 2em;
            color: #ff4500;
            margin-bottom: 20px;
        }
        .contact p {
            font-size: 1.1em;
            color: #666;
            margin: 5px 0;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.2);
        }
        footer p {
            margin: 0;
            font-size: 1em;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Delicious Cakes</h1>
        <p>Your go-to place for delectable and beautiful cakes</p>
    </header>

    <div class="container">
        <section class="intro">
            <h2>Welcome to Delicious Cakes!</h2>
            <p>At Delicious Cakes, we create custom cakes for any occasion. Whether you're celebrating a birthday, wedding, or just want to enjoy a sweet treat, our cakes are made with love and the finest ingredients.</p>
        </section>

   
     <section class="gallery">
            <img src="https://mrbrownbakery.com/image/images/YaIsXaHm4bBIggrEQ9701udrvjtJnBzfkryGH9Dr.jpeg?p=med" alt="Chocolate Cake">
            <img src="https://whipped.in/cdn/shop/products/DesignerCake_1800x1800_57c16e73-cc12-4a6a-b456-7d312816e5e9_1000x.jpg?v=1687431697" alt="Vanilla Cake">
            <img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/Cakes/NewCakes/new-designer-cakes-15-600x600.jpg" alt="Red Velvet Cake">
            <img src="https://miro.medium.com/v2/resize:fit:564/1*P3f68cY7gv4djcnhaxa_NQ.jpeg" alt="Fruit Cake">
        </section>
        <section class="contact">
            <h2>Contact Us</h2>
            <p>Email: info@deliciouscakes.com</p>
            <p>Phone: (123) 456-7890</p>
            <p>Address: 123 Sweet Street, Cake Town, CA 12345</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Delicious Cakes. All Rights Reserved.</p>
    </footer>
</body>
</html>
