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
                console.log(res)
                this.disks = res.data
            }).catch((error) => {
                console.error('Error fetching data:', error);
            });
        }
    },
    created() {
        this.fetchData()
    }
}).mount('#app')