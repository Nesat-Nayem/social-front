@include('layouts.header')
      <!-- topbar -->

<section>
  <div class="gap2 gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row merged20" id="page-contents">

            <!-- user profile banner  -->
            <div class="col-lg-3">
              <aside class="sidebar static">
                <div class="widget">
                  <h4 class="widget-title">Shortcuts</h4>
                  <ul class="naves">
                    <li>
                      <i class="ti-clipboard"></i>
                      <a href="/" title="">News feed</a>
                    </li>
                    <li>
                      <i class="ti-files"></i>
                      <a href="fav-page.html" title="">My pages</a>
                    </li>
                    <li>
                      <i class="ti-user"></i>
                      <a href="timeline-friends.html" title="">friends</a>
                    </li>
                    <li>
                      <i class="ti-image"></i>
                      <a href="timeline-photos.html" title="">images</a>
                    </li>
                    <li>
                      <i class="ti-video-camera"></i>
                      <a href="timeline-videos.html" title="">videos</a>
                    </li>
                    <li>
                      <i class="ti-comments-smiley"></i>
                      <a href="messages.html" title="">Messages</a>
                    </li>
                    <li>
                      <i class="ti-bell"></i>
                      <a href="notifications.html" title="">Notifications</a>
                    </li>
                    <li>
                      <i class="ti-share"></i>
                      <a href="people-nearby.html" title="">People Nearby</a>
                    </li>
                    <li>
                      <svg class="svg-inline--fa fa-chart-bar" aria-hidden="true" focusable="false"
                        data-prefix="fa-regular" data-icon="chart-bar" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M152 256h144C309.3 256 320 245.3 320 232S309.3 208 296 208h-144C138.8 208 128 218.8 128 232S138.8 256 152 256zM152 160h208C373.3 160 384 149.3 384 136S373.3 112 360 112h-208C138.8 112 128 122.8 128 136S138.8 160 152 160zM152 352h272c13.25 0 24-10.75 24-24S437.3 304 424 304h-272C138.8 304 128 314.8 128 328S138.8 352 152 352zM488 432H48V56C48 42.75 37.25 32 24 32S0 42.75 0 56V448c0 17.59 14.41 32 32 32h456c13.25 0 24-10.75 24-24S501.3 432 488 432z">
                        </path>
                      </svg><!-- <i class="fa-regular fa-bar-chart"></i> -->
                      <a href="insights.html" title="">insights</a>
                    </li>
                    <li>
                      <i class="ti-power-off"></i>
                      <a href="login.html" title="">Logout</a>
                    </li>
                  </ul>
                </div>
                <!-- Shortcuts -->
              </aside>
            </div>
            <!-- sidebar -->
            <div class="col-lg-9">
              <div class="central-meta">
                <div class="title-block">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="align-left">
                        <h5>Timeline Photos <span>62</span></h5>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="row merged20">
                        <div class="col-lg-7 col-md-7 col-sm-7">
                          <form method="post">
                            <input type="text" placeholder="Search Photo" />
                            <button type="submit">
                              <i class="fa fa-search"></i>
                            </button>
                          </form>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <div class="select-options">
                            <select class="select">
                              <option>Sort by</option>
                              <option>A to Z</option>
                              <option>See All</option>
                              <option>Newest</option>
                              <option>oldest</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">
                          <div class="option-list">
                            <i class="fa fa-ellipsis-v"></i>
                            <ul>
                              <li class="active">
                                <i class="fa fa-check"></i><a title="" href="#">Show Public</a>
                              </li>

                              <li>
                                <a title="" href="#">Hide all Posts</a>
                              </li>
                              <li>
                                <a title="" href="#">Mute Notifications</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- title block -->
              <div class="central-meta">
                <div class="row merged5">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/1.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/1.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/2.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/2.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/3.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/3.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/4.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/4.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/5.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/5.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/6.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/6.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/7.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/7.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/8.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/8.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/9.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/9.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/10.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/10.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/1.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/1.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/2.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/2.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/3.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/3.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/4.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/4.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/5.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/5.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/6.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/6.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/7.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/7.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/8.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/8.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/9.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/9.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="item-box">
                      <a class="strip" href="images/posts/10.webp" title="" data-strip-group="mygroup"
                        data-strip-group-options="loop: false">
                        <img src="images/posts/10.webp" alt="post" style="width: 100%; height: 180px" /></a>
                      <div class="over-photo">
                        <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                        <span>20 hours ago</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="lodmore" style="margin-bottom: -16px !important">
                  <span>Viewing 1-15 of 62 Pictures</span>
                  <button class="btn-view btn-load-more"></button>
                </div>
              </div>
              <!-- photos -->
            </div>
            <!-- centerl meta -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<div class="side-panel">
  <h4 class="panel-title">General Setting</h4>
  <form method="post">
    <div class="setting-row">
      <span>use night mode</span>
      <input type="checkbox" id="nightmode1" />
      <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>Notifications</span>
      <input type="checkbox" id="switch22" />
      <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>Notification sound</span>
      <input type="checkbox" id="switch33" />
      <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>My profile</span>
      <input type="checkbox" id="switch44" />
      <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>Show profile</span>
      <input type="checkbox" id="switch55" />
      <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
    </div>
  </form>
  <h4 class="panel-title">Account Setting</h4>
  <form method="post">
    <div class="setting-row">
      <span>Sub users</span>
      <input type="checkbox" id="switch66" />
      <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>personal account</span>
      <input type="checkbox" id="switch77" />
      <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>Business account</span>
      <input type="checkbox" id="switch88" />
      <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>Show me online</span>
      <input type="checkbox" id="switch99" />
      <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>Delete history</span>
      <input type="checkbox" id="switch101" />
      <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
    </div>
    <div class="setting-row">
      <span>Expose author name</span>
      <input type="checkbox" id="switch111" />
      <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
    </div>
  </form>
