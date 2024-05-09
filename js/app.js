const { createApp } = Vue

createApp({
    data() {
        return {
            disks: []
        }
    },
    methods: {
        fetchData() {
            // axios recuperiamo i dati 
            axios.get('./server.php').then((res) => {
                this.disks = res.data
            })
        }
    },
    created() {
        this.fetchData()
    }
}).mount('#app')