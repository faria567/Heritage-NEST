<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .header {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .header .navbar-brand img {
            max-height: 50px;
        }
        .search-section {
            background-color: #f1f1f1;
            padding: 30px 0;
        }
        .search-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .properties-section, .testimonials-section {
            padding: 50px 0;
        }
        .card {
            margin-bottom: 30px;
        }
        .testimonial {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 40px 0;
        }
        footer a {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="/path-to-your-logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Buy</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sell</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Manage Rentals</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sign In</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section class="search-section">
        <div class="container">
            <div class="search-box">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Your Location">
                        </div>
                        <div class="col-md-4">
                            <select class="form-control">
                                <option>Property Type</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Budget">
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Find Property</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="highlights ">
        <div class="highlight ">
            <h2>2k+</h2>
            <p>New Flats Listed</p>
            <a href="#">View all</a>
        </div>
        <div class="highlight">
            <h2>2k+</h2>
            <p>New Flats Listed</p>
            <a href="#">View all</a>
        </div>
        <div class="highlight">
            <h2>2k+</h2>
            <p>New Flats Listed</p>
            <a href="#">View all</a>
        </div>
        <div class="highlight">
            <h2>2k+</h2>
            <p>New Flats Listed</p>
            <a href="#">View all</a>
        </div>
    </section>


    <section class="properties-section">
        <div class="container">
            <h2 class="text-center">Popular Properties</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="property-image.jpg" class="card-img-top" alt="Property">
                        <div class="card-body">
                            <h5 class="card-title">SunnySlope Suites</h5>
                            <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                            <p class="card-text">$250000</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="property-image.jpg" class="card-img-top" alt="Property">
                        <div class="card-body">
                            <h5 class="card-title">SunnySlope Suites</h5>
                            <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                            <p class="card-text">$250000</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="property-image.jpg" class="card-img-top" alt="Property">
                        <div class="card-body">
                            <h5 class="card-title">SunnySlope Suites</h5>
                            <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                            <p class="card-text">$250000</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>

    <section class="properties-section">
        <div class="container">
            <h2 class="text-center">New Listed Properties</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="property-image.jpg" class="card-img-top" alt="Property">
                        <div class="card-body">
                            <h5 class="card-title">SunnySlope Suites</h5>
                            <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                            <p class="card-text">$250000</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="property-image.jpg" class="card-img-top" alt="Property">
                        <div class="card-body">
                            <h5 class="card-title">SunnySlope Suites</h5>
                            <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                            <p class="card-text">$250000</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="property-image.jpg" class="card-img-top" alt="Property">
                        <div class="card-body">
                            <h5 class="card-title">SunnySlope Suites</h5>
                            <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                            <p class="card-text">$250000</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>

    <section class="testimonials-section bg-light">
        <div class="container">
            <h2 class="text-center">Testimonials</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial">
                        <p>"The level of security provided by CypherPlay is unmatched. I feel confident using my card for both everyday purchases and travel. It’s the peace of mind I was looking for."</p>
                        <p><strong>Tony Stark</strong><br>Marketing Manager, XYZ</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial">
                        <p>"The level of security provided by CypherPlay is unmatched. I feel confident using my card for both everyday purchases and travel. It’s the peace of mind I was looking for."</p>
                        <p><strong>Tony Stark</strong><br>Marketing Manager, XYZ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Product</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Tutorials</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Help center</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4
