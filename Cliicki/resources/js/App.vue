<script setup>
import Navbar from './components/Navbar.vue';
import {RouterView} from 'vue-router';

</script>


<template lang="">

    <div class="h-full min-h-screen bg-cover bg-[url('../js/images/background_01.jpg')] bg-fixed ">
        <Navbar class=" border-b-[1px]" id="nav" />
        <RouterView />
    </div>   

</template>
<script>

export default {
  components: {
    Navbar,
  },
  //   data() {
  //     // return {
  //     //   whoAmI: this.$root.whoAmI,
  //     // }
  //   },
  //   beforeMount() {
  //       // console.log(this.whoAmI);
  //   },
  }
</script> -->
<style>
#nav{
    
  /* background: rgb(56,182,255);
background: -moz-linear-gradient(126deg, rgba(56,182,255,0.5148514851485149) 0%, rgba(8,95,206,0.4108910891089109) 16%, rgba(48,5,35,0.5643564356435644) 100%);
background: -webkit-linear-gradient(126deg, rgba(56,182,255,0.5148514851485149) 0%, rgba(8,95,206,0.4108910891089109) 16%, rgba(48,5,35,0.5643564356435644) 100%);
background: linear-gradient(126deg, rgba(56,182,255,0.5148514851485149) 0%, rgba(8,95,206,0.4108910891089109) 16%, rgba(48,5,35,0.5643564356435644) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1); */

background: rgb(56,182,255);
background: -moz-linear-gradient(126deg, rgba(56,182,255,0.831496062992126) 0%, rgba(8,95,206,0.831496062992126) 16%, rgba(48,5,35,0.8346456692913385) 100%);
background: -webkit-linear-gradient(126deg, rgba(56,182,255,0.831496062992126) 0%, rgba(8,95,206,0.831496062992126) 16%, rgba(48,5,35,0.8346456692913385) 100%);
background: linear-gradient(126deg, rgba(56,182,255,0.831496062992126) 0%, rgba(8,95,206,0.831496062992126) 16%, rgba(48,5,35,0.8346456692913385) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1);
  
}
</style>




