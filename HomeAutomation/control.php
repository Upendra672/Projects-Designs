<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Controls</title>
    <link rel="stylesheet" href="Styles/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <style></style>
  </head>
  <body>
    <div class="wrapper">
      <!--Top menu -->
      <div class="section">
        <div class="top_navbar">
          <div class="hamburger">
            <a href="#">
              <!-- <i class="fas fa-bars"></i> -->
            </a>
          </div>
          <span>
            <button><a href="Dashboard.html"><img src="./img/bell.png" height="30px" width="30px" ></a></button>
          </span>
          <span>
            <button><a href="Home.html"><img src="img/power.jpg" height="30px" width="30px"></a></button>
          </span>
          
        </div>
      </div>

      <!--Top menu -->

      <div class="sidebar">
        <!--profile image & text-->
        <div class="profile">
          <img
            src="./img/icon.jpg"
            alt="profile_picture"
          />
          <h3>HOME</h3>
          <p>Automation Controler</p>
        </div>
        <!--profile image & text-->

        <!--menu item-->
        <ul>
          <li>
            <a href="./welcome.php" class="active">
              <span class="icon"><i class="fas fa-home"></i></span>
              <span class="item">Home</span>
            </a>
          </li>
          <li>
            <a href="./control.php">
              <span class="icon"><i class="fas fa-desktop"></i></span>
              <span class="item">Control</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="fas fa-user-friends"></i></span>
              <span class="item">Setup</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
              <span class="item">Config</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="fas fa-database"></i></span>
              <span class="item">Preferences</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="fas fa-chart-line"></i></span>
              <span class="item">Save settings</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="fas fa-user-shield"></i></span>
              <span class="item">Modity</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="fas fa-cog"></i></span>
              <span class="item">Settings</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="fas fa-cog"></i></span>
              <span class="item">Help</span>
            </a>
          </li>
        </ul>
      </div>
      <!--menu item-->
    </div>
    <!-- Main component -->
    <div class="main">
      <div class="content">
        <div class="card">
          <h1 style="font-size: 30px">Drawing Room</h1>
          <p style="font-size: 20px">
            “Home automation” refers to the automatic and electronic control of
            household features, activity, and appliances. In simple terms, it
            means you can easily control the utilities and features of your home
            via the Internet to make life more convenient and secure, and even
            spend less on household bills.
          </p>
          <!-- toogelswitch -->
          <div class="switch">
              <div class="too">
              <div class="br">
                  <p>Tubelight1</p>
                    <div class="custom-control custom-switch">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customSwitch1"
                      />
                      <label class="custom-control-label too1" for="customSwitch1"
                        ></label
                      >
              </div>
              </div>
            </div>
  
            <div class="too">
              <div class="br">
                  <p>Tubelight2</p>
                    <div class="custom-control custom-switch">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customSwitch1"
                      />
                      <label class="custom-control-label too1" for="customSwitch1"
                        ></label
                      >
                    </div>
              </div>
            </div>
  
            <div class="too">
              <div class="br">
  
                  <p>Fan</p>
                    <div class="custom-control custom-switch">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customSwitch1"
                      />
                      <label class="custom-control-label too1" for="customSwitch1"
                        ></label
                      >
                    </div>
              </div>
            </div>
  
            <div class="too">
              <div class="br">
                  <p>AC</p>
                    <div class="custom-control custom-switch">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customSwitch1"
                      />
                      <label class="custom-control-label too1" for="customSwitch1"
                        ></label
                      >
                    </div>
              </div>
            </div>
          </div>
          <!-- toogelswitch -->
        </div>
      </div>
      <div class="bt_1">
        <img src="./img/drawing.jpg" alt="" width="1240px" height="400px">
    </div>
    </div>
    

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
    <script>
      var hamburger = document.querySelector(".hamburger");
      hamburger.addEventListener("click", function () {
        document.querySelector("body").classList.toggle("active");
      });
    </script>
  </body>
</html>
