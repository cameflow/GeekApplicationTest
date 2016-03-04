<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css"> <!-- Custom styles.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <!-- import icons-->
    <link href="css/bootstrap.css" rel="stylesheet"> <!-- Main bootstrap css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!-- Js for carousel -->
    <script src="js/bootstrap.js"></script> <!-- bootstrap js -->
    <title>Geek Test</title>
  </head>
  <body>
    <div class="content"> <!-- Div of all the content of the page -->
      <div> <!--Div of the top part of the page -->
        <div class="col-md-10">
          <div> <!-- Div for the top of the navbar -->
            <nav style="margin-right: 10px !important">
              <div class="container-fluid">
                <ul class="nav nav-pills nav-justified nav-bg2">
                  <li><a><p class="icon"><i class="fa fa-file"></i></p>Shopping</a></li>
                  <li class="active"><a><p class="icon"><i class="fa fa-calendar"></i></p>Calendar</a></li>
                  <li><a><p class="icon"><i class="fa fa-globe"></i></p>Network</a></li>
                  <li><a><p class="icon"><i class="fa fa-leaf"></i></p>Ecology</a></li>
                  <li><a><p class="icon"><i class="fa fa-pie-chart"></i></p>Statics</a></li>
                  <li><a><p class="icon"><i class="fa fa-bookmark"></i></p>Events</a></li>
                </ul>
              </div>
            </nav>
          </div> <!-- Close navbar div -->
          <div style="padding-right: 10px !important"> <!-- Div of the main top part of the page -->
            <div class="col-md-12"> <!-- Div with carousel and email subscription -->
              <div class="carousel slide col-md-6" id="myCarousel" data-ride="carousel"> <!-- Div of the carousel -->
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="images/food_1.jpg" alt="Chania">
                  </div>
                  <div class="item">
                    <img src="images/food_1.jpg" alt="Chania">
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="fa fa-arrow-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="fa fa-arrow-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div> <!-- Close div of carousel -->
              <div class="col-md-6"> <!-- Div of subscription -->
                <div class="pepper container-fluid">
                  <p>
                    Subscribe to our newsletter!
                  </p>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Subscribe!</button>
                    </span>
                  </div>
                </div>
                <div class="ice-cream container-fluid">
                </div>
              </div> <!--Close div of subscription -->
            </div> <!-- Close div of carrousel and subscription -->
            <div class="col-md-12"> <!-- Div of second navbar with action buttons -->
              <ul class="nav nav-pills nav-justified nav-bg">
                <li role="presentation" ><a href="#">Popular Recipes</a></li>
                <li role="presentation" ><a href="#">Upload Photos</a></li>
                <li role="presentation"><a href="#">Invite Friends</a></li>
              </ul>
            </div> <!-- Close div of second navbar -->
          </div> <!-- Close div of main top part of the page -->
        </div>
        <div class="t-right col-md-2"> <!-- Div of the sidebar -->
          <div class="tr-top navbar-default navbar"> <!-- Top part of side bar -->
            <img src="images/food_1.jpg" class="img-responsive" alt="Responsive image">
            <table class="table table-striped">
              <tr>
                <td>Pawns</td>
                <td>3 lb</td>
              </tr>
              <tr>
                <td>Salmon</td>
                <td>2 pc</td>
              </tr>
              <tr>
                <td>Green Salad</td>
                <td>2 pc</td>
              </tr>
              <tr>
                <td>Onions</td>
                <td>0.5 lb</td>
              </tr>
            </table>
          </div>
          <div class="tr-bottom" style="margin-top: 15px !important"> <!-- Bottom part of sidebar -->
            <p>
              <i class="fa fa-cutlery fa-2x" style="padding-top: 10px"></i>
            </p>
            <p>
              Chicken
            </p>
            <table class="table table-bordered" style="background-color: silver">
              <tr>
                <th>kcal</th>
                <th>fat</th>
              </tr>
              <tr>
                <td>3200</td>
                <td>12%</td>
              </tr>
            </table>
          </div>
        </div> <!-- Closing Div of the sidebar -->
      </div> <!-- Closing div of the top part -->
      <div class="bottom"> <!-- Bottom part of the page -->
        <div class="b-left col-md-4"> <!-- Contact form div -->
          <div class="bl" style="height: 31em !important">
              <h3 class="titleContact">Quick Contact</h3>
            <form class="bl2" role="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <hr>
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-default">Send</button>
            </form>
          </div>
        </div> <!-- End of contact form div -->
        <div class="b-right col-md-8"> <!-- Main bottom part -->
          <div class="healthyRec"> <!-- Healthy Recipes Div -->
            <div class="healthyRecH">
            </div>
            <div class="healthyRecCont">
              <div class="col-md-6">
                <h1 class="centerText" style="padding: 1px !important; margin: 0px !important">
                  <?php
                  // These code snippets use an open-source library.
                  require_once 'unirest-php/src/Unirest.php';
                  $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/4632/summary",
                      array(
                        "X-Mashape-Key" => "XhBv80sralmsh2WAqs06DiNSr9cip1wuQG6jsnJ7UbahmU1njy"
                      )
                    );
                    echo $response->body->title;
                   ?>
                </p>
                </h1>
              </div>
              <div>
                <p class="centerText api-text" style="font-size: 8px !important">
                  <?php
                  // These code snippets use an open-source library.
                  require_once 'unirest-php/src/Unirest.php';
                  $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/4632/summary",
                      array(
                        "X-Mashape-Key" => "XhBv80sralmsh2WAqs06DiNSr9cip1wuQG6jsnJ7UbahmU1njy"
                      )
                    );
                    echo $response->body->summary;
                   ?>
                </p>
              </div>
            </div>
          </div> <!-- Closing Healthy Recipes Div -->
          <div class="br-bottom"> <!-- Add portions and fav -->
            <div class="col-md-5">
              <img src="images/peasoup.jpg" class="img-responsive img-circle img-padding" alt="Responsive image" height="20%" width="20%" style="margin-left: 9em">
              <h3>Pea soup</h3>
            </div>
            <div class="col-md-3 borderDiv" style="padding-top: 10px !important">
              <h1>3</h1><h3>portions</h3>
            </div>
            <div class="col-md-1 borderDiv">
              <div class="col-md-12" style="padding-top: 20px !important">
                <button type="button" class="btn btn-default" aria-label="Center Align">
                  <span class="fa fa-plus-square-o  fa-2x" aria-hidden="true"></span>
                </button>
              </div>
              <div class="col-md-12" style="padding-top: 20px !important">
                <button type="button" class="btn btn-default" aria-label="Center Align">
                  <span class="fa fa-minus-square-o  fa-2x" aria-hidden="true"></span>
                </button>
              </div>
            </div>
            <div class="col-md-3" style="padding-top: 30px !important">
              <button type="button" class="btn btn-danger">
                <span class="fa fa-heart  fa-4x" aria-hidden="true"></span>
              </button>
            </div>
          </div><!-- Close Add portions and fav -->
        </div> <!-- End of main bottom part -->
      </div> <!-- Div closing bottom part of the page -->
    </div>
  </body>
</html>
