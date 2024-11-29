@include('layouts.header')
<!-- topbar -->




<div class="col-lg-3 d-none d-md-block">
  <aside class="sidebar static left">

    <div class="widget">
      <h4 class="widget-title">Shortcuts</h4>
      <ul class="naves">
        <li>
          <i class="ti-clipboard"></i>
          <a href="/" title="">News feed</a>
        </li>
        <li>
          <i class="fas fa-globe-europe" style="color: #000;"></i>
          <a href="add-post" title="">Social Issues</a>
        </li>
        <li>
          <i class="fas fa-hospital" style="color: #000;"></i>
          <a href="blood-donation" title="">Medical Issues</a>
        </li>

        <li>
          <i class="ti-files"></i>
          <a href="profile" title="">My pages</a>
        </li>

        <li>
          <i class="ti-image"></i>
          <a href="timeline-photos" title="">images</a>
        </li>
        <li>
          <i class="ti-video-camera"></i>
          <a href="timeline-videos" title="">videos</a>
        </li>

        <li>
          <i class="ti-power-off"></i>
          <a href="/" title="">Logout</a>
        </li>
      </ul>
    </div>


  </aside>
</div>


<!-- sidebar -->

<div class="col-lg-9">
  <div class="central-meta postbox">
    <span class="create-post">
      <i class="fa-regular fa-stars"></i> Create post
    </span>

    <div class="new-postbox">
      <figure>
        <img src="images/resources/admin.jpg" alt="" />
      </figure>
      <div class="newpst-input">
        <form method="post">
          <textarea rows="2" placeholder="Share some what you are thinking?"></textarea>
        </form>
      </div>
      <div class="attachments">
        <ul>
          <li>
            <span class="add-loc">
              <i class="fa-light fa-location-dot"></i>
            </span>
          </li>
          <li>
            <i class="fa-light fa-music"></i>
            <label class="fileContainer">
              <input type="file" />
            </label>
          </li>
          <li>
            <i class="fa-light fa-image"></i>
            <label class="fileContainer">
              <input type="file" />
            </label>
          </li>
          <li>
            <i class="fa-light fa-camcorder"></i>
            <label class="fileContainer">
              <input type="file" />
            </label>
          </li>
          <li>
            <i class="fa-brands fa-instagram"></i>
            <label class="fileContainer">
              <input type="file" />
            </label>
          </li>
          <li>
            <i class="fa-solid fa-square-poll-vertical" title="create poll" data-toggle="modal"
              data-target="#myPollModal" style="cursor: pointer"></i>
            <div class="modal fade" id="myPollModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true" style="z-index: 9999">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Create a poll</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <!-- Modal Body -->
                  <div class="modal-body" style="height: 400px; overflow-y: scroll">
                    <div class="send-message">
                      <form method="post" class="c-form">
                        <label style="font-size: 12px" for="message" class="mb-3">Your question *</label>
                        <textarea class="form-control mb-4" placeholder="E.g.How do you commute to work ?" rows="2"
                          required></textarea>
                        <label style="font-size: 12px" for="message" class="mb-3">Option 1 *</label>
                        <input style="height: 45px" type="text" placeholder="E.g.public transport"
                          class="form-control mb-4" />
                        <label style="font-size: 12px" for="message" class="mb-3">Option 2 *</label>
                        <input style="height: 45px" type="text" placeholder="E.g.Drive myself"
                          class="form-control mb-4" />
                        <label style="font-size: 12px" for="message" class="mb-3">Poll duration *</label>
                        <select name="" id="" class="mb-4">
                          <option value="">1 day</option>
                          <option value="">3 days</option>
                          <option value="">1 Week</option>
                          <option value="">2 Week</option>
                        </select>
                        <p class="mt-3" style="font-size: 12px">
                          We allow requests for political
                          opinions,& Public opinions.
                        </p>
                      </form>
                    </div>
                  </div>

                  <!-- Modal Footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                      Close
                    </button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                      Done
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li>
            <i class="fa-regular fa-calendar" title="create Event" data-toggle="modal" data-target="#eventAddModal"
              style="cursor: pointer"></i>

            <div class="modal fade" id="eventAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true" style="z-index: 9999">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">
                      Create an event
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <!-- Modal Body -->
                  <div class="modal-body" style="height: 400px; overflow-y: scroll">
                    <div class="send-message">
                      <form method="post" class="c-form">
                        <label style="font-size: 12px" for="" class="mb-3">Event name *</label>
                        <textarea class="form-control mb-4" placeholder="E.g.How do you commute to work ?" rows="2"
                          required></textarea>
                        <label style="font-size: 12px" for="" class="mb-3">Start date *</label>
                        <input style="height: 45px" type="date" placeholder="" class="form-control mb-4" />
                        <label style="font-size: 12px" for="" class="mb-3">Start Time *</label>
                        <input style="height: 45px" type="time" placeholder="" class="form-control mb-4" />
                        <label style="font-size: 12px" for="" class="mb-3">End date *</label>
                        <input style="height: 45px" type="date" placeholder="" class="form-control mb-4" />
                        <label style="font-size: 12px" for="" class="mb-3">End Time *</label>
                        <input style="height: 45px" type="time" placeholder="" class="form-control mb-4" />

                        <p class="mt-3" style="font-size: 12px">
                          By continuing, you agree with
                          <a href="privacy-policy.html">Voiz event policy.</a>
                        </p>
                      </form>
                    </div>
                  </div>

                  <!-- Modal Footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                      Close
                    </button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                      Done
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="preview-btn">
            <button class="post-btn-preview" type="submit" data-ripple="">
              Social
            </button>
          </li>
        </ul>
        <button class="post-btn" type="submit" data-ripple="">
          Post
        </button>
      </div>
      <div class="add-location-post">
        <span>Drag map point to selected area</span>
        <div class="row">
          <div class="col-lg-6">
            <label class="control-label">Lat :</label>
            <input type="text" class="" id="us3-lat" />
          </div>
          <div class="col-lg-6">
            <label>Long :</label>
            <input type="text" class="" id="us3-lon" />
          </div>
        </div>
        <!-- map -->
        <div id="us3"></div>
      </div>
    </div>
  </div>
  <!-- add post new box -->
