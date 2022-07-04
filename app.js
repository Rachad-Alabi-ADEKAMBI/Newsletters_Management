const { createApp } = Vue

createApp({
   data() {
       return {
         message: 'le msg'
       }
       },
       mounted: function(){
          // this.getAllAppartments();
       },
           methods: {
               getAllAppartments(){
               axios.get("https://mywp.solidarityworld.org/wp-content/plugins/liste-appartements/model.php?action=getAllAppartments").then(response => this.appartments = response.data);
           }
       }
}).mount('#app')