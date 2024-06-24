<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heritage-Nest</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Buy</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Manage Rentals</a></li>
                <li><a href="#">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <img src="{{ asset('images/a1.png') }}" alt="Hero Image">
        </section>

        <!-- Highlights Section -->
        <section class="highlights">
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
            <div class="highlight">
                <h2>2k+</h2>
                <p>New Flats Listed</p>
                <a href="#">View all</a>
            </div>
        </section>

        <!-- Story Section -->
        <section class="story">
            <div class="story-image">
                <img src="{{ asset('images/a6.png') }}" alt="Story Image">
            </div>
            <h2>Efficient and Transparent Home Buying Solutions</h2>
            <p>In the symphony of bustling markets and serene landscapes, Heritage-Nest was born...</p>
        </section>

        <!-- Team Section -->
        <section class="team">
            <h2>Discover the Faces Behind Our Success</h2>
            <div class="team-member">
                <img src="{{ asset('images/a2.png') }}" alt="Team Member 1">
                <p>John Doe</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/a3.png') }}" alt="Team Member 2">
                <p>Jane Doe</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/a4.png') }}" alt="Team Member 3">
                <p>Jim Doe</p>
            </div>
           
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="testimonial">
                <img src="{{ asset('images/a7.png') }}" alt="Testimonial Image">
                <p>"The level of security provided by CypherPlay is unmatched..."</p>
                <p>- Tony Stark, Marketing Manager, XYZ</p>
            </div>
          
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Heritage-Nest. All rights reserved.</p>
        <nav>
            <ul>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
