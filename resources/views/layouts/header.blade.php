<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <link rel="stylesheet" href="css/custom.css" />

  <link rel="stylesheet" href="css/eventCalendar.css" />




    <!-- In the head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



  @if(session('userData'))
  <script>
    // Get user data from Laravel session and store it in localStorage
    const userData = @json(session('userData'));

    // Store the user data in localStorage
    localStorage.setItem('user', JSON.stringify(userData));
  </script>
  @endif

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const user = JSON.parse(localStorage.getItem('user'));

      if (user && user.name && user.userName) {
        // Send user info to the server
        fetch("{{ route('store.user.info') }}", {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
              name: user.name,
              userName: user.userName
            })
          })
          .then(response => response.json())
          .then(data => {
            console.log(data.message);
          })
          .catch(error => {
            console.error('Error:', error);
          });
      } else {
        window.location.href = "{{ route('login') }}";
      }
    });
  </script>

  <!-- <script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault();

        // Clear localStorage
        localStorage.removeItem('user');

        // Submit the logout form to clear the session
        document.getElementById('logout-form').submit();
    });
</script> -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault();

        // Clear localStorage
        localStorage.removeItem('user');

        // Submit the logout form to clear the session
        document.getElementById('logout-form').submit();
      });
    });
  </script>








</head>

