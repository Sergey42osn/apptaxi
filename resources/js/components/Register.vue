<template>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>Для продолжения пройдите регистрацию</h2>
                <div class="panel-heading">Регистрация</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="#">

                        <div class="form-group">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" placeholder="Введите имя" required autofocus>

                    
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Введите e-mail" required>

                               
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

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Подтвердите пароль" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Зарегестрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Register mounted.')
        }
    }
</script>