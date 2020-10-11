<template>
    <div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Регистрация</h3></div>

                <div class="panel-body">
                    <form v-on:submit="saveForm()" class="form-horizontal" method="POST" novalidate="">

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="name"
                                        type="text"
                                        class="form-control"
                                        v-model="name"
                                        v-on:click="chang($event)"
                                        v-on:change="chang($event)"
                                        data-required="Введите имя"
                                        value="name"
                                        placeholder="Введите имя"
                                        autofocus>
                                <span v-show="error.name" class="help-block">
                                        <strong>{{ error.name }}</strong>
                                    </span>
                    
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="email"
                                        type="email"
                                        class="form-control"
                                        v-model="email"
                                        v-on:click="chang($event)"
                                        v-on:change="chang($event)"
                                        data-required="Заполните E-mail"
                                        placeholder="Введите e-mail"
                                        required>

                                    <span v-show="error.email" class="help-block">
                                        <strong>{{ error.email }}</strong>
                                    </span>
                        
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="password"
                                        type="password"
                                        class="form-control"
                                        v-model="password"
                                        v-on:click="chang($event)"
                                        v-on:change="chang($event)"
                                        data-required="Введите пароль"
                                        placeholder="Введите пароль"
                                        required>

                        
                                    <span v-show="error.password" class="help-block">
                                        <strong>{{ error.password }}</strong>
                                    </span>
                    
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="form-group_box">
                                <input id="password_confirmation"
                                        type="password"
                                        class="form-control"
                                        v-model="password_confirmation"
                                        v-on:click="chang($event)"
                                        v-on:change="chang($event)"
                                        data-required="Подтвердите пароль"
                                        placeholder="Подтвердите пароль">

                                    <span v-show="error.password_confirmation" class="help-block">
                                        <strong>{{ error.password_confirmation }}</strong>
                                    </span>
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
    import axios from 'axios';
    export default {
        data() {
            return{
                name : "",
                email : "",
                password : "",
                password_confirmation : "",
                error: {
                    name:false,
                    email: false,
                    password: false,
                    password_confirmation: false
                }
            }
        },
        methods:{
            chang:function(e) {
                //console.log(e.target.id);
                var $name = e.target.id;
                var val = e.target.value;
                var required = e.target.dataset.required;
               // console.log(e.target.dataset.name);
                if (val != "") {
                    //console.log($name);
                    this.error[$name] = false;
                }else{
                    this.error[$name] = required;
                    //this.error = true;
                }
                if ($name == "password" && this.password != "") {
                    //console.log(this.password.length);
                    if (this.password.length < 6) {
                       this.error[$name] = "Пароль не менее 6 символов"; 
                    }
                    if (this.password_confirmation == "") {
                        this.error.password_confirmation = "Подтвердите пароль";
                    }
                    if (this.password != this.password_confirmation) {
                        this.error[$name] = "Пароли не совпадают"; 
                    }else{
                        this.error[$name] = false; 
                    }
                }
                if ($name == "password_confirmation") {
                    if (this.password != this.password_confirmation) {
                        this.error.password = "Пароли не совпадают"; 
                    }else{
                        this.error.password = false;
                    }
                    if (this.password.length < 6) {
                       this.error.password = "Пароль не менее 6 символов"; 
                    }
                }
                let error =false;
               // console.log(this.error);
            },
            Hide(){
               this.$emit('Hide'); 
            },
            saveForm(){
                 event.preventDefault();
                //console.log(this.password);

                    let error = false;

                    if (this.name == "") {
                        this.error.name = "Введите имя";
                        error = true;
                    }
                    if (this.email == "") {
                        this.error.email = "Заполните e-mail";
                        error = true;
                    }
                    if (this.password == "") {
                        this.error.password = "Введите пароль";
                        error = true;
                    }
                    if (this.password_confirmation == "") {
                        this.error.password_confirmation = "Повторите пароль";
                        error = true;
                    
                    }
                    if (error) {
                         console.log(this.error);
                        return this.error;
                    }

                 if (this.password === this.password_confirmation)
                {
                    console.log(this.password);
                    let url = "/api/v1/register"
                 
                    axios.post(url, {
                        name: this.name,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.password_confirmation 
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
                    
                     this.error.password = "Пароли не совпадают";

                         console.log(this.error);
                         return this.error;
                }
            }
        },
        mounted() {
            console.log('Login mounted.');
            this.Hide();
        }
    }
</script>