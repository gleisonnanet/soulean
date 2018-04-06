@extends('forms.pagamento')
@section('planos')
<div class="col-md-12 panel ">
              <div class="col-md-6 panel ">
          <p>    Olá usuario</br></p>
          <p>    Você é nosso assinante desde: 21/marc/2018 e os dados do seu plano atual são:  </p>

        <h2> <small>  Plano de assinatura <h1>Starter</h1>

        </h2 ></small>

              Valido até : 21/marc/2019


              <div class="progress-list">
                    <div class="pull-left"><strong class="text-warning">faltam 111 dias para expirar sua conta</strong></div>
                    <div class="pull-right">75/150</div>
                    <div class="progress progress-small progress-striped active">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                    </div>
                </div>

              </div>


<div class="row">
              <!-- PRICING TABLE -->
              <div class="col-md-4">

<div class="panel panel-success push-up-20">
<div class="panel-body panel-body-pricing">

<p><span class="fa fa-caret-right">
</span> VALOR VALIDO PARA HOJE</p>
<h2>Trimestral<br><small>R$ 999,99</small></h2>
<p class="text-muted">Preço individual</p>
</div>
<div class="panel-footer">
<button class="btn btn-success btn-block">Escolha o plano</button>
</div>
</div>

              </div>

              <div class="col-md-4">

                  <div class="panel panel-danger">
                      <div class="panel-body panel-body-pricing">
                      </span> VALOR VALIDO PARA HOJE</p>
                <h2>180 dias<br><small>R$ 999,99</small></h2>
                      <p class="text-muted">Preço individual</p>
                      </div>
                      <div class="panel-footer">
                          <button class="btn btn-danger btn-block">Escolha o plano</button>
                      </div>
                  </div>

              </div>

              <div class="col-md-4">

                  <div class="panel panel-warning push-up-20">
                      <div class="panel-body panel-body-pricing">
                      </span> VALOR VALIDO PARA HOJE</p>
                <h2>365 dias<br><small>R$ 999,99</small></h2>
                      <p class="text-muted">Preço individual</p>
                      </div>
                      <div class="panel-footer">
                          <button class="btn btn-warning btn-block">Escolha o plano</button>
                      </div>
                  </div>

              </div>
              <!-- END PRICING TABLE-->
          </div>
            @yield('pagamento')
@show
