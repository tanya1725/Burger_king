<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger King</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            overflow-x: hidden;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/image/secondwallpaper.jpg') no-repeat center center/cover;
            opacity: 0.4;
            z-index: -1;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: black;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
            opacity: 0.9;
        }

        .navbar-logo img {
            height: 50px;
        }

        .navbar-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar-links li {
            margin-left: 20px;
        }

        .navbar-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navbar-links a:hover {
            color: #e74c3c;
        }

        .header {
            position: relative;
            z-index: 1;
            font-size: 80px;
            margin-top: 200px;
            margin-left: 140px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 2px grey;
        }

        .header2 {
            position: relative;
            z-index: 1;
            font-size: 80px;
            margin-left: 540px;
            margin-top: 20px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 2px grey;
        }

        .subheader {
            position: relative;
            z-index: 1;
            font-size: 30px;
            margin-left: 500px;
            letter-spacing: 5px;
            margin-top: 20px;
            text-shadow: 2px 2px 2px grey;
        }

        .zoomburger {
            margin: 50px 0 0 150px;
            height: 650px;
            overflow: hidden;
        }

        .zoomburger img {
            height: 100%;
            width: 640px;
            object-fit: cover;
        }

        .zoomburger-side-part {
            background-color: orangered;
            width: 620px;
            height: 650px;
            margin-left: 790px;
            margin-top: -650px;
            opacity: 0.8;
            font-size: 25px;
            padding: 30px;
            box-sizing: border-box;
            text-align: justify;
            line-height: 1.6;
        }

        @media (max-width: 1200px) {
            .header, .header2, .subheader {
                font-size: 60px;
                margin-left: 20px;
                text-align: center;
            }

            .subheader {
                margin-top: 10px;
            }

            .zoomburger {
                margin-left: 0;
                height: 400px;
                width: 100%;
            }

            .zoomburger-side-part {
                width: 100%;
                margin-left: 0;
                height: auto;
                margin-top: 20px;
            }
        }

        @media (max-width: 768px) {
            .header, .header2 {
                font-size: 40px;
            }

            .subheader {
                font-size: 20px;
            }

            .navbar-links li {
                margin-left: 10px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src='/image/burgerkinglogo.jpg' alt="Burger King Logo">
        </div>
        <ul class="navbar-links">
            <li><a href="/">Home</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#nearby-restaurants">Nearby Restaurants</a></li>
            <li><a href="items">Get Started</a></li>
        </ul>
    </nav>

    <div class="background"></div>

    <div class="header">THE FRESHEST, MOST DELICIOUS</div>
    <div class="header2">BURGERS</div>
    <div class="subheader">IN THE NEIGHBOURHOOD</div>

    <div class="zoomburger">
        <img src="/image/zoomburger.jpg" alt="Zoomed Burger">
    </div>

    <div class="zoomburger-side-part">
        <p>BURGER KING, founded in 1954, is a global fast-food chain known for its flame-grilled burgers, particularly the iconic Whopper. With a presence in over 100 countries, it has established itself as a major player in the fast-food industry, offering a diverse menu that includes burgers, chicken sandwiches, fries, and breakfast items. Burger King emphasizes customer choice with options like the "Have It Your Way" slogan, allowing for personalized orders. Over the years, it has also been recognized for its innovative marketing campaigns and efforts to introduce plant-based alternatives, catering to evolving consumer preferences.</p>
    </div>
</body>
</html>
