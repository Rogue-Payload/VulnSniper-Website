<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags for SEO and Mobile Responsiveness -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VulnSniper: AI-Powered Penetration Testing Revolutionizing Cybersecurity">
    <meta name="keywords" content="AI penetration testing, automated vulnerability discovery, cybersecurity, ethical hacking, VulnSniper, bug bounty, machine learning, hacking tactics, AI and ML, cybersecurity solutions">
    <meta name="robots" content="index, follow">
    <meta name="author" content="VulnSniper">
    <title>VulnSniper - AI-Driven Cybersecurity Revolution</title>

    <!-- Google Fonts for Futuristic Vibes -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Cinzel:wght@400;700&family=Oxanium:wght@300;500;700&family=Black+Ops+One&family=Player+Two&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons for slick futuristic look -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Bootstrap for Responsive Design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for Sci-Fi Futuristic Look and Animations -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Google Analytics for Visitor Tracking -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VQT0DG5LYJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-VQT0DG5LYJ');
    </script>
</head>

<body>

<?php 
    include('nav.php');
?>

<!-- Hero Section: Bold Sci-Fi Design -->
<header class="hero-section text-center text-white">
    <div class="container-fluid hero-bg">
        <h1 class="display-3 text-glow-pulse">VulnSniper</h1>
        <p class="lead">AI-Driven Cybersecurity Tools for the Future</p>
        <!-- Call to Action Buttons -->
        <a href="#pricing" class="btn btn-primary btn-lg glowing-btn">Get Started</a>
        <a href="#demo" class="btn btn-outline-light btn-lg glowing-outline-btn">Watch Demo</a>
    </div>
</header>

<!-- Countdown Section with Sci-Fi Theme -->
<section id="countdown" class="py-5 text-center text-white countdown-bg">
    <div class="container">
        <div class="overlay">
            <h2 class="countdown-title">The Future of Cybersecurity Arrives On</h2>
            <p class="countdown-description"><strong>March 1st, 2025</strong> at <strong>14:00 CST</strong>.</p>
            <div id="countdown-timer" class="countdown-timer">
                <div class="time-box">
                    <span id="days" class="time">00</span>
                    <span class="label">Days</span>
                </div>
                <div class="time-box">
                    <span id="hours" class="time">00</span>
                    <span class="label">Hours</span>
                </div>
                <div class="time-box">
                    <span id="minutes" class="time">00</span>
                    <span class="label">Minutes</span>
                </div>
                <div class="time-box">
                    <span id="seconds" class="time">00</span>
                    <span class="label">Seconds</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-5 text-center text-white bg-dark">
    <div class="container">
        <h2 class="section-title text-glow">Choose Your Plan</h2>
        <p class="pricing_description">Select the plan that suits your cybersecurity needs, and join the revolution.</p>

        <!-- Row for Pricing Cards -->
        <div class="row justify-content-center">

            <!-- Hacker Package Card -->
            <div class="col-md-4 mb-4">
                <div class="card pricing-card glowing-border">
                    <div class="card-body">
                        <h3 class="card-title text-glow">Hacker Package</h3>
                        <h4 class="card-price">$1,000/Yearly or $100/Monthly</h4>
                        <ul class="list-unstyled">
                            <li>1 Domain Scan at a Time</li>
                            <li>Up to 10 Scans Annually</li>
                            <li>Integrates OpenAI & Gemini APIs</li>
                            <li>10 Premium Proxies & User Agents</li>
                            <li>Discovery & Exploitation of 3 CVEs</li>
                            <li>Advanced Reporting Features</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary glowing-btn mb-2">Get Your Seat Now</a>
                    </div>
                </div>
            </div>

            <!-- Pro Package Card -->
            <div class="col-md-4 mb-4">
                <div class="card pricing-card glowing-border pro-card">
                    <div class="card-body">
                        <h3 class="card-title text-glow">Pro Package</h3>
                        <h4 class="card-price">$5,000/Yearly or $450/Monthly</h4>
                        <ul class="list-unstyled">
                            <li>3 Domain Scans at a Time</li>
                            <li>Up to 20 Scans Annually</li>
                            <li>AI-Powered OpenAI & Gemini Integrations</li>
                            <li>15 Premium Proxies & User Agents</li>
                            <li>Discovery of 6 CVEs (API, IDOR, SSRF, RCE, XSS, SQLi)</li>
                            <li>Advanced Reporting Statements</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary glowing-btn mb-2">Get Your Seat Now</a>
                    </div>
                </div>
            </div>

            <!-- Elite Package Card -->
            <div class="col-md-4 mb-4">
                <div class="card pricing-card glowing-border elite-card">
                    <div class="card-body">
                        <h3 class="card-title text-glow">Elite Package</h3>
                        <h4 class="card-price">$10,000/Yearly or $1,000/Monthly</h4>
                        <ul class="list-unstyled">
                            <li>5 Domain Scans at a Time</li>
                            <li>Up to 30 Scans Annually</li>
                            <li>Includes 50 CVE Operations</li>
                            <li>Integrates OpenAI & Gemini APIs</li>
                            <li>70 Premium Proxies & User Agents</li>
                            <li>Exclusive Elite-Level Reporting</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary glowing-btn mb-2">Get Your Seat Now</a>
                    </div>
                </div>
            </div>

            <!-- Enterprise Package Card (Full-width) -->
            <div class="col-md-12">
                <div class="card pricing-card glowing-border corp-card">
                    <div class="card-body">
                        <h3 class="card-title text-glow">Enterprise Package</h3>
                        <h4 class="card-price">$150,000/Yearly or $17,000/Monthly</h4>
                        <ul class="list-unstyled">
                            <li>6 Concurrent Domain Operations</li>
                            <li>Up to 50 Scans Annually</li>
                            <li>AI & ML Double-Checking Capabilities</li>
                            <li>100+ Premium Proxies & 60+ User Agents</li>
                            <li>Latest VulnSniper Technology Access</li>
                            <li>Elite-Level Advanced Reporting</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary glowing-btn mb-2">Get Your Seat Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- More Sections (How It Works, Why VulnSniper, Video Demo, Contact) will be added here with enhanced details and interactivity -->

<!-- Footer Section -->
<footer class="text-center text-white py-3">
    <p>© VulnSniper 2024 | All Rights Reserved | Powered by AI</p>
</footer>

<!-- Scripts for Animations and Functionality -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>

<!-- Countdown Timer Script -->
<script>
    const countdownDate = new Date("March 1, 2025 14:00:00").getTime();
    const x = setInterval(function() {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        document.getElementById('days').innerHTML = Math.floor(distance / (1000 * 60 * 60 * 24));
        document.getElementById('hours').innerHTML = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        document.getElementById('minutes').innerHTML = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        document.getElementById('seconds').innerHTML = Math.floor((distance % (1000 * 60)) / 1000);

        if (distance < 0) {
            clearInterval(x);
            document.getElementById('countdown-timer').innerHTML = "LAUNCHED!";
        }
    }, 1000);
</script>

</body>
</html>
