@extends('layouts.app')
@extends('layouts.sidebar')
@extends('forms.assinatura')
@extends('layouts.footer')
<!-- START PAGE CONTAINER -->
<div class="page-container">
    <!-- START PAGE SIDEBAR -->
  @yield('sidebar')
    <!-- END PAGE SIDEBAR -->
    <!-- PAGE CONTENT -->

  @yield('assinatura')
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->

  @yield('messagebox')
<!-- END MESSAGE BOX-->