</div>
<!-- centerl meta -->
</div>
</div>
</div>
</div>
</div>
</section>

<!-- mobilr bottom menu -->

<div class="d-md-none d-block">
  <nav class="mobile-bottom-nav">
    <a href="/" class="mobile-bottom-nav-nav-item is-active">
      <i class="fa fa-home"></i>
      <span>Home</span>
    </a>
    <a href="daily-news" class="mobile-bottom-nav-nav-item">
      <i class="fa fa-newspaper"></i>
      <span> News</span>
    </a>
    <a href="/" class="mobile-bottom-nav-nav-item">
      <i class="fa fa-plus"></i>
      <span>Post</span>
    </a>
    <a href="#" class="mobile-bottom-nav-nav-item">
      <i class="fa fa-users"></i>
      <span>Public</span>
    </a>
    <a href="profile" class="mobile-bottom-nav-nav-item">
      <i class="fa fa-user"></i>
      <span>Profile</span>
    </a>

    <div class="nav-indicator-wrapper">
      <span class="mobile-nav-indicator"></span>
    </div>
  </nav>
</div>
</div>

<!-- side panel -->

<div class="popup-wraper2">
  <div class="popup post-sharing">
    <span class="popup-closed"><i class="ti-close"></i></span>
    <div class="popup-meta">
      <div class="popup-head" style="border: none"></div>

      <div class="postbox">
        <div class="post-comt-box mb-lg-3">
          <form method="post">
            <input type="search" placeholder="Search Friends..." />
            <button type="submit"></button>
          </form>
        </div>

        <div class="row" style="
                height: 200px;
                overflow-y: scroll;
                border-bottom: 1px solid #f2f2f2;
              ">
          <div class="col-lg-4">
            <a href="#">
              <figure class="text-center">
                <img src="images/resources/speak-2.jpg" alt="img"
                  style="width: 60px; height: 60px; border-radius: 50%" />
                <figcaption>Suraj Jamdade</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#">
              <figure class="text-center">
                <img src="images/resources/speak-2.jpg" alt="img"
                  style="width: 60px; height: 60px; border-radius: 50%" />
                <figcaption>Suraj Jamdade</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#">
              <figure class="text-center">
                <img src="images/resources/speak-2.jpg" alt="img"
                  style="width: 60px; height: 60px; border-radius: 50%" />
                <figcaption>Suraj Jamdade</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#">
              <figure class="text-center">
                <img src="images/resources/speak-2.jpg" alt="img"
                  style="width: 60px; height: 60px; border-radius: 50%" />
                <figcaption>Suraj Jamdade</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#">
              <figure class="text-center">
                <img src="images/resources/speak-2.jpg" alt="img"
                  style="width: 60px; height: 60px; border-radius: 50%" />
                <figcaption>Suraj Jamdade</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#">
              <figure class="text-center">
                <img src="images/resources/speak-2.jpg" alt="img"
                  style="width: 60px; height: 60px; border-radius: 50%" />
                <figcaption>Suraj Jamdade</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#">
              <figure class="text-center">
                <img src="images/resources/speak-2.jpg" alt="img"
                  style="width: 60px; height: 60px; border-radius: 50%" />
                <figcaption>Suraj Jamdade</figcaption>
              </figure>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#">
              <figure class="text-center">
                <img src="images/resources/speak-2.jpg" alt="img"
                  style="width: 60px; height: 60px; border-radius: 50%" />
                <figcaption>Suraj Jamdade</figcaption>
              </figure>
            </a>
          </div>
        </div>

        <div class="share-to-other mt-lg-2">
          <span>Share to other socials</span>
          <ul>
            <li>
              <a class="facebook-color" href="#" title=""><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a class="twitter-color" href="#" title=""><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a class="dribble-color" href="#" title=""><i class="fa-brands fa-dribbble"></i></a>
            </li>
            <li>
              <a class="instagram-color" href="#" title=""><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a class="pinterest-color" href="#" title=""><i class="fa-brands fa-pinterest"></i></a>
            </li>
          </ul>
        </div>
        <div class="copy-email">
          <span>Copy & Email</span>
          <ul>
            <li>
              <a href="#" title="Copy Post Link" style="background: blue !important"><i class="fa fa-link"></i></a>
            </li>
            <li>
              <a href="#" title="Email this Post bg-danger"><i class="fa fa-envelope"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- share popup -->

