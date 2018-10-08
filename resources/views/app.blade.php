
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/js/app.js">
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
    
    <script src="https://platform.twitter.com/widgets.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
    var url = '1049217572623847424';
    $.ajax({
        url: "https://api.twitter.com/1/statuses/oembed.json?id="+url,
        dataType: "jsonp",
        success: function(data){
             $("#tweet_div").html(data.html);
        }
    });
})
</script>
    
    @include('nav')
  </head>

  <body>

    <header>
      
      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      </div>
    </header>

    <main role="main" class="container">

      <div class="row">

        @yield('content')

      </div><!-- /.row -->

    </main><!-- /.container -->
  </body>
</html>
