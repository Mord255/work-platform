const { createApp } = Vue
createApp({
    data() {
        return {
            email:'',
            password:'',
        }
    },
    methods: {
        senData() {
            console.log(this.email);
            console.log(this.password);
            if (this.email != '' && this.password != '') {
                axios.post('/loguear',{email:this.email,password:this.password}).then(res => {
                    console.log(res);
                }).catch(err => {
                    console.log(err);
                })
            } else {
                console.log("datos vacios");
            }

        }
    },
    mounted() {
        console.log("login");
    },
}).mount('#appLogin')