<div class="popup-wraper3">
  <div class="popup">
    <span class="popup-closed"><i class="ti-close"></i></span>
    <div class="popup-meta">
      <div class="popup-head">
        <h5>Report Post</h5>
      </div>
      <div class="Rpt-meta">
        <span>We're sorry something's wrong. How can we help?</span>
        <form method="post" class="c-form">
          <div class="form-radio">
            <div class="radio">
              <label>
                <input type="radio" name="radio" checked="checked" /><i class="check-box"></i>It's spam or abuse
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="radio" /><i class="check-box"></i>It breaks r/technology's rules
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="radio" /><i class="check-box"></i>Not Related
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="radio" /><i class="check-box"></i>Other issues
              </label>
            </div>
          </div>
          <div>
            <label>Write about Report</label>
            <textarea placeholder="write someting about Post" rows="2"></textarea>
          </div>
          <div>
            <button data-ripple="" type="submit" class="main-btn">
              Submit
            </button>
            <a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- report popup -->

<div class="popup-wraper1">
  <div class="popup direct-mesg">
    <span class="popup-closed"><i class="ti-close"></i></span>
    <div class="popup-meta">
      <div class="popup-head">
        <h5>Send Message</h5>
      </div>
      <div class="send-message">
        <form method="post" class="c-form">
          <input type="text" placeholder="Sophia" />
          <textarea placeholder="Write Message"></textarea>
          <button type="submit" class="main-btn">Send</button>
        </form>
        <div class="add-smiles">
          <div class="uploadimage">
            <i class="fa fa-image"></i>
            <label class="fileContainer">
              <input type="file" />
            </label>
          </div>
          <span title="add icon" class="em em-expressionless"></span>
          <div class="smiles-bunch">
            <i class="em em---1"></i>
            <i class="em em-smiley"></i>
            <i class="em em-anguished"></i>
            <i class="em em-laughing"></i>
            <i class="em em-angry"></i>
            <i class="em em-astonished"></i>
            <i class="em em-blush"></i>
            <i class="em em-disappointed"></i>
            <i class="em em-worried"></i>
            <i class="em em-kissing_heart"></i>
            <i class="em em-rage"></i>
            <i class="em em-stuck_out_tongue"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- send message popup -->

