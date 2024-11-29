@include('layouts.header')

      <!-- topbar -->

      
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
                            width="100%"
                            height="450"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            style="
                              border-radius: 20px;
                              padding: 0px;
                              border: none;
                            "
                          ></iframe>
                        </div>

                        <div
                          style="
                            background: #f8fafc;
                            padding: 10px;
                            margin: 10px;
                            border-radius: 20px;
                          "
                        >
                          <div
                            style="
                              display: flex;
                              flex-direction: column;
                              gap: 10px;
                            "
                          >
                            <img
                              src="images/icons/Icon Container.svg"
                              alt="img"
                              style="width: 40px; height: 40px"
                            />
                            <p style="color: #475569">
                              Enjoy unlimited access to our app with only a
                              small price monthly.
                            </p>
                            <div style="display: flex; gap: 10px">
                              <a
                                href=""
                                style="
                                  font-weight: bold;
                                  color: #475569;
                                  font-size: 14px;
                                "
                                >Dismiss</a
                              >
                              <a
                                href=""
                                style="
                                  font-weight: bold;
                                  color: #4f46e5;
                                  font-size: 14px;
                                "
                              >
                                Go Pro VOIZ
                              </a>
                            </div>
                          </div>
                        </div>

                        <hr />

                        <div
                          style="
                            display: flex;
                            justify-content: space-between;
                            margin: 10px;
                          "
                        >
                          <div
                            style="
                              display: flex;
                              gap: 10px;
                              align-items: center;
                            "
                          >
                            <figure>
                              <img
                                src="images/resources/admin.jpg"
                                alt=""
                                style="border-radius: 100px; position: relative"
                              />
                            </figure>
                            <div>
                              <h6 style="color: #000; margin-bottom: 0">
                                Orbit Radix
                              </h6>
                              <p>Basic Member</p>
                            </div>
                          </div>

                          <div
                            style="
                              display: flex;
                              gap: 10px;
                              align-items: center;
                            "
                          >
                            <div
                              class="more"
                              style="margin-top: -40px !important"
                            >
                              <div class="more-post-optns">
                                <a href="">
                                  <img
                                    src="images/icons/Monotone add.svg"
                                    alt="img"
                                    style="width: 20px"
                                  />
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

                  <div class="col-lg-6">
                    <div class="central-meta">
                      <div class="title-block">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="align-left">
                              <img
                                src="images/icons/document-text.svg"
                                alt="img"
                                style="width: 20px"
                              />
                              <h5
                                style="
                                  font-size: 18px;
                                  color: #1e293b;
                                  font-weight: bold;
                                "
                              >
                                Daily News
                              </h5>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="row merged20">
                              <div class="col-lg-10 col-md-10 col-sm-10">
                                <form method="post">
                                  <input type="text" placeholder="Search... " />
                                  <button type="submit">
                                    <svg
                                      class="svg-inline--fa fa-magnifying-glass"
                                      aria-hidden="true"
                                      focusable="false"
                                      data-prefix="fas"
                                      data-icon="magnifying-glass"
                                      role="img"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 512 512"
                                      data-fa-i2svg=""
                                    >
                                      <path
                                        fill="currentColor"
                                        d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"
                                      ></path></svg
                                    ><!-- <i class="fa fa-search"></i> -->
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="">
                    @foreach($news as $item)
                <div class="central-meta item">
                <div class="user-post">
                <div class="friend-info">
                  <figure>
                  <img src="images/resources/admin.jpg" alt="" style="border-radius: 100px;position: relative;" />
                  <img src="images/icons/_AvatarVerifiedIcon.svg" alt="img" style="position: absolute;top: 25px;left: 25px;z-index: 999;">
                  </figure>
                  <div class="friend-name">
                  <div class="more">
                  <div class="more-post-optns">
                  <i class="ti-more-alt"></i>
                  <ul>
                  <li><a href="#"><i class="fa-regular fa-bookmark"></i>Save News</a></li>
                  <li class="bad-report"><a href="#"><i class="fa-solid fa-flag-checkered"></i>Report News</a></li>
                  </ul>
                  </div>
                  </div>
                  <ins><a href="#" title="">{{ $item['title'] }}</a></ins>
                  <span>{{ \Carbon\Carbon::parse($item['createdAt'])->format('F j, Y g:i A') }}</span>
                  </div>
                  <div class="post-meta">
                  <div class="description">
                  <p>{{ $item['description'] }}</p>
                  </div>
                  @if($item['image'])
            <figure>
            <img src="{{ $item['image'] }}" alt="news image" style="width: 100%;height: 300px;border-radius: 20px;">
            </figure>
          @endif

                  <div class="we-video-info">
                  <ul>
                  <li>
                  <div class="likes heart" title="Like/Dislike" data-news-id="{{ $item['_id'] }}">
                  <img src="images/icons/heart.svg" alt="img" style="width: 20px">
                  <span class="like-count">{{ $item['likeCount'] }}</span>
                  </div>
                  </li>
                  <li>
                  <span class="comment" title="Comments" data-toggle="collapse" data-target="#comments-{{ $item['_id'] }}">
                  <img src="images/icons/comments.svg" alt="img" style="width: 20px">
                  <ins>{{ count($item['comments'] ?? []) }}</ins>
                  </span>
                  </li>
                  </ul>
                  </div>
                  </div>
                </div>
                </div>
                </div>
            @endforeach



                      
                    </div>
                  </div>
                  <!-- centerl meta -->

                  <div class="col-lg-3 d-none d-md-block">
                    <aside class="sidebar static right">
                      <!-- page like widget -->
                      <div class="widget">
                        <h4 class="widget-title">Top Trending News</h4>
                        <ul class="nav nav-tabs trend">
                          <li class="nav-item">
                            <a class="active" href="#trend" data-toggle="tab"
                              >Trending</a
                            >
                          </li>
                          <li
                            class="nav-item"
                            style="background: #000; border-radius: 5px"
                          >
                            <a class="" href="#hot" data-toggle="tab">Hot</a>
                          </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane fade active show" id="trend">
                            <ul class="recent-links">
                              <li>
                                <figure>
                                  <img
                                    alt=""
                                    src="images/resources/recentlink-1.jpg"
                                  />
                                </figure>
                                <div class="re-links-meta">
                                  <h6>
                                    <a title="" href="#"
                                      >moira's fade reaches much farther than
                                      you think.</a
                                    >
                                  </h6>
                                  <span>2 weeks ago </span>
                                </div>
                              </li>
                              <li>
                                <figure>
                                  <img
                                    alt=""
                                    src="images/resources/recentlink-2.jpg"
                                  />
                                </figure>
                                <div class="re-links-meta">
                                  <h6>
                                    <a title="" href="#"
                                      >daniel asks if we want him to do the
                                      voice of doomfist</a
                                    >
                                  </h6>
                                  <span>3 months ago </span>
                                </div>
                              </li>
                              <li>
                                <figure>
                                  <img
                                    alt=""
                                    src="images/resources/recentlink-3.jpg"
                                  />
                                </figure>
                                <div class="re-links-meta">
                                  <h6>
                                    <a title="" href="#"
                                      >the Voiz overwatch scandals.</a
                                    >
                                  </h6>
                                  <span>1 day before</span>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="tab-pane fade" id="hot">
                            <ul
                              class="more-songs ps-container ps-theme-default"
                              data-ps-id="a7e5dfe0-752e-b05d-1057-03f8eab601e6"
                            >
                              <li>
                                <figure>
                                  <img
                                    alt=""
                                    src="images/resources/song-chanl1.jpg"
                                  />
                                </figure>
                                <div class="song-title">
                                  <h6>
                                    <a title="" href="#"
                                      >6 Kiss (Feat. JuiceWrld &amp; YNW
                                      Melly)</a
                                    >
                                  </h6>
                                  <a title="" href="#">by Yung Bans</a>
                                </div>
                              </li>
                              <li>
                                <figure>
                                  <img
                                    alt=""
                                    src="images/resources/song-chanl2.jpg"
                                  />
                                </figure>
                                <div class="song-title">
                                  <h6>
                                    <a title="" href="#"
                                      >A love letter to you for</a
                                    >
                                  </h6>
                                  <a title="" href="#">by Trippie Redd</a>
                                </div>
                              </li>
                              <li>
                                <figure>
                                  <img
                                    alt=""
                                    src="images/resources/song-chanl3.jpg"
                                  />
                                </figure>
                                <div class="song-title">
                                  <h6>
                                    <a title="" href="#"
                                      >Strings feat. Gunna Official</a
                                    >
                                  </h6>
                                  <a title="" href="#">by iann dior</a>
                                </div>
                              </li>
                              <li>
                                <figure>
                                  <img
                                    alt=""
                                    src="images/resources/song-chanl4.jpg"
                                  />
                                </figure>
                                <div class="song-title">
                                  <h6>
                                    <a title="" href="#">Partna in Crime</a>
                                  </h6>
                                  <a title="" href="#">by Lil Tecca</a>
                                </div>
                              </li>
                              <li>
                                <figure>
                                  <img
                                    alt=""
                                    src="images/resources/song-chanl5.jpg"
                                  />
                                </figure>
                                <div class="song-title">
                                  <h6>
                                    <a title="" href="#"
                                      >Majin Mafia official song</a
                                    >
                                  </h6>
                                  <a title="" href="#">by fetty wap</a>
                                </div>
                              </li>

                              <div
                                class="ps-scrollbar-x-rail"
                                style="left: 0px; bottom: 0px"
                              >
                                <div
                                  class="ps-scrollbar-x"
                                  tabindex="0"
                                  style="left: 0px; width: 0px"
                                ></div>
                              </div>
                              <div
                                class="ps-scrollbar-y-rail"
                                style="top: 0px; right: 0px"
                              >
                                <div
                                  class="ps-scrollbar-y"
                                  tabindex="0"
                                  style="top: 0px; height: 0px"
                                ></div>
                              </div>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </aside>
                  </div>
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

            <div
              class="row"
              style="
                height: 200px;
                overflow-y: scroll;
                border-bottom: 1px solid #f2f2f2;
              "
            >
              <div class="col-lg-4">
                <a href="#">
                  <figure class="text-center">
                    <img
                      src="images/resources/speak-2.jpg"
                      alt="img"
                      style="width: 60px; height: 60px; border-radius: 50%"
                    />
                    <figcaption>Suraj Jamdade</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <figure class="text-center">
                    <img
                      src="images/resources/speak-2.jpg"
                      alt="img"
                      style="width: 60px; height: 60px; border-radius: 50%"
                    />
                    <figcaption>Suraj Jamdade</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <figure class="text-center">
                    <img
                      src="images/resources/speak-2.jpg"
                      alt="img"
                      style="width: 60px; height: 60px; border-radius: 50%"
                    />
                    <figcaption>Suraj Jamdade</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <figure class="text-center">
                    <img
                      src="images/resources/speak-2.jpg"
                      alt="img"
                      style="width: 60px; height: 60px; border-radius: 50%"
                    />
                    <figcaption>Suraj Jamdade</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <figure class="text-center">
                    <img
                      src="images/resources/speak-2.jpg"
                      alt="img"
                      style="width: 60px; height: 60px; border-radius: 50%"
                    />
                    <figcaption>Suraj Jamdade</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <figure class="text-center">
                    <img
                      src="images/resources/speak-2.jpg"
                      alt="img"
                      style="width: 60px; height: 60px; border-radius: 50%"
                    />
                    <figcaption>Suraj Jamdade</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <figure class="text-center">
                    <img
                      src="images/resources/speak-2.jpg"
                      alt="img"
                      style="width: 60px; height: 60px; border-radius: 50%"
                    />
                    <figcaption>Suraj Jamdade</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="#">
                  <figure class="text-center">
                    <img
                      src="images/resources/speak-2.jpg"
                      alt="img"
                      style="width: 60px; height: 60px; border-radius: 50%"
                    />
                    <figcaption>Suraj Jamdade</figcaption>
                  </figure>
                </a>
              </div>
            </div>

            <div class="share-to-other mt-lg-2">
              <span>Share to other socials</span>
              <ul>
                <li>
                  <a class="facebook-color" href="#" title=""
                    ><i class="fa-brands fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a class="twitter-color" href="#" title=""
                    ><i class="fa-brands fa-twitter"></i
                  ></a>
                </li>
                <li>
                  <a class="dribble-color" href="#" title=""
                    ><i class="fa-brands fa-dribbble"></i
                  ></a>
                </li>
                <li>
                  <a class="instagram-color" href="#" title=""
                    ><i class="fa-brands fa-instagram"></i
                  ></a>
                </li>
                <li>
                  <a class="pinterest-color" href="#" title=""
                    ><i class="fa-brands fa-pinterest"></i
                  ></a>
                </li>
              </ul>
            </div>
            <div class="copy-email">
              <span>Copy & Email</span>
              <ul>
                <li>
                  <a
                    href="#"
                    title="Copy Post Link"
                    style="background: blue !important"
                    ><i class="fa fa-link"></i
                  ></a>
                </li>
                <li>
                  <a href="#" title="Email this Post bg-danger"
                    ><i class="fa fa-envelope"></i
                  ></a>
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
                    <input type="radio" name="radio" checked="checked" /><i
                      class="check-box"
                    ></i
                    >It's spam or abuse
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="radio" /><i class="check-box"></i
                    >It breaks r/technology's rules
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="radio" /><i class="check-box"></i
                    >Not Related
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="radio" /><i class="check-box"></i
                    >Other issues
                  </label>
                </div>
              </div>
              <div>
                <label>Write about Report</label>
                <textarea
                  placeholder="write someting about Post"
                  rows="2"
                ></textarea>
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
                  <div
                    id="demo"
                    class="carousel slide"
                    data-interval="false"
                    data-ride="carousel"
                    data-pause="hover"
                  >
                    <!-- The slideshow -->
                    <div class="pop-item">
                      <div class="carousel-item active">
                        <img
                          src="images/posts/1.webp"
                          alt="post"
                          style="width: 100%; height: 500px"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="images/posts/2.webp"
                          alt="post"
                          style="width: 100%; height: 500px"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="images/posts/4.webp"
                          alt="post"
                          style="width: 100%; height: 500px"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="images/posts/5.webp"
                          alt="post"
                          style="width: 100%; height: 500px"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="images/posts/6.webp"
                          alt="post"
                          style="width: 100%; height: 500px"
                        />
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a
                      class="carousel-control-prev"
                      href="#demo"
                      data-slide="prev"
                    >
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a
                      class="carousel-control-next"
                      href="#demo"
                      data-slide="next"
                    >
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
                    <a
                      href="#"
                      title=""
                      data-toggle="tooltip"
                      data-original-title="Anderw"
                    >
                      <img src="images/resources/userlist-1.jpg" alt="" />
                    </a>
                    <a
                      href="#"
                      title=""
                      data-toggle="tooltip"
                      data-original-title="frank"
                    >
                      <img src="images/resources/userlist-2.jpg" alt="" />
                    </a>
                    <a
                      href="#"
                      title=""
                      data-toggle="tooltip"
                      data-original-title="Sara"
                    >
                      <img src="images/resources/userlist-3.jpg" alt="" />
                    </a>
                    <a
                      href="#"
                      title=""
                      data-toggle="tooltip"
                      data-original-title="Amy"
                    >
                      <img src="images/resources/userlist-4.jpg" alt="" />
                    </a>
                    <span
                      ><strong>You</strong>, <b>Sarah</b> and
                      <a title="" href="#">24+ more</a> liked</span
                    >
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
                          <a title="Reply" href="#" class="we-reply"
                            ><i class="fa fa-reply"></i
                          ></a>
                          <a title="" href="#"
                            ><i class="fa-solid fa-circle-check"></i
                            ><span>20</span></a
                          >
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
                          <a title="Reply" href="#" class="we-reply"
                            ><i class="fa fa-reply"></i
                          ></a>
                          <a title="" href="#"
                            ><i class="fa-solid fa-circle-check"></i
                            ><span>20</span></a
                          >
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
                          <a title="Reply" href="#" class="we-reply"
                            ><i class="fa fa-reply"></i
                          ></a>
                          <a title="" href="#"
                            ><i class="fa-solid fa-circle-check"></i
                            ><span>20</span></a
                          >
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class="showmore underline" title="" href="#"
                        >more comments+</a
                      >
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
                            <span
                              title="add icon"
                              class="em em-expressionless"
                            ></span>
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