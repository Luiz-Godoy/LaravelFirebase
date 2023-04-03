@extends('layout.structure.app')
@section('layout.body.login')

@if(session('status'))
    <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
@endif

<section class="vh-100 d-flex align-items-center justify-content-center">
    <div class="container py-5">
        <div class="row d-flex align-items-center justify-content-center h-100 ">
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h2 class="card-title">LGPD</h2>
                        </div>
                        <form>
                            <!-- Email input -->
                            <label for="email">Email:</label>
                            <div class="form-outline mb-4">
                                <input type="email" id="email" class="form-control form-control-lg" placeholder="Digite seu email" />
                            </div>

                            <!-- Password input -->
                            <label for="pass">Senha:</label>
                            <div class="form-outline mb-4 position-relative">
                                <input type="password" id="pass" class="form-control form-control-lg" placeholder="Digite sua senha" />
                                <label class="form-label" for="pass"><span  class="password-eye bi bi-lock password-eye position-absolute top-50" onclick="togglePassword('pass', this)"  style="top: 25px;">

                                </span> </label>

                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="form1Example3" />
                                    <label class="form-check-label" for="form1Example3">Lembrar de mim</label>
                                </div>
                                <a href="#">Esqueceu a senha?</a>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block btn-animated">
                                <span class="btn-text">Acessar</span>
                            </button>

                            <br>Não possui conta? <a href="UserRegister" class="mt-3"><b>Cadastre-se por aqui!</b></a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

