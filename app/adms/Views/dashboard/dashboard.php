<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}
?>

		    <!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <div class="content-heading">
          <div class="heading-left">
            <h1 class="page-title">Welcome to Klorofil Pro</h1>
            <p class="page-subtitle">Bootstrap admin dashboard template with drag and drop panel.</p>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Parent</a></li>
              <li class="breadcrumb-item active">Current</li>
            </ol>
          </nav>
        </div>

        <div class="container-fluid">
          <!-- TOP METRICS -->
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-metric_1 animate">
                <span class="icon-wrapper custom-bg-orange"><i class="fa fa-area-chart"></i></span>
                <div class="right">
                  <span class="value">$3642 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                  <span class="title">PROFIT <span class="change text-indicator-green">(+ $254)</span></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-metric_1 animate">
                <span class="icon-wrapper custom-bg-lightseagreen"><i class="fa fa-shopping-cart"></i></span>
                <div class="right">
                  <span class="value">$8740 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                  <span class="title">REVENUE <span class="change text-indicator-green">(+ $364)</span></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-metric_1 animate">
                <span class="icon-wrapper custom-bg-blue2"><i class="fa fa-user"></i></span>
                <div class="right">
                  <span class="value">132567 <i class="change-icon change-down fa fa-sort-down text-indicator-red"></i></span>
                  <span class="title">TOTAL USER <span class="change text-indicator-red">(- 23)</span></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-metric_1 animate">
                <span class="icon-wrapper custom-bg-purple"><i class="fa fa-envelope"></i></span>
                <div class="right">
                  <span class="value">56.72% <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                  <span class="title">CLICK <span class="change text-indicator-green">(+ 12.64%)</span></span>
                </div>
              </div>
            </div>
          </div>
          <!-- END TOP METRICS -->

          <div class="row sortable-grid">
            <div class="col-lg-8 sortable-item">
              <!-- CUSTOMER DEMOGRAPHIC -->
              <div class="card card-sidebar sidebar-right">
                <h3 class="card-header">US Customer Demographic</h3>
                <div class="card-body">
                  <div class="left p-0">
                    <div id="us-customers-map" style="height: 502px;"></div>
                  </div>
                  <div class="right">
                    <div class="sidebar-section">
                      <h3 class="section-title">Top Locations</h3>
                      <table class="table table-borderless table-sm mb-0">
                        <thead class="sr-only">
                          <tr><th>No.</th><th>Location</th><th class="text-right">Count</th></tr>
                        </thead>
                        <tbody>
                          <tr><td>1.</td><td>Alabama</td><td class="text-right">2936</td></tr>
                          <tr><td>2.</td><td>California</td><td class="text-right">2812</td></tr>
                          <tr><td>3.</td><td>Florida</td><td class="text-right">2735</td></tr>
                        </tbody>
                      </table>
                      <a href="#" class="font-13">See all locations</a>
                    </div>
                    <div class="sidebar-section">
                      <h3 class="section-title">Gender</h3>
                      <div class="progress">
                        <div class="progress-bar custom-bg-blue2" style="width: 35%">
                          <span class="sr-only">35%</span>
                        </div>
                        <div class="progress-bar custom-bg-blue3" style="width: 65%">
                          <span class="sr-only">65%</span>
                        </div>
                      </div>
                      <div class="square-legend">
                        <ul class="list-unstyled list-inline mb-0">
                          <li class="list-inline-item"><span class="custom-bg-blue2"></span> 35% Male </li>
                          <li class="list-inline-item"><span class="custom-bg-blue3"></span> 65% Female </li>
                        </ul>
                      </div>
                    </div>
                    <div class="sidebar-section mb-0">
                      <h3 class="section-title">Age</h3>
                      <div class="demo-flot-chart" id="age-chart" style="height:160px"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CUSTOMER DEMOGRAPHIC -->
            </div>

            <div class="col-lg-4 sortable-item">
              <!-- RESOURCE ACTIVITY -->
              <div class="card">
                <h3 class="card-header">Resource Activity</h3>
                <div class="card-body">
                  <div class="activity-gauge">
                    <div id="gauge" class="d-block mx-auto"></div>
                  </div>
                </div>
              </div>
              <!-- END RESOURCE ACTIVITY -->

              <!-- SALES CHART -->
              <div class="card">
                <h3 class="card-header">Weekly Sales</h3>
                <div class="card-body">
                  <div class="widget-metric_11">
                    <div id="sales-chart" style="height:105px"></div>
                    <div class="bottom d-flex align-items-center justify-content-between">
                      <div class="left">
                        <span class="value">$70,183</span>
                        <span class="change"><span class="text-indicator-green"><i class="fa fa-caret-up"></i> 18%</span> vs. last week</span>
                      </div>
                      <div class="right">
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-file-text-o"></i> View Sales Report</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SALES CHART -->
            </div>
          </div>

          <div class="row sortable-grid">
            <!-- CHAT SUPPORT -->
            <div class="col-md-12 sortable-item">
              <div class="card">
                <h3 class="card-header">Live Chat Support</h3>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div id="online-visitors-dashboard" class="online-visitors">
                        <div class="count" id="tour-online-count">
                          <span class="number">70</span>
                          <span>Visitors online</span>
                        </div>
                        <div class="progress traffic-sources">
                          <div class="progress-bar source referral" style="width: 10%">
                            <span>10%</span>
                          </div>
                          <div class="progress-bar source organic" style="width: 40%">
                            <span>40%</span>
                          </div>
                          <div class="progress-bar source direct" style="width: 27%">
                            <span>27%</span>
                          </div>
                          <div class="progress-bar source email" style="width: 23%">
                            <span>23%</span>
                          </div>
                        </div>
                        <div class="square-legend">
                          <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><span class="referral"></span> Referral</li>
                            <li class="list-inline-item"><span class="organic"></span> Organic</li>
                            <li class="list-inline-item"><span class="direct"></span>  Direct</li>
                            <li class="list-inline-item"><span class="email"></span> Email</li class="list-inline-item">
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <table class="table table-minimal table-chat-support datatable mb-0">
                        <thead>
                          <tr><th>VISITOR</th><th>PAGE</th><th>DEVICE</th><th>BROWSER</th><th>ACTION</th></tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover" data-visitor-name="Bruce Evans" data-visitor-img="assets/images/people/male1.png"><i class="fa fa-vcard-o"></i></span> <a href="#">Bruce</a></td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/men/shoes">Shoes | Men Apparels</span></td>
                            <td><i class="fa fa-desktop"></i></td>
                            <td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
                            <td><button class="btn btn-success btn-sm">RESPOND CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/how-to/shop">How to shop | FAQ | Help</span></td>
                            <td><i class="fa fa-desktop"></i></td>
                            <td><i class="fa fa-edge edge-color"></i> Edge</td>
                            <td><button class="btn btn-outline-light btn-sm">INITIALIZE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover" data-visitor-name="Joey Felicia" data-visitor-img="assets/images/people/female1.png"><i class="fa fa-vcard-o"></i></span> <a href="#">Joey</a></td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/men/dress">Dress | Women Apparels</span></td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><i class="fa fa-chrome chrome-color"></i> Chrome</td>
                            <td><button class="btn btn-danger btn-sm">CLOSE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/men/shoes">Shoes | Men Apparels</span></td>
                            <td><i class="fa fa-desktop"></i></td>
                            <td><i class="fa fa-safari safari-color"></i> Safari</td>
                            <td><button class="btn btn-success btn-sm">RESPOND CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span></td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><i class="fa fa-window-maximize"></i> Other Browser</td>
                            <td><button class="btn btn-danger btn-sm">CLOSE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/how-to/pay">Payment Method | FAQ</span></td>
                            <td><i class="fa fa-desktop"></i></td>
                            <td><i class="fa fa-edge edge-color"></i> Edge</td>
                            <td><button class="btn btn-outline-light btn-sm">INITIALIZE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span></td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
                            <td><button class="btn btn-outline-light btn-sm">INITIALIZE CHAT</button></td>
                          </tr>
                          <tr>
                            <td><span class="popover-profile" data-toggle="popover"><i class="fa fa-vcard-o"></i></span> Guest</td>
                            <td><span class="page-tooltip" data-title="https://myonlineshop.com/checkout">Checkout | My Online Shop</span></td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><i class="fa fa-firefox firefox-color"></i> Firefox</td>
                            <td><button class="btn btn-outline-light btn-sm">INITIALIZE CHAT</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END CHAT SUPPORT -->
          </div>

          <div class="row sortable-grid">
            <div class="col-lg-7 sortable-item">
              <!-- SALES STATISTIC -->
              <div class="card" id="tour-sales-stat">
                <h3 class="card-header">Sales Statistic</h3>
                <div class="card-body">
                  <div class="d-md-flex justify-content-between align-items-center">
                    <div class="d-md-flex">
                      <div class="chart-metric">
                        <span class="title"><span class="data-legend custom-bg-orange2"></span> Earnings</span>
                        <span class="value">$5,423</span> <span class="change up"><i class="ti-arrow-up"></i> 16%</span>
                      </div>
                      <div class="chart-metric ml-md-3 mt-2 mt-md-0">
                        <span class="title"><span class="data-legend custom-bg-blue3"></span> Sales</span>
                        <span class="value">1563</span> <span class="change down"><i class="ti-arrow-down"></i> 7%</span>
                      </div>
                    </div>
                    <div class="text-md-right ml-md-3 mt-2 mt-md-0">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-light btn-sm">Day</button>
                        <button type="button" class="btn btn-outline-light btn-sm active">Week</button>
                        <button type="button" class="btn btn-outline-light btn-sm">Month</button>
                      </div>
                    </div>
                  </div>
                  <div style="height: 250px;" id="sales-stat" class="mt-4"></div>
                </div>
              </div>
              <!-- END SALES STATISTIC -->
            </div>
            <div class="col-lg-5 sortable-item">
              <!-- SHARES GOAL -->
              <div class="card">
                <h3 class="card-header">Shares Goal</h3>
                <div class="card-body">
                  <div id="progress-share" class="progress-semicircle" data-max="500">
                    <div class="bar-overflow">
                      <div class="bar"></div>
                    </div>
                    <span class="content">
                      <i class="fa fa-share-alt icon"></i>
                      <span class="value">380</span>

                      <h4 class="heading">Share more products!</h4>
                      <p class="text-muted">Get free product if you reach 500 shares goal</p>
                      <button type="button" class="btn btn-primary">Share Now</button>
                    </span>
                  </div>
                </div>
              </div>
              <!-- END SHARES GOAL -->
            </div>
          </div>

          <div class="row sortable-grid">
            <div class="col-lg-6 sortable-item">
              <!-- PROFILE COMPLETENESS METER -->
              <div class="card">
                <h3 class="card-header">Profile Completeness Meter</h3>
                <div class="card-body">
                  <div class="completeness-meter mb-4">
                    <p class="complete-info">Your profile is almost awesome</p>
                    <div class="progress mb-4">
                      <div class="progress-bar bg-info" role="progressbar" data-from="0" data-to="60">0%</div>
                    </div>
                    <p>Please provide information below:</p>
                    <ul class="list-unstyled fa-ul list-complete-profile">
                      <li class="done"><i class="fa-li fa fa-check-circle"></i> Confirm your email</li>
                      <li class="done"><i class="fa-li fa fa-check-circle"></i> Setup two-way authentication</li>
                      <li>
                        <i class="fa-li fa fa-circle-o"></i>
                        <div class="editable-wrapper">
                          <span class="editable editable-phone">Add your phone number</span>
                        </div>
                      </li>
                      <li>
                        <i class="fa-li fa fa-circle-o"></i>
                        <div class="editable-wrapper">
                          <span class="editable editable-select">Select sex</span>
                        </div>
                      </li>
                      <li>
                        <i class="fa-li fa fa-circle-o"></i>
                        <div class="editable-wrapper">
                          <span class="editable editable-dob">Select date of birth</span>
                        </div>
                      </li>
                      <li>
                        <i class="fa-li fa fa-circle-o"></i>
                        <div class="editable-wrapper">
                          <span class="editable editable-nickname">Add your nickname</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- END PROFILE COMPLETENESS METER -->
            </div>
            <div class="col-lg-6 sortable-item">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Customer Review</h3>
                  <div class="right">
                    <span class="link"><a href="#">View all reviews (251)</a></span>
                  </div>
                </div>
                <div class="card-body">
                  <div class="customer-review">
                    <div class="rating mb-4 margin-bottom-30">
                      <span class="number">4.7</span>
                      <span class="rating-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-full"></i>
                      </span>
                    </div>
                    <p class="review-text text-muted">Sit odio nostrud admodum eu, eu duo rationibus reprimique, sit ut feugiat expetendis interesset. Ut usu wisi malorum, cu eam dolore admodum salutatus. Volumus denique epicurei ex mel, ut eius mandamus nam, alterum detraxit assueverit in cum. Ne quem scribentur eum, summo integre ius ei. Vim in summo ludus. Has ut ferri evertitur. His ut nulla noluisse inciderint.</p>

                    <div class="review-data">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="footer-info">
                            <span class="title">Reviewed by:</span>
                            <img src="<?= URL; ?>assets/images/people/female2.png" class="picture img-circle" alt="">
                            <div class="right">
                              <span class="primary-info">Donna Jensen</span>
                              <span class="secondary-info">Jul 20, 2017</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="footer-info">
                            <span class="title">Review for:</span>
                            <span class="primary-info">Classy Wool Jacket</span>
                            <span class="secondary-info">Order #: <a href="#">764537346</a></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="controls">
                      <span><i class="fa fa-reply"></i> <a href="#">Respond</a></span>
                      <span><i class="fa fa-share-alt"></i> <a href="#">Share</a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row sortable-grid">
            <div class="col-lg-3">
              <div class="card">
                <h3 class="card-header">Last Campaign</h3>
                <div class="card-body p-0">
                  <ul class="list-unstyled list-widget-vertical" id="last-campaign-metric">
                    <li>
                      <div class="widget-metric_2 animate">
                        <i class="fa fa-envelope-o icon"></i>
                        <div class="right">
                          <span class="title">EMAIL SENT</span>
                          <span class="value">64889</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="widget-metric_2 animate">
                        <i class="fa fa-envelope-open-o icon"></i>
                        <div class="right">
                          <span class="title">OPENED</span>
                          <span class="value">28652</span>
                          <span class="percentage custom-text-orange2">44.15%</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="widget-metric_2 animate">
                        <i class="fa fa-hand-pointer-o icon"></i>
                        <div class="right">
                          <span class="title">CLICKED</span>
                          <span class="value">9643</span>
                          <span class="percentage custom-text-orange2">14.86%</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="card">
                <h3 class="card-header">Email Opens by Location</h3>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <h3 class="h6">Top Countries</h3>
                      <table class="table table-minimal table-no-border m-0">
                        <thead>
                          <tr>
                            <th>COUNTRY</th>
                            <th>OPENS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>United States</td>
                            <td>2936</td>
                          </tr>
                          <tr>
                            <td>Algeria</td>
                            <td>2812</td>
                          </tr>
                          <tr>
                            <td>Russia</td>
                            <td>2735</td>
                          </tr>
                          <tr>
                            <td>France</td>
                            <td>2674</td>
                          </tr>
                          <tr>
                            <td>Mexico</td>
                            <td>2584</td>
                          </tr>
                          <tr>
                            <td>Germany</td>
                            <td>1986</td>
                          </tr>
                          <tr>
                            <td>Brazil</td>
                            <td>1921</td>
                          </tr>
                          <tr>
                            <td>Canada</td>
                            <td>1865</td>
                          </tr>
                          <tr>
                            <td>Indonesia</td>
                            <td>1352</td>
                          </tr>
                          <tr>
                            <td>China</td>
                            <td>1322</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-9">
                      <div id="map-email-opens" style="height: 400px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- MINI BAR CHARTS -->
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-mini-bar">
                <div id="mini-bar-chart1" class="mini-bar-chart">38,28,45,30,42,70,100</div>
                <span>5323 LIKES</span>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-mini-bar">
                <div id="mini-bar-chart2" class="mini-bar-chart">43,45,78,23,80,100,90</div>
                <span>65K FOLLOWERS</span>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-mini-bar">
                <div id="mini-bar-chart3" class="mini-bar-chart">22,42,65,53,77,44,80</div>
                <span>20K SUBSCRIBERS</span>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-mini-bar">
                <div id="mini-bar-chart4" class="mini-bar-chart">43,76,34,55,86,45,77</div>
                <span>500K USERS</span>
              </div>
            </div>
          </div>
          <!-- END MINI BAR CHARTS -->

          <!-- PERFORMANCE INDEX -->
          <div class="widget">
            <ul class="list-unstyled list-widget-horizontal row">
              <li class="col-md-3">
                <div class="widget-metric_3">
                  <span class="title text-muted">Your Performance Index</span>
                  <span class="value">8.73</span>
                  <span class="note">
                    <span class="text-indicator-green">+13.42%</span> since last month</span>
                </div>
              </li>
              <li class="col-md-3">
                <div class="widget-metric_4">
                  <span class="title text-muted">Sales Performance</span>
                  <span class="chart inlinesparkline" id="sales-performance">20,70,100,55,80,40,64,90,150</span>
                  <span class="note">
                    <span class="text-indicator-red">-3.74%</span> since last month</span>
                </div>
              </li>
              <li class="col-md-3">
                <div class="widget-metric_5">
                  <span class="title text-muted">Customer Satisfaction</span>
                  <ul class="list-inline list-value">
                    <li class="list-inline-item">
                      <i class="fa fa-frown-o"></i>
                      <span class="percentage text-indicator-red">10%</span>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-meh-o"></i>
                      <span class="percentage">13%</span>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-smile-o"></i>
                      <span class="percentage text-indicator-green">77%</span>
                    </li>
                  </ul>
                  <span class="note">See detailed scoring <a href="#">here</a></span>
                </div>
              </li>
              <li class="col-md-3">
                <div class="widget-metric_3">
                  <span class="title text-muted">Avg. Handle Time</span>
                  <span class="value">1m:24s</span>
                  <span class="note">Min: 30s &nbsp; Max: 2m:15s</span>
                </div>
              </li>
            </ul>
          </div>
          <!-- END PERFORMANCE INDEX -->
        </div>
      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN -->