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
            class="bg-image bg-image-register"
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
                    <span style="color: #02c1f3; font-weight: 600">Voiz</span>
                  </h1>
                  <div class="mb-5 pb-5">
                    <p class="">
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
                      <span>Download Mobile App and Scan QR Code to login</span>
                      <ul class="colla-apps">
                        <li>
                          <a title="" href="https://play.google.com/store?hl=en"
                            ><img src="images/android.png" alt="" />android</a
                          >
                        </li>
                        <li>
                          <a
                            title=""
                            href="https://www.apple.com/lae/ios/app-store/"
                            ><img src="images/apple.png" alt="" />iPhone</a
                          >
                        </li>
                        <li>
                          <a
                            title=""
                            href="https://www.microsoft.com/store/apps"
                            ><img src="images/windows.png" alt="" />Windows</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="we-login-register">
                  <div class="text-dark mb-4" style="text-align: left">
                    <h5
                      style="
                        font-size: 24px;
                        font-weight: 300;
                        margin-bottom: 0;
                      "
                    >
                      Create
                    </h5>
                    <h3 style="margin-bottom: 0">an Account</h3>
                    <small>Its quick and Easy</small>
                  </div>
                  <!-- <form
                    class="we-form"
                    method="post"
                    style="margin-bottom: 10px !important"
                  >
                    <label
                      for="email"
                      style="color: #000 !important; padding-bottom: 5px"
                      >Enter Phone Number</label
                    >
                    <input
                      type="text"
                      placeholder="Ex.:8212345678"
                      style="border-radius: 9px !important"
                    />
                    <label
                      for="email"
                      style="color: #000 !important; padding-bottom: 5px"
                      >Enter Full Name</label
                    >
                    <input
                      type="text"
                      placeholder="Ex.Orbitradix"
                      style="border-radius: 9px !important"
                    />
                    <label
                      for="email"
                      style="color: #000 !important; padding-bottom: 5px"
                      >Enter Username</label
                    >
                    <input
                      type="email"
                      placeholder="Ex.user@gmail.com"
                      style="border-radius: 9px !important"
                    />
                    <label
                      for="email"
                      style="color: #000 !important; padding-bottom: 5px"
                      >Password</label
                    >
                    <input
                      type="password"
                      placeholder="password"
                      style="border-radius: 9px !important"
                    />

                    <button
                      type="submit"
                      data-ripple=""
                      class="btn-block"
                      style="
                        background: #02c1f3 !important;
                        color: #fff;
                        border-radius: 10px;
                        font-weight: bold;
                        font-size: 16px;
                      "
                    >
                      Register
                    </button>
                  </form> -->


                  <!-- Update the form section with: -->
<form class="we-form" method="post" action="{{ route('register.submit') }}" style="margin-bottom: 10px !important">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger" style="background: #ffe1e1; border-radius: 8px; padding: 10px; margin-bottom: 15px;">
            <ul style="color: red; list-style: none; padding: 0; margin: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <label for="phone" style="color: #000 !important; padding-bottom: 5px">Enter Phone Number</label>
    <input
        type="text"
        name="phone"
        value="{{ old('phone') }}"
        placeholder="Ex.:1234567890"
        style="border-radius: 9px !important"
        required
    />

    <label for="fullName" style="color: #000 !important; padding-bottom: 5px">Enter Full Name</label>
    <input
        type="text"
        name="fullName"
        value="{{ old('fullName') }}"
        placeholder="Ex.AlexJohnson"
        style="border-radius: 9px !important"
        required
    />

    <label for="username" style="color: #000 !important; padding-bottom: 5px">Enter Username</label>
    <!-- <input
        type="text"
        name="username"
        placeholder="Ex.user@gmail.com"
        style="border-radius: 9px !important"
        required
    /> -->

    <input
    type="text"
    name="username"
    value="{{ old('username') }}"
    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{3,}$"
    placeholder="Ex.User123"
    style="border-radius: 9px !important"
    oninvalid="this.setCustomValidity('Username must contain at least one uppercase letter, one lowercase letter, one number, and no spaces')"
    oninput="this.setCustomValidity('')"
    required
/>


    <label for="password" style="color: #000 !important; padding-bottom: 5px">Password</label>
    <input
        type="password"
        name="password"
        placeholder="password"
        style="border-radius: 9px !important"
        required
    />

    <button type="submit" data-ripple="" class="btn-block">
        Register
    </button>
</form>


                  <span
                    style="
                      color: #000 !important;
                      padding-bottom: 5px;
                      font-size: 16px;
                    "
                    >Already have an account?
                    <a
                      class="we-account underline"
                      href="login"
                      title=""
                      style="color: #02c1f3; font-weight: bold"
                      >Login</a
                    ></span
                  >
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
