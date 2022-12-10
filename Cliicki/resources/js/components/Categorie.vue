<template lang="">

<div class="inline-flex" v-for="categorie in categories"> 

<button @click="letsgo(categorie.id)" type="button" class="text-slate-200 border-2 bg-gradient-to-r from-downy to-san-juan hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 hover:text-san-juan focus:ring-4 focus:outline-none focus:ring-cardinal dark:focus:ring-teal-700 font-semibold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">{{categorie.name}}</button>
</div>

</template>


<script>
export default {
  data() {
    return {
      categories:'',
    }
  },
  methods : {

    //---------------------------------------------
    //---------- AFFICHER LES CATEGORIES  ---------
    //---------------------------------------------

    getcategories(){
          var myHeaders = new Headers();
            myHeaders.append("Accept", "application/json");

            var requestOptions = {
              method: 'GET',
              headers: myHeaders,
              redirect: 'follow'
            };
            
            fetch(this.$path + "api/categories", requestOptions)
              .then(response => response.json())
              .then(result => {
                this.categories = result;
              })
              .catch(error => console.log('error', error));

        },
        letsgo(id){
          this.$router.push({
          name: 'allposts', // Le nom de la route vers laquelle vous voulez rediriger
          params: { // Un objet contenant les paramètres à envoyer à la route
            param1: id,
          }
        });
        }
    },

    beforeMount(){
    this.getcategories();
    },

}   
</script>
