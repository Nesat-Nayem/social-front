<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Voiz</title>
    <link rel="icon" href="images/favicon.svg" type="image/png" sizes="16x16" />
    <link rel="stylesheet" href="css/main.min.css" />
    <link rel="stylesheet" href="css/weather-icons.min.css" />
    <link rel="stylesheet" href="css/toast-notification.css" />
    <link rel="stylesheet" href="css/page-tour.css" />
    <link rel="stylesheet" href="css/stories-zuck.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/color.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>

  <body>
    <div class="www-layout">
      <section>
        <div class="gap no-gap signin medium-opacity">
          <div
            class="bg-image"
            style="
              background-image: url(images/login/Login.svg);
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
            "
          ></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 d-none d-lg-block">
                <div class="big-ad">
                  <figure>
                    <img
                      src="images/logo.svg"
                      alt="logo"
                      style="width: 100px; height: 100px"
                    />
                  </figure>
                  <h1>
                    Welcome to the
                    <span style="color: #cb6040; font-weight: 600">Voiz</span>
                  </h1>
                  <div class="mb-4 pb-4">
                    <p >
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s, when an unknown
                      printer took a galley
                    </p>
                  </div>

                  <div class="barcode">
                    <figure>
                      <img src="images/resources/Barcode.jpg" alt="" />
                    </figure>
                    <div class="app-download">
                      <span style="color: #fff"
                        >Download Mobile App and Scan QR Code to login</span
                      >
                      <ul class="colla-apps">
                        <li>
                          <a
                            title=""
                            href="https://play.google.com/store?hl=en"
                            style="color: #fff"
                            ><img src="images/android.png" alt="" />android</a
                          >
                        </li>
                        <li>
                          <a
                            title=""
                            href="https://www.apple.com/lae/ios/app-store/"
                            style="color: #fff"
                            ><img src="images/apple.png" alt="" />iPhone</a
                          >
                        </li>
                        <li>
                          <a
                            title=""
                            href="https://www.microsoft.com/store/apps"
                            style="color: #fff"
                            ><img src="images/windows.png" alt=""/>Windows</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="we-login-register" style="top: 100px !important">
                  <div class="text-dark mb-4" style="text-align: left">
                    <h5
                      style="
                        font-size: 24px;
                        font-weight: 300;
                        margin-bottom: 0;">
                      New
                    </h5>
                    <h3 style="margin-bottom: 0">Password</h3>
                    <small
                      >Don’t worry, Enter your phone number below to recover
                      your password</small
                    >
                  </div>

                  @if ($errors->any())
                  <div class="alert alert-danger" style="background: #ffe1e1; border-radius: 8px; padding: 10px; margin-bottom: 15px;">
                      <ul style="color: red; list-style: none; padding: 0; margin: 0;">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

                  <form class="we-form" method="post" style="margin-bottom: 0" action="/change-password-submit">

                    @csrf

                    <label
                      for="phone"
                      style="color: #000 !important; padding-bottom: 5px"
                      >Enter New Password</label
                    >
                    <input
                      type="password"
                      placeholder="Enter New Password"
                      style="border-radius: 9px !important"
                      name="new_password" required
                    />
                    <label
                      for="phone"
                      style="color: #000 !important; padding-bottom: 5px"
                      >Re-enter New Password</label
                    >
                    <input
                      type="password"
                      placeholder="Enter New Password"
                      name="new_password_confirmation"
                      required
                      style="border-radius: 9px !important"
                    />

                    <button
                    type="submit"
                      class="btn-block mt-3 btn"
                      style="
                        background: #257180 !important;
                        color: #fff;
                        border-radius: 10px;
                        font-weight: bold;
                        font-size: 16px;
                        margin-top: 70px !important;
                        padding: 10px 0 !important;
                      "
                    >
                      Update
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
