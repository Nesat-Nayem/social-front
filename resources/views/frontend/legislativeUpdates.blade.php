@include('layouts.header')
  
    
      <div class="gap2 gray-bg">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                  <div class="col-lg-12">
                    <div class="central-meta">
                      <div class="forum-list">
                        <table class="table table-responsive table-bordered">
                          <thead>
                            <tr>
                              <th
                                scope="col"
                                style="
                                  color: #272266;
                                  font-weight: bold;
                                  font-size: 16px;
                                "
                              >
                                S.No.
                              </th>
                              <th
                                scope="col"
                                style="
                                  color: #272266;
                                  font-weight: bold;
                                  font-size: 16px;
                                "
                              >
                                Title
                              </th>
                              <th
                                scope="col"
                                style="
                                  color: #272266;
                                  font-weight: bold;
                                  font-size: 16px;
                                "
                              >
                                Ministry
                              </th>
                              <th
                                scope="col"
                                style="
                                  color: #272266;
                                  font-weight: bold;
                                  font-size: 16px;
                                "
                              >
                                Introduced in LS/RS
                              </th>
                              <th
                                scope="col"
                                style="
                                  color: #272266;
                                  font-weight: bold;
                                  font-size: 16px;
                                "
                              >
                                Passed in LS
                              </th>
                              <th
                                scope="col"
                                style="
                                  color: #272266;
                                  font-weight: bold;
                                  font-size: 16px;
                                "
                              >
                                Passed in RS
                              </th>
                            </tr>
                          </thead>
                          <tbody>
    @foreach($legislatives as $index => $legislative)
    <tr>
      <td style="width: 50px">{{ $index + 1 }}</td>
      <td>
      <a href="#" title="View details for {{ $legislative['title'] }}">
      {{ $legislative['title'] }}
      </a>
      </td>
      <td>{{ strtoupper($legislative['ministry']) }}</td>
      <td>{{ $legislative['introducedIn'] }}</td>
      <td>{{ $legislative['passedInLS'] ?? 'Not Available' }}</td>
      <td>{{ $legislative['passedInRS'] ?? 'Not Available' }}</td>
    </tr>
    @endforeach
</tbody>

                        </table>
                      </div>
                    </div>
                  </div>
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



    @include('layouts.footer')