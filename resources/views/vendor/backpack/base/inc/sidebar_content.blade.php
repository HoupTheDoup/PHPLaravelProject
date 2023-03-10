{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-th-list"></i> Users</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('genre') }}"><i class="nav-icon la la-th-list"></i> Genres</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('artist') }}"><i class="nav-icon la la-th-list"></i> Artists</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('album') }}"><i class="nav-icon la la-th-list"></i> Albums</a></li>
