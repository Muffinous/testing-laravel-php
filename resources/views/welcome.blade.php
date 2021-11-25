<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/app.css') }}">

    </head>
    <body>
        <nav id="colorlib-main-nav" role="navigation">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
            <div class="js-fullheight colorlib-table">
                <!-- <div class="img" style="background-image: url(images/bg_3.jpg);"></div> -->
                <div class="colorlib-table-cell js-fullheight">
                <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                        <h1 class="mb-4"><a href="index.html" class="logo">Company Logo</a></h1>
                        <ul>
                            <li class="active"><a href="#"><span>Home</span></a></li>
                            <li><a href="#"><span>About</span></a></li>
                            <li><a href="#"><span>Blog</span></a></li>
                            <li><a href="#"><span>Contact</span></a></li>
                        </ul> 
                    </div> 
                </div>
                </div>
            </div>
        </nav>        
        <div id="colorlib-page">
        <header>
            <div class="container">
                <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="index.html">Company Logo</a>
                </div>
                <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
        </header>

        <section class="hero-wrap js-fullheight">
	      <div class="container px-0">
	        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-12 ftco-animate text-center">
	          	<div class="desc">
		            <h1>Website Menu #10</h1>
		            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>
        
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ URL::asset('/js/main.js') }}"></script>
    </body>
</html>
