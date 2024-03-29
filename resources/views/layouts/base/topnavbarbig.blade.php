<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
  <div class="navbar-logo">

    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="../index.html">
      <div class="d-flex align-items-center">
        <div class="d-flex align-items-center">
          <!--<img src="{{asset('assets/admin/img/icons/logo.png')}}" alt="phoenix" width="27" />-->
          <div class="spinner-grow text-secondary" role="status">
            <span class="visually-hidden"></span>
          </div>
          <p class="logo-text ms-0">{{ config('app.name') }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
    <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
        <ul class="dropdown-menu navbar-dropdown-caret">
          <li><a class="dropdown-item" href="../index.html">
              <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce
              </div>
            </a>
          </li>
          <li><a class="dropdown-item" href="../dashboard/project-management.html">
              <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management
              </div>
            </a>
          </li>
          <li><a class="dropdown-item" href="../dashboard/crm.html">
              <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM
              </div>
            </a>
          </li>
          <li><a class="dropdown-item" href="../apps/social/feed.html">
              <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed
              </div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <ul class="navbar-nav navbar-nav-icons flex-row">
    <li class="nav-item">
      <div class="theme-control-toggle fa-icon-wait px-2">
        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label>
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label>
      </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" style="min-width: 2.5rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>

      <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
        <div class="card position-relative border-0">
          <div class="card-header p-2">
            <div class="d-flex justify-content-between">
              <h5 class="text-black mb-0">Notificatons</h5>
              <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="scrollbar-overlay" style="height: 27rem;">
              <div class="border-300">
                <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" />
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="font-sans-serif d-none d-sm-block">
                      <button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer p-0 border-top border-0">
            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
          <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
          <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
          <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
          <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
          <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
          <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
          <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
          <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
        </svg></a>

      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
        <div class="card bg-white position-relative border-0">
          <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
            <div class="row text-center align-items-center gx-0 gy-0">
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/behance.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/google-cloud.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/slack.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/gitlab.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/bitbucket.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/google-drive.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/trello.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/figma.webp')}}" alt="" width="20" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/twitter.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/pinterest.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/ln.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/google-maps.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/google-photos.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                </a></div>
              <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{asset('assets/admin/img/nav-icons/spotify.webp')}}" alt="" width="30" />
                  <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                </a></div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
        <div class="avatar avatar-l ">
          <img class="rounded-circle " src="{{asset('assets/admin/img/team/40x40/57.webp')}}" alt="" />

        </div>
      </a>
      <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"> profil  <span class="fa-solid fa-chevron-down fs--2"></span></a>
      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
              <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                          <img class="rounded-circle " src="{{asset('assets/admin/img/team/72x72/57.webp')}}" alt="" />
                      </div>
                      <h6 class="mt-2 text-black"> profil </h6>
                  </div>
              </div>
              <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3"> <span class="me-2 text-primary" data-feather="user"></span><span>Profil :  profil </span></a></li>
                      <li class="nav-item"><a class="nav-link px-3"> <span class="me-2 text-primary" data-feather="hash"></span>Username : username </a></li>
                      <li class="nav-item"><a class="nav-link px-3"> <span class="me-2 text-primary" data-feather="monitor"></span>Agent : agent </a></li>
                      <li class="nav-item"><a class="nav-link px-3"> <span class="me-2 text-primary" data-feather="briefcase"></span>Compagnie : compagnie </a></li>
                  </ul>
              </div>
              <div class="card-footer p-0 border-top">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                      <button type="submit" class="btn btn-phoenix-secondary d-flex flex-center w-100">
                          <span class="me-2" data-feather="log-out"></span>
                          Sign out
                      </button>
                  </form>
                  <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#">Terms</a></div>
              </div>
          </div>
      </div>
  </li>
    </li>
  </ul>
</nav>
@include('layouts.base.search')
<script>
  var navbarVertical = document.querySelector('.navbar-vertical');
  //navbarVertical.remove();
  navbarTop.removeAttribute('style');
</script>    