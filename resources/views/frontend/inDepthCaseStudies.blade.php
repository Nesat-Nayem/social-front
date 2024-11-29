@include('layouts.header')
      <!-- topbar -->

      <div class="gap2 gray-bg">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                  <div class="col-lg-12">
                    <div class="search-meta">
                      <span>In Depth Case Studies</span>
                    </div>
                  </div>

                  <div class="col-lg-9">
                    <div class="search-tab">
                      <ul class="nav nav-tabs tab-btn">
                        <li class="nav-item">
                          <a class="active" href="#All" data-toggle="tab"
                            >Posts</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="" href="#people" data-toggle="tab">Audio</a>
                        </li>
                        <li class="nav-item">
                          <a class="" href="#photos" data-toggle="tab"
                            >Photos</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="" href="#videos" data-toggle="tab"
                            >Videos</a
                          >
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane fade active show" id="All">
                          <div class="">
                            <div class="central-meta item">
                              <div class="user-post">
                                <div class="friend-info">
                                  <figure>
                                    <img
                                      src="images/resources/admin.jpg"
                                      alt=""
                                      style="
                                        border-radius: 100px;
                                        position: relative;
                                      "
                                    />
                                    <img
                                      src="images/icons/_AvatarVerifiedIcon.svg"
                                      alt="img"
                                      style="
                                        position: absolute;
                                        top: 25px;
                                        left: 25px;
                                        z-index: 999;
                                      "
                                    />
                                  </figure>
                                  <div class="friend-name">
                                    <div class="more">
                                      <div class="more-post-optns">
                                        <i class="ti-more-alt"></i>
                                        <ul>
                                          <li>
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-bookmark"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-regular"
                                                data-icon="bookmark"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M336 0h-288C21.49 0 0 21.49 0 48v431.9c0 24.7 26.79 40.08 48.12 27.64L192 423.6l143.9 83.93C357.2 519.1 384 504.6 384 479.9V48C384 21.49 362.5 0 336 0zM336 452L192 368l-144 84V54C48 50.63 50.63 48 53.1 48h276C333.4 48 336 50.63 336 54V452z"
                                                ></path></svg
                                              ><!-- <i class="fa-regular fa-bookmark"></i> -->
                                              Save Post
                                            </a>
                                          </li>
                                          <li class="bad-report">
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-flag-checkered"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-solid"
                                                data-icon="flag-checkered"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 576 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M509.5 .0234c-6.145 0-12.53 1.344-18.64 4.227c-44.11 20.86-76.81 27.94-104.1 27.94c-57.89 0-91.53-31.86-158.2-31.87C195 .3203 153.3 8.324 96 32.38V32c0-17.75-14.25-32-32-32S32 14.25 32 32L31.96 496c0 8.75 7.25 16 16 16H80C88.75 512 96 504.8 96 496V384c51.74-23.86 92.71-31.82 128.3-31.82c71.09 0 120.6 31.78 191.7 31.78c30.81 0 65.67-5.969 108.1-23.09C536.3 355.9 544 344.4 544 332.1V30.74C544 12.01 527.8 .0234 509.5 .0234zM480 141.8c-31.99 14.04-57.81 20.59-80 22.49v80.21c25.44-1.477 51.59-6.953 80-17.34V308.9c-22.83 7.441-43.93 11.08-64.03 11.08c-5.447 0-10.71-.4258-15.97-.8906V244.5c-4.436 .2578-8.893 .6523-13.29 .6523c-25.82 0-47.35-4.547-66.71-10.08v66.91c-23.81-6.055-50.17-11.41-80-12.98V213.1C236.2 213.7 232.5 213.3 228.5 213.3C208.8 213.3 185.1 217.7 160 225.1v69.1C139.2 299.4 117.9 305.8 96 314.4V250.7l24.77-10.39C134.8 234.5 147.6 229.9 160 225.1V143.4C140.9 148.5 120.1 155.2 96 165.3V101.8l24.77-10.39C134.8 85.52 147.6 80.97 160 77.02v66.41c26.39-6.953 49.09-10.17 68.48-10.16c4.072 0 7.676 .4453 11.52 .668V65.03C258.6 66.6 274.4 71.55 293.2 77.83C301.7 80.63 310.7 83.45 320 86.12v66.07c20.79 6.84 41.45 12.96 66.71 12.96c4.207 0 8.781-.4766 13.29-.8594V95.54c25.44-1.477 51.59-6.953 80-17.34V141.8zM240 133.9v80.04c18.61 1.57 34.37 6.523 53.23 12.8C301.7 229.6 310.7 232.4 320 235.1V152.2C296.1 144.3 271.6 135.8 240 133.9z"
                                                ></path></svg
                                              ><!-- <i class="fa-solid fa-flag-checkered"></i> -->
                                              Report Post
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-xmark"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-regular"
                                                data-icon="xmark"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 320 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z"
                                                ></path></svg
                                              ><!-- <i class="fa-sharp fa-regular fa-times"></i> -->
                                              Hide Post
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>

                                    <ins
                                      ><a href="time-line.html" title=""
                                        >Jack Carter</a
                                      >
                                      |
                                      <a
                                        href="#"
                                        title=""
                                        style="color: #40599a !important"
                                        >Post Album</a
                                      ></ins
                                    >
                                    <span style="color: #475569 !important"
                                      ><svg
                                        class="svg-inline--fa fa-globe"
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fas"
                                        data-icon="globe"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        data-fa-i2svg=""
                                      >
                                        <path
                                          fill="currentColor"
                                          d="M186.8 26.24C119.1 46.6 64.08 96.01 36.1 160h99.97C145.7 104.1 163.6 57.44 186.8 26.24zM160 256c0 22.55 1.277 43.86 3.623 64h184.8c2.346-20.14 3.623-41.45 3.623-64s-1.277-43.86-3.623-64H163.6C161.3 212.1 160 233.5 160 256zM343.6 160c-16.25-88.04-53.37-144-87.57-144S184.7 71.96 168.4 160H343.6zM475.9 160c-27.98-63.99-83-113.4-150.7-133.8C348.4 57.44 366.3 104.1 375.9 160H475.9zM325.2 485.8C392.9 465.4 447.9 415.1 475.9 352h-99.97C366.3 407.9 348.4 454.6 325.2 485.8zM487.1 192h-106.6c2.248 20.5 3.485 41.84 3.485 64s-1.237 43.5-3.485 64h106.6c5.641-20.4 8.894-41.8 8.894-64S492.7 212.4 487.1 192zM168.4 352c16.25 88.04 53.37 144 87.57 144s71.32-55.96 87.57-144H168.4zM128 256c0-22.16 1.237-43.5 3.485-64H24.89c-5.641 20.4-8.895 41.8-8.895 64s3.254 43.6 8.895 64H131.5C129.2 299.5 128 278.2 128 256zM36.1 352c27.98 63.99 82.1 113.4 150.7 133.8C163.6 454.6 145.7 407.9 136.1 352H36.1z"
                                        ></path></svg
                                      ><!-- <i class="fa fa-globe"></i> -->
                                      published: january,5 2024 | 2:15 PM
                                    </span>
                                  </div>
                                  <hr style="margin-bottom: 0" />

                                  <div class="post-meta">
                                    <div class="description">
                                      <p>
                                        Habitant morbi tristique senectus et
                                        netus et. Suspendisse sed nisi lacus sed
                                        viverra. Dolor morbi non arcu risus quis
                                        varius.
                                        <span style="color: #4f46e5"
                                          >#amazing #great #lifetime #uiux
                                          #machinelearning</span
                                        >
                                      </p>
                                    </div>

                                    <figure>
                                      <div class="row">
                                        <div class="col-lg-6 mb-lg-3">
                                          <a href="social-post-detail.html">
                                            <img
                                              src="images/resources/vid-9.jpg"
                                              alt="img"
                                              style="
                                                width: 100%;
                                                height: 200px;
                                                border-radius: 20px;
                                              "
                                            />
                                          </a>
                                        </div>
                                        <div class="col-lg-6 mb-lg-3">
                                          <a href="social-post-detail.html">
                                            <img
                                              src="images/resources/vid-9.jpg"
                                              alt="img"
                                              style="
                                                width: 100%;
                                                height: 200px;
                                                border-radius: 20px;
                                              "
                                            />
                                          </a>
                                        </div>
                                        <div class="col-lg-6 mb-lg-3">
                                          <a href="social-post-detail.html">
                                            <img
                                              src="images/resources/vid-9.jpg"
                                              alt="img"
                                              style="
                                                width: 100%;
                                                height: 200px;
                                                border-radius: 20px;
                                              "
                                            />
                                          </a>
                                        </div>
                                        <div class="col-lg-6 mb-lg-3">
                                          <a href="social-post-detail.html">
                                            <img
                                              src="images/resources/vid-9.jpg"
                                              alt="img"
                                              style="
                                                width: 100%;
                                                height: 200px;
                                                border-radius: 20px;
                                              "
                                            />
                                          </a>
                                        </div>
                                      </div>
                                    </figure>

                                    <div class="we-video-info">
                                      <ul>
                                        <li>
                                          <span class="views" title="views">
                                            <img
                                              src="images/icons/eye.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <ins>1.2k</ins>
                                          </span>
                                        </li>
                                        <li>
                                          <div
                                            class="likes heart"
                                            title="Like/Dislike"
                                          >
                                            <img
                                              src="images/icons/heart.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <span>2K</span>
                                          </div>
                                        </li>
                                        <li>
                                          <span
                                            class="comment"
                                            title="Comments"
                                          >
                                            <img
                                              src="images/icons/comments.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <ins>52</ins>
                                          </span>
                                        </li>

                                        <li>
                                          <span>
                                            <a
                                              class="share-pst"
                                              href="#"
                                              title="Share"
                                            >
                                              <img
                                                src="images/icons/share-2.svg"
                                                alt="img"
                                                style="width: 20px"
                                              />
                                            </a>
                                            <ins>20</ins>
                                          </span>
                                        </li>
                                      </ul>
                                      <div class="users-thumb-list">
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Anderw"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-1.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="frank"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-2.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Sara"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-3.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Amy"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-4.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Ema"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-5.jpg"
                                          />
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="coment-area">
                                    <ul class="we-comet">
                                      <li>
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/nearly3.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="we-comment">
                                          <h5>
                                            <a href="time-line.html" title=""
                                              >Jason borne</a
                                            >
                                          </h5>
                                          <p>
                                            we are working for the dance and
                                            sing songs. this video is very
                                            awesome for the youngster. please
                                            vote this video and like our channel
                                          </p>
                                          <div class="inline-itms">
                                            <span>1 year ago</span>
                                            <a
                                              class="we-reply"
                                              href="#"
                                              title="Reply"
                                              ><svg
                                                class="svg-inline--fa fa-reply"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="reply"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-reply"></i> --></a
                                            >
                                            <a href="#" title=""
                                              ><svg
                                                class="svg-inline--fa fa-heart"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="heart"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M472.1 270.5l-193.1 199.7c-12.64 13.07-33.27 13.08-45.91 .0107l-193.2-199.7C-16.21 212.5-13.1 116.7 49.04 62.86C103.3 15.88 186.4 24.42 236.3 75.98l19.7 20.27l19.7-20.27c49.95-51.56 132.1-60.1 187.3-13.12C525.1 116.6 528.2 212.5 472.1 270.5z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-heart"></i> --><span
                                                >20</span
                                              ></a
                                            >
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/comet-4.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="we-comment">
                                          <h5>
                                            <a href="time-line.html" title=""
                                              >Sophia</a
                                            >
                                          </h5>
                                          <p>
                                            we are working for the dance and
                                            sing songs. this video is very
                                            awesome for the youngster.
                                            <i class="em em-smiley"></i>
                                          </p>
                                          <div class="inline-itms">
                                            <span>1 year ago</span>
                                            <a
                                              class="we-reply"
                                              href="#"
                                              title="Reply"
                                              ><svg
                                                class="svg-inline--fa fa-reply"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="reply"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-reply"></i> --></a
                                            >
                                            <a href="#" title=""
                                              ><svg
                                                class="svg-inline--fa fa-heart"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="heart"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M472.1 270.5l-193.1 199.7c-12.64 13.07-33.27 13.08-45.91 .0107l-193.2-199.7C-16.21 212.5-13.1 116.7 49.04 62.86C103.3 15.88 186.4 24.42 236.3 75.98l19.7 20.27l19.7-20.27c49.95-51.56 132.1-60.1 187.3-13.12C525.1 116.6 528.2 212.5 472.1 270.5z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-heart"></i> --><span
                                                >20</span
                                              ></a
                                            >
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <a
                                          href="#"
                                          title=""
                                          class="showmore underline"
                                          style="color: #7635dc"
                                          >more comments+</a
                                        >
                                      </li>
                                      <li class="post-comment">
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/nearly1.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="post-comt-box">
                                          <form method="post">
                                            <textarea
                                              placeholder="Post your comment"
                                            ></textarea>
                                            <div class="add-smiles">
                                              <div class="uploadimage">
                                                <svg
                                                  class="svg-inline--fa fa-image"
                                                  aria-hidden="true"
                                                  focusable="false"
                                                  data-prefix="fas"
                                                  data-icon="image"
                                                  role="img"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 512 512"
                                                  data-fa-i2svg=""
                                                >
                                                  <path
                                                    fill="currentColor"
                                                    d="M447.1 32h-384C28.64 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM111.1 96c26.51 0 48 21.49 48 48S138.5 192 111.1 192s-48-21.49-48-48S85.48 96 111.1 96zM446.1 407.6C443.3 412.8 437.9 416 432 416H82.01c-6.021 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.334-16.68l70-96C142.1 290.4 146.9 288 152 288s9.916 2.441 12.93 6.574l32.46 44.51l93.3-139.1C293.7 194.7 298.7 192 304 192s10.35 2.672 13.31 7.125l128 192C448.6 396 448.9 402.3 446.1 407.6z"
                                                  ></path></svg
                                                ><!-- <i class="fa fa-image"></i> -->
                                                <label class="fileContainer">
                                                  <input type="file" />
                                                </label>
                                              </div>
                                              <span
                                                class="em em-expressionless"
                                                title="add icon"
                                              ></span>
                                              <div class="smiles-bunch">
                                                <i class="em em---1"></i>
                                                <i class="em em-smiley"></i>
                                                <i class="em em-anguished"></i>
                                                <i class="em em-laughing"></i>
                                                <i class="em em-angry"></i>
                                                <i class="em em-astonished"></i>
                                                <i class="em em-blush"></i>
                                                <i
                                                  class="em em-disappointed"
                                                ></i>
                                                <i class="em em-worried"></i>
                                                <i
                                                  class="em em-kissing_heart"
                                                ></i>
                                                <i class="em em-rage"></i>
                                                <i
                                                  class="em em-stuck_out_tongue"
                                                ></i>
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

                            <!-- post -->

                            <div class="central-meta item">
                              <div class="user-post">
                                <div class="friend-info">
                                  <figure>
                                    <img
                                      src="images/resources/admin.jpg"
                                      alt=""
                                      style="
                                        border-radius: 100px;
                                        position: relative;
                                      "
                                    />
                                    <img
                                      src="images/icons/_AvatarVerifiedIcon.svg"
                                      alt="img"
                                      style="
                                        position: absolute;
                                        top: 25px;
                                        left: 25px;
                                        z-index: 999;
                                      "
                                    />
                                  </figure>
                                  <div class="friend-name">
                                    <div class="more">
                                      <div class="more-post-optns">
                                        <i class="ti-more-alt"></i>
                                        <ul>
                                          <li>
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-bookmark"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-regular"
                                                data-icon="bookmark"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M336 0h-288C21.49 0 0 21.49 0 48v431.9c0 24.7 26.79 40.08 48.12 27.64L192 423.6l143.9 83.93C357.2 519.1 384 504.6 384 479.9V48C384 21.49 362.5 0 336 0zM336 452L192 368l-144 84V54C48 50.63 50.63 48 53.1 48h276C333.4 48 336 50.63 336 54V452z"
                                                ></path></svg
                                              ><!-- <i class="fa-regular fa-bookmark"></i> -->
                                              Save Post
                                            </a>
                                          </li>
                                          <li class="bad-report">
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-flag-checkered"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-solid"
                                                data-icon="flag-checkered"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 576 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M509.5 .0234c-6.145 0-12.53 1.344-18.64 4.227c-44.11 20.86-76.81 27.94-104.1 27.94c-57.89 0-91.53-31.86-158.2-31.87C195 .3203 153.3 8.324 96 32.38V32c0-17.75-14.25-32-32-32S32 14.25 32 32L31.96 496c0 8.75 7.25 16 16 16H80C88.75 512 96 504.8 96 496V384c51.74-23.86 92.71-31.82 128.3-31.82c71.09 0 120.6 31.78 191.7 31.78c30.81 0 65.67-5.969 108.1-23.09C536.3 355.9 544 344.4 544 332.1V30.74C544 12.01 527.8 .0234 509.5 .0234zM480 141.8c-31.99 14.04-57.81 20.59-80 22.49v80.21c25.44-1.477 51.59-6.953 80-17.34V308.9c-22.83 7.441-43.93 11.08-64.03 11.08c-5.447 0-10.71-.4258-15.97-.8906V244.5c-4.436 .2578-8.893 .6523-13.29 .6523c-25.82 0-47.35-4.547-66.71-10.08v66.91c-23.81-6.055-50.17-11.41-80-12.98V213.1C236.2 213.7 232.5 213.3 228.5 213.3C208.8 213.3 185.1 217.7 160 225.1v69.1C139.2 299.4 117.9 305.8 96 314.4V250.7l24.77-10.39C134.8 234.5 147.6 229.9 160 225.1V143.4C140.9 148.5 120.1 155.2 96 165.3V101.8l24.77-10.39C134.8 85.52 147.6 80.97 160 77.02v66.41c26.39-6.953 49.09-10.17 68.48-10.16c4.072 0 7.676 .4453 11.52 .668V65.03C258.6 66.6 274.4 71.55 293.2 77.83C301.7 80.63 310.7 83.45 320 86.12v66.07c20.79 6.84 41.45 12.96 66.71 12.96c4.207 0 8.781-.4766 13.29-.8594V95.54c25.44-1.477 51.59-6.953 80-17.34V141.8zM240 133.9v80.04c18.61 1.57 34.37 6.523 53.23 12.8C301.7 229.6 310.7 232.4 320 235.1V152.2C296.1 144.3 271.6 135.8 240 133.9z"
                                                ></path></svg
                                              ><!-- <i class="fa-solid fa-flag-checkered"></i> -->
                                              Report Post
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-xmark"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-regular"
                                                data-icon="xmark"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 320 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z"
                                                ></path></svg
                                              ><!-- <i class="fa-sharp fa-regular fa-times"></i> -->
                                              Hide Post
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>

                                    <ins
                                      ><a href="time-line.html" title=""
                                        >Jack Carter</a
                                      >
                                      |
                                      <a
                                        href="#"
                                        title=""
                                        style="color: #40599a !important"
                                        >Post Album</a
                                      ></ins
                                    >
                                    <span style="color: #475569 !important"
                                      ><svg
                                        class="svg-inline--fa fa-globe"
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fas"
                                        data-icon="globe"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        data-fa-i2svg=""
                                      >
                                        <path
                                          fill="currentColor"
                                          d="M186.8 26.24C119.1 46.6 64.08 96.01 36.1 160h99.97C145.7 104.1 163.6 57.44 186.8 26.24zM160 256c0 22.55 1.277 43.86 3.623 64h184.8c2.346-20.14 3.623-41.45 3.623-64s-1.277-43.86-3.623-64H163.6C161.3 212.1 160 233.5 160 256zM343.6 160c-16.25-88.04-53.37-144-87.57-144S184.7 71.96 168.4 160H343.6zM475.9 160c-27.98-63.99-83-113.4-150.7-133.8C348.4 57.44 366.3 104.1 375.9 160H475.9zM325.2 485.8C392.9 465.4 447.9 415.1 475.9 352h-99.97C366.3 407.9 348.4 454.6 325.2 485.8zM487.1 192h-106.6c2.248 20.5 3.485 41.84 3.485 64s-1.237 43.5-3.485 64h106.6c5.641-20.4 8.894-41.8 8.894-64S492.7 212.4 487.1 192zM168.4 352c16.25 88.04 53.37 144 87.57 144s71.32-55.96 87.57-144H168.4zM128 256c0-22.16 1.237-43.5 3.485-64H24.89c-5.641 20.4-8.895 41.8-8.895 64s3.254 43.6 8.895 64H131.5C129.2 299.5 128 278.2 128 256zM36.1 352c27.98 63.99 82.1 113.4 150.7 133.8C163.6 454.6 145.7 407.9 136.1 352H36.1z"
                                        ></path></svg
                                      ><!-- <i class="fa fa-globe"></i> -->
                                      published: january,5 2024 | 2:15 PM
                                    </span>
                                  </div>
                                  <hr style="margin-bottom: 0" />

                                  <div class="post-meta">
                                    <div class="description">
                                      <p>
                                        Habitant morbi tristique senectus et
                                        netus et. Suspendisse sed nisi lacus sed
                                        viverra. Dolor morbi non arcu risus quis
                                        varius.
                                        <span style="color: #4f46e5"
                                          >#amazing #great #lifetime #uiux
                                          #machinelearning</span
                                        >
                                      </p>
                                    </div>

                                    <figure>
                                      <div class="row">
                                        <div class="col-lg-6 mb-lg-3">
                                          <a href="social-post-detail.html">
                                            <img
                                              src="images/resources/vid-9.jpg"
                                              alt="img"
                                              style="
                                                width: 100%;
                                                height: 200px;
                                                border-radius: 20px;
                                              "
                                            />
                                          </a>
                                        </div>
                                        <div class="col-lg-6 mb-lg-3">
                                          <a href="social-post-detail.html">
                                            <img
                                              src="images/resources/vid-9.jpg"
                                              alt="img"
                                              style="
                                                width: 100%;
                                                height: 200px;
                                                border-radius: 20px;
                                              "
                                            />
                                          </a>
                                        </div>
                                        <div class="col-lg-6 mb-lg-3">
                                          <a href="social-post-detail.html">
                                            <img
                                              src="images/resources/vid-9.jpg"
                                              alt="img"
                                              style="
                                                width: 100%;
                                                height: 200px;
                                                border-radius: 20px;
                                              "
                                            />
                                          </a>
                                        </div>
                                        <div class="col-lg-6 mb-lg-3">
                                          <a href="social-post-detail.html">
                                            <img
                                              src="images/resources/vid-9.jpg"
                                              alt="img"
                                              style="
                                                width: 100%;
                                                height: 200px;
                                                border-radius: 20px;
                                              "
                                            />
                                          </a>
                                        </div>
                                      </div>
                                    </figure>

                                    <div class="we-video-info">
                                      <ul>
                                        <li>
                                          <span class="views" title="views">
                                            <img
                                              src="images/icons/eye.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <ins>1.2k</ins>
                                          </span>
                                        </li>
                                        <li>
                                          <div
                                            class="likes heart"
                                            title="Like/Dislike"
                                          >
                                            <img
                                              src="images/icons/heart.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <span>2K</span>
                                          </div>
                                        </li>
                                        <li>
                                          <span
                                            class="comment"
                                            title="Comments"
                                          >
                                            <img
                                              src="images/icons/comments.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <ins>52</ins>
                                          </span>
                                        </li>

                                        <li>
                                          <span>
                                            <a
                                              class="share-pst"
                                              href="#"
                                              title="Share"
                                            >
                                              <img
                                                src="images/icons/share-2.svg"
                                                alt="img"
                                                style="width: 20px"
                                              />
                                            </a>
                                            <ins>20</ins>
                                          </span>
                                        </li>
                                      </ul>
                                      <div class="users-thumb-list">
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Anderw"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-1.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="frank"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-2.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Sara"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-3.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Amy"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-4.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Ema"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-5.jpg"
                                          />
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="coment-area">
                                    <ul class="we-comet">
                                      <li>
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/nearly3.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="we-comment">
                                          <h5>
                                            <a href="time-line.html" title=""
                                              >Jason borne</a
                                            >
                                          </h5>
                                          <p>
                                            we are working for the dance and
                                            sing songs. this video is very
                                            awesome for the youngster. please
                                            vote this video and like our channel
                                          </p>
                                          <div class="inline-itms">
                                            <span>1 year ago</span>
                                            <a
                                              class="we-reply"
                                              href="#"
                                              title="Reply"
                                              ><svg
                                                class="svg-inline--fa fa-reply"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="reply"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-reply"></i> --></a
                                            >
                                            <a href="#" title=""
                                              ><svg
                                                class="svg-inline--fa fa-heart"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="heart"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M472.1 270.5l-193.1 199.7c-12.64 13.07-33.27 13.08-45.91 .0107l-193.2-199.7C-16.21 212.5-13.1 116.7 49.04 62.86C103.3 15.88 186.4 24.42 236.3 75.98l19.7 20.27l19.7-20.27c49.95-51.56 132.1-60.1 187.3-13.12C525.1 116.6 528.2 212.5 472.1 270.5z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-heart"></i> --><span
                                                >20</span
                                              ></a
                                            >
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/comet-4.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="we-comment">
                                          <h5>
                                            <a href="time-line.html" title=""
                                              >Sophia</a
                                            >
                                          </h5>
                                          <p>
                                            we are working for the dance and
                                            sing songs. this video is very
                                            awesome for the youngster.
                                            <i class="em em-smiley"></i>
                                          </p>
                                          <div class="inline-itms">
                                            <span>1 year ago</span>
                                            <a
                                              class="we-reply"
                                              href="#"
                                              title="Reply"
                                              ><svg
                                                class="svg-inline--fa fa-reply"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="reply"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-reply"></i> --></a
                                            >
                                            <a href="#" title=""
                                              ><svg
                                                class="svg-inline--fa fa-heart"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="heart"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M472.1 270.5l-193.1 199.7c-12.64 13.07-33.27 13.08-45.91 .0107l-193.2-199.7C-16.21 212.5-13.1 116.7 49.04 62.86C103.3 15.88 186.4 24.42 236.3 75.98l19.7 20.27l19.7-20.27c49.95-51.56 132.1-60.1 187.3-13.12C525.1 116.6 528.2 212.5 472.1 270.5z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-heart"></i> --><span
                                                >20</span
                                              ></a
                                            >
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <a
                                          href="#"
                                          title=""
                                          class="showmore underline"
                                          style="color: #7635dc"
                                          >more comments+</a
                                        >
                                      </li>
                                      <li class="post-comment">
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/nearly1.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="post-comt-box">
                                          <form method="post">
                                            <textarea
                                              placeholder="Post your comment"
                                            ></textarea>
                                            <div class="add-smiles">
                                              <div class="uploadimage">
                                                <svg
                                                  class="svg-inline--fa fa-image"
                                                  aria-hidden="true"
                                                  focusable="false"
                                                  data-prefix="fas"
                                                  data-icon="image"
                                                  role="img"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 512 512"
                                                  data-fa-i2svg=""
                                                >
                                                  <path
                                                    fill="currentColor"
                                                    d="M447.1 32h-384C28.64 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM111.1 96c26.51 0 48 21.49 48 48S138.5 192 111.1 192s-48-21.49-48-48S85.48 96 111.1 96zM446.1 407.6C443.3 412.8 437.9 416 432 416H82.01c-6.021 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.334-16.68l70-96C142.1 290.4 146.9 288 152 288s9.916 2.441 12.93 6.574l32.46 44.51l93.3-139.1C293.7 194.7 298.7 192 304 192s10.35 2.672 13.31 7.125l128 192C448.6 396 448.9 402.3 446.1 407.6z"
                                                  ></path></svg
                                                ><!-- <i class="fa fa-image"></i> -->
                                                <label class="fileContainer">
                                                  <input type="file" />
                                                </label>
                                              </div>
                                              <span
                                                class="em em-expressionless"
                                                title="add icon"
                                              ></span>
                                              <div class="smiles-bunch">
                                                <i class="em em---1"></i>
                                                <i class="em em-smiley"></i>
                                                <i class="em em-anguished"></i>
                                                <i class="em em-laughing"></i>
                                                <i class="em em-angry"></i>
                                                <i class="em em-astonished"></i>
                                                <i class="em em-blush"></i>
                                                <i
                                                  class="em em-disappointed"
                                                ></i>
                                                <i class="em em-worried"></i>
                                                <i
                                                  class="em em-kissing_heart"
                                                ></i>
                                                <i class="em em-rage"></i>
                                                <i
                                                  class="em em-stuck_out_tongue"
                                                ></i>
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
                        <div class="tab-pane fade" id="people">
                          <div class="central-meta item">
                            <span class="create-post">Audio</span>
                            <div class="central-meta item">
                              <div class="user-post">
                                <div class="friend-info">
                                  <figure>
                                    <img
                                      src="images/resources/admin.jpg"
                                      alt=""
                                      style="
                                        border-radius: 100px;
                                        position: relative;
                                      "
                                    />
                                    <img
                                      src="images/icons/_AvatarVerifiedIcon.svg"
                                      alt="img"
                                      style="
                                        position: absolute;
                                        top: 25px;
                                        left: 25px;
                                        z-index: 999;
                                      "
                                    />
                                  </figure>
                                  <div class="friend-name">
                                    <div class="more">
                                      <div class="more-post-optns">
                                        <i class="ti-more-alt"></i>
                                        <ul>
                                          <li>
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-bookmark"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-regular"
                                                data-icon="bookmark"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M336 0h-288C21.49 0 0 21.49 0 48v431.9c0 24.7 26.79 40.08 48.12 27.64L192 423.6l143.9 83.93C357.2 519.1 384 504.6 384 479.9V48C384 21.49 362.5 0 336 0zM336 452L192 368l-144 84V54C48 50.63 50.63 48 53.1 48h276C333.4 48 336 50.63 336 54V452z"
                                                ></path></svg
                                              ><!-- <i class="fa-regular fa-bookmark"></i> -->
                                              Save Post
                                            </a>
                                          </li>
                                          <li class="bad-report">
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-flag-checkered"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-solid"
                                                data-icon="flag-checkered"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 576 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M509.5 .0234c-6.145 0-12.53 1.344-18.64 4.227c-44.11 20.86-76.81 27.94-104.1 27.94c-57.89 0-91.53-31.86-158.2-31.87C195 .3203 153.3 8.324 96 32.38V32c0-17.75-14.25-32-32-32S32 14.25 32 32L31.96 496c0 8.75 7.25 16 16 16H80C88.75 512 96 504.8 96 496V384c51.74-23.86 92.71-31.82 128.3-31.82c71.09 0 120.6 31.78 191.7 31.78c30.81 0 65.67-5.969 108.1-23.09C536.3 355.9 544 344.4 544 332.1V30.74C544 12.01 527.8 .0234 509.5 .0234zM480 141.8c-31.99 14.04-57.81 20.59-80 22.49v80.21c25.44-1.477 51.59-6.953 80-17.34V308.9c-22.83 7.441-43.93 11.08-64.03 11.08c-5.447 0-10.71-.4258-15.97-.8906V244.5c-4.436 .2578-8.893 .6523-13.29 .6523c-25.82 0-47.35-4.547-66.71-10.08v66.91c-23.81-6.055-50.17-11.41-80-12.98V213.1C236.2 213.7 232.5 213.3 228.5 213.3C208.8 213.3 185.1 217.7 160 225.1v69.1C139.2 299.4 117.9 305.8 96 314.4V250.7l24.77-10.39C134.8 234.5 147.6 229.9 160 225.1V143.4C140.9 148.5 120.1 155.2 96 165.3V101.8l24.77-10.39C134.8 85.52 147.6 80.97 160 77.02v66.41c26.39-6.953 49.09-10.17 68.48-10.16c4.072 0 7.676 .4453 11.52 .668V65.03C258.6 66.6 274.4 71.55 293.2 77.83C301.7 80.63 310.7 83.45 320 86.12v66.07c20.79 6.84 41.45 12.96 66.71 12.96c4.207 0 8.781-.4766 13.29-.8594V95.54c25.44-1.477 51.59-6.953 80-17.34V141.8zM240 133.9v80.04c18.61 1.57 34.37 6.523 53.23 12.8C301.7 229.6 310.7 232.4 320 235.1V152.2C296.1 144.3 271.6 135.8 240 133.9z"
                                                ></path></svg
                                              ><!-- <i class="fa-solid fa-flag-checkered"></i> -->
                                              Report Post
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                              <svg
                                                class="svg-inline--fa fa-xmark"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fa-regular"
                                                data-icon="xmark"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 320 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z"
                                                ></path></svg
                                              ><!-- <i class="fa-sharp fa-regular fa-times"></i> -->
                                              Hide Post
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>

                                    <ins
                                      ><a href="time-line.html" title=""
                                        >Jack Carter</a
                                      >
                                      |
                                      <a
                                        href="#"
                                        title=""
                                        style="color: #40599a !important"
                                        >Post Album</a
                                      ></ins
                                    >
                                    <span style="color: #475569 !important"
                                      ><svg
                                        class="svg-inline--fa fa-globe"
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fas"
                                        data-icon="globe"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        data-fa-i2svg=""
                                      >
                                        <path
                                          fill="currentColor"
                                          d="M186.8 26.24C119.1 46.6 64.08 96.01 36.1 160h99.97C145.7 104.1 163.6 57.44 186.8 26.24zM160 256c0 22.55 1.277 43.86 3.623 64h184.8c2.346-20.14 3.623-41.45 3.623-64s-1.277-43.86-3.623-64H163.6C161.3 212.1 160 233.5 160 256zM343.6 160c-16.25-88.04-53.37-144-87.57-144S184.7 71.96 168.4 160H343.6zM475.9 160c-27.98-63.99-83-113.4-150.7-133.8C348.4 57.44 366.3 104.1 375.9 160H475.9zM325.2 485.8C392.9 465.4 447.9 415.1 475.9 352h-99.97C366.3 407.9 348.4 454.6 325.2 485.8zM487.1 192h-106.6c2.248 20.5 3.485 41.84 3.485 64s-1.237 43.5-3.485 64h106.6c5.641-20.4 8.894-41.8 8.894-64S492.7 212.4 487.1 192zM168.4 352c16.25 88.04 53.37 144 87.57 144s71.32-55.96 87.57-144H168.4zM128 256c0-22.16 1.237-43.5 3.485-64H24.89c-5.641 20.4-8.895 41.8-8.895 64s3.254 43.6 8.895 64H131.5C129.2 299.5 128 278.2 128 256zM36.1 352c27.98 63.99 82.1 113.4 150.7 133.8C163.6 454.6 145.7 407.9 136.1 352H36.1z"
                                        ></path></svg
                                      ><!-- <i class="fa fa-globe"></i> -->
                                      published: january,5 2024 | 2:15 PM
                                    </span>
                                  </div>
                                  <hr style="margin-bottom: 0" />

                                  <div class="post-meta">
                                    <div class="description">
                                      <p>
                                        Habitant morbi tristique senectus et
                                        netus et. Suspendisse sed nisi lacus sed
                                        viverra. Dolor morbi non arcu risus quis
                                        varius.
                                        <span style="color: #4f46e5"
                                          >#amazing #great #lifetime #uiux
                                          #machinelearning</span
                                        >
                                      </p>
                                    </div>

                                    <audio controls>
                                      <source
                                        src="horse.ogg"
                                        type="audio/ogg"
                                      />
                                      <source
                                        src="horse.mp3"
                                        type="audio/mpeg"
                                      />
                                      Your browser does not support the audio
                                      tag.
                                    </audio>

                                    <div class="we-video-info">
                                      <ul>
                                        <li>
                                          <span class="views" title="views">
                                            <img
                                              src="images/icons/eye.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <ins>1.2k</ins>
                                          </span>
                                        </li>
                                        <li>
                                          <div
                                            class="likes heart"
                                            title="Like/Dislike"
                                          >
                                            <img
                                              src="images/icons/heart.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <span>2K</span>
                                          </div>
                                        </li>
                                        <li>
                                          <span
                                            class="comment"
                                            title="Comments"
                                          >
                                            <img
                                              src="images/icons/comments.svg"
                                              alt="img"
                                              style="width: 20px"
                                            />
                                            <ins>52</ins>
                                          </span>
                                        </li>

                                        <li>
                                          <span>
                                            <a
                                              class="share-pst"
                                              href="#"
                                              title="Share"
                                            >
                                              <img
                                                src="images/icons/share-2.svg"
                                                alt="img"
                                                style="width: 20px"
                                              />
                                            </a>
                                            <ins>20</ins>
                                          </span>
                                        </li>
                                      </ul>
                                      <div class="users-thumb-list">
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Anderw"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-1.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="frank"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-2.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Sara"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-3.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Amy"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-4.jpg"
                                          />
                                        </a>
                                        <a
                                          data-toggle="tooltip"
                                          title=""
                                          href="#"
                                          data-original-title="Ema"
                                        >
                                          <img
                                            alt=""
                                            src="images/resources/userlist-5.jpg"
                                          />
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="coment-area">
                                    <ul class="we-comet">
                                      <li>
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/nearly3.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="we-comment">
                                          <h5>
                                            <a href="time-line.html" title=""
                                              >Jason borne</a
                                            >
                                          </h5>
                                          <p>
                                            we are working for the dance and
                                            sing songs. this video is very
                                            awesome for the youngster. please
                                            vote this video and like our channel
                                          </p>
                                          <div class="inline-itms">
                                            <span>1 year ago</span>
                                            <a
                                              class="we-reply"
                                              href="#"
                                              title="Reply"
                                              ><svg
                                                class="svg-inline--fa fa-reply"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="reply"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-reply"></i> --></a
                                            >
                                            <a href="#" title=""
                                              ><svg
                                                class="svg-inline--fa fa-heart"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="heart"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M472.1 270.5l-193.1 199.7c-12.64 13.07-33.27 13.08-45.91 .0107l-193.2-199.7C-16.21 212.5-13.1 116.7 49.04 62.86C103.3 15.88 186.4 24.42 236.3 75.98l19.7 20.27l19.7-20.27c49.95-51.56 132.1-60.1 187.3-13.12C525.1 116.6 528.2 212.5 472.1 270.5z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-heart"></i> --><span
                                                >20</span
                                              ></a
                                            >
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/comet-4.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="we-comment">
                                          <h5>
                                            <a href="time-line.html" title=""
                                              >Sophia</a
                                            >
                                          </h5>
                                          <p>
                                            we are working for the dance and
                                            sing songs. this video is very
                                            awesome for the youngster.
                                            <i class="em em-smiley"></i>
                                          </p>
                                          <div class="inline-itms">
                                            <span>1 year ago</span>
                                            <a
                                              class="we-reply"
                                              href="#"
                                              title="Reply"
                                              ><svg
                                                class="svg-inline--fa fa-reply"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="reply"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-reply"></i> --></a
                                            >
                                            <a href="#" title=""
                                              ><svg
                                                class="svg-inline--fa fa-heart"
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="heart"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                data-fa-i2svg=""
                                              >
                                                <path
                                                  fill="currentColor"
                                                  d="M472.1 270.5l-193.1 199.7c-12.64 13.07-33.27 13.08-45.91 .0107l-193.2-199.7C-16.21 212.5-13.1 116.7 49.04 62.86C103.3 15.88 186.4 24.42 236.3 75.98l19.7 20.27l19.7-20.27c49.95-51.56 132.1-60.1 187.3-13.12C525.1 116.6 528.2 212.5 472.1 270.5z"
                                                ></path></svg
                                              ><!-- <i class="fa fa-heart"></i> --><span
                                                >20</span
                                              ></a
                                            >
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <a
                                          href="#"
                                          title=""
                                          class="showmore underline"
                                          style="color: #7635dc"
                                          >more comments+</a
                                        >
                                      </li>
                                      <li class="post-comment">
                                        <div class="comet-avatar">
                                          <img
                                            src="images/resources/nearly1.jpg"
                                            alt=""
                                          />
                                        </div>
                                        <div class="post-comt-box">
                                          <form method="post">
                                            <textarea
                                              placeholder="Post your comment"
                                            ></textarea>
                                            <div class="add-smiles">
                                              <div class="uploadimage">
                                                <svg
                                                  class="svg-inline--fa fa-image"
                                                  aria-hidden="true"
                                                  focusable="false"
                                                  data-prefix="fas"
                                                  data-icon="image"
                                                  role="img"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 512 512"
                                                  data-fa-i2svg=""
                                                >
                                                  <path
                                                    fill="currentColor"
                                                    d="M447.1 32h-384C28.64 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM111.1 96c26.51 0 48 21.49 48 48S138.5 192 111.1 192s-48-21.49-48-48S85.48 96 111.1 96zM446.1 407.6C443.3 412.8 437.9 416 432 416H82.01c-6.021 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.334-16.68l70-96C142.1 290.4 146.9 288 152 288s9.916 2.441 12.93 6.574l32.46 44.51l93.3-139.1C293.7 194.7 298.7 192 304 192s10.35 2.672 13.31 7.125l128 192C448.6 396 448.9 402.3 446.1 407.6z"
                                                  ></path></svg
                                                ><!-- <i class="fa fa-image"></i> -->
                                                <label class="fileContainer">
                                                  <input type="file" />
                                                </label>
                                              </div>
                                              <span
                                                class="em em-expressionless"
                                                title="add icon"
                                              ></span>
                                              <div class="smiles-bunch">
                                                <i class="em em---1"></i>
                                                <i class="em em-smiley"></i>
                                                <i class="em em-anguished"></i>
                                                <i class="em em-laughing"></i>
                                                <i class="em em-angry"></i>
                                                <i class="em em-astonished"></i>
                                                <i class="em em-blush"></i>
                                                <i
                                                  class="em em-disappointed"
                                                ></i>
                                                <i class="em em-worried"></i>
                                                <i
                                                  class="em em-kissing_heart"
                                                ></i>
                                                <i class="em em-rage"></i>
                                                <i
                                                  class="em em-stuck_out_tongue"
                                                ></i>
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
                          <!-- searched peoples -->
                        </div>
                        <div class="tab-pane fade" id="photos">
                          <div class="central-meta item">
                            <div class="user-post">
                              <div class="friend-info">
                                <figure>
                                  <img
                                    src="images/resources/admin.jpg"
                                    alt=""
                                    style="
                                      border-radius: 100px;
                                      position: relative;
                                    "
                                  />
                                  <img
                                    src="images/icons/_AvatarVerifiedIcon.svg"
                                    alt="img"
                                    style="
                                      position: absolute;
                                      top: 25px;
                                      left: 25px;
                                      z-index: 999;
                                    "
                                  />
                                </figure>
                                <div class="friend-name">
                                  <div class="more">
                                    <div class="more-post-optns">
                                      <i class="ti-more-alt"></i>
                                      <ul>
                                        <li>
                                          <a href="#">
                                            <svg
                                              class="svg-inline--fa fa-bookmark"
                                              aria-hidden="true"
                                              focusable="false"
                                              data-prefix="fa-regular"
                                              data-icon="bookmark"
                                              role="img"
                                              xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 384 512"
                                              data-fa-i2svg=""
                                            >
                                              <path
                                                fill="currentColor"
                                                d="M336 0h-288C21.49 0 0 21.49 0 48v431.9c0 24.7 26.79 40.08 48.12 27.64L192 423.6l143.9 83.93C357.2 519.1 384 504.6 384 479.9V48C384 21.49 362.5 0 336 0zM336 452L192 368l-144 84V54C48 50.63 50.63 48 53.1 48h276C333.4 48 336 50.63 336 54V452z"
                                              ></path></svg
                                            ><!-- <i class="fa-regular fa-bookmark"></i> -->
                                            Save Post
                                          </a>
                                        </li>
                                        <li class="bad-report">
                                          <a href="#">
                                            <svg
                                              class="svg-inline--fa fa-flag-checkered"
                                              aria-hidden="true"
                                              focusable="false"
                                              data-prefix="fa-solid"
                                              data-icon="flag-checkered"
                                              role="img"
                                              xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 576 512"
                                              data-fa-i2svg=""
                                            >
                                              <path
                                                fill="currentColor"
                                                d="M509.5 .0234c-6.145 0-12.53 1.344-18.64 4.227c-44.11 20.86-76.81 27.94-104.1 27.94c-57.89 0-91.53-31.86-158.2-31.87C195 .3203 153.3 8.324 96 32.38V32c0-17.75-14.25-32-32-32S32 14.25 32 32L31.96 496c0 8.75 7.25 16 16 16H80C88.75 512 96 504.8 96 496V384c51.74-23.86 92.71-31.82 128.3-31.82c71.09 0 120.6 31.78 191.7 31.78c30.81 0 65.67-5.969 108.1-23.09C536.3 355.9 544 344.4 544 332.1V30.74C544 12.01 527.8 .0234 509.5 .0234zM480 141.8c-31.99 14.04-57.81 20.59-80 22.49v80.21c25.44-1.477 51.59-6.953 80-17.34V308.9c-22.83 7.441-43.93 11.08-64.03 11.08c-5.447 0-10.71-.4258-15.97-.8906V244.5c-4.436 .2578-8.893 .6523-13.29 .6523c-25.82 0-47.35-4.547-66.71-10.08v66.91c-23.81-6.055-50.17-11.41-80-12.98V213.1C236.2 213.7 232.5 213.3 228.5 213.3C208.8 213.3 185.1 217.7 160 225.1v69.1C139.2 299.4 117.9 305.8 96 314.4V250.7l24.77-10.39C134.8 234.5 147.6 229.9 160 225.1V143.4C140.9 148.5 120.1 155.2 96 165.3V101.8l24.77-10.39C134.8 85.52 147.6 80.97 160 77.02v66.41c26.39-6.953 49.09-10.17 68.48-10.16c4.072 0 7.676 .4453 11.52 .668V65.03C258.6 66.6 274.4 71.55 293.2 77.83C301.7 80.63 310.7 83.45 320 86.12v66.07c20.79 6.84 41.45 12.96 66.71 12.96c4.207 0 8.781-.4766 13.29-.8594V95.54c25.44-1.477 51.59-6.953 80-17.34V141.8zM240 133.9v80.04c18.61 1.57 34.37 6.523 53.23 12.8C301.7 229.6 310.7 232.4 320 235.1V152.2C296.1 144.3 271.6 135.8 240 133.9z"
                                              ></path></svg
                                            ><!-- <i class="fa-solid fa-flag-checkered"></i> -->
                                            Report Post
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <svg
                                              class="svg-inline--fa fa-xmark"
                                              aria-hidden="true"
                                              focusable="false"
                                              data-prefix="fa-regular"
                                              data-icon="xmark"
                                              role="img"
                                              xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 320 512"
                                              data-fa-i2svg=""
                                            >
                                              <path
                                                fill="currentColor"
                                                d="M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z"
                                              ></path></svg
                                            ><!-- <i class="fa-sharp fa-regular fa-times"></i> -->
                                            Hide Post
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>

                                  <ins
                                    ><a href="time-line.html" title=""
                                      >Jack Carter</a
                                    >
                                    |
                                    <a
                                      href="#"
                                      title=""
                                      style="color: #40599a !important"
                                      >Post Album</a
                                    ></ins
                                  >
                                  <span style="color: #475569 !important"
                                    ><svg
                                      class="svg-inline--fa fa-globe"
                                      aria-hidden="true"
                                      focusable="false"
                                      data-prefix="fas"
                                      data-icon="globe"
                                      role="img"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 512 512"
                                      data-fa-i2svg=""
                                    >
                                      <path
                                        fill="currentColor"
                                        d="M186.8 26.24C119.1 46.6 64.08 96.01 36.1 160h99.97C145.7 104.1 163.6 57.44 186.8 26.24zM160 256c0 22.55 1.277 43.86 3.623 64h184.8c2.346-20.14 3.623-41.45 3.623-64s-1.277-43.86-3.623-64H163.6C161.3 212.1 160 233.5 160 256zM343.6 160c-16.25-88.04-53.37-144-87.57-144S184.7 71.96 168.4 160H343.6zM475.9 160c-27.98-63.99-83-113.4-150.7-133.8C348.4 57.44 366.3 104.1 375.9 160H475.9zM325.2 485.8C392.9 465.4 447.9 415.1 475.9 352h-99.97C366.3 407.9 348.4 454.6 325.2 485.8zM487.1 192h-106.6c2.248 20.5 3.485 41.84 3.485 64s-1.237 43.5-3.485 64h106.6c5.641-20.4 8.894-41.8 8.894-64S492.7 212.4 487.1 192zM168.4 352c16.25 88.04 53.37 144 87.57 144s71.32-55.96 87.57-144H168.4zM128 256c0-22.16 1.237-43.5 3.485-64H24.89c-5.641 20.4-8.895 41.8-8.895 64s3.254 43.6 8.895 64H131.5C129.2 299.5 128 278.2 128 256zM36.1 352c27.98 63.99 82.1 113.4 150.7 133.8C163.6 454.6 145.7 407.9 136.1 352H36.1z"
                                      ></path></svg
                                    ><!-- <i class="fa fa-globe"></i> -->
                                    published: january,5 2024 | 2:15 PM
                                  </span>
                                </div>
                                <hr />
                                <div class="post-meta">
                                  <figure>
                                    <div class="img-bunch">
                                      <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                          <figure>
                                            <a
                                              class="strip"
                                              href="images/resources/album6.jpg"
                                              title=""
                                              data-strip-group="mygroup"
                                              data-strip-group-options="loop: false"
                                            >
                                              <img
                                                src="images/resources/album6.jpg"
                                                alt=""
                                              />
                                            </a>
                                          </figure>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                          <figure>
                                            <a
                                              class="strip"
                                              href="images/resources/album5.jpg"
                                              title=""
                                              data-strip-group="mygroup"
                                              data-strip-group-options="loop: false"
                                            >
                                              <img
                                                src="images/resources/album5.jpg"
                                                alt=""
                                              />
                                            </a>
                                          </figure>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                          <figure>
                                            <a
                                              class="strip"
                                              href="images/resources/album4.jpg"
                                              title=""
                                              data-strip-group="mygroup"
                                              data-strip-group-options="loop: false"
                                            >
                                              <img
                                                src="images/resources/album4.jpg"
                                                alt=""
                                              />
                                            </a>
                                            <div class="more-photos">
                                              <span>+15</span>
                                            </div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                  </figure>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="videos">
                          <div class="central-meta item">
                            <span class="create-post"
                              >Videos<a title="" href="#">See All</a></span
                            >
                            <div class="user-post">
                              <div class="friend-info">
                                <figure>
                                  <img
                                    src="images/resources/nearly2.jpg"
                                    alt=""
                                  />
                                </figure>
                                <div class="friend-name">
                                  <div class="more">
                                    <div class="more-post-optns">
                                      <i class="ti-more-alt"></i>
                                      <ul>
                                        <li>
                                          <svg
                                            class="svg-inline--fa fa-comment"
                                            aria-hidden="true"
                                            focusable="false"
                                            data-prefix="fas"
                                            data-icon="comment"
                                            role="img"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            data-fa-i2svg=""
                                          >
                                            <path
                                              fill="currentColor"
                                              d="M256 32C114.6 32 .0272 125.1 .0272 240c0 49.63 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734C1.979 478.2 4.75 480 8 480c66.25 0 115.1-31.76 140.6-51.39C181.2 440.9 217.6 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32z"
                                            ></path></svg
                                          ><!-- <i class="fa fa-comment"></i> -->Send
                                          Message
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <ins
                                    ><a href="time-line.html" title=""
                                      >Jack Carter</a
                                    >
                                    video</ins
                                  >
                                  <span
                                    ><svg
                                      class="svg-inline--fa fa-globe"
                                      aria-hidden="true"
                                      focusable="false"
                                      data-prefix="fas"
                                      data-icon="globe"
                                      role="img"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 512 512"
                                      data-fa-i2svg=""
                                    >
                                      <path
                                        fill="currentColor"
                                        d="M186.8 26.24C119.1 46.6 64.08 96.01 36.1 160h99.97C145.7 104.1 163.6 57.44 186.8 26.24zM160 256c0 22.55 1.277 43.86 3.623 64h184.8c2.346-20.14 3.623-41.45 3.623-64s-1.277-43.86-3.623-64H163.6C161.3 212.1 160 233.5 160 256zM343.6 160c-16.25-88.04-53.37-144-87.57-144S184.7 71.96 168.4 160H343.6zM475.9 160c-27.98-63.99-83-113.4-150.7-133.8C348.4 57.44 366.3 104.1 375.9 160H475.9zM325.2 485.8C392.9 465.4 447.9 415.1 475.9 352h-99.97C366.3 407.9 348.4 454.6 325.2 485.8zM487.1 192h-106.6c2.248 20.5 3.485 41.84 3.485 64s-1.237 43.5-3.485 64h106.6c5.641-20.4 8.894-41.8 8.894-64S492.7 212.4 487.1 192zM168.4 352c16.25 88.04 53.37 144 87.57 144s71.32-55.96 87.57-144H168.4zM128 256c0-22.16 1.237-43.5 3.485-64H24.89c-5.641 20.4-8.895 41.8-8.895 64s3.254 43.6 8.895 64H131.5C129.2 299.5 128 278.2 128 256zM36.1 352c27.98 63.99 82.1 113.4 150.7 133.8C163.6 454.6 145.7 407.9 136.1 352H36.1z"
                                      ></path></svg
                                    ><!-- <i class="fa fa-globe"></i> -->
                                    published: August,15 2020 19:PM
                                  </span>
                                </div>
                                <div class="post-meta searched">
                                  <div class="linked-image align-right">
                                    <a
                                      href="https://www.youtube.com/watch?v=MIbbtEjdYrc"
                                      title=""
                                      data-strip-group="mygroup"
                                      class="strip"
                                      data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"
                                    >
                                      <img
                                        src="images/resources/search-1.jpg"
                                        alt=""
                                      />
                                      <i>
                                        <svg
                                          version="1.1"
                                          class="play"
                                          xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                          x="0px"
                                          y="0px"
                                          height="30px"
                                          width="30px"
                                          viewBox="0 0 100 100"
                                          enable-background="new 0 0 100 100"
                                          xml:space="preserve"
                                        >
                                          <path
                                            class="stroke-solid"
                                            fill="none"
                                            stroke=""
                                            d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                                            C97.3,23.7,75.7,2.3,49.9,2.5"
                                          ></path>
                                          <path
                                            class="icon"
                                            fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"
                                          ></path>
                                        </svg>
                                      </i>
                                    </a>
                                  </div>
                                  <div class="detail">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur
                                      ipisicing elit...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="user-post">
                              <div class="friend-info">
                                <figure>
                                  <img
                                    src="images/resources/nearly2.jpg"
                                    alt=""
                                  />
                                </figure>
                                <div class="friend-name">
                                  <div class="more">
                                    <div class="more-post-optns">
                                      <i class="ti-more-alt"></i>
                                      <ul>
                                        <li>
                                          <svg
                                            class="svg-inline--fa fa-comment"
                                            aria-hidden="true"
                                            focusable="false"
                                            data-prefix="fas"
                                            data-icon="comment"
                                            role="img"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            data-fa-i2svg=""
                                          >
                                            <path
                                              fill="currentColor"
                                              d="M256 32C114.6 32 .0272 125.1 .0272 240c0 49.63 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734C1.979 478.2 4.75 480 8 480c66.25 0 115.1-31.76 140.6-51.39C181.2 440.9 217.6 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32z"
                                            ></path></svg
                                          ><!-- <i class="fa fa-comment"></i> -->Send
                                          Message
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <ins
                                    ><a href="time-line.html" title=""
                                      >Jack Carter</a
                                    >
                                    video</ins
                                  >
                                  <span
                                    ><svg
                                      class="svg-inline--fa fa-globe"
                                      aria-hidden="true"
                                      focusable="false"
                                      data-prefix="fas"
                                      data-icon="globe"
                                      role="img"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 512 512"
                                      data-fa-i2svg=""
                                    >
                                      <path
                                        fill="currentColor"
                                        d="M186.8 26.24C119.1 46.6 64.08 96.01 36.1 160h99.97C145.7 104.1 163.6 57.44 186.8 26.24zM160 256c0 22.55 1.277 43.86 3.623 64h184.8c2.346-20.14 3.623-41.45 3.623-64s-1.277-43.86-3.623-64H163.6C161.3 212.1 160 233.5 160 256zM343.6 160c-16.25-88.04-53.37-144-87.57-144S184.7 71.96 168.4 160H343.6zM475.9 160c-27.98-63.99-83-113.4-150.7-133.8C348.4 57.44 366.3 104.1 375.9 160H475.9zM325.2 485.8C392.9 465.4 447.9 415.1 475.9 352h-99.97C366.3 407.9 348.4 454.6 325.2 485.8zM487.1 192h-106.6c2.248 20.5 3.485 41.84 3.485 64s-1.237 43.5-3.485 64h106.6c5.641-20.4 8.894-41.8 8.894-64S492.7 212.4 487.1 192zM168.4 352c16.25 88.04 53.37 144 87.57 144s71.32-55.96 87.57-144H168.4zM128 256c0-22.16 1.237-43.5 3.485-64H24.89c-5.641 20.4-8.895 41.8-8.895 64s3.254 43.6 8.895 64H131.5C129.2 299.5 128 278.2 128 256zM36.1 352c27.98 63.99 82.1 113.4 150.7 133.8C163.6 454.6 145.7 407.9 136.1 352H36.1z"
                                      ></path></svg
                                    ><!-- <i class="fa fa-globe"></i> -->
                                    published: August,15 2020 19:PM
                                  </span>
                                </div>
                                <div class="post-meta searched">
                                  <div class="linked-image align-right">
                                    <a
                                      href="https://www.youtube.com/watch?v=MIbbtEjdYrc"
                                      title=""
                                      data-strip-group="mygroup"
                                      class="strip"
                                      data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"
                                    >
                                      <img
                                        src="images/resources/search-2.jpg"
                                        alt=""
                                      />
                                      <i>
                                        <svg
                                          version="1.1"
                                          class="play"
                                          xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                          x="0px"
                                          y="0px"
                                          height="30px"
                                          width="30px"
                                          viewBox="0 0 100 100"
                                          enable-background="new 0 0 100 100"
                                          xml:space="preserve"
                                        >
                                          <path
                                            class="stroke-solid"
                                            fill="none"
                                            stroke=""
                                            d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                                            C97.3,23.7,75.7,2.3,49.9,2.5"
                                          ></path>
                                          <path
                                            class="icon"
                                            fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"
                                          ></path>
                                        </svg>
                                      </i>
                                    </a>
                                  </div>
                                  <div class="detail">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur
                                      ipisicing elit...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="user-post">
                              <div class="friend-info">
                                <figure>
                                  <img
                                    src="images/resources/nearly2.jpg"
                                    alt=""
                                  />
                                </figure>
                                <div class="friend-name">
                                  <div class="more">
                                    <div class="more-post-optns">
                                      <i class="ti-more-alt"></i>
                                      <ul>
                                        <li>
                                          <svg
                                            class="svg-inline--fa fa-comment"
                                            aria-hidden="true"
                                            focusable="false"
                                            data-prefix="fas"
                                            data-icon="comment"
                                            role="img"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            data-fa-i2svg=""
                                          >
                                            <path
                                              fill="currentColor"
                                              d="M256 32C114.6 32 .0272 125.1 .0272 240c0 49.63 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734C1.979 478.2 4.75 480 8 480c66.25 0 115.1-31.76 140.6-51.39C181.2 440.9 217.6 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32z"
                                            ></path></svg
                                          ><!-- <i class="fa fa-comment"></i> -->Send
                                          Message
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <ins
                                    ><a href="time-line.html" title=""
                                      >Jack Carter</a
                                    >
                                    video</ins
                                  >
                                  <span
                                    ><svg
                                      class="svg-inline--fa fa-globe"
                                      aria-hidden="true"
                                      focusable="false"
                                      data-prefix="fas"
                                      data-icon="globe"
                                      role="img"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 512 512"
                                      data-fa-i2svg=""
                                    >
                                      <path
                                        fill="currentColor"
                                        d="M186.8 26.24C119.1 46.6 64.08 96.01 36.1 160h99.97C145.7 104.1 163.6 57.44 186.8 26.24zM160 256c0 22.55 1.277 43.86 3.623 64h184.8c2.346-20.14 3.623-41.45 3.623-64s-1.277-43.86-3.623-64H163.6C161.3 212.1 160 233.5 160 256zM343.6 160c-16.25-88.04-53.37-144-87.57-144S184.7 71.96 168.4 160H343.6zM475.9 160c-27.98-63.99-83-113.4-150.7-133.8C348.4 57.44 366.3 104.1 375.9 160H475.9zM325.2 485.8C392.9 465.4 447.9 415.1 475.9 352h-99.97C366.3 407.9 348.4 454.6 325.2 485.8zM487.1 192h-106.6c2.248 20.5 3.485 41.84 3.485 64s-1.237 43.5-3.485 64h106.6c5.641-20.4 8.894-41.8 8.894-64S492.7 212.4 487.1 192zM168.4 352c16.25 88.04 53.37 144 87.57 144s71.32-55.96 87.57-144H168.4zM128 256c0-22.16 1.237-43.5 3.485-64H24.89c-5.641 20.4-8.895 41.8-8.895 64s3.254 43.6 8.895 64H131.5C129.2 299.5 128 278.2 128 256zM36.1 352c27.98 63.99 82.1 113.4 150.7 133.8C163.6 454.6 145.7 407.9 136.1 352H36.1z"
                                      ></path></svg
                                    ><!-- <i class="fa fa-globe"></i> -->
                                    published: August,15 2020 19:PM
                                  </span>
                                </div>
                                <div class="post-meta searched">
                                  <div class="linked-image align-right">
                                    <a
                                      href="https://www.youtube.com/watch?v=MIbbtEjdYrc"
                                      title=""
                                      data-strip-group="mygroup"
                                      class="strip"
                                      data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"
                                    >
                                      <img
                                        src="images/resources/search-3.jpg"
                                        alt=""
                                      />
                                      <i>
                                        <svg
                                          version="1.1"
                                          class="play"
                                          xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                          x="0px"
                                          y="0px"
                                          height="30px"
                                          width="30px"
                                          viewBox="0 0 100 100"
                                          enable-background="new 0 0 100 100"
                                          xml:space="preserve"
                                        >
                                          <path
                                            class="stroke-solid"
                                            fill="none"
                                            stroke=""
                                            d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                                            C97.3,23.7,75.7,2.3,49.9,2.5"
                                          ></path>
                                          <path
                                            class="icon"
                                            fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"
                                          ></path>
                                        </svg>
                                      </i>
                                    </a>
                                  </div>
                                  <div class="detail">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur
                                      ipisicing elit...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- post with video -->
                        </div>
                      </div>

                      <!-- Related Searches -->
                    </div>
                  </div>

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
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

 @include('layouts.footer')