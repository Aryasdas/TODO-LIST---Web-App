<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration - ToDo App</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #4a6bff;
      --secondary-color: #f8f9fa;
    }
    
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    
    /* Header Styles */
    header {
      background-color: white;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 1rem 0;
    }
    
    .navbar-brand {
      font-weight: 700;
      color: var(--primary-color);
      font-size: 1.5rem;
    }
    
    .navbar-brand i {
      margin-right: 8px;
    }
    
    /* Main Content Styles */
    main {
      flex: 1;
      padding: 2rem 0;
    }
    
    .form-container {
      max-width: 450px;
      margin: 0 auto;
      padding: 30px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    
    .form-container:hover {
      transform: translateY(-5px);
    }
    
    /* Footer Styles */
    footer {
      background-color: #343a40;
      color: white;
      padding: 2rem 0;
      margin-top: auto;
    }
    
    .footer-links a {
      color: rgba(255,255,255,0.7);
      text-decoration: none;
      margin-right: 15px;
      transition: color 0.3s;
    }
    
    .footer-links a:hover {
      color: white;
    }
    
    .social-icons a {
      color: white;
      font-size: 1.2rem;
      margin-right: 15px;
      transition: transform 0.3s;
    }
    
    .social-icons a:hover {
      transform: translateY(-3px);
    }
    
    /* Todo Preview Styles */
    .todo-preview {
      max-width: 450px;
      margin: 30px auto;
      padding: 20px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      display: none;
    }
    
    .password-strength {
      height: 3px;
      background: #e9ecef;
      margin-top: 5px;
      border-radius: 3px;
    }
    
    .strength-0 { width: 20%; background: #dc3545; }
    .strength-1 { width: 40%; background: #fd7e14; }
    .strength-2 { width: 60%; background: #ffc107; }
    .strength-3 { width: 80%; background: #198754; }
    .strength-4 { width: 100%; background: #198754; }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .form-container, .todo-preview {
        margin: 20px auto;
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <i class="fas fa-check-circle"></i>ToDoPro
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main>
    <div class="container">
      <div class="form-container">
        <h2 class="text-center mb-4">Create Your Account</h2>
        <form action="register.php" method="POST" id="registrationForm">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="form-text">We'll personalize your ToDo experience</div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="form-text">We'll never share your email</div>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Create Password</label>
            <input type="password" class="form-control" id="password" name="password" required 
                   oninput="checkPasswordStrength(this.value)">
            <div class="password-strength">
              <div id="passwordStrength" class="strength-0"></div>
            </div>
            <div class="form-text">Use at least 8 characters with numbers and symbols</div>
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="showPassword">
            <label class="form-check-label" for="showPassword">Show password</label>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-user-plus me-2"></i> Register Now
            </button>
          </div>

          <p class="text-center mt-3">
            Already have an account? <a href="index.php">Login here</a>
          </p>
        </form>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5><i class="fas fa-check-circle me-2"></i>ToDoPro</h5>
          <p class="mt-3">Your productivity companion for getting things done efficiently and effectively.</p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-md-3">
          <h5>Quick Links</h5>
          <div class="footer-links mt-3">
            <a href="#">Home</a><br>
            <a href="#">Features</a><br>
            <a href="#">Pricing</a><br>
            <a href="#">About Us</a>
          </div>
        </div>
        <div class="col-md-3">
          <h5>Support</h5>
          <div class="footer-links mt-3">
            <a href="#">Help Center</a><br>
            <a href="#">Contact Us</a><br>
            <a href="#">Privacy Policy</a><br>
            <a href="#">Terms of Service</a>
          </div>
        </div>
      </div>
      <hr class="mt-4" style="background-color: rgba(255,255,255,0.1);">
      <div class="text-center">
        <p class="mb-0">&copy; 2023 ToDoPro. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Password strength checker
    function checkPasswordStrength(password) {
      let strength = 0;
      
      // Length check
      if (password.length >= 8) strength++;
      if (password.length >= 12) strength++;
      
      // Complexity checks
      if (/[A-Z]/.test(password)) strength++;
      if (/\d/.test(password)) strength++;
      if (/[^A-Za-z0-9]/.test(password)) strength++;
      
      // Cap at 4 for our meter
      strength = Math.min(strength, 4);
      
      const strengthBar = document.getElementById('passwordStrength');
      strengthBar.className = 'strength-' + strength;
    }
    
    // Show/hide password
    document.getElementById('showPassword').addEventListener('change', function(e) {
      const passwordField = document.getElementById('password');
      passwordField.type = e.target.checked ? 'text' : 'password';
    });
    
    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>
</body>
</html>