<li class="nav-item navbar-dropdown dropdown-user dropdown">
    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
       <div class="avatar avatar-online">
          <img src="{{ asset($user->image ?? 'admin_assets/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
       </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
       <li>
          <a class="dropdown-item" href="#">
             <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                   <div class="avatar avatar-online">
                      <img src="{{ asset($user->image ?? 'admin_assets/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                   </div>
                </div>
                <div class="flex-grow-1">
                   <span class="fw-semibold d-block">{{ $user->name ?? 'user' }}</span>
                   <small class="text-muted">Admin</small>
                </div>
             </div>
          </a>
       </li>
       <li>
          <a class="dropdown-item" href="{{ route('admin-profile') }}">
          <i class="bx bx-user me-2"></i>
          <span class="align-middle">My Profile</span>
          </a>
       </li>
       {{--<li>
          <a class="dropdown-item" href="#">
          <i class="bx bx-cog me-2"></i>
          <span class="align-middle">Settings</span>
          </a>
       </li> --}}
       <li>
          <div class="dropdown-divider"></div>
       </li>
       <li>
          <a class="dropdown-item" href="{{ route('admin.logout') }}">
          <i class="bx bx-power-off me-2"></i>
          <span class="align-middle">Log Out</span>
          </a>
       </li>
    </ul>
 </li>