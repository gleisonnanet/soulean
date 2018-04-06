@section('sidebar')
<div class="page-sidebar">

    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">Joli Admin</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
          @include('layouts.sidebar.profile')
          <li class="xn-title">Menu lean</li>
          <li>
              <a href="/dashboard"><span class="glyphicon glyphicon-dashboard"></span> <span class="xn-text">Dashboard</span></a>
          </li>
          <li>
              <a href="/forum"><span class="fa fa-bullhorn"></span> <span class="xn-text">Fórum</span></a>
          </li>
          <li>
              <a href="/perfil"><span class="fa fa-user"></span> <span class="xn-text">Perfil</span></a>
          </li>
          <li>
              <a href="/assinatura"><span class="fa fa-sign-in"></span> <span class="xn-text">Assinatura</span></a>
          </li>
          <li>
              <a href="/suporte"><span class="fa fa-stethoscope"></span> <span class="xn-text">Suporte</span></a>
          </li>
          <li class="xn-icon-button pull-right">
            <a href="#" class="mb-control" data-box="#mb-signout">
              <span class="fa fa-sign-out"></span>
            </a>
          </li>



    </ul>
    <!-- END X-NAVIGATION -->
</div>

@show
