const app = new Vue({
    el: '#app',
    data: {
        songList: [],
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi/dataencode.php").then((response) => {
            this.songList = response.data;
            console.log(response);
        })
    },
})