<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>ViewBoard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>s
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="jquery-3.6.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <!--Java Style table link--->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <link rel="stylesheet" src="/https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" src="/https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
</head>
<?php session_start();
if (!isset($_SESSION['username'])) {
  header("location: login.php");
}
?>
<style>

</style>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <ul class="nav">


            </ul>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li>
                <a href="logout.php"> Logout</a>
              </li>
              <li>
                <a style="color:white;">
                  <?php echo $_SESSION['username'] ?> <img src="assets/images/profile-header.jpg" alt="">
                </a>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To </h6>
                  <h4><em>AUTOMATIC</em> RAIN CURTAIN SYSTEM FOR CLOTHESLINE</h4>

                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Fuction</em> You can Use it !!</h4>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/mode.jpg" alt="">
                      <div class="row">
                        <div class="col-lg-8 col-sm-3">
                          <h4>Auto/Manual<br><span>select mode</span></h4>
                        </div>
                        <div class="col-lg-4 col-sm-3">
                          <ul>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="mode">
                            </div>
                            <li>
                              <p style="color :white; " id="modeshow"></p>
                            </li>
                          </ul>


                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/yes.jpg" alt="">
                      <div class="row">
                        <div class="col-lg-8 col-sm-3">
                          <h4>close/open <br><span>canvas</span></h4>
                        </div>
                        <div class="col-lg-4 col-sm-3">
                          <ul>
                            <div class="form-check form-switch">
                              <input class="form-check-input" id="canvas" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault">
                            </div>
                            <li>
                              <p style="color :white; " id="canvasshow"></p>
                            </li>
                          </ul>


                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/water.jpg">
                      <div class="row">
                        <div class="col-lg-6 col-sm-3">
                          <h4>WaterValue1 <br><span>Water</span></h4>
                        </div>
                        <div class="col-lg-6 col-sm-3">
                          <ul>
                            <li>
                              <p style="color :white; " id="water1show"></p>
                            </li>
                          </ul>


                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/water.jpg" alt="">
                      <div class="row">
                        <div class="col-lg-6 col-sm-3">
                          <h4>WaterValue2<br><span>Water</span></h4>
                        </div>
                        <div class="col-lg-6 col-sm-3">
                          <ul>
                            <li>
                              <p style="color :white; " id="water2show"></p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="item">
                      <img src="assets/images/light.jpg" alt="">
                      <div class="row">
                        <div class="col-lg-6 col-sm-3">
                          <h4>LightValue<br><span>Light</span></h4>
                        </div>
                        <div class="col-lg-6 col-sm-3">
                          <ul>
                            <li>
                              <p style="color :white; " id="light"></p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="item">
                      <img src="assets/images/circiut.jpg" alt="">
                      <div class="row">
                        <div class="col-lg-6 col-sm-3">
                          <h4>AutoRelayStatus<br><span>AutoRelay</span></h4>
                        </div>
                        <div class="col-lg-6 col-sm-3">
                          <ul>
                            <li>
                              <p style="color :white; " id="AutoRelay"></p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="item">
                      <img src="assets/images/circiut.jpg" alt="">
                      <div class="row">
                        <div class="col-lg-6 col-sm-3">
                          <h4>ManualRelayStatus<br><span>ManualRelay</span></h4>
                        </div>
                        <div class="col-lg-6 col-sm-3">
                          <ul>
                            <li>
                              <p style="color :white; " id="ManualRelay"></p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  

                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->


        </div>
      </div>
    </div>
  </div>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    var data_global = Array();

    $(document).ready(function () {
      console.log("HelloMommy");
      $.ajax({
        type: "POST",
        url: "all.php",
        // data: { function: 'canvas' },
        success: function (data) {
          data = JSON.parse(data);
          console.log(data[0]['ModeStatus']);
          //console.log();
          //let obj = JSON.parse(data);
          var ModeStatus = "";
          if (data[0]['ModeStatus'] == 1) {
            ModeStatus = "Manual";
            $('#modeshow').html(ModeStatus);
          } else {
            ModeStatus = "Auto";
            $('#modeshow').html(ModeStatus);
          }


          var OnlineRelayUser = "";
          if (data[0]['OnlineRelayUser'] == 1) {
            OnlineRelayUser = "Open";
            $('#canvasshow').html(OnlineRelayUser);
          } else {
            OnlineRelayUser = "Close";
            $('#canvasshow').html(OnlineRelayUser);
          }

          var water1 = "";
          if (data[0]['WaterValue1'] == 1) {
            water1 = "ตรวจไม่พบน้ำ";
            $('#water1show').html(water1);
          } else {
            water1 = "ตรวจพบน้ำ";
            $('#water1show').html(water1);
          }

          var water2 = "";
          if (data[0]['WaterValue2'] == 1) {
            water2 = "ตรวจไม่พบน้ำ";
            $('#water2show').html(water2);
          } else {
            water2 = "ตรวจพบน้ำ";
            $('#light').html(water2);
          }

          var light = "";
          if (data[0]['LightValue'] == 1) {
            light = "มีแสง";
            $('#light').html(light);
          } else {
            light = "มีแสง";
            $('#light').html(light);
          }

          var relay = "";
          if (data[0]['AutoRelayStatus'] == 1) {
            relay = "ทำงาน";
            $('#AutoRelay').html(relay);
          } else {
            relay = "หยุดทำงาน";
            $('#AutoRelay').html(relay);
          }

          var relay2 = "";
          if (data[0]['ManualRelayStatus'] == 1) {
            relay2 = "ทำงาน";
            $('#ManualRelay').html(relay);
          } else {
            relay2 = "หยุดทำงาน";
            $('#ManualRelay').html(relay2);
          }

        }
      });
      //Startready();
    });


    //Mark 

    $('#canvas').change(function () {
      $.ajax({
        type: "POST",
        url: "changedb.php",
        data: { function: 'canvas' },
        success: function (data) {
          $('#canvasshow').html(data)
          console.log(data);
        }
      });
    });

    $('#mode').change(function () {
      $.ajax({
        type: "POST",
        url: "changedb.php",
        data: { function: 'mode' },
        success: function (data) {
          $('#modeshow').html(data)
          console.log(data);
        }
      });
    });
  </script>
</body>

</html>