<div class="modal fade" id="img-comt">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8">
            <div class="pop-image">
              <div id="demo" class="carousel slide" data-interval="false" data-ride="carousel" data-pause="hover">
                <!-- The slideshow -->
                <div class="pop-item">
                  <div class="carousel-item active">
                    <img src="images/posts/1.webp" alt="post" style="width: 100%; height: 500px" />
                  </div>
                  <div class="carousel-item">
                    <img src="images/posts/2.webp" alt="post" style="width: 100%; height: 500px" />
                  </div>
                  <div class="carousel-item">
                    <img src="images/posts/4.webp" alt="post" style="width: 100%; height: 500px" />
                  </div>
                  <div class="carousel-item">
                    <img src="images/posts/5.webp" alt="post" style="width: 100%; height: 500px" />
                  </div>
                  <div class="carousel-item">
                    <img src="images/posts/6.webp" alt="post" style="width: 100%; height: 500px" />
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="user">
              <figure>
                <img src="images/resources/nearly1.jpg" alt="user" />
              </figure>
              <div class="user-information">
                <h4><a href="#" title="">Jack Carter </a></h4>
                <span>2 hours ago</span>
              </div>
              <a href="#" title="Follow" data-ripple="">Follow</a>
            </div>
            <div class="we-video-info">
              <ul>
                <li>
                  <div title="Approvals/Disapprovals" class="likes heart">
                    ❤ <span>2K</span>
                  </div>
                </li>
                <li>
                  <span title="Comments" class="comment">
                    <i class="fa fa-commenting"></i>
                    <ins>52</ins>
                  </span>
                </li>

                <li>
                  <span>
                    <a title="Share" href="#" class="share-pst">
                      <i class="fa fa-share-alt"></i>
                    </a>
                    <ins>20</ins>
                  </span>
                </li>
              </ul>
              <div class="users-thumb-list">
                <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                  <img src="images/resources/userlist-1.jpg" alt="" />
                </a>
                <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                  <img src="images/resources/userlist-2.jpg" alt="" />
                </a>
                <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                  <img src="images/resources/userlist-3.jpg" alt="" />
                </a>
                <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                  <img src="images/resources/userlist-4.jpg" alt="" />
                </a>
                <span><strong>You</strong>, <b>Sarah</b> and
                  <a title="" href="#">24+ more</a> liked</span>
              </div>
            </div>
            <div style="display: block" class="coment-area">
              <ul class="we-comet">
                <li>
                  <div class="comet-avatar">
                    <img alt="" src="images/resources/nearly3.jpg" />
                  </div>
                  <div class="we-comment">
                    <h5>
                      <a title="" href="time-line.html">Jason borne</a>
                    </h5>
                    <p>
                      we are working for the dance and sing songs. this
                      video is very awesome for the youngster. please vote
                      this video and like our channel
                    </p>
                    <div class="inline-itms">
                      <span>1 year ago</span>
                      <a title="Reply" href="#" class="we-reply"><i class="fa fa-reply"></i></a>
                      <a title="" href="#"><i class="fa-solid fa-circle-check"></i><span>20</span></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="comet-avatar">
                    <img alt="" src="images/resources/comet-4.jpg" />
                  </div>
                  <div class="we-comment">
                    <h5><a title="" href="time-line.html">Sophia</a></h5>
                    <p>
                      we are working for the dance and sing songs. this
                      video is very awesome for the youngster.
                      <i class="em em-smiley"></i>
                    </p>
                    <div class="inline-itms">
                      <span>1 year ago</span>
                      <a title="Reply" href="#" class="we-reply"><i class="fa fa-reply"></i></a>
                      <a title="" href="#"><i class="fa-solid fa-circle-check"></i><span>20</span></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="comet-avatar">
                    <img alt="" src="images/resources/comet-4.jpg" />
                  </div>
                  <div class="we-comment">
                    <h5><a title="" href="time-line.html">Sophia</a></h5>
                    <p>
                      we are working for the dance and sing songs. this
                      video is very awesome for the youngster.
                      <i class="em em-smiley"></i>
                    </p>
                    <div class="inline-itms">
                      <span>1 year ago</span>
                      <a title="Reply" href="#" class="we-reply"><i class="fa fa-reply"></i></a>
                      <a title="" href="#"><i class="fa-solid fa-circle-check"></i><span>20</span></a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="showmore underline" title="" href="#">more comments+</a>
                </li>
                <li class="post-comment">
                  <div class="comet-avatar">
                    <img alt="" src="images/resources/nearly1.jpg" />
                  </div>
                  <div class="post-comt-box">
                    <form method="post">
                      <textarea placeholder="Post your comment"></textarea>
                      <div class="add-smiles">
                        <div class="uploadimage">
                          <i class="fa fa-image"></i>
                          <label class="fileContainer">
                            <input type="file" />
                          </label>
                        </div>
                        <span title="add icon" class="em em-expressionless"></span>
                        <div class="smiles-bunch">
                          <i class="em em---1"></i>
                          <i class="em em-smiley"></i>
                          <i class="em em-anguished"></i>
                          <i class="em em-laughing"></i>
                          <i class="em em-angry"></i>
                          <i class="em em-astonished"></i>
                          <i class="em em-blush"></i>
                          <i class="em em-disappointed"></i>
                          <i class="em em-worried"></i>
                          <i class="em em-kissing_heart"></i>
                          <i class="em em-rage"></i>
                          <i class="em em-stuck_out_tongue"></i>
                        </div>
                      </div>

                      <button type="submit"></button>
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- The Scrolling Modal image with comment -->
<script src="js/poll.js"></script>
<script src="js/main.min.js"></script>
<script src="js/jquery-stories.js"></script>
<script src="js/toast-notificatons.js"></script>
<script src="js/TweenMax.min.js"></script>
<!-- For timeline slide show -->
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3vI4IQqzxRU1449lbIHThUb2gCeDW47w&callback=initMap"></script>
<!-- for location picker map -->
<script src="js/locationpicker.jquery.js"></script>
<!-- for loaction picker map -->
<script src="js/map-init.js"></script>
<!-- map initilasition -->
<script src="js/page-tourintro.js"></script>
<script src="js/page-tour-init.js"></script>
<script src="js/stories-zuck.js"></script>
<script src="js/stories-zuck-necessery.js"></script>
<script src="js/stories-zuck-init.js"></script>
<script src="js/script.js"></script>
<script src="js/mobile.nav.js"></script>
</body>

</html>