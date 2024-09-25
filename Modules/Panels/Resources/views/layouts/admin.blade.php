<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <meta name="keywords" content="技能実習生,技能実習生制度,研修生,外国人研修生,送り出し機関,インドネシア送り出し機関,外国人雇用,外国人労働者,労働者不足,インドネシア日本語学校">
        <meta name="description" content="LPK ツバメ日本語研修センターは、インドネシアの志ある若者達が真に自立する為の「日本語教育」と「技能支援」を実施し、インドネシア共和国、日本国、両国の社会の発展に貢献します。日本人が経営するツバメは日本の現場のニーズを的確にとらえ、問題点を迅速に解決していきます。">
        <title>LPK ツバメ日本語研修センター｜Admin Panel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('styles')
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
        <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
        @show
        <style>
            .app-header{
              top: 0;
            }
        </style>
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
    <body class="sidebar-lg-show header-fixed sidebar-fixed">
        <div id="app">
            @include('panels::layouts.header')
          <div class="app-body">
            @include('panels::layouts.sidebar')
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
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js"></script>
      @show

    </body>

</html>
