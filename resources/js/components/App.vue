<template>
	<div>
		<LoginPanel
			v-if="loginpanel == 'show'"
			@Hide="Hide"
		></LoginPanel>
    	<router-view></router-view>
	</div>
</template>

<script>
//import LoginPanel  from "./components/LoginPanel";
    export default {
    	name:"app",
    	//components:{
    		//LoginPanel
    	//},
    	data() {
    		return {
    			loginpanel: 'show',
    			user: null,
    			loading: false,
    			initiated: false
    			//req: axios.creat({
    				//baseurl: BASE_URL
    			//})
    		}
    	},
    	methods: {
    		Hide(){
    			this.loginpanel = 'hide';
    		}
    	},
        mounted() {
            console.log('App mounted.')
        }
    }
</script>