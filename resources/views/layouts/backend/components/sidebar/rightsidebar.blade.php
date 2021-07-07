
         <div id="rightsidebar" class="right_sidebar">
            <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
               {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li> --}}
            </ul>
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                  <div class="mb-4">
                     <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                     <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-opensans">
                        <span class="custom-control-label">Open Sans Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-montserrat" checked="">
                        <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-roboto">
                        <span class="custom-control-label">Robot Google Font</span>
                        </label>
                     </div>
                  </div>
                  <div class="mb-4">
                     <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                     <div class="custom-controls-stacked arrow_option">
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="marrow" value="arrow-a">
                        <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                        <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="marrow" value="arrow-c" checked="">
                        <span class="custom-control-label">C</span>
                        </label>
                     </div>
                     <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                     <div class="custom-controls-stacked list_option">
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="listicon" value="list-a" checked="">
                        <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                        <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                        <span class="custom-control-label">C</span>
                        </label>
                     </div>
                  </div>
                  <div>
                     <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                     <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Night Mode</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Fix Navbar top</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Header Dark</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Min Sidebar Dark</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Sidebar Dark</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar" checked="">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Icon Color</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Gradient Color</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Box Shadow</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">RTL Support</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                        <li>
                           <label class="custom-switch">
                           <span class="custom-switch-description">Box Layout</span>
                           <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                           <span class="custom-switch-indicator"></span>
                           </label>
                        </li>
                     </ul>
                  </div>
                  <hr>

               </div>
               {{-- Acticity --}}
               <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                  <ul class="new_timeline mt-3">
                     <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                           <h3>Attendance</h3>
                           <h4>Computer Class</h4>
                        </div>
                     </li>
                     <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                           <h3>Added an interest</h3>
                           <h4>“Volunteer Activities”</h4>
                        </div>
                     </li>
                     <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                           <h3>Developer Team</h3>
                           <h4>Hangouts</h4>
                           <ul class="list-unstyled team-info margin-0 p-t-5">
                              <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                              <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                              <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                              <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                           </ul>
                        </div>
                     </li>
                     <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                           <h3>Responded to need</h3>
                           <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                     </li>
                     <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                           <h3>Lunch Break</h3>
                        </div>
                     </li>
                     <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                           <h3>Finish</h3>
                           <h4>Go to Home</h4>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="user_div">
            <h5 class="brand-name mb-4">Epic HR<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
            <div class="card">
               <div class="card-body">
                  <div class="media">
                     <img class="avatar avatar-xl mr-3" src="{{asset('/assets/images/sm/avatar1.jpg')}}" alt="avatar">
                     <div class="media-body">
                        <h6 class="m-0">{{Auth::user()->name}}</h6>
                        <p class="text-muted mb-0">{{Auth::user()->roles}}</p>
                        <ul class="social-links list-inline mb-0 mt-2">
                           <li class="list-inline-item">
                                <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" title="" data-toggle="tooltip" data-original-title="Sign Out">
                               <i class="fas fa-sign-out-alt text-danger"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                           {{-- <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                           <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="@skypename"><i class="fa fa-skype"></i></a></li> --}}
                        </ul>


                     </div>
                  </div>
               </div>
            </div>
            {{-- <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Statistics</h3>
                  <div class="card-options">
                     <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                     <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                  </div>
               </div>
               <div class="card-body">
                  <div class="text-center">
                     <div class="row">
                        <div class="col-6 pb-3">
                           <label class="mb-0">Balance</label>
                           <h4 class="font-30 font-weight-bold">$545</h4>
                        </div>
                        <div class="col-6 pb-3">
                           <label class="mb-0">Growth</label>
                           <h4 class="font-30 font-weight-bold">27%</h4>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="d-block">Total Income<span class="float-right">77%</span></label>
                     <div class="progress progress-xs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                     <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                     </div>
                  </div>
                  <div class="form-group mb-0">
                     <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                     <div class="progress progress-xs">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Friends</h3>
                  <div class="card-options">
                     <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                     <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                  </div>
               </div>
               <div class="card-body">
                  <ul class="right_chat list-unstyled">
                     <li class="online">
                        <a href="javascript:void(0);">
                           <div class="media">
                              <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                              <div class="media-body">
                                 <span class="name">Donald Gardner</span>
                                 <span class="message">Designer, Blogger</span>
                                 <span class="badge badge-outline status"></span>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="online">
                        <a href="javascript:void(0);">
                           <div class="media">
                              <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                              <div class="media-body">
                                 <span class="name">Wendy Keen</span>
                                 <span class="message">Java Developer</span>
                                 <span class="badge badge-outline status"></span>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="offline">
                        <a href="javascript:void(0);">
                           <div class="media">
                              <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                              <div class="media-body">
                                 <span class="name">Matt Rosales</span>
                                 <span class="message">CEO, Epic Theme</span>
                                 <span class="badge badge-outline status"></span>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div> --}}
            {{-- <div class="card b-none">
               <ul class="list-group">
                  <li class="list-group-item d-flex">
                     <div class="box-icon sm rounded bg-blue"><i class="fa fa-credit-card"></i> </div>
                     <div class="ml-3">
                        <div>+$29 New sale</div>
                        <a href="javascript:void(0)">Admin Template</a>
                        <div class="text-muted font-12">5 min ago</div>
                     </div>
                  </li>
                  <li class="list-group-item d-flex">
                     <div class="box-icon sm rounded bg-pink"><i class="fa fa-upload"></i> </div>
                     <div class="ml-3">
                        <div>Project Update</div>
                        <a href="javascript:void(0)">New HTML page</a>
                        <div class="text-muted font-12">10 min ago</div>
                     </div>
                  </li>
                  <li class="list-group-item d-flex">
                     <div class="box-icon sm rounded bg-teal"><i class="fa fa-file-word-o"></i> </div>
                     <div class="ml-3">
                        <div>You edited the file</div>
                        <a href="javascript:void(0)">reposrt.doc</a>
                        <div class="text-muted font-12">11 min ago</div>
                     </div>
                  </li>
                  <li class="list-group-item d-flex">
                     <div class="box-icon sm rounded bg-cyan"><i class="fa fa-user"></i> </div>
                     <div class="ml-3">
                        <div>New user</div>
                        <a href="javascript:void(0)">Puffin web - view</a>
                        <div class="text-muted font-12">17 min ago</div>
                     </div>
                  </li>
               </ul>
            </div> --}}
         </div>
