@extends('layout.structure.app')
<section class="vh-100">
    <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
        <!-- Área de formulário -->
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <div class="card">
            <div class="card-body">
            <div class="text-center mb-5">
                <h2 class="card-title">LGPD</h2>
            </div>

            <form action="{{ url('UserRegister')}}" method="POST">
                @csrf <!-- {{ csrf_field() }}
                <!-- Campos de nome e sobrenome -->
                <div class="form-group">
                    <label for="name">Nome</label>
                    <label for="last_name" style="margin-left: 175px;">Sobrenome</label>
                    <div class="row">
                    <div class="col">
                        <input type="text" name="first_name" class="form-control form-control-lg" placeholder="Nome" data-min-length="3" data-max-length="16" data-required data-only-letters/>
                    </div>

                    <div class="col">
                        <input type="text" name="last_name" class="form-control form-control-lg" placeholder="Sobrenome" data-min-length="3" data-required />
                    </div>
                    </div>
                </div>

                <!-- Campo de email -->
                <div class="form-group" style="margin-top: 35px;">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Insira seu email" data-min-length="3" data-required data-email-validate/>
                </div>

                <!-- Campo de senha -->
                <div class="form-group">
                    <label for="pass">Senha:</label>
                    <div class="position-relative">
                    <input type="password" name="password" id="pass" class="form-control form-control-lg" placeholder="Crie uma senha" data-required data-password-validate data-min-length="8" data-max-length="18"/>


                    </div>
                </div>

                <!-- Campo para confirmar a senha
                <div class="form-group">
                    <label for="c_pass">Confirmar Senha:</label>
                    <div class="position-relative">
                    <input type="password" id="c_pass" class="form-control form-control-lg" placeholder="Confirme sua senha" data-equal="password" data-required />
                    </div>
                </div> -->

                <!-- Botão para enviar o formulário -->
                <div class="form-group" style="margin-top: 30px;">
                    <button type="submit" id="btn-submit" class="btn btn-primary btn-lg btn-block btn-animated">
                    <span class="btn-text">Criar conta</span>
                    </button>
                </div>
                <!-- Separador entre o formulário e o botão de cadastro do Google -->
                <div class="divider d-flex justify-content-center align-items-center my-4 text-center">
                    <hr class="border-muted flex-grow-1 mx-3">
                    <p class="fw-bold mx-3 mb-0 text-muted">OU</p>
                    <hr class="border-muted flex-grow-1 mx-3">
                </div>
                <br> Já possui conta? <a href="UserLogin" class="mt-3"><b>Entrar</b></a>
            </form>
            <p class="error-validation template"></p>
                <!-- Listener responsable to get user data and send the requisition through a submit button -->
            </div>
        </div>
        </div>
    </div>
</div>


