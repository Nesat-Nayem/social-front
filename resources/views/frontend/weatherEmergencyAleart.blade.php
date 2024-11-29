@include('layouts.header')
      <!-- topbar -->

      <section>
        <div class="gap2 gray-bg">
          <div class="container">
            <div class="row">


          
              <div class="col-lg-12 mb-4">
                <div class="weather-header purple low-opacity">
                  <div
                    class="bg-image"
                    style="
                      background-image: url(images/resources/weatherbg.jpg);
                    "
                  ></div>
                  <div class="weather-top">
                    <div class="weather-week">
                      <div class="icon sun-shower">
                        <div class="cloud"></div>
                        <div class="sun">
                          <div class="rays"></div>
                        </div>
                        <div class="rain"></div>
                      </div>
                    </div>
                    <div class="weather-area">
                      <h2>Tamil Nadu, <span>India</span></h2>
                      <span>22°</span>
                      <em>Mostly sunny</em>
                    </div>
                  </div>
                  <div class="time">
                    <script>
                      const date = new Date();
                      document.write(date.toDateString());
                    </script>
                    <span class="date"></span>
                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="row merged20">
                  <div class="col-lg-3">
                    <aside class="sidebar static left">
                      <div class="widget">
                        <h4 class="widget-title">Calendar</h4>
                        <div class="full-calendar">
                          <div id="yourId" class="jalendar">
                            <input type="hidden" class="data1" />
                            <input type="hidden" class="data2" />
                            <div class="jalendar-container">
                              <div class="jalendar-pages">
                                <div class="header">
                                  <a class="prv-m" id="prev-month"
                                    ><svg ...></svg
                                  ></a>
                                  <h1
                                    id="calendar-month-year"
                                    style="color: red"
                                  ></h1>
                                  <a class="nxt-m" id="next-month"
                                    ><svg ...></svg
                                  ></a>
                                  <div class="day-names">
                                    <h2>Sun</h2>
                                    <h2>Mon</h2>
                                    <h2>Tue</h2>
                                    <h2>Wed</h2>
                                    <h2>Thu</h2>
                                    <h2>Fri</h2>
                                    <h2>Sat</h2>
                                  </div>
                                </div>
                                <div class="days" id="calendar-days"></div>
                                <div class="add-event">
                                  <div class="events">
                                    <h3><span>0</span> Event(s)</h3>
                                    <div class="events-list"></div>
                                  </div>
                                  <div class="close-button">Close</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="widget">
                        <h4 class="widget-title">Safety Tips & Resources:</h4>
                        <ul class="recent-jobs">
                          <li>
                            <h6>
                              <a href="#" title="">Thunderstorms</a>
                              <span></span>
                            </h6>
                            <p>
                              find a safe place in a nearby sturdy building.
                            </p>
                            <span
                              >Resources:
                              <a href="#" title="">weather department</a></span
                            >
                          </li>
                          <li>
                            <h6>
                              <a href="#" title="">Thunderstorms</a>
                              <span></span>
                            </h6>
                            <p>
                              find a safe place in a nearby sturdy building.
                            </p>
                            <span
                              >Resources:
                              <a href="#" title="">weather department</a></span
                            >
                          </li>
                          <li>
                            <h6>
                              <a href="#" title="">Thunderstorms</a>
                              <span></span>
                            </h6>
                            <p>
                              find a safe place in a nearby sturdy building.
                            </p>
                            <span
                              >Resources:
                              <a href="#" title="">weather department</a></span
                            >
                          </li>
                          <li>
                            <h6>
                              <a href="#" title="">Thunderstorms</a>
                              <span></span>
                            </h6>
                            <p>
                              find a safe place in a nearby sturdy building.
                            </p>
                            <span
                              >Resources:
                              <a href="#" title="">weather department</a></span
                            >
                          </li>
                          <li>
                            <h6>
                              <a href="#" title="">Thunderstorms</a>
                              <span></span>
                            </h6>
                            <p>
                              find a safe place in a nearby sturdy building.
                            </p>
                            <span
                              >Resources:
                              <a href="#" title="">weather department</a></span
                            >
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
                              <h5>Weather forecast</h5>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="row merged20">
                              <div class="col-lg-11 col-md-11 col-sm-11">
                                <form method="post">
                                  <input
                                    type="text"
                                    placeholder="Search Location"
                                  />
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
                              <div class="col-lg-1 col-md-1 col-sm-1">
                                <div class="option-list">
                                  <svg
                                    class="svg-inline--fa fa-ellipsis-vertical"
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="ellipsis-vertical"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 128 512"
                                    data-fa-i2svg=""
                                  >
                                    <path
                                      fill="currentColor"
                                      d="M128 64c0-35.39-28.62-64-64-64S0 28.61 0 64s28.62 64 64 64S128 99.39 128 64zM128 256c0-35.39-28.62-64-64-64S0 220.6 0 256s28.62 64 64 64S128 291.4 128 256zM128 448c0-35.39-28.62-64-64-64s-64 28.61-64 64s28.62 64 64 64S128 483.4 128 448z"
                                    ></path></svg
                                  ><!-- <i class="fa fa-ellipsis-v"></i> -->
                                  <ul>
                                    <li>
                                      <a title="" href="#">Show Public</a>
                                    </li>
                                    <li>
                                      <a title="" href="#">Show Private</a>
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
                      <span class="create-post"
                        >Hourly Forecast<a title="" href="#">Full Day</a></span
                      >
                      <ul class="hourly-forecast">
                        <li>
                          <i class="wi wi-day-sunny"></i>
                          <span>22°</span>
                          <em>04:00 PM</em>
                        </li>
                        <li>
                          <i class="wi wi-day-cloudy"></i>
                          <span>20°</span>
                          <em>05:00 PM</em>
                        </li>
                        <li>
                          <i class="wi wi-day-hail"></i>
                          <span>24°</span>
                          <em>06:00 PM</em>
                        </li>
                        <li>
                          <i class="wi wi-day-lightning"></i>
                          <span>26°</span>
                          <em>07:00 PM</em>
                        </li>
                        <li>
                          <i class="wi wi-day-showers"></i>
                          <span>28°</span>
                          <em>08:00 PM</em>
                        </li>
                        <li>
                          <i class="wi wi-day-windy"></i>
                          <span>26°</span>
                          <em>09:00 PM</em>
                        </li>
                        <li>
                          <i class="wi wi-day-sunny-overcast"></i>
                          <span>27°</span>
                          <em>10:00 PM</em>
                        </li>
                        <li>
                          <i class="wi wi-moon-waxing-crescent-2"></i>
                          <span>27°</span>
                          <em>11:00 PM</em>
                        </li>
                      </ul>
                    </div>
                    <div class="central-meta">
                      <span class="create-post"
                        >7 Days Forecast<a title="" href="#"
                          >Full Month</a
                        ></span
                      >
                      <table class="table table-responsive monthly-forecast">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Days</th>
                            <th>symbol</th>
                            <th>Description</th>
                            <th>Temp</th>
                            <th>Humidity</th>
                            <th>Percip</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><span>05, Nov</span></td>
                            <td>Tue</td>
                            <td><i class="wi wi-day-cloudy"></i></td>
                            <td>Sunny and friendly weather to go out</td>
                            <td>22°</td>
                            <td>61%</td>
                            <td>0%</td>
                          </tr>
                          <tr>
                            <td><span>06, Nov</span></td>
                            <td>Wed</td>
                            <td><i class="wi wi-day-showers"></i></td>
                            <td>
                              Take your umbrella with you it will rain in the
                              next hour
                            </td>
                            <td>15°</td>
                            <td>55%</td>
                            <td>0%</td>
                          </tr>
                          <tr>
                            <td><span>07, Nov</span></td>
                            <td>Thu</td>
                            <td><i class="wi wi-day-windy"></i></td>
                            <td>Friendly weather to go outside</td>
                            <td>24°</td>
                            <td>54%</td>
                            <td>0%</td>
                          </tr>
                          <tr>
                            <td><span>08, Nov</span></td>
                            <td>Fri</td>
                            <td><i class="wi wi-day-lightning"></i></td>
                            <td>
                              Friendly weather but with some shower and
                              lightning
                            </td>
                            <td>20°</td>
                            <td>60%</td>
                            <td>0%</td>
                          </tr>
                          <tr>
                            <td><span>09, Nov</span></td>
                            <td>Sat</td>
                            <td><i class="wi wi-day-sunny"></i></td>
                            <td>Sunny weather to go out side</td>
                            <td>26°</td>
                            <td>60%</td>
                            <td>0%</td>
                          </tr>
                          <tr>
                            <td><span>10, Nov</span></td>
                            <td>Sun</td>
                            <td><i class="wi wi-day-showers"></i></td>
                            <td>Take your umbrella with you</td>
                            <td>20°</td>
                            <td>60%</td>
                            <td>0%</td>
                          </tr>
                          <tr>
                            <td><span>11, Nov</span></td>
                            <td>Mon</td>
                            <td><i class="wi wi-day-lightning"></i></td>
                            <td>
                              Friendly weather but with some shower and
                              lightning
                            </td>
                            <td>20°</td>
                            <td>50%</td>
                            <td>0%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- centerl meta -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    @include('layouts.footer')