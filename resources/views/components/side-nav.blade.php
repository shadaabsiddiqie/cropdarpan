<div id="sidebar-main" class="sidebar sidebar-default sidebar-separate sidebar-fixed">
    <div class="sidebar-content">
        <div class="sidebar-category sidebar-default">
            <div class="sidebar-user">
                <div class="category-content">
                    @guest
                        <img src="{{ url('storage/images/logo.png') }}" alt="" class="mx-auto" width="100%;">
                    @else
                        <h4>{{ auth()->user()->name }}</h4>
                        <small>{{ __('farmer') }}</small>
                    @endguest
                </div>
            </div>
        </div>
        <!-- /Sidebar Category -->
        <div class="sidebar-category sidebar-default">
            <div class="category-title">
                <span>Pages</span>
            </div>
            <div class="category-content">
                <ul class="nav flex-column">
                    {{ $slot }}
                    <!--
                    <li class="nav-item">
                        <a href="#other-fruits" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="other-fruits">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            Others
                        </a>
                        <ul id="other-fruits" class="flex-column collapse">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Orange
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Kiwi
                                </a>
                            </li>
                        </ul>
                    </li>
                    -->
                </ul>
                <!-- /Nav -->
            </div>
            <!-- /Category Content -->
        </div>
        <!-- /Sidebar Category -->
    </div>
</div>
