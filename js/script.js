const app = new Vue({
    el: "#app",
    data: {
        musicData: [],
        myGenre: "all",
    },
    methods: {

        call() {
            console.log(this.myGenre);
            axios.get(`http://localhost:8888/php-ajax-dischi/server/controller-api.php?genre=${this.myGenre}`)
            .then((res) => {
                this.musicData = res.data.results;
                console.log(res.data);
            })
            .catch(err => {console.log("error")});
        }
    },
    created() {
        axios.get("http://localhost:8888/php-ajax-dischi/server/controller-api.php?genre=all")
            .then((res) => {
                this.musicData = res.data.results;
            })
            .catch(err => {console.log("error")});
    }
});