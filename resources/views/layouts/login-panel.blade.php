<div class="login-con">

    <ul class="nav navbar-nav navbar-right">

    <!-- Authentication Links -->

    @guest

        <li><a href="{{ route('login') }}">Войти</a></li>

        <li><a href="{{ route('register') }}">Зарегестрироваться</a></li>

    @else

        <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>

                {{ Auth::user()->name }} <span class="caret"></span>

            </a>



            <ul class="dropdown-menu">

                <li>

                    <a href="{{ route('logout') }}"

                        onclick="event.preventDefault();

                                 document.getElementById('logout-form').submit();">

                        Выход

                    </a>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                        {{ csrf_field() }}

                    </form>

                </li>

            </ul>

        </li>

    @endguest

    </ul>  

</div>