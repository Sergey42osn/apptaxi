<template>
	<div>
		<LoginPanel v-if='loginpanel'></LoginPanel>
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
    			loginpanel: true,
    			user: null,
    			loading: false,
    			initiated: false
    			//req: axios.creat({
    				//baseurl: BASE_URL
    			//})
    		}
    	},
        mounted() {
            console.log('App mounted.')
        }
    }
</script>