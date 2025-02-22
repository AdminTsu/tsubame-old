<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <meta name="keywords" content="技能実習生,技能実習生制度,研修生,外国人研修生,送り出し機関,インドネシア送り出し機関,外国人雇用,外国人労働者,労働者不足,インドネシア日本語学校">
        <meta name="description" content="LPK ツバメ日本語研修センターは、インドネシアの志ある若者達が真に自立する為の「日本語教育」と「技能支援」を実施し、インドネシア共和国、日本国、両国の社会の発展に貢献します。日本人が経営するツバメは日本の現場のニーズを的確にとらえ、問題点を迅速に解決していきます。">
        <title>LPK ツバメ日本語研修センター｜ADMIN</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('styles')
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
        <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
        @show
        
        {{--  <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          
            ga('create', 'UA-99033312-1', 'auto');
            ga('send', 'pageview');
          </script>  --}}
       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/sites.css') }}"> --}}

    </head>
    <body>
        <div id="app">
            <header class="app-header navbar">
              <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
                <span class="navbar-toggler-icon"></span>
              </button>
              {{--  <a class="navbar-brand" href="#">
                <img class="navbar-brand-full" src="{{ asset('/coreui/img/brand/logo.svg') }}" width="89" height="25" alt="CoreUI Logo">
                <img class="navbar-brand-minimized"
                src="{{ asset('/coreui/img/brand/sygnet.svg') }}" width="30" height="30" alt="CoreUI Logo">
              </a>  --}}
              <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
                <span class="navbar-toggler-icon"></span>
              </button>
              <ul class="nav navbar-nav d-md-down-none">
                <li class="nav-item px-3">
                  <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="{{route('sites.landing')}}">Home</a>
                </li>
              </ul>
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item d-md-down-none">
                  <a class="nav-link" href="#">
                    <i class="cui-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                  </a>
                </li>
                <li class="nav-item d-md-down-none">
                  <a class="nav-link" href="#">
                    <i class="cui-list"></i>
                  </a>
                </li>
                <li class="nav-item d-md-down-none">
                  <a class="nav-link" href="#">
                    <i class="cui-location-pin"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="img-avatar"  src="{{ asset('coreui/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                      <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-bell-o"></i> Updates
                      <span class="badge badge-info">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-envelope-o"></i> Messages
                      <span class="badge badge-success">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-tasks"></i> Tasks
                      <span class="badge badge-danger">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-comments"></i> Comments
                      <span class="badge badge-warning">42</span>
                    </a>
                    <div class="dropdown-header text-center">
                      <strong>Settings</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-usd"></i> Payments
                      <span class="badge badge-secondary">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-file"></i> Projects
                      <span class="badge badge-primary">42</span>
                    </a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-shield"></i> Lock Account</a>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-lock"></i> Logout</a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
                <span class="navbar-toggler-icon"></span>
              </button>
              <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
                <span class="navbar-toggler-icon"></span>
              </button>
            </header>
          <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                  <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">
                        <i class="nav-icon cui-speedometer"></i> Dashboard
                        <span class="badge badge-primary">NEW</span>
                      </a>
                    </li>
                    <li class="nav-title">Theme</li>
                    <li class="nav-item">
                      <a class="nav-link" href="colors.html">
                        <i class="nav-icon cui-drop"></i> Colors</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="typography.html">
                        <i class="nav-icon cui-pencil"></i> Typography</a>
                    </li>
                    <li class="nav-title">Components</li>
                    <li class="nav-item nav-dropdown">
                      <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon cui-puzzle"></i> Base</a>
                      <ul class="nav-dropdown-items">
                        <li class="nav-item">
                          <a class="nav-link" href="base/breadcrumb.html">
                            <i class="nav-icon cui-puzzle"></i> Breadcrumb</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/cards.html">
                            <i class="nav-icon cui-puzzle"></i> Cards</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/carousel.html">
                            <i class="nav-icon cui-puzzle"></i> Carousel</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/collapse.html">
                            <i class="nav-icon cui-puzzle"></i> Collapse</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/forms.html">
                            <i class="nav-icon cui-puzzle"></i> Forms</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/jumbotron.html">
                            <i class="nav-icon cui-puzzle"></i> Jumbotron</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/list-group.html">
                            <i class="nav-icon cui-puzzle"></i> List group</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/navs.html">
                            <i class="nav-icon cui-puzzle"></i> Navs</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/pagination.html">
                            <i class="nav-icon cui-puzzle"></i> Pagination</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/popovers.html">
                            <i class="nav-icon cui-puzzle"></i> Popovers</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/progress.html">
                            <i class="nav-icon cui-puzzle"></i> Progress</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/scrollspy.html">
                            <i class="nav-icon cui-puzzle"></i> Scrollspy</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/switches.html">
                            <i class="nav-icon cui-puzzle"></i> Switches</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/tables.html">
                            <i class="nav-icon cui-puzzle"></i> Tables</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/tabs.html">
                            <i class="nav-icon cui-puzzle"></i> Tabs</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="base/tooltips.html">
                            <i class="nav-icon cui-puzzle"></i> Tooltips</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                      <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon cui-cursor"></i> Buttons</a>
                      <ul class="nav-dropdown-items">
                        <li class="nav-item">
                          <a class="nav-link" href="buttons/buttons.html">
                            <i class="nav-icon cui-cursor"></i> Buttons</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="buttons/button-group.html">
                            <i class="nav-icon cui-cursor"></i> Buttons Group</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="buttons/dropdowns.html">
                            <i class="nav-icon cui-cursor"></i> Dropdowns</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="buttons/brand-buttons.html">
                            <i class="nav-icon cui-cursor"></i> Brand Buttons</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="charts.html">
                        <i class="nav-icon cui-pie-chart"></i> Charts</a>
                    </li>
                    <li class="nav-item nav-dropdown">
                      <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon cui-star"></i> Icons</a>
                      <ul class="nav-dropdown-items">
                        <li class="nav-item">
                          <a class="nav-link" href="icons/coreui-icons.html">
                            <i class="nav-icon cui-star"></i> CoreUI Icons
                            <span class="badge badge-success">NEW</span>
                          </a>
                          <a class="nav-link" href="icons/flags.html">
                            <i class="nav-icon cui-star"></i> Flags</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="icons/font-awesome.html">
                            <i class="nav-icon cui-star"></i> Font Awesome
                            <span class="badge badge-secondary">4.7</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="icons/simple-line-icons.html">
                            <i class="nav-icon cui-star"></i> Simple Line Icons</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                      <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon cui-bell"></i> Notifications</a>
                      <ul class="nav-dropdown-items">
                        <li class="nav-item">
                          <a class="nav-link" href="notifications/alerts.html">
                            <i class="nav-icon cui-bell"></i> Alerts</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="notifications/badge.html">
                            <i class="nav-icon cui-bell"></i> Badge</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="notifications/modals.html">
                            <i class="nav-icon cui-bell"></i> Modals</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="widgets.html">
                        <i class="nav-icon cui-calculator"></i> Widgets
                        <span class="badge badge-primary">NEW</span>
                      </a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav-title">Extras</li>
                    <li class="nav-item nav-dropdown">
                      <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon cui-star"></i> Pages</a>
                      <ul class="nav-dropdown-items">
                        <li class="nav-item">
                          <a class="nav-link" href="login.html" target="_top">
                            <i class="nav-icon cui-star"></i> Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="register.html" target="_top">
                            <i class="nav-icon cui-star"></i> Register</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="404.html" target="_top">
                            <i class="nav-icon cui-star"></i> Error 404</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="500.html" target="_top">
                            <i class="nav-icon cui-star"></i> Error 500</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item mt-auto">
                      <a class="nav-link nav-link-success" href="https://coreui.io" target="_top">
                        <i class="nav-icon cui-cloud-download"></i> Download CoreUI</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                        <i class="nav-icon cui-layers"></i> Try CoreUI
                        <strong>PRO</strong>
                      </a>
                    </li>
                  </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
              </div>
            <main class="main">
              <!-- Main content here -->
              @yield('content')

        
            </main>
            <aside class="aside-menu">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                      <i class="cui-list"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                      <i class="cui-speech"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                      <i class="cui-settings"></i>
                    </a>
                  </li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane active" id="timeline" role="tabpanel">
                    <div class="list-group list-group-accent">
                      <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
                      <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                        <div class="avatar float-right">
                          <img class="img-avatar" src="{{ asset('/coreui/img/avatars/7.jpg') }}" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Meeting with
                          <strong>Lucas</strong>
                        </div>
                        <small class="text-muted mr-3">
                          <i class="cui-calendar"></i>  1 - 3pm</small>
                        <small class="text-muted">
                          <i class="cui-location-pin"></i>  Palo Alto, CA</small>
                      </div>
                      <div class="list-group-item list-group-item-accent-info">
                        <div class="avatar float-right">
                          <img class="img-avatar" src="{{ asset('/coreui/img/avatars/4.jpg') }}" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Skype with
                          <strong>Megan</strong>
                        </div>
                        <small class="text-muted mr-3">
                          <i class="cui-calendar"></i>  4 - 5pm</small>
                        <small class="text-muted">
                          <i class="cui-social-skype"></i>  On-line</small>
                      </div>
                      <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
                      <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                        <div>New UI Project -
                          <strong>deadline</strong>
                        </div>
                        <small class="text-muted mr-3">
                          <i class="cui-calendar"></i>  10 - 11pm</small>
                        <small class="text-muted">
                          <i class="cui-home"></i>  creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/2.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/4.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/4.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/5.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                        <div>
                          <strong>#10 Startups.Garden</strong> Meetup</div>
                        <small class="text-muted mr-3">
                          <i class="cui-calendar"></i>  1 - 3pm</small>
                        <small class="text-muted">
                          <i class="cui-location-pin"></i>  Palo Alto, CA</small>
                      </div>
                      <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                        <div>
                          <strong>Team meeting</strong>
                        </div>
                        <small class="text-muted mr-3">
                          <i class="cui-calendar"></i>  4 - 6pm</small>
                        <small class="text-muted">
                          <i class="cui-home"></i>  creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/2.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/3.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/4.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/5.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/7.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                          <div class="avatar avatar-xs">
                            <img class="img-avatar" src="{{ asset('/coreui/img/avatars/8.jpg') }}" alt="admin@bootstrapmaster.com">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane p-3" id="messages" role="tabpanel">
                    <div class="message">
                      <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                          <img class="img-avatar" src="{{ asset('/coreui/img/avatars/7.jpg') }}" alt="admin@bootstrapmaster.com">
                          <span class="avatar-status badge-success"></span>
                        </div>
                      </div>
                      <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                      </div>
                      <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                      <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                      <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                          <img class="img-avatar" src="{{ asset('/coreui/img/avatars/7.jpg') }}" alt="admin@bootstrapmaster.com">
                          <span class="avatar-status badge-success"></span>
                        </div>
                      </div>
                      <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                      </div>
                      <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                      <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                      <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                          <img class="img-avatar" src="{{ asset('/coreui/img/avatars/7.jpg') }}" alt="admin@bootstrapmaster.com">
                          <span class="avatar-status badge-success"></span>
                        </div>
                      </div>
                      <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                      </div>
                      <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                      <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                      <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                          <img class="img-avatar" src="{{ asset('/coreui/img/avatars/7.jpg') }}" alt="admin@bootstrapmaster.com">
                          <span class="avatar-status badge-success"></span>
                        </div>
                      </div>
                      <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                      </div>
                      <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                      <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                      <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                          <img class="img-avatar" src="{{ asset('/coreui/img/avatars/7.jpg') }}" alt="admin@bootstrapmaster.com">
                          <span class="avatar-status badge-success"></span>
                        </div>
                      </div>
                      <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                      </div>
                      <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                      <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                  </div>
                  <div class="tab-pane p-3" id="settings" role="tabpanel">
                    <h6>Settings</h6>
                    <div class="aside-options">
                      <div class="clearfix mt-4">
                        <small>
                          <b>Option 1</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                          <input class="switch-input" type="checkbox" checked="">
                          <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                      </div>
                      <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                      </div>
                    </div>
                    <div class="aside-options">
                      <div class="clearfix mt-3">
                        <small>
                          <b>Option 2</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                          <input class="switch-input" type="checkbox">
                          <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                      </div>
                      <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                      </div>
                    </div>
                    <div class="aside-options">
                      <div class="clearfix mt-3">
                        <small>
                          <b>Option 3</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                          <input class="switch-input" type="checkbox">
                          <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                      </div>
                    </div>
                    <div class="aside-options">
                      <div class="clearfix mt-3">
                        <small>
                          <b>Option 4</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                          <input class="switch-input" type="checkbox" checked="">
                          <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                      </div>
                    </div>
                    <hr>
                    <h6>System Utilization</h6>
                    <div class="text-uppercase mb-1 mt-4">
                      <small>
                        <b>CPU Usage</b>
                      </small>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">348 Processes. 1/4 Cores.</small>
                    <div class="text-uppercase mb-1 mt-2">
                      <small>
                        <b>Memory Usage</b>
                      </small>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">11444GB/16384MB</small>
                    <div class="text-uppercase mb-1 mt-2">
                      <small>
                        <b>SSD 1 Usage</b>
                      </small>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">243GB/256GB</small>
                    <div class="text-uppercase mb-1 mt-2">
                      <small>
                        <b>SSD 2 Usage</b>
                      </small>
                    </div>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">25GB/256GB</small>
                  </div>
                </div>
              </aside>
          </div>
          <footer class="app-footer">
              <div>
                {{--  <a href="https://coreui.io">CoreUI</a>  --}}
                {{--  <span>&copy; 2018 creativeLabs.</span>  --}}
              </div>
              <div class="ml-auto">
                {{--  <span>Powered by</span>  --}}
                {{--  <a href="https://coreui.io">CoreUI</a>  --}}
              </div>
            </footer>
          </div>
        
            
            
        
      {{-- Laravel Mix - JS File --}}
      {{-- <script src="{{ mix('js/sites.js') }}"></script> --}}
      @section('scripts')
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js"></script>
      @show

    </body>

</html>
