<ul class="myul">
    <a href="{{route('user.dashboard')}}"><li class="myli {{  request()->is('user/dashboard') ? 'menu-active':'' }}"><i class="fa fa-dashboard"></i> Tableau de bord</li></a>
    <a href="{{route('user.profile')}}"><li class="myli {{  request()->is('user/profile') ? 'menu-active':'' }}"><i class="fa fa-user-circle"></i> Mon profil</li></a>
    <a href="{{route('user.orders')}}"><li class="myli {{  request()->is('user/orders') ? 'menu-active':'' }}"><i class="fa fa-first-order"></i> Commandes</li></a>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <li class="myli"><i class="fa fa-sign-out"></i>Se déconnecter
        </li>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</ul>
