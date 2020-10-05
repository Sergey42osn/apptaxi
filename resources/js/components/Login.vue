<template>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Авторизация</div>
               
                    <div class="alert alert-info"></div>
            
           
                    <div class="alert alert-danger"></div>
             
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">

                        <div class="form-group">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Введите e-mail" required autofocus>

                                    <span class="help-block">
                                        <strong></strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Введите пароль" required>

     
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
          
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="loginboxbtn_login">
                                    <button type="submit" class="btn btn-primary loginboxbtn_submit">
                                    Войти
                                </button>
                                <a class="btn btn-primary loginboxbtn_reset" href="">
                                    Восстановить пароль?
                                </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-xs-12">
                        <div class="loginboxbtn">
                            <router-link :to="{name: 'register'}" class="btn btn-primary loginboxbtn_register">Зарегестрироваться</router-link>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data() {
            return {
                loginpanel:false
            }
        },
        mounted() {
            console.log('Login mounted.')
        }
    }
</script>