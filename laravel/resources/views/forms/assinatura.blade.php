@section('assinatura')
<!-- PAGE CONTENT -->
<div class="page-content">

    <!-- START X-NAVIGATION VERTICAL -->
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- TOGGLE NAVIGATION -->
        <li class="xn-icon-button">
            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>
        <!-- END TOGGLE NAVIGATION -->
    </ul>
    <!-- END X-NAVIGATION VERTICAL -->

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Link</a></li>
        <li class="active">Active</li>
    </ul>
    <!-- END BREADCRUMB -->

    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Page Title</h2>
    </div>

    <!-- PAGE CONTENT WRAPPER -->

include_once("assinatura/planos.php")
    <!--./ END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->

@show
