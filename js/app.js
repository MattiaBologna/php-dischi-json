const { createApp } = Vue

createApp({
    data() {
        return {
            disks: [],
            modalIsOn: false,
            currentDisk: {}
        }
    },
    methods: {
        fetchData() {
            // axios recuperiamo i dati 
            axios.get('./server.php').then((res) => {
                this.disks = res.data
            })
        },
        testFunction(i) {
            if (this.modalIsOn) {
                this.modalIsOn = false;
            } else {
                this.modalIsOn = true;
            }
            console.log(this.modalIsOn);
            console.log(i);
            console.log(this.disks[i].title);

            this.currentDisk = this.disks[i];
        }
    },
    created() {
        this.fetchData();
    }
}).mount('#app')