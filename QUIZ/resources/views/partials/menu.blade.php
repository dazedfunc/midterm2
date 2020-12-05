<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="fa fa-bookmark">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>

            @can('question_access')
                <li class="nav-item">
                    <a href="{{ route("admin.questions.index") }}" class="nav-link {{ request()->is('admin/questions') || request()->is('admin/questions/*') ? 'active' : '' }}">
                        <i class="fa fa-circle-o">

                        </i>
                        {{ trans('cruds.question.title') }}
                    </a>
                </li>
            @endcan
            @can('option_access')
                <li class="nav-item">
                    <a href="{{ route("admin.options.index") }}" class="nav-link {{ request()->is('admin/options') || request()->is('admin/options/*') ? 'active' : '' }}">
                        <i class="fa fa-circle-o">

                        </i>
                        {{ trans('cruds.option.title') }}
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fa fa-circle-o">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
