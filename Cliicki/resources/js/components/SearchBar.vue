<template lang="">
<!-- BARRE DE RECHERCHE -->

<form> 
    <div class="flex lg:justify-end"> 
        <label 
            for="default-search" 
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
            Chercher
        </label>

        <div class="relative grid grid-rows-2 lg:grid-rows-1 w-full lg:w-5/6">
            <!-- INPUT -->
            <div>
                <!-- LOUPE -->
                <div class="absolute pl-2 pt-4 pointer-events-none">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            <input v-model="search"
                type="search" id="default-search" 
                class="flex w-full p-4 pl-10 text text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#1C74C3] focus:border-[#1C74C3]" 
                placeholder="Chercher ..." required>

            <!-- BOUTON SEARCH -->
            <button @click="letsgo()"
                type="submit" 
                class="text-white border backdrop-blur-md  lg:text-cardinal absolute md:right-1 5 bottom-2.5 w-full md:w-2/6  lg:bg-transparent hover:bg-white hover:text-blue-900 focus:ring-2 focus:outline-none focus:ring-cardinal font-medium rounded-lg text py-2">
                Chercher
            </button>
           
            </div>
        </div>
    </div> 
</form>

</template>


<script>
export default {

    methods: {
        letsgo(search){
          this.$router.push({
          name: 'allposts', // Le nom de la route vers laquelle vous voulez rediriger
          params: { // Un objet contenant les paramètres à envoyer à la route
            search: search,
          }
        });
        }
    },
}

</script>
