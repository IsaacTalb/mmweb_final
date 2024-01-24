<header>
        <nav class="nav affix">
            <div class="menu_containter ContainerUnactive">
                <div class="logo">
                    <a href="{{ url('/') }}">W</a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                            <li class="{{ (request()->is('academy_cafe')? 'active' : '' ) }} ">
                                <a href="{{ url('/academy_cafe') }}">Academy Cafe & Events</a>
                            </li>
                            <li class="{{ (request()->is('entreprenuers')? 'active' : '' ) }}">
                                <a href="{{ url('/entreprenuers') }}">Entreprenuers</a>
                            </li>
                            <li class="{{ (request()->is('food_product')? 'active' : '' ) }}">
                                <a href="{{ url('food_product') }}">Food Product</a>
                            </li>
                            <li>
                                <a href="#">Community School</a>
                            </li>
                            <li>
                                <a href="{{ url('entrepreneur') }}">Livelihood</a>
                            </li>
                            <li>
                                <a href="#">Environmental</a>
                            </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="#"><div class="page_darection"><div class="sybol" style="background-image: url({{ asset('img/Flag_of_Japan.svg.webp') }});"></div></div></a>
                    <a href="#"><div class="page_darection un_active"><div class="sybol" style="background-image: url({{ asset('img/Flag_of_Myanmar.svg.png') }});"></div></div></a>
                </div>        
            </div>
                <span class="navTrigger unactive">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
        </nav>
    </header>