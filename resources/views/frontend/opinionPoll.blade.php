@include('layouts.header')
<div class="gap2 gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
          <div class="col-lg-3 d-none d-md-block">
            <aside class="sidebar static left">
              <div class="widget" style="padding-bottom: 20rem">
                <h4 class="widget-title">Map</h4>

                <div style="margin: 10px; border-radius: 20px">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242117.70906969727!2d73.69815309340441!3d18.524870610788827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1731739599407!5m2!1sen!2sin"
                    width="100%" height="450" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" style="
                              border-radius: 20px;
                              padding: 0px;
                              border: none;
                            "></iframe>
                </div>

                <div style="
                            background: #f8fafc;
                            padding: 10px;
                            margin: 10px;
                            border-radius: 20px;
                          ">
                  <div style="
                              display: flex;
                              flex-direction: column;
                              gap: 10px;
                            ">
                    <img src="images/icons/Icon Container.svg" alt="img" style="width: 40px; height: 40px" />
                    <p style="color: #475569">
                      Enjoy unlimited access to our app with only a
                      small price monthly.
                    </p>
                    <div style="display: flex; gap: 10px">
                      <a href="" style="
                                  font-weight: bold;
                                  color: #475569;
                                  font-size: 14px;
                                ">Dismiss</a>
                      <a href="" style="
                                  font-weight: bold;
                                  color: #4f46e5;
                                  font-size: 14px;
                                ">
                        Go Pro VOIZ
                      </a>
                    </div>
                  </div>
                </div>

                <hr />

                <div style="
                            display: flex;
                            justify-content: space-between;
                            margin: 10px;
                          ">
                  <div style="
                              display: flex;
                              gap: 10px;
                              align-items: center;
                            ">
                    <figure>
                      <img src="images/resources/admin.jpg" alt="" style="border-radius: 100px; position: relative" />
                    </figure>
                    <div>
                      <h6 style="color: #000; margin-bottom: 0">
                        Orbit Radix
                      </h6>
                      <p>Basic Member</p>
                    </div>
                  </div>

                  <div style="
                              display: flex;
                              gap: 10px;
                              align-items: center;
                            ">
                    <div class="more" style="margin-top: -40px !important">
                      <div class="more-post-optns">
                        <a href="">
                          <img src="images/icons/Monotone add.svg" alt="img" style="width: 20px" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Shortcuts -->
            </aside>
          </div>
          <!-- sidebar -->

          <div class="col-lg-9">
            <div class="central-meta">
              <div class="title-block">
                <div class="row">
                  <div class="col-lg-9">
                    <div class="align-left">
                      <img src="images/icons/feed.svg" alt="img" style="width: 20px" />
                      <h5 style="
                                  font-size: 18px;
                                  color: #1e293b;
                                  font-weight: bold;
                                ">
                        Opinion Poll
                      </h5>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row merged20">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <form method="post">
                          <input type="text" placeholder="Search... " />
                          <button type="submit">
                            <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false"
                              data-prefix="fas" data-icon="magnifying-glass" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor"
                                d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                              </path>
                            </svg><!-- <i class="fa fa-search"></i> -->
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <div class="central-meta item">
                <div class="user-post">
                  <div class="friend-info">
                    <figure>
                      <img src="images/resources/admin.jpg" alt="" style="border-radius: 100px; position: relative" />
                      <img src="images/icons/_AvatarVerifiedIcon.svg" alt="img" style="
                                  position: absolute;
                                  top: 25px;
                                  left: 25px;
                                  z-index: 999;
                                " />
                    </figure>
                    <div class="friend-name">
                      <div class="more">
                        <div class="more-post-optns">
                          <i class="ti-more-alt"></i>
                          <ul>
                            <li>
                              <a href="#">
                                <i class="fa-regular fa-bookmark"></i>
                                Save Post
                              </a>
                            </li>
                            <li class="bad-report">
                              <a href="#">
                                <i class="fa-solid fa-flag-checkered"></i>
                                Report Post
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="fa-sharp fa-regular fa-times"></i>
                                Hide Post
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <ins><a href="time-line.html" title="">Jack Carter</a>
                        |
                        <a href="#" title="" style="color: #40599a !important">Post Album</a></ins>
                      <span style="color: #475569 !important"><i class="fa fa-globe"></i> published:
                        january,5 2024 | 2:15 PM
                      </span>
                    </div>
                    <hr style="margin-bottom: 0" />

                    <div class="post-meta">
                      <div class="description">
                        <p>
                          Habitant morbi tristique senectus et netus et.
                          Suspendisse sed nisi lacus sed viverra. Dolor
                          morbi non arcu risus quis varius.
                          <span style="color: #4f46e5">#amazing #great #lifetime #uiux
                            #machinelearning</span>
                        </p>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="stat-box" style="padding: 10px">
                            <div class="anlytc-meta" style="padding-left: 0px">
                              <div class="d-flex align-items-center" style="gap: 10px">
                                <img
                                  src="data:image/jpeg;base64,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"
                                  alt="img" style="
                                            width: 30px;
                                            height: 30px;
                                            border-radius: 50px;
                                          " srcset="" />
                                <h5>BJP</h5>
                              </div>

                              <p>40% - 50%</p>
                            </div>
                            <div class="progress" style="height: 6px">
                              <div class="progress-bar bg-info" style="width: 50%"></div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="stat-box" style="padding: 10px">
                            <div class="anlytc-meta" style="padding-left: 0px">
                              <div class="d-flex align-items-center" style="gap: 10px">
                                <img
                                  src="https://upload.wikimedia.org/wikipedia/commons/6/63/Indian_National_Congress_hand_logo.png"
                                  alt="img" style="
                                            width: 30px;
                                            height: 30px;
                                            border-radius: 50px;
                                          " srcset="" />
                                <h5>Congress</h5>
                              </div>

                              <p>20% - 30%</p>
                            </div>
                            <div class="progress" style="height: 6px">
                              <div class="progress-bar bg-info" style="width: 30%"></div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="stat-box" style="padding: 10px">
                            <div class="anlytc-meta" style="padding-left: 0px">
                              <div class="d-flex align-items-center" style="gap: 10px">
                                <img
                                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQN6TWjcIP9PMHxjrgLNA5Md0G3Qz_z_-fGA&s"
                                  alt="img" style="
                                            width: 30px;
                                            height: 30px;
                                            border-radius: 50px;
                                          " srcset="" />
                                <h5>Others</h5>
                              </div>

                              <p>5% - 10%</p>
                            </div>
                            <div class="progress" style="height: 6px">
                              <div class="progress-bar bg-info" style="width: 10%"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="we-video-info">
                        <ul>
                          <li>
                            <span class="views" title="views">
                              <img src="images/icons/eye.svg" alt="img" style="width: 20px" />
                              <ins>1.2k</ins>
                            </span>
                          </li>
                          <li>
                            <div class="likes heart" title="Like/Dislike">
                              <img src="images/icons/heart.svg" alt="img" style="width: 20px" />
                              <span>2K</span>
                            </div>
                          </li>
                          <li>
                            <span class="comment" title="Comments">
                              <img src="images/icons/comments.svg" alt="img" style="width: 20px" />
                              <ins>52</ins>
                            </span>
                          </li>

                          <li>
                            <span>
                              <a class="share-pst" href="#" title="Share">
                                <img src="images/icons/share-2.svg" alt="img" style="width: 20px" />
                              </a>
                              <ins>20</ins>
                            </span>
                          </li>
                        </ul>
                        <div class="users-thumb-list">
                          <a data-toggle="tooltip" title="Anderw" href="#">
                            <img alt="" src="images/resources/userlist-1.jpg" />
                          </a>
                          <a data-toggle="tooltip" title="frank" href="#">
                            <img alt="" src="images/resources/userlist-2.jpg" />
                          </a>
                          <a data-toggle="tooltip" title="Sara" href="#">
                            <img alt="" src="images/resources/userlist-3.jpg" />
                          </a>
                          <a data-toggle="tooltip" title="Amy" href="#">
                            <img alt="" src="images/resources/userlist-4.jpg" />
                          </a>
                          <a data-toggle="tooltip" title="Ema" href="#">
                            <img alt="" src="images/resources/userlist-5.jpg" />
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="coment-area">
                      <ul class="we-comet">
                        <li>
                          <div class="comet-avatar">
                            <img src="images/resources/nearly3.jpg" alt="" />
                          </div>
                          <div class="we-comment">
                            <h5>
                              <a href="time-line.html" title="">Jason borne</a>
                            </h5>
                            <p>
                              we are working for the dance and sing
                              songs. this video is very awesome for the
                              youngster. please vote this video and like
                              our channel
                            </p>
                            <div class="inline-itms">
                              <span>1 year ago</span>
                              <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                              <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="comet-avatar">
                            <img src="images/resources/comet-4.jpg" alt="" />
                          </div>
                          <div class="we-comment">
                            <h5>
                              <a href="time-line.html" title="">Sophia</a>
                            </h5>
                            <p>
                              we are working for the dance and sing
                              songs. this video is very awesome for the
                              youngster.
                              <i class="em em-smiley"></i>
                            </p>
                            <div class="inline-itms">
                              <span>1 year ago</span>
                              <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                              <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <a href="#" title="" class="showmore underline" style="color: #7635dc">more comments+</a>
                        </li>
                        <li class="post-comment">
                          <div class="comet-avatar">
                            <img src="images/resources/nearly1.jpg" alt="" />
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
                                <span class="em em-expressionless" title="add icon"></span>
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
              <!-- video post -->
            </div>
          </div>
          <!-- centerl meta -->


          <!-- sidebar -->
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


@include('layouts.footer')
