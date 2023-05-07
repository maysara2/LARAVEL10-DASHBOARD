<div class="container-fluid page-body-wrapper ">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.index') }}">
            @if (app()->currentLocale() =='en')
            <span class="menu-title">{{ __('admin.dd') }}</span>
            <i class="mdi mdi-home menu-icon"></i>
            @endif
            @if (app()->currentLocale() =='ar')
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">{{ __('admin.dd') }}</span>

            @endif
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.about.index') }}">

            @if (app()->currentLocale() =='ar')
            <i class="mdi mdi-contacts menu-icon"></i>
            <span class="menu-title">{{ __('admin.about') }}</span>

            @endif
            @if (app()->currentLocale() =='en')
            <span class="menu-title">{{ __('admin.about') }}</span>
            <i class="mdi mdi-contacts menu-icon"></i>
            @endif



          </a>
        </li>
        <li class="nav-item">
            @if (app()->currentLocale() =='en')
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-qualification" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">{{ __('admin.qu') }}</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          </a>
          <div class="collapse" id="ui-qualification">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="#">{{ __('admin.xx') }}</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">{{ __('admin.zz') }}</a></li>
              <li class="nav-item"> <a class="nav-link" href="#"> {{ __('admin.alls') }}</a></li>
            </ul>
          </div>
          @endif
          @if (app()->currentLocale() =='ar')
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-qualification" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            {{--  <i class="menu-arrow"></i>  --}}
            <span class="menu-title">{{ __('admin.qu') }}</span>


          </a>
          <div class="collapse" id="ui-qualification">
            <ul class="nav flex-column sub-menu" dir="rtl">
              <li class="nav-item"> <a class="nav-link" href="#">{{ __('admin.xx') }}</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">{{ __('admin.zz') }}</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">{{ __('admin.alls') }}</a></li>
            </ul>
          </div>
          @endif


        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-portfolio" aria-expanded="false" aria-controls="ui-basic">
            @if (app()->currentLocale() =='ar')

            <i class="mdi mdi-contacts menu-icon"></i>
            {{--  <i class="menu-arrow"></i>  --}}
            <span class="menu-title">{{ __('admin.por') }}</span>
            @endif
            @if (app()->currentLocale() =='en')
            <span class="menu-title">{{ __('admin.por') }}</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-contacts menu-icon"></i>


            @endif
          </a>


          <div class="collapse" id="ui-portfolio">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="#">{{ __('admin.cat') }}</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">{{ __('admin.por') }}</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.servies.index') }}">
            @if (app()->currentLocale() =='ar')
            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            <span class="menu-title">{{ __('admin.ser') }}</span>
            @endif
            @if (app()->currentLocale() =='en')
            <span class="menu-title">{{ __('admin.ser') }}</span>

            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            @endif

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.skill.index') }}">
            @if (app()->currentLocale() =='ar')
            <i class="mdi mdi-puzzle menu-icon"></i>
            <span class="menu-title">{{ __('admin.sik') }}</span>
            @endif
            @if (app()->currentLocale() =='en')
            <span class="menu-title">{{ __('admin.sik') }}</span>
            <i class="mdi mdi-puzzle menu-icon"></i>
            @endif


          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.review.index') }}">
@if (app()->currentLocale() =='ar')
<i class="mdi mdi-thumbs-up-down menu-icon"></i>
<span class="menu-title">{{ __('admin.rev') }}</span>
@endif
@if (app()->currentLocale() =='en')
<span class="menu-title">{{ __('admin.rev') }}</span>
<i class="mdi mdi-thumbs-up-down menu-icon"></i>
 @endif

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.setting.index') }}">
@if (app()->currentLocale() =='ar')
<i class="mdi mdi-settings menu-icon"></i>
<span class="menu-title">{{ __('admin.set') }}</span>
@endif
@if (app()->currentLocale() =='en')
<span class="menu-title">{{ __('admin.set') }}</span>
<i class="mdi mdi-settings menu-icon"></i>
@endif

          </a>
        </li>

        <li class="nav-item sidebar-actions">
          <span class="nav-link">
          {{-- <form method="GET" action="{{ route('admin.portfolio.create') }}">
          <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
          </form> --}}
          <form method="POST" action="#">
           @csrf
            <button class="btn btn-block btn-lg btn-danger mt-4">{{ __('admin.out') }}</button>
          </form>
            {{-- <div class="mt-4">
              <div class="border-bottom">
                <p class="text-secondary">Categories</p>
              </div>
              <ul class="gradient-bullet-list mt-4">
                <li>Free</li>
                <li>Pro</li>
              </ul>
            </div> --}}
          </span>
        </li>
      </ul>
    </nav>
    <div class="main-panel">
      <div class="content-wrapper">
          @if (Session::has('message'))
          <div class="alert alert-primary" role="alert">
            {{ Session::get('message') }}
          </div>
          @endif
    @yield('content')
</div>
</div>
</div>
