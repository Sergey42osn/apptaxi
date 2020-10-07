<template>
    <div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Регистрация</h3></div>

                <div class="panel-body">
                    <form :submit="saveForm()" class="form-horizontal" method="POST" action="#">

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="name" type="text" class="form-control" name="name" value="" placeholder="Введите имя" required autofocus>
                    
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Введите e-mail" required>

                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                        
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Введите пароль" required>

                        
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                    
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Подтвердите пароль" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group_box">
                                <button type="submit" class="btn btn-primary mx-auto">
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
        },
        methods:{
            Hide(){
               this.$emit('Hide'); 
            }
        },
        mounted() {
            console.log('Login mounted.');
            this.Hide();
        }
    }
</script>