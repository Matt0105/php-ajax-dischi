const app = new Vue({
    el: "#app",
    data: {
        musicData: [],
    },
    created() {
        axios.get("http://localhost:8888/php-ajax-dischi/server/controller-api.php?genre=all")
            .then((res) => {
                this.musicData = res.data.results;
            })
            .catch(err => {console.log("error")});
    }
});