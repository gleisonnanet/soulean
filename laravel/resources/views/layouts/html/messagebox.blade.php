@section('messagebox')

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> S<strong>air</strong> ?</div>
            <div class="mb-content">
                <p>Tem certeza que deseja sair?</p>
                <p>Pressione Não se quiser continuar o trabalho. Pressione Sim para sair do usuário atual.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="pages-login.html" class="btn btn-success btn-lg">Sim</a>
                    <button class="btn btn-default btn-lg mb-control-close">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->
@show
