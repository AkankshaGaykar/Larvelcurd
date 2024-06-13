<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Sales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-image: url('https://static.vecteezy.com/system/resources/previews/002/478/302/original/sale-electronics-banner-background-free-vector.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .overlay {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            flex: 1; /* Take up remaining vertical space */
        }

        h1 {
            color: #fff;
            font-weight: bold;
            font-size: 36px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: color 0.3s;
        }

        h1:hover {
            color: #ffc107;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        .create-link {
            margin-bottom: 20px;
        }

        .create-link a {
            background-color: black;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            width: 100%; /* Ensure footer spans the entire width */
            flex-shrink: 0; /* Prevent footer from shrinking */
        }

    </style>
</head>
<body>
    <div class="overlay">
        <div>
            <h1>Welcome to our <span style="color: #ffc107;">Product Sales</span> Page!</h1>
            <div class="create-link">
            <a href="{{ route('products.create') }}" >Create New Product</a>
            </div>
            
        </div>
    </div>
    <footer>
        &copy; 2024 Product Sales
    </footer>
</body>
</html>
