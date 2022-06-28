const { createApp } = Vue
     createApp({
        data() {
            return {
                newSubscriber:[
                    /*
                    { id: '1', name: 'appartement 1', price: '50 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2', picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'},
                     */
                ]
            }
            },
                methods: {
                    subscribeToNewsletters(){
                    axios.get("https://xwegbe.com/wp-content/plugins/liste-appartements/model.php?action=getAllFreeAppartments").then(response  => 
                        this.newSubscriber = response.data);
                },
                 toFormData(obj){
                var  fd = new FormData();
                for(var i in obj){
                    fd.append(i, obj[i]);
                }
                return fd;
            }
            
            }
 }).mount('#app')