new Vue({
    el: "#app",
    data: {
      listaDischi: []
    },
    mounted() {
      axios.get("api/dischiApi.php")
        .then(resp => {
          this.listaDischi = resp.data.dati;
        })
    }
  })