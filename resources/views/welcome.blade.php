<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Vue Example</title>
  <link href="/app.css" rel="stylesheet">
  @vite('resources/js/app.js')
</head>

<body>
  <div id="app">
    <!-- Menu -->
    <header>
      <div class="logo">
        <img src="/images/logo.png" alt="Logo">
      </div>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/contact">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <body>
    <!-- Main Content -->
    <example-component></example-component>
    </body>
    <!-- Footer -->
    <footer>
      <div class="social-links">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
      </div>
      <p>&copy; {{ date('Y') }} All rights reserved.</p>
    </footer>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>