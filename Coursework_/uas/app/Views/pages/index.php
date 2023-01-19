<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
    <div class="wrapper" id="wrapper1">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="/">ByeBye</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Page/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Page/contact">Contact Us</a>
                        </li>
                    </ul>
                    <a href="/Page/register" class="btn btn-primary me-md-2" type="button">Register</a>
                    <a href="/Page/login" class="btn btn-outline-primary" type="button">Login</a>
                </div>
            </div>
        </nav>
        <div class="text-wrapper">
            <div class="d-flex align-items-center justify-content-center">
                <h1>ByeBye</h1>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h3>Bye Home, Bye Work</h3>
            </div>
        </div>
    </div>

    <!-- Destinations -->
    <div class="content1">
        <h1>Features Destination</h1>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-theme">
                        <div class="card text-center h-100">
                            <img src="/image/machu.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Machu Picchu, Peru</h5>
                                <p class="card-text">Located high in the Andes mountains of Peru, Machu Picchu is now believed to have been a sacred royal retreat for the Incan rulers. Built in the 15th century AD and abandoned less than a 100 years later, the remote site continues to amaze with its perfectly joined, mortarless, intricate stonework. Huge multi-ton blocks of stone are perfectly joined with each other, without the use of mortar or cement.
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-primary">Welcome</a>
                            </div>
                        </div>

                        <div class="card text-center h-100">
                            <img src="/image/rome.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Rome, Italy</h5>
                                <p class="card-text">The Eternal City is more like a giant, living museum. Visitors are immersed in and surrounded by thousands of years of history. It's a relatively compact city, and a three-day itinerary gets you to the minimum number of must-see places.These must-see sites for any visitor include the Colosseum and adjacent Roman Forum, and Vatican City, a separate country in the middle of central Rome.
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-primary">Welcome</a>
                            </div>
                        </div>
                        <div class="card text-center h-100">
                            <img src="/image/maui.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Maui, Hawaii</h5>
                                <p class="card-text">This Hawaiian island offers a wide range of experiences for visitors. You can surf, enjoy a meal on the beach at a five-star luxury resort in Wailea, ride a horse across a dormant volcano in Haleakala National Park, or hike through a rainforest in the West Maui Mountains. When it comes to accommodation, there is something for everyone here, from rustic hippie bungalow bed and breakfasts to luxury resort hotels.
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-primary">Welcome</a>
                            </div>
                        </div>
                        <div class="card text-center h-100">
                            <img src="/image/zealand.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">New Zealand</h5>
                                <p class="card-text">With its striking natural beauty, friendly citizens, and recent popularity due to its use as the filming location for the Lord of the Rings films (as well as many others), this island nation is one of the world's great places to visit. The biodiversity here is amazing-it's believed New Zealand was one of the last places on earth to have human inhabitants. Start your visit off in the capital city of Auckland.
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-primary">Welcome</a>
                            </div>
                        </div>
                        <div class="card text-center h-100">
                            <img src="/image/istanbul.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Istanbul, Turkey</h5>
                                <p class="card-text">Turkey's capital city is another destination that offers a great mix of culture, food, and history. There are thousands of years of history here, starting with Ancient Greeks and Ancient Romans and leading up through the Ottoman Empire. Istanbul has excellent public transit, which means it's easy to get around and explore all the major sites and monuments. Must-see places include the Blue Mosque.
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-primary">Welcome</a>
                            </div>
                        </div>
                        <div class="card text-center h-100">
                            <img src="/image/nyc.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Manhattan, New York</h5>
                                <p class="card-text">One of the five boroughs of New York City, Manhattan is actually an island, bordered by the East River and the Hudson (and a little bit by the Harlem River). This island is a bit less than 23 square miles and is home to almost two million residents. Add in the daily influx of workers, and the island routinely holds close to four million people.No other city in the world offers the frenetic energy of New York City. 
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="#" class="btn btn-primary">Welcome</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Book Now -->
    <section class="book" id="book">
        <h1>Book Now</h1>
        <div class="row">
            <div class="image">
                <img src="/image/book-img.svg">
            </div>
            <form action="/booking/create" method="POST">
                <div class="inputBox">
                    <h3>Place</h3>
                    <input type="text" placeholder="place name" name="place">
                </div>
                <div class="inputBox">
                    <h3>How many</h3>
                    <input type="number" placeholder="number of guests" name="people">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" name="leaving">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>

        </div>
    </section>
<?= $this->endSection('content'); ?>