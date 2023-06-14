  <!-- ========== Left Sidebar Start ========== -->
  <div class="left side-menu">
      <div class="slimscroll-menu" id="remove-scroll">

          <!--- Sidemenu -->
          <div id="sidebar-menu">
              <!-- Left Menu Start -->
              <ul class="metismenu" id="side-menu">
                  <li class="menu-title">Menu</li>
                  <li>
                      <a href="{{ route('welcome.homepage') }}" class="waves-effect"><i
                              class="icon-calendar"></i><span>Home </span></a>
                  </li>
                  <li>
                      <a href="{{ route('registered.users', $seen = '0') }}" class="waves-effect"><i
                              class="icon-calendar"></i><span>
                              Current trainees </span></a>
                  </li>
                  <li>
                      <a href="{{ route('completed.trainees') }}" class="waves-effect"><i
                              class="icon-calendar"></i><span>
                              History </span></a>
                  </li>
                  <li>
                      <a href="{{ route('compaign.trainees', $seen = '0') }}" class="waves-effect"><i
                              class="icon-calendar"></i><span>
                              Compaign Trainees </span></a>
                  </li>
                  {{--
                  <li>
                      <a href="{{route('business.list')}}" class="waves-effect"><i class="icon-calendar"></i><span> Business </span></a>
                  </li>

                  <li class="">
                      <a href="javascript:void(0);" class="waves-effect" aria-expanded="false"><i class="fas fa-briefcase"></i><span> Job Vacancies <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                      <ul class="submenu mm-collapse" style="height: 0px;">
                          <li>
                              <a href="{{route('job.list')}}" class="waves-effect"><span>All Jobs Vacancies </span></a>
                          </li>

                      </ul>
                  </li> --}}
















              </ul>

          </div>
          <!-- Sidebar -->
          <div class="clearfix"></div>

      </div>
      <!-- Sidebar -left -->

  </div>
  <!-- Left Sidebar End -->
