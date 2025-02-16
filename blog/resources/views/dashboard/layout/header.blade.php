<div class="header-content clearfix">
   <div class="nav-control">
       <div class="hamburger">
           <span class="toggle-icon"><i class="icon-menu"></i></span>
       </div>
   </div>
   <div class="header-right">
       <ul class="clearfix">
           <li class="icons dropdown">
               <div class="user-img c-pointer position-relative dropdown-content-body" class="log-user"  data-toggle="dropdown"  data-toggle="dropdown">
                  {{ Auth::user()->name }} <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
               </div>
               <div class="drop-down dropdown-profile   dropdown-menu">
                   <div class="dropdown-content-body">
                       <ul>
                           <li>
                               <a href="\proFile"><i class="icon-user"></i> <span>Profile</span></a>
                           </li>
                           <hr class="my-2">
                            <li>
                                <a href="/logout"><i class="icon-logout"></i> Logout</a>
                            </li>
                       </ul>
                   </div>
               </div>
           </li>
       </ul>
   </div>
</div>