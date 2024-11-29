@include('layouts.header')

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
  <div class="central-meta">
    <div class="title-block">
      <div class="row">
        <div class="col-lg-6">
          <div class="align-left">
            <h5>Nearby Donors</h5>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="row merged20">
            <div class="col-lg-6 col-md-7 col-sm-7">
              <form method="post">
                <input type="text" placeholder="Search..." />
                <button type="submit">
                  <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas"
                    data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    data-fa-i2svg="">
                    <path fill="currentColor"
                      d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                    </path>
                  </svg><!-- <i class="fa fa-search"></i> -->
                </button>
              </form>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
              <div class="select-options">
                <select class="select" style="display: none">
                  <option>Sort by</option>
                  <option>A to Z</option>
                  <option>See All</option>
                  <option>Newest</option>
                  <option>oldest</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
              <div class="select-options">
                <select class="select" style="display: none">
                  <option>Group</option>
                  <option>A+</option>
                  <option>AB+</option>
                  <option>A-</option>
                  <option>o+</option>
                  <option>o-</option>
                  <option>B+</option>
                  <option>B-</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="central-meta padding30">
    <div class="row merged20">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="addgroup" style="height: auto">
          <div class="item-upload">
            <svg class="svg-inline--fa fa-circle-plus" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="circle-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
              data-fa-i2svg="">
              <path fill="currentColor"
                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256C397.4 512 512 397.4 512 256S397.4 0 256 0zM352 280H280V352c0 13.2-10.8 24-23.1 24C242.8 376 232 365.2 232 352V280H160C146.8 280 136 269.2 136 256c0-13.2 10.8-24 24-24H232V160c0-13.2 10.8-24 24-24C269.2 136 280 146.8 280 160v72h72C365.2 232 376 242.8 376 256C376 269.2 365.2 280 352 280z">
              </path>
            </svg><!-- <i class="fa fa-plus-circle"></i> -->
            <div class="upload-meta">
              <h5>Create Group</h5>
              <span>its only take a few minutes!</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="friend-block">
          <div class="more-opotnz">
            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas"
              data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
              </path>
            </svg><!-- <i class="fa fa-ellipsis-h"></i> -->
            <ul>
              <li><a href="#" title="">Block</a></li>
              <li><a href="#" title="">UnBlock</a></li>
              <li>
                <a href="#" title="">Mute Notifications</a>
              </li>
              <li>
                <a href="#" title="">hide from friend list</a>
              </li>
            </ul>
          </div>
          <figure>
            <img src="images/stories/storyfull-3.jpg" alt="" style="width: 60px; height: 60px" />
          </figure>

          <div class="frnd-meta">
            <div class="frnd-name">
              <a href="#" title="">Suraj Jamdade</a>
              <span>India MH, Pune</span>
            </div>
            <a class="send-mesg" href="#" title="">Message</a>
          </div>
        </div>
      </div>
    </div>
    <div class="lodmore">
      <span>Viewing 1-16 of 30 friends</span>
      <button class="btn-view btn-load-more"></button>
    </div>
  </div>
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
          <input type="text" placeholder="Suraj Jamdade" />
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

<div class="popup-wraper4">
  <div class="popup creat-group">
    <span class="popup-closed"><i class="ti-close"></i></span>
    <div class="popup-meta">
      <div class="popup-head">
        <h5>Create Friend Group</h5>
      </div>
      <div class="group-adding">
        <div class="friend-group">
          <div class="change-photo">
            <figure>
              <img src="images/resources/admin2.jpg" alt="" />
            </figure>
            <div class="edit-img">
              <form class="edit-phto">
                <label class="fileContainer">
                  <i class="fa fa-camera-retro"></i>
                  Upload Group Avatar
                  <input type="file" />
                </label>
              </form>
            </div>
          </div>
          <form method="post">
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Location" />
            <select>
              <option value="Select">Select Blood Group</option>
              <option value="">A+</option>
              <option value="">A-</option>
              <option value="">AB+</option>
              <option value="">AB-</option>
              <option value="">o+</option>
              <option value="">o-</option>
              <option value="">B+</option>
              <option value="">B-</option>
            </select>
            <button class="main-btn">Create Group</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Create friends Group -->
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