const { createApp } = Vue
createApp({
    data() {
        return {
            search:'',
            list_jobs:[],
        }
    },
    methods: {
        getJobs() {
            console.log(this.search);
            if (this.search != '') {
                axios.get('/searchJobs',{search:this.search}).then(res => {
                    this.list_jobs = [];
                    if (res.data.success) {
                        res.data.jobs.forEach((a) => { this.list_jobs.push({ ...a }) })
                    }
                }).catch(err => {
                    console.log(err);
                })
            } else {
                console.log("sin criterio de busqueda");
            }
            console.log(this.list_jobs);
        }
    },
    mounted() {
        console.log("main");
    },
}).mount('#appMain')
