@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>3 BHK Builder Floor for Sale in Site Ram Bazar Hyderabad</h3>
            <h4>Meadowshire Park, Greenfield, USA</h4>
            <h2>$300K</h2>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('images/Rectangle 20.png') }}" class="property-image mb-4" alt="Property Image">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/Rectangle 21 (1).png') }}" class="property-image mb-4" alt="Property Image">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/Rectangle 21.png') }}" class="property-image mb-4" alt="Property Image">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/Rectangle 23.png') }}" class="property-image mb-4" alt="Property Image">
                </div>
            </div>
            <div class="overview">
                <h4>Overview</h4>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Carpet Area:</strong> 2000 sqft ($225/sqft)</p>
                        <p><strong>Facing:</strong> North - East</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Floor:</strong> Second (Out of 6th floor)</p>
                        <p><strong>Transaction Type:</strong> Ready to move</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Additional Rooms:</strong> 1 servant room & 1 guest room</p>
                        <p><strong>Lift:</strong> 1</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Age of construction:</strong> New Construction</p>
                        <p><strong>Furnished:</strong> Fully Furnished</p>
                    </div>
                </div>
            </div>
            <div class="amenities">
                <h4>Amenities</h4>
                <div class="row">
                    <div class="col-md-3">
                        <p><i class="fas fa-bolt"></i>Power Back Up</p>
                        <p><i class="fas fa-car"></i>Reserved Parking</p>
                        <p><i class="fas fa-tree"></i>Park</p>
                        <p><i class="fas fa-wifi"></i>Internet/Wi-Fi Connectivity</p>
                    </div>
                    <div class="col-md-3">
                        <p><i class="fas fa-dumbbell"></i>Gymnasium</p>
                        <p><i class="fas fa-shield-alt"></i>Security</p>
                        <p><i class="fas fa-tint"></i>Water Storage</p>
                        <p><i class="fas fa-tv"></i>DTH Television Facility</p>
                    </div>
                    <div class="col-md-3">
                        <p><i class="fas fa-hands"></i>Vaastu Compliant</p>
                        <p><i class="fas fa-truck"></i>Service/Goods Lift</p>
                        <p><i class="fas fa-parking"></i>Visitor Parking</p>
                        <p><i class="fas fa-recycle"></i>Waste Disposal</p>
                    </div>
                    <div class="col-md-3">
                        <p><i class="fas fa-swimmer"></i>Club House</p>
                        <p><i class="fas fa-play"></i>Kids Play Area</p>
                        <p><i class="fas fa-washing-machine"></i>Laundry Service</p>
                        <p><i class="fas fa-gas-pump"></i>Piped Gas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Property Value</h5>
                    <h6 class="card-subtitle mb-2 text-muted">$300k - $310k</h6>
                    <p>Your bid can not be than 10% of the property Minimum value.</p>
                    <form>
                        <div class="form-group">
                            <label for="min">Min</label>
                            <input type="number" class="form-control" id="min" placeholder="$280k">
                        </div>
                        <div class="form-group">
                            <label for="max">Max</label>
                            <input type="number" class="form-control" id="max" placeholder="$305k">
                        </div>
                        <button type="submit" class="btn btn-primary">Bid Property</button>
                    </form>
                </div>
            </div>
            <div class="mt-4">
                <h5>Location</h5>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Meadowshire%20Park,%20Greenfield,%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





    <div class="other-services mt-5">
        <h4>Other Services</h4>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Property Search</h5>
                        <p class="card-text">Effortlessly find your dream property with advanced search filters.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Virtual Tours and Multimedia</h5>
                        <p class="card-text">Explore properties through immersive virtual tours and HD photos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Secure Online Transactions</h5>
                        <p class="card-text">Ensure secure transactions and e-sign documents seamlessly online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nearby-properties mt-5">
        <h4>Others Nearby Properties</h4>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="{{ asset('images/Banner Image.png') }}" class="card-img-top" alt="Property Image">
                                <div class="card-body">
                                    <h5 class="card-title">SunnySlope Suites</h5>
                                    <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                                    <p class="card-text"><strong>$250,000</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="{{ asset('images/Image.png') }}" class="card-img-top" alt="Property Image">
                                <div class="card-body">
                                    <h5 class="card-title">SunnySlope Suites</h5>
                                    <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                                    <p class="card-text"><strong>$250,000</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="{{ asset('images/Image (1).png') }}" class="card-img-top" alt="Property Image">
                                <div class="card-body">
                                    <h5 class="card-title">SunnySlope Suites</h5>
                                    <p class="card-text">Meadowshire Park, Greenfield, USA</p>
                                    <p class="card-text"><strong>$250,000</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more carousel-item divs if needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    {{-- <footer class="mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2024 Heritage Nest. All rights reserved.</p>
            </div>
        </div>
    </footer> --}}

    
<!-- resources/views/footer.blade.php -->
<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <p>Design amazing digital experiences that create more happy in the world.</p>
        </div>
        <div class="footer-columns">
            <div class="footer-column">
                <h4>Product</h4>
                <ul>
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Releases</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Media kit</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Help centre</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Social</h4>
                <ul>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">AngelList</a></li>
                    <li><a href="#">Dribbble</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Legal</h4>
                <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Licenses</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Heritage-Nest. All rights reserved.</p>
            <div class="footer-social-icons">
                <a href="#"><i class="icon-twitter"></i></a>
                <a href="#"><i class="icon-linkedin"></i></a>
                <a href="#"><i class="icon-facebook"></i></a>
                <a href="#"><i class="icon-github"></i></a>
            </div>
        </div>
    </div>
</footer>
``


</div>


@endsection
