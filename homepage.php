
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitConnect | Find Workout Partners & Book Sessions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            overflow-x: hidden;
        }
        
        .hero-section {
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(63, 55, 201, 0.9)), 
                        url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            min-height: 90vh;
            color: white;
            display: flex;
            align-items: center;
            padding: 0 5%;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-primary:hover {
            background-color: var(--secondary);
            border-color: var(--secondary);
        }
        
        .btn-accent {
            background-color: var(--accent);
            border-color: var(--accent);
            color: white;
        }
        
        .btn-accent:hover {
            background-color: #d91a6d;
            border-color: #d91a6d;
            color: white;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: var(--accent);
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }
        
        .workout-card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .workout-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .partner-card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }
        
        .partner-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 15px;
            border: 3px solid var(--primary);
        }
        
        .partner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .testimonial-card:before {
            content: '\201C';
            font-size: 5rem;
            color: rgba(67, 97, 238, 0.1);
            position: absolute;
            top: 10px;
            left: 20px;
        }
        
        .newsletter-section {
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(63, 55, 201, 0.9));
            color: white;
            padding: 60px 0;
            border-radius: 15px;
        }
        
        .footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer a:hover {
            color: white;
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }
        
        .nav-pills .nav-link.active {
            background-color: var(--accent);
        }
        
        .nav-pills .nav-link {
            color: var(--dark);
        }
        
        .stats-item {
            text-align: center;
            padding: 30px 15px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .stats-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        
        .how-it-works-step {
            position: relative;
            padding-left: 80px;
            margin-bottom: 40px;
        }
        
        .step-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
            height: 60px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" style="color: var(--primary);">
                <i class="fas fa-dumbbell me-2"></i>FitConnect
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#workouts">Workouts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#partners">Find Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
    <?php if(isset($_SESSION['logged_in'])) { ?>
        <a href="dashboard.php" class="btn btn-primary me-2">Dashboard</a>
        <a href="logout.php" class="btn btn-outline-primary">Logout</a>
    <?php } else { ?>
        <a href="index.html" class="btn btn-outline-primary me-2">Login</a>
        <a href="register.php" class="btn btn-primary">Register</a>
    <?php } ?>
</div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Find Your Perfect Workout Partner</h1>
                    <p class="lead mb-4">Connect with like-minded fitness enthusiasts, book training sessions, and achieve your goals together with FitConnect.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#workouts" class="btn btn-accent btn-lg px-4 py-3">Browse Workouts</a>
                        <a href="#partners" class="btn btn-outline-light btn-lg px-4 py-3">Find Partners</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://images.unsplash.com/photo-1538805060514-97d9cc17730c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3 shadow-lg" alt="Workout partners">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">1,250+</div>
                        <h5>Active Members</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">500+</div>
                        <h5>Workout Sessions</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">120+</div>
                        <h5>Certified Trainers</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">95%</div>
                        <h5>Satisfaction Rate</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workouts Section -->
    <section id="workouts" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Popular Workout Sessions</h2>
            <p class="text-center mb-5">Book your next fitness session with our certified trainers</p>
            
            <ul class="nav nav-pills mb-4 justify-content-center" id="workout-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#all">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#strength">Strength</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#cardio">Cardio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#yoga">Yoga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#hiit">HIIT</a>
                </li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="workout-card card h-100">
                                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Strength Training">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-primary">Strength</span>
                                        <span class="text-muted"><i class="far fa-clock me-1"></i> 60 min</span>
                                    </div>
                                    <h5 class="card-title">Full Body Strength</h5>
                                    <p class="card-text">Build muscle and increase strength with this comprehensive full-body workout.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="ms-1">4.9 (120)</span>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="workout-card card h-100">
                                <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Cardio Blast">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-success">Cardio</span>
                                        <span class="text-muted"><i class="far fa-clock me-1"></i> 45 min</span>
                                    </div>
                                    <h5 class="card-title">Cardio Blast</h5>
                                    <p class="card-text">High-energy cardio session to burn calories and improve endurance.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="ms-1">4.8 (95)</span>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="workout-card card h-100">
                                <img src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Yoga Flow">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-info">Yoga</span>
                                        <span class="text-muted"><i class="far fa-clock me-1"></i> 60 min</span>
                                    </div>
                                    <h5 class="card-title">Morning Yoga Flow</h5>
                                    <p class="card-text">Start your day with this energizing yoga sequence to improve flexibility and mindfulness.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="ms-1">4.9 (150)</span>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Other tabs would have similar content -->
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary">View All Workouts</a>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">How FitConnect Works</h2>
            <p class="text-center mb-5">Get started in just 3 simple steps</p>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="how-it-works-step">
                                <div class="step-number">1</div>
                                <h4>Create Your Profile</h4>
                                <p>Tell us about your fitness goals, preferences, and availability to help us match you with compatible partners.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="how-it-works-step">
                                <div class="step-number">2</div>
                                <h4>Find Partners or Sessions</h4>
                                <p>Browse through our database of members or workout sessions that match your criteria.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="how-it-works-step">
                                <div class="step-number">3</div>
                                <h4>Connect & Train</h4>
                                <p>Message potential partners or book sessions and start working towards your fitness goals together.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Find Partners Section -->
    <section id="partners" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Find Your Workout Partner</h2>
            <p class="text-center mb-5">Connect with fitness enthusiasts who share your goals</p>
            
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="partner-card">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah">
                        <h5>Sarah J.</h5>
                        <p class="text-muted">Yoga & Pilates</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Flexibility</span>
                            <span class="badge bg-light text-dark">Mindfulness</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="partner-card">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Mike">
                        <h5>Mike T.</h5>
                        <p class="text-muted">Strength Training</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Muscle Gain</span>
                            <span class="badge bg-light text-dark">Powerlifting</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="partner-card">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Lisa">
                        <h5>Lisa M.</h5>
                        <p class="text-muted">Running & Cardio</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Marathon</span>
                            <span class="badge bg-light text-dark">Endurance</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="partner-card">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="David">
                        <h5>David K.</h5>
                        <p class="text-muted">CrossFit & HIIT</p>
                        <div class="mb-3">
                            <span class="badge bg-light text-dark me-1">Intensity</span>
                            <span class="badge bg-light text-dark">Functional</span>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary">Browse All Partners</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">Why Choose FitConnect</h2>
            <p class="text-center mb-5">Our platform offers everything you need to achieve your fitness goals</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Find Compatible Partners</h4>
                        <p>Our matching algorithm connects you with partners who share your fitness level, goals, and schedule.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4>Easy Session Booking</h4>
                        <p>Browse and book workout sessions with certified trainers in just a few clicks.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4>Goal Tracking</h4>
                        <p>Set and track your fitness goals with our progress monitoring tools.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h4>Community Support</h4>
                        <p>Join our active community for advice, motivation, and support from fellow members.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Local Gyms & Studios</h4>
                        <p>Discover and book sessions at top-rated fitness facilities near you.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Mobile Friendly</h4>
                        <p>Access all features on the go with our mobile-optimized platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Success Stories</h2>
            <p class="text-center mb-5">Hear from our members who achieved their fitness goals with FitConnect</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="60" alt="Emma">
                            <div>
                                <h5 class="mb-0">Emma S.</h5>
                                <small class="text-muted">Yoga Enthusiast</small>
                            </div>
                        </div>
                        <p class="mb-0">"FitConnect helped me find the perfect yoga partner. We've been practicing together for 6 months now and I've seen incredible improvements in my flexibility and strength."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="60" alt="James">
                            <div>
                                <h5 class="mb-0">James R.</h5>
                                <small class="text-muted">Weightlifter</small>
                            </div>
                        </div>
                        <p class="mb-0">"As someone new to weightlifting, finding a spotter was crucial. FitConnect matched me with an experienced partner who's helped me perfect my form and increase my lifts safely."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" class="rounded-circle me-3" width="60" alt="Sophia">
                            <div>
                                <h5 class="mb-0">Sophia L.</h5>
                                <small class="text-muted">Marathon Runner</small>
                            </div>
                        </div>
                        <p class="mb-0">"Training for a marathon alone was tough. Through FitConnect, I found an amazing running partner who pushes me to be better. We just completed our first marathon together!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5">
        <div class="container">
            <div class="newsletter-section">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mb-3">Ready to Transform Your Fitness Journey?</h2>
                        <p class="mb-4">Join our community today and get access to exclusive workout content, partner matching, and session booking.</p>
                        <form class="row g-2 justify-content-center">
                            <div class="col-md-8">
                                <input type="email" class="form-control form-control-lg" placeholder="Enter your email">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-light btn-lg w-100">Get Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h4 class="mb-4"><i class="fas fa-dumbbell me-2"></i>FitConnect</h4>
                    <p>Connecting fitness enthusiasts to train together and achieve their goals.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Home</a></li>
                        <li class="mb-2"><a href="#workouts">Workouts</a></li>
                        <li class="mb-2"><a href="#partners">Find Partners</a></li>
                        <li class="mb-2"><a href="#features">Features</a></li>
                        <li class="mb-2"><a href="#testimonials">Testimonials</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-4">Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">About Us</a></li>
                        <li class="mb-2"><a href="#">Careers</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                        <li class="mb-2"><a href="#">Press</a></li>
                        <li class="mb-2"><a href="#">Partners</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-4">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> 123 Fitness St, Health City</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +1 (555) 123-4567</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@fitconnect.com</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-5 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 FitConnect. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="me-3">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>