new Vue({
    el: '#app',
    data: {  
        disks: [],
    },
    created() {
        axios.get('http://localhost:80/php-ajax-dischi/api/disks.php').then((response) => {
        this.disks = response.data;
        })
    }
});

// chiamata api al mio database in disks.php che mi rimanderà, grazie a json_encode,
// la decodifica del mio array php sotto forma di oggetti json