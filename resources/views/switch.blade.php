<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Switch</title>

  <!-- Fontfaces CSS-->
@include('link')

</head>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="images/icon/logo.png" alt="CoolAdmin" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        @include('nav')
      </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
      @include('aside')
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <form class="form-header" action="" method="POST">
                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                <button class="au-btn--submit" type="submit">
                  <i class="zmdi zmdi-search"></i>
                </button>
              </form>
              <div class="header-button">
                <div class="noti-wrap">
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-comment-more"></i>
                    <span class="quantity">1</span>
                    <div class="mess-dropdown js-dropdown">
                      <div class="mess__title">
                        <p>You have 2 news message</p>
                      </div>
                      <div class="mess__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                        </div>
                        <div class="content">
                          <h6>Michelle Moreno</h6>
                          <p>Have sent a photo</p>
                          <span class="time">3 min ago</span>
                        </div>
                      </div>
                      <div class="mess__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                        </div>
                        <div class="content">
                          <h6>Diane Myers</h6>
                          <p>You are now connected on message</p>
                          <span class="time">Yesterday</span>
                        </div>
                      </div>
                      <div class="mess__footer">
                        <a href="#">View all messages</a>
                      </div>
                    </div>
                  </div>
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-email"></i>
                    <span class="quantity">1</span>
                    <div class="email-dropdown js-dropdown">
                      <div class="email__title">
                        <p>You have 3 New Emails</p>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, 3 min ago</span>
                        </div>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, Yesterday</span>
                        </div>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, April 12,,2018</span>
                        </div>
                      </div>
                      <div class="email__footer">
                        <a href="#">See all emails</a>
                      </div>
                    </div>
                  </div>
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <span class="quantity">3</span>
                    <div class="notifi-dropdown js-dropdown">
                      <div class="notifi__title">
                        <p>You have 3 Notifications</p>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c1 img-cir img-40">
                          <i class="zmdi zmdi-email-open"></i>
                        </div>
                        <div class="content">
                          <p>You got a email notification</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c2 img-cir img-40">
                          <i class="zmdi zmdi-account-box"></i>
                        </div>
                        <div class="content">
                          <p>Your account has been blocked</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c3 img-cir img-40">
                          <i class="zmdi zmdi-file-text"></i>
                        </div>
                        <div class="content">
                          <p>You got a new file</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__footer">
                        <a href="#">All notifications</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="image">
                      <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                    </div>
                    <div class="content">
                      <a class="js-acc-btn" href="#">john doe</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="info clearfix">
                        <div class="image">
                          <a href="#">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                          </a>
                        </div>
                        <div class="content">
                          <h5 class="name">
                            <a href="#">john doe</a>
                          </h5>
                          <span class="email">johndoe@example.com</span>
                        </div>
                      </div>
                      <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                        </div>
                      </div>
                      <div class="account-dropdown__footer">
                        <a href="#">
                          <i class="zmdi zmdi-power"></i>Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- END HEADER DESKTOP-->

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">3D Switch</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-3d switch-primary mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-secondary mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-success mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-warning mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-info mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-danger mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                  </div>
                </div>
              </div>
              <!--/.col-->

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Default</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-secondary mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-success mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-warning mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-info mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-danger mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Default - Pills</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-pill switch-primary mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-secondary mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-success mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-warning mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-info mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-danger mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Outline</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-secondary-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-success-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-warning-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-info-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-danger-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Outline - Pills</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-secondary-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-success-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-warning-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-info-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-danger-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Outline Alternative</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-secondary-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-success-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-warning-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-info-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-danger-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Outline Alternative - Pills</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-secondary-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-success-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-warning-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-info-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-danger-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch with Text</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-text switch-primary">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-secondary">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-success">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-warning">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-info">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-danger">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch with Text - Pills</strong>
                  </div>
                  <div class="card-body">

                    <label class="switch switch-text switch-primary switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-secondary switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-success switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-warning switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-info switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-danger switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title" v-if="headerText">Sizes</strong>
                  </div>
                  <div class="card-body p-0">
                    <table class="table table-hover table-striped table-align-middle mb-0">
                      <thead>
                        <th>Size</th>
                        <th>Example</th>
                        <th>CSS Class</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Large
                          </td>
                          <td>
                            <basix-switch type="3d" variant="primary" size="lg" :checked="true" />
                          </td>
                          <td>
                            Add following code
                            <code>size="lg"</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Default
                          </td>
                          <td>
                            <basix-switch type="3d" variant="primary" :checked="true" />
                          </td>
                          <td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            Small
                          </td>
                          <td>
                            <basix-switch type="3d" variant="primary" size="sm" :checked="true" />
                          </td>
                          <td>
                            Add following code
                            <code>size="sm"</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Extra small
                          </td>
                          <td>
                            <basix-switch type="3d" variant="primary" size="xs" :checked="true" />
                          </td>
                          <td>
                            Add following code
                            <code>size="xs"</code>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/.col-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTAINER-->

  </div>

  <!-- Jquery JS-->
 @include('script')

</body>

</html>
<!-- end document-->
