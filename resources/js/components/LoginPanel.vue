<template>
   <div class="login-con">

	    <ul class="nav navbar-nav navbar-right">

	    <!-- Authentication Links -->

	   <router-link :to="{name: 'login'}">Войти</router-link>

	    <router-link :to="{name: 'register'}">Зарегестрироваться</router-link>

	      <!--  <li class="dropdown">

	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>

	                {{ Auth::user()->name }} <span class="caret"></span>

	            </a>



	            <ul class="dropdown-menu">

	                <li>

	                    <a href="{{ route('logout') }}"

	                        onclick="event.preventDefault();

	                                 document.getElementById('logout-form').submit();">

	                        Выход

	                    </a>



	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

	                        {{ csrf_field() }}

	                    </form>

	                </li>

	            </ul>

	        </li>-->

	    </ul>  

	</div>
</template>

<script>
    export default {
    	name: 'loginpanel',
    	props: ['app'],
    	data(){
    		return {

    		}
    	},
    	methods:{
    		logout()
    		{

    		}
    	},
        mounted() {
            console.log('LoginPanel mounted.')
        }
    }
</script>