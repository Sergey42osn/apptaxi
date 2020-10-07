<template>
	<div>
		<LoginPanel
			v-if="loginpanel == 'show'"
		></LoginPanel>
    	<router-view @Hide="Hide"></router-view>
	</div>
</template>

<script>
//import LoginPanel  from "./components/LoginPanel";
    export default {
    	name:"app",
    	//components:{
    		//LoginPanel
    	//},
    	//props: ['loginpanel'],
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
    			console.log('hide.')
    		}
    	},
        mounted() {
            console.log('App mounted.')
        }
    }
</script>