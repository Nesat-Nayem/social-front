@include('layouts.header')
<!-- topbar -->

<section>
  <div class="gap2 gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row merged20" id="page-contents">
            <div class="user-profile">
              <figure>
                <div class="edit-pp">
                  <label class="fileContainer">
                    <svg class="svg-inline--fa fa-camera" aria-hidden="true" focusable="false" data-prefix="fas"
                      data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                      data-fa-i2svg="">
                      <path fill="currentColor"
                        d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                      </path>
                    </svg><!-- <i class="fa fa-camera"></i> -->
                    <input type="file" />
                  </label>
                </div>
                <img src="images/resources/profile-image.jpg" alt="" />
                <ul class="profile-controls">
                  <li>
                    <div class="edit-seting" title="Edit Profile image">
                      <svg class="svg-inline--fa fa-sliders" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="sliders" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M480 384H249.2C236.9 355.8 208.8 336 176 336S115.1 355.8 102.8 384H32c-17.67 0-32 14.33-32 32s14.33 32 32 32h70.75C115.1 476.2 143.2 496 176 496s60.89-19.77 73.25-48H480c17.67 0 32-14.33 32-32S497.7 384 480 384zM176 448c-17.64 0-32-14.36-32-32s14.36-32 32-32s32 14.36 32 32S193.6 448 176 448zM480 224h-70.75C396.9 195.8 368.8 176 336 176S275.1 195.8 262.8 224H32C14.33 224 0 238.3 0 256s14.33 32 32 32h230.8C275.1 316.2 303.2 336 336 336s60.89-19.77 73.25-48H480c17.67 0 32-14.33 32-32S497.7 224 480 224zM336 288c-17.64 0-32-14.36-32-32s14.36-32 32-32s32 14.36 32 32S353.6 288 336 288zM32 128h102.8C147.1 156.2 175.2 176 208 176s60.89-19.77 73.25-48H480c17.67 0 32-14.33 32-32s-14.33-32-32-32h-198.8C268.9 35.77 240.8 16 208 16S147.1 35.77 134.8 64H32C14.33 64 0 78.33 0 96S14.33 128 32 128zM208 64c17.64 0 32 14.36 32 32s-14.36 32-32 32s-32-14.36-32-32S190.4 64 208 64z">
                        </path>
                      </svg><!-- <i class="fa fa-sliders"></i> -->
                      <ul class="more-dropdown">
                        <li>
                          <a href="profile" title="">Update Profile Photo</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </figure>

              <div class="profile-section">
                <div class="row">
                  <div class="col-lg-2 col-md-3">
                    <div class="profile-author">
                      <div class="profile-author-thumb">
                        <img alt="author" src="images/resources/author.jpg" />
                        <div class="edit-dp">
                          <label class="fileContainer">
                            <svg class="svg-inline--fa fa-camera" aria-hidden="true" focusable="false" data-prefix="fas"
                              data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                              data-fa-i2svg="">
                              <path fill="currentColor"
                                d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                              </path>
                            </svg><!-- <i class="fa fa-camera"></i> -->
                            <input type="file" />
                          </label>
                        </div>
                      </div>

                      <div class="author-content">
                        <a class="h4 author-name" href="profile">Suraj Jamdade</a>
                        <div class="country">India, Maharashtra</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-10 col-md-9">
                    <ul class="profile-menu">
                      <!-- <li>
                              <a class="" href="/profile"
                                >Profile</a
                              >
                            </li> -->

                      <!-- <li>
                              <a class="" href="my-photos-/"
                                >Photos Post</a
                              >
                            </li>
                            <li>
                              <a class="" href="my-videos-/"
                                >Videos Post</a
                              >
                            </li> -->
                    </ul>
                    <!-- <ol class="folw-detail d-none d-lg-block">
                            <li><span>Posts</span><ins>101</ins></li>
                          </ol> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- user profile banner  -->
            <div class="col-lg-9">
              <div class="central-meta">
                <div class="about">
                  <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">
                      <!-- <li class="nav-item">
                              <a
                                href="#gen-setting"
                                class="nav-link active"
                                data-toggle="tab"
                                ><svg
                                  class="svg-inline--fa fa-gear"
                                  aria-hidden="true"
                                  focusable="false"
                                  data-prefix="fa-regular"
                                  data-icon="gear"
                                  role="img"
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 512 512"
                                  data-fa-i2svg=""
                                >
                                  <path
                                    fill="currentColor"
                                    d="M504.1 315.1c0-8.652-4.607-16.84-12.36-21.39l-32.91-18.97C459.5 269.1 459.8 262.5 459.8 256s-.3228-13.1-.9683-19.62l32.91-18.97c7.752-4.548 12.36-12.74 12.36-21.39c0-21.27-49.32-128.2-84.52-128.2c-4.244 0-8.51 1.094-12.37 3.357l-32.78 18.97c-10.71-7.742-22.07-14.32-34.07-19.74V32.49c0-11.23-7.484-21.04-18.33-23.88C300.5 2.871 278.3 0 256 0C233.8 0 211.5 2.871 189.9 8.613C179.1 11.45 171.6 21.26 171.6 32.49v37.94c-12 5.42-23.36 12-34.07 19.74l-32.78-18.97C100.9 68.94 96.63 67.85 92.38 67.85c-.0025 0 .0025 0 0 0c-32.46 0-84.52 101.7-84.52 128.2c0 8.652 4.607 16.84 12.36 21.39l32.91 18.97C52.49 242.9 52.17 249.5 52.17 256s.3228 13.1 .9683 19.62L20.23 294.6C12.47 299.1 7.867 307.3 7.867 315.1c0 21.27 49.32 128.2 84.52 128.2c4.244 0 8.51-1.094 12.37-3.357l32.78-18.97c10.71 7.742 22.07 14.32 34.07 19.74v37.94c0 11.23 7.484 21.04 18.33 23.88C211.5 509.1 233.7 512 255.1 512c22.25 0 44.47-2.871 66.08-8.613c10.84-2.84 18.33-12.65 18.33-23.88v-37.94c12-5.42 23.36-12 34.07-19.74l32.78 18.97c3.855 2.264 8.123 3.357 12.37 3.357C452.1 444.2 504.1 342.4 504.1 315.1zM415.2 389.1l-43.66-25.26c-42.06 30.39-32.33 24.73-79.17 45.89v50.24c-13.29 2.341-25.58 3.18-36.44 3.18c-15.42 0-27.95-1.693-36.36-3.176v-50.24c-46.95-21.21-37.18-15.54-79.17-45.89l-43.64 25.25c-15.74-18.69-28.07-40.05-36.41-63.11L103.1 301.7C101.4 276.1 100.1 266.1 100.1 256c0-10.02 1.268-20.08 3.81-45.76L60.37 185.2C68.69 162.1 81.05 140.7 96.77 122l43.66 25.26c42.06-30.39 32.33-24.73 79.17-45.89V51.18c13.29-2.341 25.58-3.18 36.44-3.18c15.42 0 27.95 1.693 36.36 3.176v50.24c46.95 21.21 37.18 15.54 79.17 45.89l43.64-25.25c15.74 18.69 28.07 40.05 36.4 63.11L408 210.3c2.538 25.64 3.81 35.64 3.81 45.68c0 10.02-1.268 20.08-3.81 45.76l43.58 25.12C443.3 349.9 430.9 371.3 415.2 389.1zM256 159.1c-52.88 0-96 43.13-96 96S203.1 351.1 256 351.1s96-43.13 96-96S308.9 159.1 256 159.1zM256 304C229.5 304 208 282.5 208 256S229.5 208 256 208s48 21.53 48 48S282.5 304 256 304z"
                                  ></path></svg
                                General Setting</a
                              >
                            </li> -->
                      <li class="nav-item">
                        <a href="#edit-profile" class="nav-link" data-toggle="tab"><svg
                            class="svg-inline--fa fa-pen-to-square" aria-hidden="true" focusable="false"
                            data-prefix="fa-regular" data-icon="pen-to-square" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                              d="M495.6 49.23l-32.82-32.82C451.8 5.471 437.5 0 423.1 0c-14.33 0-28.66 5.469-39.6 16.41L167.5 232.5C159.1 240 154.8 249.5 152.4 259.8L128.3 367.2C126.5 376.1 133.4 384 141.1 384c.916 0 1.852-.0918 2.797-.2813c0 0 74.03-15.71 107.4-23.56c10.1-2.377 19.13-7.459 26.46-14.79l217-217C517.5 106.5 517.4 71.1 495.6 49.23zM461.7 94.4L244.7 311.4C243.6 312.5 242.5 313.1 241.2 313.4c-13.7 3.227-34.65 7.857-54.3 12.14l12.41-55.2C199.6 268.9 200.3 267.5 201.4 266.5l216.1-216.1C419.4 48.41 421.6 48 423.1 48s3.715 .4062 5.65 2.342l32.82 32.83C464.8 86.34 464.8 91.27 461.7 94.4zM424 288c-13.25 0-24 10.75-24 24v128c0 13.23-10.78 24-24 24h-304c-13.22 0-24-10.77-24-24v-304c0-13.23 10.78-24 24-24h144c13.25 0 24-10.75 24-24S229.3 64 216 64L71.1 63.99C32.31 63.99 0 96.29 0 135.1v304C0 479.7 32.31 512 71.1 512h303.1c39.69 0 71.1-32.3 71.1-72L448 312C448 298.8 437.3 288 424 288z">
                            </path>
                          </svg><!-- <i class="fa-regular fa-pen-to-square"></i> -->
                          Edit Profile</a>
                      </li>
                      <!-- <li class="nav-item">
                              <a
                                href="#notifi"
                                class="nav-link"
                                data-toggle="tab"
                                ><svg
                                  class="svg-inline--fa fa-bell"
                                  aria-hidden="true"
                                  focusable="false"
                                  data-prefix="fa-regular"
                                  data-icon="bell"
                                  role="img"
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 448 512"
                                  data-fa-i2svg=""
                                >
                                  <path
                                    fill="currentColor"
                                    d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z"
                                  ></path></svg
                                Notification</a
                              >
                            </li>
                            <li class="nav-item">
                              <a
                                href="#messages"
                                class="nav-link"
                                data-toggle="tab"
                                ><svg
                                  class="svg-inline--fa fa-comments"
                                  aria-hidden="true"
                                  focusable="false"
                                  data-prefix="fa-regular"
                                  data-icon="comments"
                                  role="img"
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 640 512"
                                  data-fa-i2svg=""
                                >
                                  <path
                                    fill="currentColor"
                                    d="M208 0C322.9 0 416 78.8 416 176C416 273.2 322.9 352 208 352C189.3 352 171.2 349.7 153.9 345.8C123.3 364.8 79.13 384 24.95 384C14.97 384 5.93 378.1 2.018 368.9C-1.896 359.7-.0074 349.1 6.739 341.9C7.26 341.5 29.38 317.4 45.73 285.9C17.18 255.8 0 217.6 0 176C0 78.8 93.13 0 208 0zM164.6 298.1C179.2 302.3 193.8 304 208 304C296.2 304 368 246.6 368 176C368 105.4 296.2 48 208 48C119.8 48 48 105.4 48 176C48 211.2 65.71 237.2 80.57 252.9L104.1 277.8L88.31 308.1C84.74 314.1 80.73 321.9 76.55 328.5C94.26 323.4 111.7 315.5 128.7 304.1L145.4 294.6L164.6 298.1zM441.6 128.2C552 132.4 640 209.5 640 304C640 345.6 622.8 383.8 594.3 413.9C610.6 445.4 632.7 469.5 633.3 469.9C640 477.1 641.9 487.7 637.1 496.9C634.1 506.1 625 512 615 512C560.9 512 516.7 492.8 486.1 473.8C468.8 477.7 450.7 480 432 480C350 480 279.1 439.8 245.2 381.5C262.5 379.2 279.1 375.3 294.9 369.9C322.9 407.1 373.9 432 432 432C446.2 432 460.8 430.3 475.4 426.1L494.6 422.6L511.3 432.1C528.3 443.5 545.7 451.4 563.5 456.5C559.3 449.9 555.3 442.1 551.7 436.1L535.9 405.8L559.4 380.9C574.3 365.3 592 339.2 592 304C592 237.7 528.7 183.1 447.1 176.6L448 176C448 159.5 445.8 143.5 441.6 128.2H441.6z"
                                  ></path></svg
                                Messages</a
                              >
                            </li> -->


                      <!-- <li class="nav-item">
                              <a
                                href="#privacy"
                                class="nav-link"
                                data-toggle="tab"
                                ><svg
                                  class="svg-inline--fa fa-shield-check"
                                  aria-hidden="true"
                                  focusable="false"
                                  data-prefix="fa-regular"
                                  data-icon="shield-check"
                                  role="img"
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 512 512"
                                  data-fa-i2svg=""
                                >
                                  <path
                                    fill="currentColor"
                                    d="M466.5 83.71l-192-80c-5.875-2.5-12.16-3.703-18.44-3.703S243.5 1.203 237.6 3.703L45.61 83.71C27.73 91.08 16 108.6 16 127.1C16 385.4 205.4 512 255.9 512C305.2 512 496 387.3 496 127.1C496 108.6 484.3 91.08 466.5 83.71zM256 464C158.5 423.4 64 297.3 64 128l192-80L448 128C448 301.8 349.6 425 256 464zM200.1 247C196.3 242.3 190.1 239.1 184 239.1c-13.71 0-24 11.21-24 24C160 270.1 162.3 276.3 167 280.1l48 48C219.5 333.5 225.7 335.1 232 335.1c2.595 0 11.46-.4962 18.22-8.375l96-112c3.881-4.528 5.781-10.09 5.781-15.62c0-7.405-5.79-23.99-23.98-23.99c-6.756 0-13.48 2.831-18.24 8.362L230.7 276.7L200.1 247z"
                                  ></path></svg
                                Privacy &amp; Data</a
                              >
                            </li> -->
                      <li class="nav-item">
                        <a href="#security" class="nav-link" data-toggle="tab"><svg class="svg-inline--fa fa-lock"
                            aria-hidden="true" focusable="false" data-prefix="fa-regular" data-icon="lock" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                              d="M384 192h-32V127.1c0-70.58-57.42-127.1-128-127.1s-128 57.42-128 127.1V192H64C28.65 192 0 220.7 0 256v191.1c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V256C448 220.7 419.3 192 384 192zM144 128c0-44.11 35.89-80 80-80s80 35.89 80 80v64h-160V128zM400 448c0 8.822-7.178 16-16 16H64c-8.822 0-16-7.178-16-16V256c0-8.822 7.178-16 16-16h320c8.822 0 16 7.178 16 16V448z">
                            </path>
                          </svg><!-- <i class="fa-regular fa-lock"></i> -->
                          Security</a>
                      </li>
                      <!-- <li class="nav-item">
                              <a href="#apps" class="nav-link" data-toggle="tab"
                                ><svg
                                  class="svg-inline--fa fa-app-store"
                                  aria-hidden="true"
                                  focusable="false"
                                  data-prefix="fa-brands"
                                  data-icon="app-store"
                                  role="img"
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 512 512"
                                  data-fa-i2svg=""
                                >
                                  <path
                                    fill="currentColor"
                                    d="M255.9 120.9l9.1-15.7c5.6-9.8 18.1-13.1 27.9-7.5 9.8 5.6 13.1 18.1 7.5 27.9l-87.5 151.5h63.3c20.5 0 32 24.1 23.1 40.8H113.8c-11.3 0-20.4-9.1-20.4-20.4 0-11.3 9.1-20.4 20.4-20.4h52l66.6-115.4-20.8-36.1c-5.6-9.8-2.3-22.2 7.5-27.9 9.8-5.6 22.2-2.3 27.9 7.5l8.9 15.7zm-78.7 218l-19.6 34c-5.6 9.8-18.1 13.1-27.9 7.5-9.8-5.6-13.1-18.1-7.5-27.9l14.6-25.2c16.4-5.1 29.8-1.2 40.4 11.6zm168.9-61.7h53.1c11.3 0 20.4 9.1 20.4 20.4 0 11.3-9.1 20.4-20.4 20.4h-29.5l19.9 34.5c5.6 9.8 2.3 22.2-7.5 27.9-9.8 5.6-22.2 2.3-27.9-7.5-33.5-58.1-58.7-101.6-75.4-130.6-17.1-29.5-4.9-59.1 7.2-69.1 13.4 23 33.4 57.7 60.1 104zM256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216z"
                                  ></path></svg
                             
                                Apps</a
                              >
                            </li> -->
                    </ul>
                    <div class="tab-content">
                      <!-- <div
                              class="tab-pane fade show active"
                              id="gen-setting"
                            >
                              <div class="set-title">
                                <h5>General Setting</h5>
                                <span
                                  >Set your login preference, help us
                                  personalize your experience and make big
                                  account change here.</span
                                >
                              </div>
                              <div class="onoff-options">
                                <form method="post">
                                 

                                  <div class="setting-row">
                                    <span>Enable sound Notification</span>
                                    <p>
                                      You'll hear notification sound when
                                      someone sends you a private message
                                    </p>
                                    <input
                                      type="checkbox"
                                      id="switch05"
                                      checked=""
                                    />
                                    <label
                                      for="switch05"
                                      data-on-label="ON"
                                      data-off-label="OFF"
                                    ></label>
                                  </div>

                                  <div class="submit-btns">
                                    <button
                                      type="button"
                                      class="main-btn"
                                      data-ripple=""
                                    >
                                      <span>Save</span>
                                    </button>
                                    <button
                                      type="button"
                                      class="main-btn3"
                                      data-ripple=""
                                    >
                                      <span>Cancel</span>
                                    </button>
                                  </div>
                                </form>
                              </div>
                              <div class="account-delete">
                                <h5>Account Changes</h5>
                                <div>
                                  <span>Hide Your Posts and profile </span>
                                  <button type="button" class="">
                                    <span>Deactivate account</span>
                                  </button>
                                </div>
                                <div>
                                  <span>Delete your account and data </span>
                                  <button type="button" class="">
                                    <span>close account</span>
                                  </button>
                                </div>
                              </div>
                            </div> -->
                      <!-- general setting -->
                      <div class="tab-pane fade show active" id="edit-profile">
                        <div class="set-title">
                          <h5>Edit Profile</h5>
                          <span>People on Voiz will get to know you with
                            the info below</span>
                        </div>
                        <div class="setting-meta">
                          <div class="change-photo">
                            <figure>
                              <img src="images/resources/admin2.jpg" alt="" />
                            </figure>
                            <div class="edit-img">
                              <form class="edit-phto">
                                <label class="fileContainer">
                                  <svg class="svg-inline--fa fa-instagram" aria-hidden="true" focusable="false"
                                    data-prefix="fa-brands" data-icon="instagram" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                      d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                  </svg><!-- <i class="fa-brands fa-instagram"></i> -->
                                  Chage DP
                                  <input type="file" />
                                </label>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="stg-form-area">
                          <form method="post" class="c-form">
                            <div>
                              <label>Display Name</label>
                              <input type="text" placeholder="name" value="suraj Jamdade" />
                            </div>

                            <div class="uzer-nam">
                              <label>User Name</label>
                              <span>www.rightoask.com/</span><input type="text" placeholder="username"
                                value="suraj@gmail.com" />
                            </div>
                            <div>
                              <label>Email Address</label>
                              <input type="email" placeholder="email" value="abc@righttoask.com" />
                            </div>
                            <div>
                              <label>Gender</label>
                              <div class="form-radio">
                                <div class="radio">
                                  <label>
                                    <input type="radio" checked="checked" name="radio" /><i class="check-box"></i>Male
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="radio" /><i class="check-box"></i>Female
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="radio" /><i class="check-box"></i>Custom
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div>
                              <label>about your profile</label>
                              <textarea rows="3" placeholder="write someting about yourself"></textarea>
                            </div>

                            <div>
                              <label>Location</label>
                              <input type="text" placeholder="Ex.India, Maharashtra" />
                            </div>

                            <div>
                              <button type="submit" data-ripple="">
                                Cancel
                              </button>
                              <button type="submit" data-ripple="">
                                Save
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- edit profile -->
                      <div class="tab-pane fade" id="notifi" role="tabpanel">
                        <div class="set-title">
                          <h5>Notification Setting</h5>
                          <span>Select push and email notifications you'd
                            like to receive.</span>
                        </div>
                        <div class="notifi-seting">
                          <div class="form-radio">
                            <div class="radio">
                              <label>
                                <input type="radio" checked="checked" name="radio" /><i class="check-box"></i>
                                Send Me emails about my activity except
                                emails i have unsubscribe from
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="radio" /><i class="check-box"></i>
                                Only send me required services
                                announcements.
                              </label>
                            </div>
                          </div>
                          <div class="set-title">
                            <h6>
                              i'd like to receive emails and updates from
                              Voiz about
                            </h6>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" checked="checked" /><i class="check-box"></i>
                              Always General announcement, updates, posts,
                              and videos.
                            </label>
                            <label>
                              <input type="checkbox" checked="checked" /><i class="check-box"></i>
                              Personalise tips for my page.
                            </label>
                            <label>
                              <input type="checkbox" checked="checked" /><i class="check-box"></i>
                              Announcements and recommendations.
                            </label>
                            <p>
                              <a href="#" title="">learn more</a> about
                              emails from Voiz
                            </p>
                          </div>
                          <div class="set-title">
                            <h6>Other Notifications</h6>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" checked="checked" /><i class="check-box"></i>
                              Recommended videos.
                            </label>
                            <label>
                              <input type="checkbox" checked="checked" /><i class="check-box"></i>
                              activity on my page or channel.
                            </label>
                            <label>
                              <input type="checkbox" checked="checked" /><i class="check-box"></i>
                              Activity on my comments.
                            </label>
                            <label>
                              <input type="checkbox" checked="checked" /><i class="check-box"></i>
                              Reply to comments.
                            </label>
                            <label>
                              <input type="checkbox" checked="checked" /><i class="check-box"></i>
                              Mentions.
                            </label>
                          </div>
                          <div class="set-title">
                            <h6>Language Preference</h6>
                            <span>Select your email language</span>
                          </div>
                          <select class="select" style="display: none">
                            <option value="">English US</option>
                            <option value="">Tamil</option>

                          </select>

                          <p>
                            you will always get notifications you have
                            turned on for individual
                            <a href="#" title="">Manage All Subscriptions</a>
                          </p>
                        </div>
                      </div>
                      <!-- notification -->
                      <div class="tab-pane fade" id="messages" role="tabpanel">
                        <div class="set-title">
                          <h5>Messages Setting</h5>
                          <span>Set your login preference, help us
                            personalize your experience and make big
                            account change here.</span>
                          <div class="mesg-seting">
                            <div class="set-title">
                              <h6>
                                i'd like to receive emails and updates
                                from Voiz about
                              </h6>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>
                                Always General announcement, updates,
                                posts, and videos.
                              </label>
                              <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>
                                Personalise tips for my page.
                              </label>
                              <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>
                                Announcements and recommendations.
                              </label>
                              <p>
                                <a href="#" title="">learn more</a> about
                                emails from Voiz
                              </p>
                            </div>
                            <div class="set-title">
                              <h6>Other Messages</h6>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>
                                From Recommended videos.
                              </label>
                              <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>
                                Messages from activity on my page or
                                channel.
                              </label>
                              <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>
                                Message me the replyer Activity on my
                                comments.
                              </label>
                              <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>
                                Reply to comments.
                              </label>
                              <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>
                                Mentions.
                              </label>
                            </div>
                            <div class="set-title">
                              <h6>Language Preference</h6>
                              <span>Select your Messages language</span>
                            </div>
                            <select class="select" style="display: none">
                              <option value="">English US</option>
                              <option value="">Tamil </option>

                            </select>

                            <p>
                              you will always get notifications you have
                              turned on for individual
                              <a href="#" title="">Manage All Subscriptions</a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- messages -->


                      <!-- privacy -->
                      <div class="tab-pane fade" id="privacy" role="tabpanel">
                        <div class="set-title">
                          <h5>Privacy &amp; data</h5>
                          <span>Deceide whether your profile will be hidden
                            from search engine and what kind of data you
                            want to use to imporve the recommendation and
                            ads you see
                            <a href="#" title="">Learn more</a></span>
                        </div>
                        <div class="onoff-options">
                          <form method="post">
                            <div class="setting-row">
                              <span>Search Privacy</span>
                              <p>
                                Hide your profile from search engine
                                (Ex.google)
                                <a href="#" title="">Learn more</a>
                              </p>
                              <input type="checkbox" id="switch0001" />
                              <label for="switch0001" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="set-title">
                              <h5>Personalization</h5>
                            </div>
                            <div class="setting-row">
                              <span>Search Privacy</span>
                              <p>
                                use sites you visit to improve which
                                recommendation and ads you see.
                                <a href="#" title="">Learn more</a>
                              </p>
                              <input type="checkbox" id="switch0002" />
                              <label for="switch0002" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                              <span>Search Privacy</span>
                              <p>
                                use information from our partners to
                                improve which ads you see<a href="#" title="">Learn more</a>
                              </p>
                              <input type="checkbox" id="switch0003" />
                              <label for="switch0003" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- privacy -->
                      <div class="tab-pane fade" id="security" role="tabpanel">
                        <div class="stg-form-area">
                          <form method="post" class="c-form">
                            <div>
                              <label>Password</label>
                              <input type="password" placeholder="" value="" />
                            </div>
                            <div>
                              <label>Change Password</label>
                              <input type="password" placeholder="" value="" />
                            </div>


                            <div>
                              <button type="submit" data-ripple="">
                                Cancel
                              </button>
                              <button type="submit" data-ripple="">
                                Save
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- security -->
                      <div class="tab-pane fade" id="apps" role="tabpanel">
                        <div class="set-title">
                          <h5>Apps</h5>
                          <span>Keep track of everywhere you have login with
                            your Voiz profile and remove access from
                            apps you are no longer using with Voiz
                            <a href="#" title="">Learn more</a></span>
                        </div>
                        <p class="p-info">
                          You have not approved any app
                        </p>
                      </div>
                      <!-- apps -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- centerl meta -->
            <div class="col-lg-3 d-none d-lg-block">
              <aside class="sidebar static">
                <div class="widget">
                  <h4 class="widget-title">My Profile</h4>
                  <div class="your-page">
                    <figure>
                      <a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
                    </figure>
                    <div class="page-meta">
                      <a href="#" title="" class="underline">Suraj Jamdade</a>
                      <span><i class="ti-comment"></i><a href="insight.html" title="">suraj@gmail.com</a></span>
                    </div>
                    <ul class="page-publishes">
                      <li style="
                                    display: flex;
                                    justify-content: space-between;
                                  ">
                        <p style="
                                      font-size: 12px;
                                      font-weight: bold;
                                      color: #000;
                                    ">
                          Profile Viwers
                        </p>
                        <p style="color: #000; font-weight: bold">555</p>
                      </li>
                      <li style="
                                    display: flex;
                                    justify-content: space-between;
                                  ">
                        <p style="
                                      font-size: 12px;
                                      font-weight: bold;
                                      color: #000;
                                    ">
                          Total Posts
                        </p>
                        <p style="color: #000; font-weight: bold">89</p>
                      </li>
                    </ul>
                    <div class="page-likes">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active fade show" id="link1">
                          <span style="color: #000; font-weight: bold"><i class="ti-heart"></i> &nbsp;884</span>
                          <a href="#" title="weekly-likes">Post impressions</a>
                          <div class="users-thumb-list">
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                              <img src="images/resources/userlist-1.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                              <img src="images/resources/userlist-2.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                              <img src="images/resources/userlist-3.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                              <img src="images/resources/userlist-4.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Ema">
                              <img src="images/resources/userlist-5.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sophie">
                              <img src="images/resources/userlist-6.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Maria">
                              <img src="images/resources/userlist-7.jpg" alt="">
                            </a>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="link2">
                          <span><svg class="svg-inline--fa fa-eye" aria-hidden="true" focusable="false"
                              data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 576 512" data-fa-i2svg="">
                              <path fill="currentColor"
                                d="M572.5 238.1C518.3 115.5 410.9 32 288 32S57.69 115.6 3.469 238.1C1.563 243.4 0 251 0 256c0 4.977 1.562 12.6 3.469 17.03C57.72 396.5 165.1 480 288 480s230.3-83.58 284.5-206.1C574.4 268.6 576 260.1 576 256C576 251 574.4 243.4 572.5 238.1zM432 256c0 79.45-64.47 144-143.9 144C208.6 400 144 335.5 144 256S208.5 112 288 112S432 176.5 432 256zM288 160C285.7 160 282.4 160.4 279.5 160.8C284.8 170 288 180.6 288 192c0 35.35-28.65 64-64 64C212.6 256 201.1 252.7 192.7 247.5C192.4 250.5 192 253.6 192 256c0 52.1 43 96 96 96s96-42.99 96-95.99S340.1 160 288 160z">
                              </path>
                            </svg><!-- <i class="fa fa-eye"></i> -->440</span>
                          <a href="#" title="weekly-likes">440 new views this week</a>
                          <div class="users-thumb-list">
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                              <img src="images/resources/userlist-1.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                              <img src="images/resources/userlist-2.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                              <img src="images/resources/userlist-3.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                              <img src="images/resources/userlist-4.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Ema">
                              <img src="images/resources/userlist-5.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sophie">
                              <img src="images/resources/userlist-6.jpg" alt="">
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Maria">
                              <img src="images/resources/userlist-7.jpg" alt="">
                            </a>
                          </div>
                        </div>
                      </div>
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


@include('layouts.footer')
