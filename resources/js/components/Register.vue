<template>
    <div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Регистрация</h3></div>

                <div class="panel-body">
                    <form v-on:submit="saveForm()" class="form-horizontal" method="POST">

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="name" type="text" class="form-control" v-model="name" value="" placeholder="Введите имя" required autofocus>
                    
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="email" type="email" class="form-control" v-model="email" value="" placeholder="Введите e-mail" required>

                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                        
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="password" type="password" class="form-control" v-model="password" placeholder="Введите пароль" required>

                        
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                    
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="password-confirm" type="password" class="form-control" v-model="password_confirmation" placeholder="Подтвердите пароль" required>
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
        data() {
            return{
                name : "",
                email : "",
                password : "",
                password_confirmation : ""
                }
        },
        methods:{
            Hide(){
               this.$emit('Hide'); 
            },
            saveForm(){
                 event.preventDefault();
                 console.log(this.name);

                 if (this.password === this.password_confirmation && this.password.length > 5)
                {
                    let url = "/register"
                 
                    this.$http.post(url, {
                        name: this.name,
                        email: this.email,
                        password: this.password
                    })
                    .then(response => {
                        localStorage.setItem('user',JSON.stringify(response.data.user))
                        localStorage.setItem('jwt',response.data.token)
 
                        if (localStorage.getItem('jwt') != null){
                            this.$emit('loggedIn')
                            if(this.$route.params.nextUrl != null){
                                this.$router.push(this.$route.params.nextUrl)
                            }
                            else{
                                this.$router.push('/')
                            }
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    });
                } else {
                    this.password = ""
                    this.passwordConfirm = ""
 
                    return alert("Passwords do not match")
                }
            }
        },
        mounted() {
            console.log('Login mounted.');
            this.Hide();
        }
    }
</script>