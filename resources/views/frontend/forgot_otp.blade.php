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
       <!-- In the head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        .we-form input{
            text-align: center
        }
    </style>

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
                  <div class="mb-4 pb-5">
                    <p style="padding-bottom: 60px">
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
                <div class="we-login-register" style="top: 10px !important">
                  <div class="text-dark mb-4" style="text-align: left">
                    <h5
                      style="
                        font-size: 24px;
                        font-weight: 300;
                        margin-bottom: 0;
                      "
                    >
                      Enter
                    </h5>
                    <h3 style="margin-bottom: 0">Your OTP</h3>
                    <small
                      >Don’t worry, Enter your phone number below to recover
                      your password</small
                    >
                  </div>
                  <div
                    style="
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      margin-bottom: 20px;
                    "
                  >
                    <div style="width: 150px; height: 130px">
                      <img
                        src="images/login/5.png"
                        alt="img"
                        style="width: 100%; height: 100%;object-fit:contain;"
                      />
                    </div>
                  </div>
                  <form class="we-form otpform" action="{{ route('verify_otp_submit_forgot') }}" method="post">
                    @if ($errors->any())
                    <div class="alert alert-danger" style="background: #ffe1e1; border-radius: 8px; padding: 10px; margin-bottom: 15px;">
                        <ul style="color: red; list-style: none; padding: 0; margin: 0;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    @csrf
                    <div
                      style="
                        display: flex;
                        gap: 10px;
                        justify-content: center;
                        align-items: center;
                        margin-bottom: 15px;
                        text-align: center;
                      "
                    >
                      <input
                        type="text"
                        maxlength="1"
                        name="input[]"
                        class="otpinput"
                        style="
                          border-radius: 9px !important;
                          max-width: 50px;
                          width: 50px;
                          height: 50px;
                          border: 1px solid #cb6040;
                          outline: none;
                        "
                      />
                      <input
                        type="text"
                        maxlength="1"
                        name="input[]"
                        class="otpinput"
                        style="
                          border-radius: 9px !important;
                          max-width: 50px;
                          width: 50px;
                          height: 50px;
                          border: 1px solid #cb6040;
                          outline: none;
                        "
                      />
                      <input
                        type="text"
                        name="input[]"
                        class="otpinput"
                        maxlength="1"
                        style="
                          border-radius: 9px !important;
                          max-width: 50px;
                          width: 50px;
                          height: 50px;
                          border: 1px solid #cb6040;
                          outline: none;
                        "
                      />
                      <input
                        type="text"
                        maxlength="1"
                        class="otpinput"
                        name="input[]"
                        style="
                          border-radius: 9px !important;
                          max-width: 50px;
                          width: 50px;
                          height: 50px;
                          border: 1px solid #cb6040;
                          outline: none;
                        "
                      />
                    </div>

                    <div>
                      <span
                        style="
                          color: #000 !important;
                          padding-bottom: 5px;
                          font-size: 16px;
                        "
                        >Don’t Received a Code?

                        <a
                        class="we-account underline d-none"
                        href="/resend-otp-forgot"
                        title=""
                        id="resend-btn"
                        style="color: #f24822; font-weight: bold"
                        >Resend</a
                      >
                        </span>
                      <div>
                        <div class="counter_resend text-dark mt-2" id="counter_resend"></div>
                      </div>

                    </div>

                    <button

                      class="btn-block mt-3 btn"

                    >
                      Verify
                </button>
                  </form>

                  <span
                    style="
                      color: #000 !important;
                      padding-bottom: 5px;
                      font-size: 16px;
                    "
                  >
                    <a
                      class="we-account underline"
                      href="/register"
                      title=""
                      style="color: #cb6040; font-weight: bold"
                      >Back</a
                    ></span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


   <script>


         // script.js
document.querySelectorAll('.otpinput').forEach((input, index, inputs) => {
  input.addEventListener('input', function() {
      // Move to the next input if the current input has a value
      if (this.value.length === 1 && index < inputs.length - 1) {
          inputs[index + 1].focus();
      }

      // If the input is empty and the current one is not the first, focus previous input
      if (this.value.length === 0 && index > 0) {
          inputs[index - 1].focus();
      }
  });

  // Automatically focus the first input box on page load
  if (index === 0) {
      input.focus();
  }
});
   </script>
    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/toast-notificatons.js"></script>

    <script>

// Function to check OTP resend eligibility and update countdown
function checkResendOtp() {
    const userId = 1; // Example user ID, replace with dynamic user ID if needed
    // Fetch the API to check if OTP can be resent
    fetch(`/check-can-resend-otp`)
        .then(response => response.json())
        .then(data => {
            const resendButton = document.getElementById('resend-btn');
            const countdownSpan = document.getElementById('counter_resend');

            if (data.can_resend) {
                // Enable the "Resend OTP" button when 5 minutes have passed
                resendButton.classList.remove('d-none');
                countdownSpan.classList.add('d-none')
                // countdownSpan.innerHTML = ''; // Hide countdown timer
            } else {
                // Disable the "Resend OTP" button and display the countdown timer
                resendButton.classList.add('d-none');

                if (countdownSpan) {
                    countdownSpan.classList.remove('d-none')
                    console.log(`You can resend OTP in ${data.remaining_time}`);
                    countdownSpan.innerHTML = `You can resend OTP in ${data.remaining_time}`;
} else {
    console.error("Element not found");
}
  }

            // If OTP can't be resent yet, check again after 1 second
            if (!data.can_resend) {
                setTimeout(checkResendOtp, 1000); // Update countdown every second
            }
        })
        .catch(error => {
            console.error("Error checking OTP resend:", error);
        });
}

// Call the function when the page loads to start the countdown
checkResendOtp();

window.onload = function() {
// Call the function every 1000 milliseconds (1 second)
setInterval(checkResendOtp, 1000);
};

    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>


toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    window.showToast = function(type, message) {
        switch(type) {
            case 'success':
                toastr.success(message);
                break;
            case 'error':
                toastr.error(message);
                break;
            case 'warning':
                toastr.warning(message);
                break;
            case 'info':
                toastr.info(message);
                break;
        }
    }




</script>

@if(Session::has('success'))
<script>
    showToast('success', "{{ Session::get('success') }}");
</script>
@endif


@if(Session::has('invalid'))
<script>
    showToast('error', "{{ Session::get('invalid') }}");
</script>
@endif



  </body>
</html>
