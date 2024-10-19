<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags for SEO and Mobile Responsiveness -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VulnSniper Security Policy outlining our commitment to safeguarding user information and maintaining system security.">
    <meta name="keywords" content="VulnSniper, security policy, data protection, cybersecurity">
    <meta name="robots" content="index, follow">
    <meta name="author" content="VulnSniper">
    <title>Security Policy | VulnSniper</title>

    <!-- Google Fonts for Futuristic Vibes -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Space+Grotesk:wght@400;700&family=Metal&family=Bruno+Ace&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons for slick futuristic look -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Bootstrap for Responsive Design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for Sci-Fi Futuristic Look and Animations -->
    <link rel="stylesheet" href="css/styles.css">

    <style>
        body {
            background: url('https://img.freepik.com/free-vector/background-realistic-abstract-technology-particle_23-2148431735.jpg?size=626&ext=jpg&ga=GA1.1.2113030492.1729296000&semt=ais_hybrid') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Metal', sans-serif;
            color: #000;
            padding-top: 80px;
        }
        .content-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            margin: 30px auto;
            max-width: 800px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.7);
            position: relative;
            border: 2px solid rgba(0, 255, 255, 0.5);
        }
        .content-container:before {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 2px solid rgba(0, 255, 255, 0.5);
            filter: blur(20px);
            opacity: 0.6;
        }
        h1, h2 {
            font-family: 'Orbitron', sans-serif;
            color: darkgreen;
        }
        h3, h4, h5, h6 {
            font-family: 'Space Grotesk', sans-serif;
        }
        ul {
            font-family: 'Bruno Ace', sans-serif;
            color: #333;
        }
    </style>
</head>
<body>

<!-- Top Navigation Bar -->
<?php include '../nav.php'; ?>

<!-- Content Container -->
<div class="container content-container">
    <h1>Security Policy</h1>
    <p>Effective Date: October 28, 2024</p>
    <p>At VulnSniper, we are dedicated to safeguarding user information and maintaining a secure environment for all our users. This Security Policy ("Policy") outlines our commitment to data protection, the measures we take to secure our systems, and the responsibilities of our users.</p>

    <h2>1. No Liability for User Actions</h2>
    <p>VulnSniper is a cybersecurity platform that provides tools for ethical hacking and vulnerability assessment. We do not take responsibility for any actions users perform using our platform. Users are solely responsible for their actions and any misuse of the VulnSniper platform. We explicitly prohibit using VulnSniper for illegal or malicious activities, and we reserve the right to terminate access for users who violate our policies.</p>

    <h2>2. Security Measures</h2>
    <p>We implement a variety of industry-standard security measures to protect our systems and user data. These measures include:</p>
    <ul>
        <li><b>Firewalls:</b> We use multiple layers of firewalls to protect our servers from unauthorized access.</li>
        <li><b>Encryption:</b> Sensitive user data, including API keys and passwords, is encrypted using robust encryption protocols to prevent unauthorized access.</li>
        <li><b>Access Controls:</b> Access to user data is restricted to authorized personnel only, and all access is logged and monitored.</li>
        <li><b>Monitoring and Logging:</b> Our systems are continuously monitored for suspicious activity, and detailed logs are maintained to track access and actions taken on our platform.</li>
    </ul>
    <p>While we take all reasonable measures to protect our systems, we acknowledge that no system is entirely immune to potential threats. With enough time, patience, and resources, virtually any system can be compromised. By using VulnSniper, you acknowledge and accept this risk.</p>

    <h2>3. Data Handling and Privacy</h2>
    <p>We do not sell or give out user information for financial gain or favors. User information is only used as outlined in our <a href="privacy_policy.php">Privacy Policy</a>. We store only the information necessary to facilitate account creation, login, and profile management. This information is kept secure and confidential, except where disclosure is required by law or to comply with legal obligations.</p>

    <h2>4. User Responsibilities</h2>
    <p>Users are responsible for maintaining the confidentiality of their account information, including usernames, passwords, and API keys. We strongly encourage users to:</p>
    <ul>
        <li>Use strong, unique passwords for their accounts.</li>
        <li>Keep their login credentials confidential and not share them with others.</li>
        <li>Enable two-factor authentication (2FA) where available to provide an additional layer of security.</li>
        <li>Report any suspicious activity or potential security breaches to our support team immediately.</li>
    </ul>

    <h2>5. Report Sharing</h2>
    <p>We request that users share their VulnSniper scan reports only with the corresponding companies or authorized individuals. Unauthorized sharing of these reports may lead to potential misuse of the information contained within, and users are solely responsible for ensuring that the information is shared appropriately and with permission.</p>

    <h2>6. Changes to This Policy</h2>
    <p>We reserve the right to modify this Security Policy at any time to reflect changes in our security practices or legal requirements. Any changes will be posted on this page, and your continued use of VulnSniper constitutes acceptance of the updated Policy. We encourage you to review this Policy periodically for any changes.</p>

    <h2>7. Contact Information</h2>
    <p>If you have any questions or concerns about this Security Policy, please contact us at <a href="mailto:vulnsniper@globalbughunters.com">vulnsniper@globalbughunters.com</a>.</p>
</div>

<!-- Footer Section -->
<footer class="text-center text-white py-3">
    <p>© VulnSniper 2024 | All Rights Reserved | Powered by AI</p>
</footer>

<!-- Scripts for Animations and Functionality -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>