</div>
<!-- side panel -->

<div class="popup-wraper5">
  <div class="popup">
    <span class="popup-closed"><i class="ti-close"></i></span>
    <div class="popup-meta">
      <div class="popup-head">
        <h5>Upload Pictures & Videos</h5>
      </div>
      <div class="upload-boxes">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="smal-box">
              <label class="fileContainer">
                <i class="ti-layout-media-center-alt"></i>
                <input type="file" />
                <em>Upload New</em>
                <span>Choose form Computer</span>
              </label>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="smal-box">
              <div class="from-gallery">
                <i class="ti-layout-grid2"></i>
                <em>From Gallery Or Album</em>
                <span>Choose form already uploaded</span>
              </div>
            </div>
          </div>
        </div>
        <div class="sugested-photos">
          <h5>
            Suggested Photos & Videos
            <a href="timeline-photos.html" title="">See All</a>
          </h5>
          <ul class="sugestd-photo-caro">
            <li><img src="images/posts/1.webp" alt="img" /></li>
            <li><img src="images/posts/2.webp" alt="img" /></li>
            <li><img src="images/posts/3.webp" alt="img" /></li>
            <li><img src="images/posts/4.webp" alt="img" /></li>
            <li><img src="images/posts/5.webp" alt="img" /></li>
          </ul>
        </div>
        <a class="main-btn" href="#" title="" data-ripple="">Proceed</a>
      </div>
    </div>
  </div>
  <div class="already-gallery">
    <div class="popup-head">
      <h5>Choose from gallery</h5>
    </div>
    <ul class="sugestd-photo-caro">
      <li><img src="images/posts/1.webp" alt="img" /></li>
      <li><img src="images/posts/2.webp" alt="img" /></li>
      <li><img src="images/posts/3.webp" alt="img" /></li>
      <li><img src="images/posts/4.webp" alt="img" /></li>
      <li><img src="images/posts/5.webp" alt="img" /></li>
      <li><img src="images/posts/6.webp" alt="img" /></li>
      <li><img src="images/posts/7.webp" alt="img" /></li>
      <li><img src="images/posts/8.webp" alt="img" /></li>
      <li><img src="images/posts/9.webp" alt="img" /></li>
      <li><img src="images/posts/10.webp" alt="img" /></li>
      <li><img src="images/posts/1.webp" alt="img" /></li>
      <li><img src="images/posts/2.webp" alt="img" /></li>
      <li><img src="images/posts/3.webp" alt="img" /></li>
    </ul>
    <a class="main-btn" href="#" title="" data-ripple="">Confirm</a>
    <a class="main-btn canceld" href="#" title="" data-ripple="">Cancel</a>
  </div>
</div>
<!-- upload popup -->

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