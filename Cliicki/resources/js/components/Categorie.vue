<template lang="">

<div class="inline-flex" v-for="categorie in categories"> 


<button @click="letsgo(categorie.id)" :title="[categorie.name]" type="button"  class="text-white bg-transparent border border-gray-300 backdrop-blur-md   hover:bg-gray-50 hover:text-cardinal focus:ring-2 font-medium rounded-lg text px-5 py-2.5 mr-2 mb-2 d">{{categorie.name}}</button>
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
<style>
#backgradient2{
  background: rgb(89,52,105);
background: -moz-linear-gradient(299deg, rgba(89,52,105,0.49640287769784175) 46%, rgba(31,44,105,0.7458033573141487) 100%);
background: -webkit-linear-gradient(299deg, rgba(89,52,105,0.49640287769784175) 46%, rgba(31,44,105,0.7458033573141487) 100%);
background: linear-gradient(299deg, rgba(89,52,105,0.49640287769784175) 46%, rgba(31,44,105,0.7458033573141487) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#593469",endColorstr="#1f2c69",GradientType=1);
}

</style>