<div>

  <body>
    <div class="theme-layout">
      <!-- <div class="postoverlay"></div> -->
      <div class="responsive-header">
        <div class="mh-head first Sticky">
          <span class="mh-btns-left">
            <a class="" href="#menu" style="color: #000;"><i class="fa fa-align-justify"></i></a>
          </span>
          <span class="mh-text">
            <a href="/" title=""
              ><img
                src="images/logohome.svg"
                alt="logo"
                style="width: 40px; height: 40px"
            /></a>
          </span>
          <span class="mh-btns-right" style="display: flex">
            <ul class="setting-area float-left" style="list-style: none">
              <li>
                <a
                  href="notifications"
                  title="Notification"
                  data-ripple=""
                >
                 <img src="images/icons/notification.svg" alt="img" style="width: 20px;"><em
                    class="bg-purple"
                    style="
                      position: absolute;
                      top: -11px;
                      right: 5px;
                      width: 16px;
                      height: 16px;
                      font-size: 10px;
                      border-radius: 50%;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                    "
                    >7</em
                  >
                </a>
              </li>
            </ul>
          </span>
        </div>

        <div class="mh-head second">
          <form class="mh-form">
            <input type="search" placeholder="search" style="height: 40px" />
          </form>
        </div>

        <nav id="menu" class="res-menu">
          <ul>
            <li>
              <a href="/" title="">
                <span>Home </span>
              </a>
            </li>
            <li>
              <a href="/about" title="">
                <span>About Us </span>
              </a>
            </li>

            <li>
              <span>Add Post</span>
              <ul>
                <li><a href="about" title="">Social Post</a></li>
                <li>
                  <a href="add-post" title="">Road Accident</a>
                </li>
                <li>
                  <a href="blood-donation" title="">Blood Donation</a>
                </li>

                <li>
                  <a href="organ-donation" title="">Organ Donation</a>
                </li>
                <li>
                  <a href="medical-fundraising" title=""
                    >Medical Fundraising</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <span>Services</span>
              <ul>
                <li><a href="social-issues" title="">Social Issues</a></li>
                <li>
                  <a href="medical-issues" title="">Medical Issues</a>
                </li>
                <li>
                  <a href="daily-news" title="">Daily News</a>
                </li>

                <li><a href="public-poll" title="">Public Poll</a></li>
                <li>
                  <a href="voters-summary" title="">Voters Summary</a>
                </li>
                <li><a href="opinion-poll" title="">Opinion Poll</a></li>
              </ul>
            </li>
            <li>
              <span>Timeline</span>
              <ul>
                <li>
                  <a href="timeline-photos" title="">Timeline Photos</a>
                </li>
                <li>
                  <a href="timeline-videos" title="">Timeline Videos</a>
                </li>
              </ul>
            </li>
            <li>
              <span>Favourit Page</span>
              <ul>
                <li>
                  <a href="event-calendar" title="">Event Calendar</a>
                </li>
              </ul>
            </li>

            <li>
              <span>Featured</span>
              <ul>
                <li>
                  <a href="chat-messenger" title="">Messenger </a>
                </li>
                <li><a href="notifications" title="">Notifications</a></li>

                <li><a href="faq" title="">Faq's</a></li>
              </ul>
            </li>
            <li>
              <span>Account Setting</span>
              <ul>
                <li><a href="profile" title="">Setting</a></li>
                <li><a href="privacy" title="">Privacy</a></li>
                <li>
                  <a href="support-and-help" title="">Support & Help</a>
                </li>
              </ul>
            </li>
            <li>
              <span>Authentication</span>
              <ul>
                <li><a href="login.html" title="">Login Page</a></li>
                <li><a href="register.html" title="">Register Page</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!-- responsive header -->

      <div class="topbar stick">
        <div class="logo">
          <a title="" href="/"
            ><img
              src="images/logohome.svg"
              alt="logo"
              style="width: 100px; height: 40px"
          /></a>
        </div>
        <div class="top-area">
          <!-- <div class="main-menu">
            <span>
              <i class="fa fa-braille"></i>
            </span>
          </div> -->
          <div class="top-search">
            <form method="post" class="">
              <input type="search" placeholder="Search..." />
              <button data-ripple>
                <i
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    data-name="Layer 1"
                    viewBox="0 0 512 512"
                    class="search-icon"
                    height="15px"
                    width="15px"
                  >
                    <path
                      d="M455 455a25 25 0 01-35.4 0l-81.3-81.2a32.2 32.2 0 01-.9-44.7 137 137 0 00-101-229.5h-.5a136 136 0 00-97 40.9 137.3 137.3 0 00.6 192.7 136.4 136.4 0 00139.2 33.6 25 25 0 0115.3 47.6 187 187 0 01-190-46 187.5 187.5 0 01-.8-263 185.6 185.6 0 01132.5-55.8h.8A187 187 0 01385 350l69.9 69.8a25 25 0 010 35.4z"
                    ></path>
                    <path d="M0 0h512v512H0z" fill="none"></path></svg>
                </i>
              </button>
            </form>
          </div>



          <ul class="setting-area">

            <li>
              <a href="" title="Friend Requests" data-ripple=""
                ><em class="bg-success">5</em>
                <div >
                  <img src="images/icons/message.svg" alt="message" style="width: 25px;height: 25px;">
                </div>
              </a>
              <div class="dropdowns">
                <span style="padding: 16px"
                  >5 New Messages
                  <a href="#" title="">Mark all as read</a></span
                >
                <ul class="drops-menu">
                  <li>
                    <a class="show-mesg" href="#" title="">
                      <figure>
                        <img src="images/resources/thumb-1.jpg" alt="" />
                        <span class="status f-online"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>sarah Loren</h6>
                        <span
                          ><i class="ti-check"></i> Hi, how r u dear ...?</span
                        >
                        <i>2 min ago</i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="show-mesg" href="#" title="">
                      <figure>
                        <img src="images/resources/thumb-2.jpg" alt="" />
                        <span class="status f-offline"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>Jhon doe</h6>
                        <span
                          ><i class="ti-check"></i> Weâ€™ll have to check that
                          at the office and see if the client is on board
                          with</span
                        >
                        <i>2 min ago</i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="show-mesg" href="#" title="">
                      <figure>
                        <img src="images/resources/thumb-3.jpg" alt="" />
                        <span class="status f-online"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>Andrew</h6>
                        <span>
                          <i class="fa fa-paperclip"></i>Hi Jack's! Itâ€™s
                          Diana, I just wanted to let you know that we have to
                          reschedule..</span
                        >
                        <i>2 min ago</i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="show-mesg" href="#" title="">
                      <figure>
                        <img src="images/resources/thumb-4.jpg" alt="" />
                        <span class="status f-offline"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>Tom cruse</h6>
                        <span
                          ><i class="ti-check"></i> Great, Iâ€™ll see you
                          tomorrow!.</span
                        >
                        <i>2 min ago</i>
                      </div>
                    </a>
                    <span class="tag">New</span>
                  </li>
                  <li>
                    <a class="show-mesg" href="#" title="">
                      <figure>
                        <img src="images/resources/thumb-5.jpg" alt="" />
                        <span class="status f-away"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>Amy</h6>
                        <span
                          ><i class="fa fa-paperclip"></i> Sed ut perspiciatis
                          unde omnis iste natus error sit
                        </span>
                        <i>2 min ago</i>
                      </div>
                    </a>
                    <span class="tag">New</span>
                  </li>
                </ul>
                <a
                  href="chat-messenger.html"
                  title=""
                  class="more-mesg"
                  style="padding: 16px"
                  >View All</a
                >
              </div>
            </li>
            <li >
              <a href="#" title="Notification" data-ripple="">
                <div >
                  <img src="images/icons/notification.svg" alt="message" style="width: 25px;height: 25px;">
                </div>
                <em class="bg-red">7</em>
              </a>
              <div class="dropdowns">
                <span style="padding: 16px"
                  >4 New Notifications
                  <a href="#" title="">Mark all as read</a></span
                >
                <ul class="drops-menu">
                  <li>
                    <a href="notifications.html" title="">
                      <figure>
                        <img src="images/resources/thumb-1.jpg" alt="" />
                        <span class="status f-online"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>sarah Loren</h6>
                        <span>commented on your new profile status</span>
                        <i>2 min ago</i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="notifications.html" title="">
                      <figure>
                        <img src="images/resources/thumb-2.jpg" alt="" />
                        <span class="status f-online"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>Jhon doe</h6>
                        <span
                          >Nicholas Grissom just became friends. Write on his
                          wall.</span
                        >
                        <i>4 hours ago</i>
                        <figure>
                          <span
                            >Today is Marina Valentineâ€™s Birthday! wish for
                            celebrating</span
                          >
                          <img src="images/birthday.png" alt="" />
                        </figure>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="notifications.html" title="">
                      <figure>
                        <img src="images/resources/thumb-3.jpg" alt="" />
                        <span class="status f-online"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>Andrew</h6>
                        <span>commented on your photo.</span>
                        <i>Sunday</i>
                        <figure>
                          <span
                            >"Celebrity looks Beautiful in that outfit! We
                            should see each"</span
                          >
                          <img src="images/resources/admin.jpg" alt="" />
                        </figure>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="notifications.html" title="">
                      <figure>
                        <img src="images/resources/thumb-4.jpg" alt="" />
                        <span class="status f-online"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>Tom cruse</h6>
                        <span>nvited you to attend to his event Goo in</span>
                        <i>May 19</i>
                      </div>
                    </a>
                    <span class="tag">New</span>
                  </li>
                  <li>
                    <a href="notifications.html" title="">
                      <figure>
                        <img src="images/resources/thumb-5.jpg" alt="" />
                        <span class="status f-online"></span>
                      </figure>
                      <div class="mesg-meta">
                        <h6>Amy</h6>
                        <span>Andrew Changed his profile picture. </span>
                        <i>dec 18</i>
                      </div>
                    </a>
                    <span class="tag">New</span>
                  </li>
                </ul>
                <a
                  href="notifications.html"
                  title=""
                  class="more-mesg"
                  style="padding: 16px"
                  >View All</a
                >
              </div>
            </li>
            <li>
              <a href="support-and-help">
                  <img src="images/icons/setting-2.svg" alt="message" style="width: 25px;height: 25px;">
              </a>

            </li>
          </ul>
          <div class="user-img">
            <h5>{{ session('user_name', 'Guest') }}</h5>
            <img src="images/resources/admin.jpg" alt="" />
            <span class="status f-online"></span>
            <div class="user-setting">
              <div
                class="d-flex"
                style="
                  gap: 10px;
                  padding: 10px 0 0 10px;
                  border-bottom: 1px solid #ddd;
                "
              >
                <img
                  src="images/resources/admin.jpg"
                  alt="user"
                  style="width: 40px; height: 40px; border-radius: 50%"
                />
                <div>
                               <p style="margin-bottom: -5px; color: #000">{{ session('user_name', 'Guest') }}</p>
                  <p class="" style="font-size: 12px">{{ session('user_userName', 'userName') }}</p>
                </div>
              </div>
              <ul class="log-out">
                <li>
                  <a href="profile" title=""
                    ><i class="ti-user"></i> view profile</a
                  >
                </li>
                <!-- <li>
                  <a href="post-activity" title=""
                    ><i class="ti-target"></i>Post & activity</a
                  >
                </li> -->
                <li>
                  <a href="support-and-help" title=""
                    ><i class="ti-settings"></i>Help</a>
                </li>
                <li>
                  <a href="#" id="logout-link" title=""><i class="ti-power-off"></i>log out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>

              </ul>
            </div>
          </div>
        </div>

        <!-- nav menu -->
      </div>
      <!-- topbar -->


      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 TopHeader">
            <div class="container">
              <div class=" no-top">
                <div class="central-meta no-margin topheader-bg" style="border: none;">
                  <div class="owl-carousel nave-area-carousel" >
                    <div class="item">
                      <a href="/" class="active" title=""><i class="fa-regular fa-home"></i>&nbsp; Issues</a>
                    </div>
                    <div class="item">
                      <a href="daily-news" title=""><i class="fas fa-newspaper"></i>&nbsp; Daily News</a>
                    </div>
                    <div class="item">
                      <a href="legislative-updates" title=""><i class="fas fa-bank"></i>&nbsp; Legislative Updates</a>
                    </div>
                    <div class="item">
                      <a href="public-poll" title=""><i class="fas fa-poll-h"></i> &nbsp;Public Poll</a>
                    </div>
                    <div class="item">
                      <a href="voters-summary" title=""><i class="fas fa-users"></i>&nbsp; Voters Summary</a>
                    </div>
                    <div class="item">
                      <a href="opinion-poll" title=""><i class="fas fa-poll"></i>&nbsp; Opinion Poll</a>
                    </div>
                    <div class="item">
                      <a href="schemes-update" title=""><i class="fas fa-bullhorn"></i>&nbsp; Schemes Update</a>
                    </div>
                    <div class="item">
                      <a href="case-journey-tracker" title=""><i class="fas fa-map"></i>&nbsp; Case Journey Tracker</a>
                    </div>
                    <div class="item">
                      <a href="audio-podcast-news" title=""><i class="fas fa-podcast"></i>&nbsp; Audio Podcast News</a>
                    </div>
                    <div class="item">
                      <a href="weather-emergency-alert" title=""><i class="fas fa-cloud-sun"></i>&nbsp; Weather  Alerts</a>
                    </div>
                    <div class="item">
                      <a href="in-depth-case-studies" title=""><i class="fas fa-search"></i>&nbsp; Progress Card</a>
                    </div>
                    <div class="item">
                      <a href="in-depth-case-studies" title=""><i class="fas fa-search"></i>&nbsp; Job Portal</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
