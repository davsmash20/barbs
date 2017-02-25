<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device.width,initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script type="text/javascript" href="/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" href="/js/actions.js"></script>
  </head>

  <body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <img src="/files/psulogo.png">
              <a class="navbar-brand" href="/">Welcome Guest</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="/d/courses">Courses</a></li>
              <li><a href="/d/amenities">Amenities</a></li>
              <li><a href="/d/services">Services</a></li>
              <li><a href="/d/about">About Us</a></li>
              <li><a href="/d/comments">Comments</a></li>
            </ul>
          </div>
        </nav>
      <h1>My Laravel Program</h1>
      @yield('welcome')
      @yield('result')
      @yield('abouts')
      @yield('courses')
      @yield('guro')
      @yield('amenities')
      @yield('services')
      @yield('user-related')
      @yield('comments')
    </div>
    </br></br></br></br></br>

  </body> 
</html>