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
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.3517152691!2d78.24323096918031!3d17.412281015397654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1681234567890!5m2!1sen!2sin"
                                        width="100%" height="450" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"
                                        style="border-radius: 20px; padding: 0px; border: none;">
                                    </iframe>

                                </div>

                                <!-- <div style="
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
                </div> -->

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
                                            <img src="images/resources/admin.jpg" alt=""
                                                style="border-radius: 100px; position: relative" />
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
                                                    <img src="images/icons/Monotone add.svg" alt="img"
                                                        style="width: 20px" />
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
                        <!-- filter -->
                        <div class="d-none d-md-none">
                            <div class="">
                                <form>
                                    <div class="mobile-filter-wrapper">
                                        <p>Filter</p>
                                        <div class="search-container">
                                            <select name="" id="">
                                                <option value="" selected>State</option>
                                                <option>Maharashtra</option>
                                                <option>Tamilnadu</option>
                                                <option>Karnataka</option>
                                            </select>
                                            <select name="" id="">
                                                <option value="" selected>District</option>
                                                <option>Pune</option>
                                                <option>Sangli</option>
                                                <option>Satara</option>
                                            </select>
                                            <select name="" id="">
                                                <option value="" selected>Division</option>
                                                <option>Kothrud</option>
                                                <option>Baner</option>
                                                <option>Viman-nagar</option>
                                            </select>

                                            <button type="submit" class="button">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>




                        <div class="central-meta postbox">
                            <form method="post" enctype="multipart/form-data" action="{{ route('create.post') }}">
                                @csrf
                                <span class="create-post" style="font-size: 18px;">
                                    <i class="fa-regular fa-stars"></i> Create post
                                </span>

                                <div class="new-postbox">
                                    <div style="display: flex;justify-content: space-between;">
                                        <div style="display: flex;gap: 10px;align-items: center;">
                                            <figure>
                                                <img src="images/resources/admin.jpg" alt=""
                                                    style="border-radius: 100px;position: relative;" />
                                                <img src="images/icons/_AvatarVerifiedIcon.svg" alt="img"
                                                    style="position: absolute;top: 95px;left: 55px;">
                                            </figure>
                                            <div>
                                                <h6 style="color: #000;margin-bottom: 0;">{{ session('user_name') }}
                                                </h6>
                                                <p>{{ session('user_userName', 'userName') }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="newpst-input">
                                        <textarea rows="4" placeholder="Share some what you are thinking?"
                                            name="postText"
                                            style="border: 1px solid #f2f2f2;background: #d1dcea8f;margin-bottom: 15px;border-radius: 10px;"></textarea>
                                    </div>

                                    <div class="attachments">
                                        <ul>
                                            <li style="
                          padding-left: 10px;
                        ">
                                                <label for="camera-input" style="margin: 0">
                                                    <img src="images/icons/camera.svg" alt="img" style="
                              width: 24px;
                              height: 24px;
                              cursor: pointer;
                            " />
                                                </label>
                                                <input type="file" id="camera-input" accept="image/*"
                                                    capture="environment" style="display: none" />
                                            </li>
                                            <li style="
                      border-left: 2px solid #40599a7d;
                      padding-left: 10px;
                    ">
                                                <img src="images/icons/music.svg" alt="img"
                                                    style="width: 24px;height: 24px;">

                                                <label class="fileContainer">
                                                    <input type="file" name="postAudio" accept="audio/*" title="No audio file chosen"
                                                      onchange="handleFileUpload(this, 'audio')" />
                                                    <input type="hidden" name="audioUrl" />
                                                  </label>
                                            </li>

                                            <li style="border-left: 2px solid #40599a7d;padding-left: 10px;">
                                                <img src="images/icons/gallery.svg" alt="img"
                                                    style="width: 24px;height: 24px;" id="galleryIcon">
                                                {{-- <label class="fileContainer">
                                                    <input type="file" multiple style="display: none;"
                                                        title="No image file chosen" name="postImage[]"
                                                        onchange="handleMultipleFileUpload(this, 'image')"
                                                        accept="image/*" />
                                                    <input type="hidden" name="imageUrl" id="imageUrlInput" />
                                                </label> --}}


                                                <label class="fileContainer">
                                                    <input type="file" id="fileInput" name="postImage[]"
                                                        accept="image/*" title="No image file chosen" multiple=""
                                                        onchange="handleMultipleFileUpload(this, 'image')">
                                                    <input type="hidden" name="imageUrl" id="imageUrlInput">
                                                </label>


                                            </li>

                                            <li style="border-left: 2px solid #40599a7d;padding-left: 10px;">
                                                <img src="images/icons/video.svg" alt="img"
                                                    style="width: 24px;height: 24px;">
                                                    <label class="fileContainer">
                                                        <input type="file" name="postVideo" accept="video/*" title="No video file chosen"
                                                          onchange="handleFileUpload(this, 'video')" />
                                                        <input type="hidden" name="videoUrl" />
                                                      </label>
                                            </li>

                                            <!-- Add other attachment options -->
                                            <li class="preview-btn mt-3 mt-lg-0">
                                                <button class="post-btn-preview" type="submit"
                                                    style="border-radius: 10px;background: #257180;color: #fff;font-weight: bold;padding: 15px 20px;">
                                                    Post &nbsp;<i class="fa fa-share"></i>
                                                </button>
                                            </li>


                                            <li style="
                        border-left: 2px solid #40599a7d;
                        padding-left: 10px;
                      ">
                                                <img src="images/icons/instagram.svg" alt="img"
                                                    style="width: 24px; height: 24px" />
                                                <label class="fileContainer">
                                                    <input type="file" />
                                                </label>
                                            </li>


                                            <li style="
                      border-left: 2px solid #40599a7d;
                      padding-left: 10px;
                    ">
                                                <img src="images/icons/tag.svg" alt="img" style="
                        width: 24px;
                        height: 24px;
                        cursor: pointer;
                      " title="create poll" data-toggle="modal" data-target="#myPollModal" />

                                                <div class="modal fade" id="myPollModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true"
                                                    style="z-index: 9999">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content" style="border-radius: 20px">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <div style="
                                display: flex;
                                gap: 10px;
                                align-items: center;
                              ">
                                                                    <div>
                                                                        <img src="images/icons/tag.svg" alt="user"
                                                                            style="width: 20px" />
                                                                    </div>
                                                                    <div style="
                                  display: flex;
                                  flex-direction: column;
                                  gap: 10px;
                                ">
                                                                        <h6 class="modal-title">
                                                                            Tag People
                                                                        </h6>
                                                                        <small>Tagging friends will send them each
                                                                            a message</small>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <!-- Modal Body -->
                                                            <div class="modal-body"
                                                                style="height: 500px; overflow-y: scroll">
                                                                <div>
                                                                    <div class="post-comt-box mb-lg-4 w-100"
                                                                        style="padding: 0">
                                                                        <form method="post">
                                                                            <input type="search"
                                                                                placeholder="Search Friends..." />
                                                                            <button type="submit"></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-lg-2 mt-3">
                                                                    <div class="col-lg-3 col-3 mb-4">
                                                                        <div>
                                                                            <div style="position: relative">
                                                                                <img src="images/resources/admin.jpg"
                                                                                    alt="user" style="
                                        width: 60px;
                                        height: 60px;
                                        border-radius: 50%;
                                      " />
                                                                            </div>
                                                                            <div style="
                                      position: absolute;
                                      top: 0px;
                                      left: 65px;
                                      width: 20px;
                                      height: 20px;
                                      background: #cb6040;
                                      border-radius: 50px;
                                      display: flex;
                                      align-items: center;
                                      justify-content: center;
                                      color: #fff;
                                    ">
                                                                                <a href="#">
                                                                                    <i class="fa fa-times"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-3 col-3 mb-4">
                                                                        <div>
                                                                            <div style="position: relative">
                                                                                <img src="images/resources/admin.jpg"
                                                                                    alt="user" style="
                                        width: 60px;
                                        height: 60px;
                                        border-radius: 50%;
                                      " />
                                                                            </div>
                                                                            <div style="
                                      position: absolute;
                                      top: 0px;
                                      left: 65px;
                                      width: 20px;
                                      height: 20px;
                                      background: #cb6040;
                                      border-radius: 50px;
                                      display: flex;
                                      align-items: center;
                                      justify-content: center;
                                      color: #fff;
                                    ">
                                                                                <a href="#">
                                                                                    <i class="fa fa-times"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="" style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                              ">
                                                                    <div>
                                                                        <h6 style="color: #000">Friends</h6>
                                                                    </div>
                                                                    <div>
                                                                        <div class="checkbox">
                                                                            <label style="
                                      display: flex;
                                      align-items: center;
                                    ">
                                                                                <input type="checkbox"
                                                                                    checked="checked" /><i
                                                                                    class="check-box"></i>
                                                                                <p style="
                                        margin-bottom: 0;
                                        margin-top: 9px;
                                        font-weight: bold;
                                        color: #000;
                                      ">
                                                                                    Select All
                                                                                </p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr style="margin: 0" />
                                                                <div class="mt-4 mb-4">
                                                                    <ul style="padding: 0">
                                                                        <li style="
                                    width: 100%;
                                    margin-left: 0 !important;
                                  ">
                                                                            <div style="
                                      display: flex;
                                      justify-content: space-between;
                                      width: 100%;
                                    ">
                                                                                <div style="
                                        display: flex;
                                        gap: 10px;
                                        align-items: center;
                                      ">
                                                                                    <img src="images/resources/admin.jpg"
                                                                                        alt="user" style="
                                          width: 40px;
                                          height: 40px;
                                          border-radius: 50px;
                                        " />
                                                                                    <h6 style="
                                          color: #000;
                                          font-size: 14px;
                                        ">
                                                                                        Suraj Jamdade
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="checkbox">
                                                                                    <label style="
                                          display: flex;
                                          align-items: center;
                                        ">
                                                                                        <input type="checkbox"
                                                                                            checked="checked" /><i
                                                                                            class="check-box"></i>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <hr />
                                                                        <li style="
                                    width: 100%;
                                    margin-left: 0 !important;
                                  ">
                                                                            <div style="
                                      display: flex;
                                      justify-content: space-between;
                                      width: 100%;
                                    ">
                                                                                <div style="
                                        display: flex;
                                        gap: 10px;
                                        align-items: center;
                                      ">
                                                                                    <img src="images/resources/admin.jpg"
                                                                                        alt="user" style="
                                          width: 40px;
                                          height: 40px;
                                          border-radius: 50px;
                                        " />
                                                                                    <h6 style="
                                          color: #000;
                                          font-size: 14px;
                                        ">
                                                                                        Suraj Jamdade
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="checkbox">
                                                                                    <label style="
                                          display: flex;
                                          align-items: center;
                                        ">
                                                                                        <input type="checkbox"
                                                                                            checked="checked" /><i
                                                                                            class="check-box"></i>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <hr />
                                                                        <li style="
                                    width: 100%;
                                    margin-left: 0 !important;
                                  ">
                                                                            <div style="
                                      display: flex;
                                      justify-content: space-between;
                                      width: 100%;
                                    ">
                                                                                <div style="
                                        display: flex;
                                        gap: 10px;
                                        align-items: center;
                                      ">
                                                                                    <img src="images/resources/admin.jpg"
                                                                                        alt="user" style="
                                          width: 40px;
                                          height: 40px;
                                          border-radius: 50px;
                                        " />
                                                                                    <h6 style="
                                          color: #000;
                                          font-size: 14px;
                                        ">
                                                                                        Suraj Jamdade
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="checkbox">
                                                                                    <label style="
                                          display: flex;
                                          align-items: center;
                                        ">
                                                                                        <input type="checkbox"
                                                                                            checked="checked" /><i
                                                                                            class="check-box"></i>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <hr />
                                                                        <li style="
                                    width: 100%;
                                    margin-left: 0 !important;
                                  ">
                                                                            <div style="
                                      display: flex;
                                      justify-content: space-between;
                                      width: 100%;
                                    ">
                                                                                <div style="
                                        display: flex;
                                        gap: 10px;
                                        align-items: center;
                                      ">
                                                                                    <img src="images/resources/admin.jpg"
                                                                                        alt="user" style="
                                          width: 40px;
                                          height: 40px;
                                          border-radius: 50px;
                                        " />
                                                                                    <h6 style="
                                          color: #000;
                                          font-size: 14px;
                                        ">
                                                                                        Suraj Jamdade
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="checkbox">
                                                                                    <label style="
                                          display: flex;
                                          align-items: center;
                                        ">
                                                                                        <input type="checkbox"
                                                                                            checked="checked" /><i
                                                                                            class="check-box"></i>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <hr />
                                                                        <li style="
                                    width: 100%;
                                    margin-left: 0 !important;
                                  ">
                                                                            <div style="
                                      display: flex;
                                      justify-content: space-between;
                                      width: 100%;
                                    ">
                                                                                <div style="
                                        display: flex;
                                        gap: 10px;
                                        align-items: center;
                                      ">
                                                                                    <img src="images/resources/admin.jpg"
                                                                                        alt="user" style="
                                          width: 40px;
                                          height: 40px;
                                          border-radius: 50px;
                                        " />
                                                                                    <h6 style="
                                          color: #000;
                                          font-size: 14px;
                                        ">
                                                                                        Suraj Jamdade
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="checkbox">
                                                                                    <label style="
                                          display: flex;
                                          align-items: center;
                                        ">
                                                                                        <input type="checkbox"
                                                                                            checked="checked" /><i
                                                                                            class="check-box"></i>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <hr />
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>



                                        </ul>


                                        <div id="previewContainer"
                                            style="margin-top: 10px; display: flex; flex-wrap: wrap; gap: 10px;"></div>





                                    </div>
                                </div>
                            </form>

                        </div>


                        <!-- add post new box -->


                        <!-- Add this popup div -->
                        <div class="modal fade" id="uploadStatusModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body text-center">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="sr-only">Uploading...</span>
                                        </div>
                                        <p class="mt-2">Uploading file...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">

                            @foreach($posts as $key => $post)

                            <div class="central-meta item">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <img src="images/resources/admin.jpg" alt=""
                                                style="border-radius: 100px;position: relative;" />
                                            <img src="images/icons/_AvatarVerifiedIcon.svg" alt="img"
                                                style="position: absolute;top: 25px;left: 25px;z-index: 999;">
                                        </figure>
                                        <div class="friend-name">
                                            <div class="more">
                                                <div class="more-post-optns">
                                                    <i class="ti-more-alt"></i>
                                                    <ul>
                                                        <li>
                                                          <a href="#" class="bad-report">
                                                            <i class="fa-regular fa-edit"></i> Edit
                                                            Post
                                                          </a>
                                                        </li>

                                                        <li>
                                                          <a href="#">
                                                            <i class="fa-regular fa-bookmark"></i>
                                                            Save Post
                                                          </a>
                                                        </li>
                                                        <!-- <li class="bad-report">
                                                          <a href="#">
                                                            <i
                                                              class="fa-solid fa-flag-checkered"
                                                            ></i>
                                                            Report Post
                                                          </a>
                                                        </li> -->
                                                        <li>
                                                          <a href="#">
                                                            <i
                                                              class="fa-sharp fa-regular fa-times"
                                                            ></i>
                                                            Hide Post
                                                          </a>
                                                        </li>
                                                        <li>
                                                          <a href="javascript:void(0)" onclick="deletePost('{{ $post['_id'] }}')">
                                                            <i
                                                              class="fa-sharp fa-regular fa-trash-can"
                                                            ></i>
                                                            Delete Post
                                                          </a>
                                                        </li>
                                                      </ul>
                                                </div>
                                            </div>

                                            <ins><a href="#" title="">{{ $post['userName'] ?? 'No Name Found'
                                                    }}</a></ins>

                                            <span style="color: #475569 !important;">
                                                <i class="fa fa-globe"></i> published:

                                                {{-- {{ \Carbon\Carbon::parse($post['createdAt'])->format('d-m-Y h:i:s
                                                A') }} --}}

                                                @php
                                                $dateString = '29/11/2024, 5:53:09 am';
                                                $format = 'd/m/Y, h:i:s a';

                                                $date = \DateTime::createFromFormat($format, $dateString);

                                                if ($date === false) {
                                                echo 'Invalid date format.';
                                                } else {
                                                echo $date->format('Y-m-d H:i:s'); // Convert to standard format
                                                }
                                                @endphp

                                            </span>
                                        </div>

                                        <div class="post-meta">
                                            <div class="description">
                                                @if(strlen($post['postText']) > 250)
                                                <p class="post-text-{{ $post['_id'] }}">
                                                    {{ substr($post['postText'], 0, 250) }}...
                                                    <a href="javascript:void(0)" class="read-more-btn"
                                                        data-post-id="{{ $post['_id'] }}"
                                                        onclick="showFullText('{{ $post['_id'] }}', '{{ addslashes($post['postText']) }}')">Read
                                                        More</a>
                                                </p>
                                                @else
                                                <p>{{ $post['postText'] }}</p>
                                                @endif
                                            </div>




                                            @if(isset($post['img']))

                                            @if(count($post['img']) == 1)

                                            <figure>
                                                <a href="#">
                                                    <img src="{{ $post['img'][0] }}" alt="img"
                                                        style="width: 100%; height: 300px;border-radius: 20px;" />
                                                </a>


                                            </figure>

                                            @else


                                            <figure>
                                                <div class="row">
                                                    @foreach ($post['img'] as $imgUploaded)

                                                    @php
                                                        if(count($post['img']) == 2){
                                                            $viewcreation = "col-6";
                                                            $viewHeight = "height: 250px;";
                                                        }elseif (count($post['img']) == 3) {
                                                            $viewcreation = "col-4";
                                                            $viewHeight = "height: 200px;";
                                                        }elseif (count($post['img']) == 4) {
                                                            $viewcreation = "col-3";
                                                            $viewHeight = "height: 200px;";

                                                        }else{
                                                            $viewcreation = "col-2";
                                                            $viewHeight = "height: 100px;";
                                                        }

                                                    @endphp

                                                    <div class="{{ $viewcreation }} px-2 mb-2">
                                                        <a href="#">
                                                            <img src="{{ $imgUploaded }}" alt="img"
                                                                style="width: 100%;{{ $viewHeight }}border-radius: 20px;" />
                                                        </a>

                                                    </div>
                                                    @endforeach

                                            </figure>


                                            @endif
                                            @endif

                                            {{--
                                            @if(isset($post['video']))
                                            <figure>

                                                <video width="100%" height="300px" controls>
                                                    <source src="{{ $post['video'] }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <!-- <i>
        <svg class="play" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         height="55px" width="55px" viewBox="0 0 100 100">
        <path class="stroke-solid" fill="none" stroke=""
        d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
        C97.3,23.7,75.7,2.3,49.9,2.5"/>
        <path class="icon" fill=""
        d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
        </svg>
        </i> -->

                                            </figure>
                                            @endif

                                            @if(isset($post['audio']))
                                            <div class="sound-track-area p-3 my-3"
                                                style="background: linear-gradient(145deg, #f0f0f0, #ffffff);     margin-left: 3rem;  border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div class="audio-player w-100">
                                                        <audio class="w-100" controls
                                                            style="height: 40px; border-radius: 30px;">
                                                            <source src="{{ $post['audio'] }}" type="audio/mp3">
                                                        </audio>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif --}}




                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
                                                        <span class="views" title="views">
                                                            <img src="images/icons/eye.svg" alt="img"
                                                                style="width: 20px;">
                                                            <ins>0</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <div class="likes heart" title="Like/Dislike"
                                                            data-post-id="{{ $post['_id'] }}">
                                                            <img src="images/icons/heart.svg" alt="img"
                                                                style="width: 20px;">
                                                            <span class="like-count">{{ $post['likeCount'] ?? 0
                                                                }}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="comment" title="Comments" data-toggle="collapse"
                                                            data-target="#comments-{{ $post['_id'] }}">
                                                            <img src="images/icons/comments.svg" alt="img"
                                                                style="width: 20px;">
                                                            <ins>{{ count($post['comments'] ?? []) }}</ins>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <a class="share-pst" href="#" title="Share">
                                                                <img src="images/icons/share-2.svg" alt="img"
                                                                    style="width: 20px;">
                                                            </a>
                                                            <ins>0</ins>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>



                                        <div class="coment-area collapse" id="comments-{{ $post['_id'] }}">
                                            <ul class="we-comet">
                                                @foreach($post['comments'] ?? [] as $comment)
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/nearly1.jpg" alt="" />
                                                    </div>
                                                    <div class="we-comment">
                                                        <h5>
                                                            <a href="time-line" title="">{{ $comment['user']['name'] ??
                                                                'Unknown User' }}</a>
                                                        </h5>
                                                        <p>{{ $comment['text'] }}</p>
                                                        <div class="inline-itms">
                                                            <span>{{
                                                                \Carbon\Carbon::parse($comment['createdAt'])->diffForHumans()
                                                                }}</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach

                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/nearly1.jpg" alt="" />
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form class="comment-form" style="margin-top: 0;"
                                                            data-post-id="{{ $post['_id'] }}">
                                                            <textarea placeholder="Write your comment"></textarea>
                                                            <button type="submit">Post</button>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
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

                            <!-- how it's work -->
                            <div class="widget">
                                <h4 class="widget-title">My Profile</h4>
                                <div class="your-page">
                                    <div class="text-center">
                                        <figure>
                                            <img src="images/resources/admin.jpg" alt="img"
                                                style="border-radius: 100px;position: relative;width: 112px;height: 112px;">
                                            <img src="images/icons/_AvatarVerifiedIcon.svg" alt="img" style="position: absolute;    top: 165px;
                  left: 165px;">
                                        </figure>
                                        <div>
                                            <h6 style="color: #1E293B;font-size: 20px;margin-bottom: 0;">{{
                                                session('user_name', 'Guest') }}
                                            </h6>
                                            <p style="margin-bottom: 0;font-size: 16px;color: #1E293B;">
                                                {{ session('user_userName', 'userName') }}
                                            </p>
                                            <p style="margin-bottom: 0;font-size: 16px;color: #475569;">
                                                Rajasthan, India 🇮🇳
                                            </p>
                                        </div>
                                    </div>
                                    <ul class="page-publishes" style="display: flex;">
                                        <li>
                                            <p style="
                        font-size: 20px;
                        font-weight: bold;
                        color: #1E293B;
                        margin-bottom: 0;
                      ">
                                                0
                                            </p>
                                            <p style="color: #475569; font-size: 14px;font-weight: 600;">Posts</p>
                                        </li>
                                        <li style="border-left: 1px solid #CBD5E1;">
                                            <p style="
                        font-size: 20px;
                        font-weight: bold;
                        color: #1E293B;
                        margin-bottom: 0;
                      ">
                                                0
                                            </p>
                                            <p style="color: #475569; font-size: 14px;font-weight: 600;">Viewers</p>
                                        </li>
                                        <li style="border-left: 1px solid #CBD5E1;">
                                            <p style="
                        font-size: 20px;
                        font-weight: bold;
                        color: #1E293B;
                        margin-bottom: 0;
                      ">
                                                0
                                            </p>
                                            <p style="color: #475569; font-size: 14px;font-weight: 600;">Total Post</p>
                                        </li>

                                    </ul>
                                    <div class="page-likes"
                                        style="padding: 10px;background: #EEF2FF;border-radius: 20px;">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active fade show" id="link1">
                                                <div class="users-thumb-list mb-3">
                                                    <a href="#" title="Anderw" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-1.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="frank" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-2.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Sara" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-3.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Amy" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-4.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Ema" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-5.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Sophie" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-6.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Maria" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-7.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <p
                                                        style="color: #000; font-weight: bold;text-align: center;margin-bottom:0 !important;">
                                                        +1,158 <span
                                                            style="font-size: 16px;color: #475569;font-weight: 300;">Followers</span>
                                                    </p>
                                                </div>
                                                <div
                                                    style="display: flex;align-items: center;gap: 10px;justify-content: center;">
                                                    <div style="margin-top: -16px;">
                                                        <img src="images/icons/TrendUp.svg" alt="img"
                                                            style="width: 20px;">
                                                    </div>
                                                    <p
                                                        style="color: #15803D; font-weight: bold;text-align: center;font-size: 14px;">
                                                        23%</p>
                                                    <p style="font-size: 14px;color: #475569;font-weight: 300;">vs last
                                                        month</p>
                                                </div>
                                                <a href="#" title="weekly-likes">You gained a substantial amount of
                                                    followers this month!</a>

                                            </div>
                                            <div class="tab-pane fade" id="link2">
                                                <span><i class="fa fa-eye"></i>440</span>
                                                <a href="#" title="weekly-likes">440 new views this week</a>
                                                <div class="users-thumb-list">
                                                    <a href="#" title="Anderw" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-1.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="frank" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-2.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Sara" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-3.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Amy" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-4.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Ema" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-5.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Sophie" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-6.jpg" alt="" />
                                                    </a>
                                                    <a href="#" title="Maria" data-toggle="tooltip">
                                                        <img src="images/resources/userlist-7.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="singin">
                                    <h4 class="widget-title">Filter</h4>
                                    <form method="post" style="
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                  ">
                                        <!-- <select name="" id="" class="form-control">
                    <option value="" selected>State</option>
                    <option>Maharashtra</option>
                    <option>Tamilnadu</option>
                    <option>Karntaka</option>
                  </select>
                  <select name="" id="" class="form-control">
                    <option value="" selected>District</option>
                    <option>Pune</option>
                    <option>Satara</option>
                    <option>Sangli</option>
                  </select>
                  <select name="" id="" class="form-control">
                    <option value="" selected>constituency</option>
                    <option>Kothrud</option>
                    <option>Baner</option>
                    <option>Viman-nagar</option>
                  </select> -->
                                        <select name="" id="" class="form-control">
                                            <option value="" selected>Division</option>
                                            <option>Kothrud</option>
                                            <option>Baner</option>
                                            <option>Viman-nagar</option>
                                        </select>

                                        <button type="submit">Search &nbsp; <i class="fa fa-search"></i></button>
                                    </form>
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
        <a href="public-poll" class="mobile-bottom-nav-nav-item">
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
                    <div class="col-4">
                        <a href="#">
                            <figure class="text-center">
                                <img src="images/resources/speak-2.jpg" alt="img"
                                    style="width: 60px; height: 60px; border-radius: 50%" />
                                <figcaption>Suraj Jamdade</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <figure class="text-center">
                                <img src="images/resources/speak-2.jpg" alt="img"
                                    style="width: 60px; height: 60px; border-radius: 50%" />
                                <figcaption>Suraj Jamdade</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <figure class="text-center">
                                <img src="images/resources/speak-2.jpg" alt="img"
                                    style="width: 60px; height: 60px; border-radius: 50%" />
                                <figcaption>Suraj Jamdade</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <figure class="text-center">
                                <img src="images/resources/speak-2.jpg" alt="img"
                                    style="width: 60px; height: 60px; border-radius: 50%" />
                                <figcaption>Suraj Jamdade</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <figure class="text-center">
                                <img src="images/resources/speak-2.jpg" alt="img"
                                    style="width: 60px; height: 60px; border-radius: 50%" />
                                <figcaption>Suraj Jamdade</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <figure class="text-center">
                                <img src="images/resources/speak-2.jpg" alt="img"
                                    style="width: 60px; height: 60px; border-radius: 50%" />
                                <figcaption>Suraj Jamdade</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <figure class="text-center">
                                <img src="images/resources/speak-2.jpg" alt="img"
                                    style="width: 60px; height: 60px; border-radius: 50%" />
                                <figcaption>Suraj Jamdade</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-4">
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
                            <a href="#" title="Copy Post Link" style="background: blue !important"><i
                                    class="fa fa-link"></i></a>
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
                                <input type="radio" name="radio" checked="checked" /><i class="check-box"></i>It's spam
                                or abuse
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio" /><i class="check-box"></i>It breaks r/technology's
                                rules
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
                            <div id="demo" class="carousel slide" data-interval="false" data-ride="carousel"
                                data-pause="hover">
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
                                            <a title="" href="#"><i
                                                    class="fa-solid fa-circle-check"></i><span>20</span></a>
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
                                            <a title="" href="#"><i
                                                    class="fa-solid fa-circle-check"></i><span>20</span></a>
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
                                            <a title="" href="#"><i
                                                    class="fa-solid fa-circle-check"></i><span>20</span></a>
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
