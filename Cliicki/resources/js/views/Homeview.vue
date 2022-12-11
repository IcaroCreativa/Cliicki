<script setup>
import About from '../components/About.vue';
import SearchBar from '../components/SearchBar.vue';
import ButtonAddPost from '../components/ButtonAddPost.vue';
import Categorie from '../components/Categorie.vue';
import TitreCard from '../components/TitreCard.vue';
import MiniPost from '../components/MiniPost.vue';
</script>


<template>

<!-- CATEGORIES + ADD-POST + BARRE DE RECHERCHE -->
<div class="grid grid-cols-1 gap-4 md:grid-cols-4 px-4 ">
    <div class="col-span-4 py-11">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-gabble-green p-1 text-white overflow-y-auto">
                <Categorie/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 justify-center items-center">
                <div>
                    <!-- <ButtonAddPost/> -->
                    <ButtonAddPost id="show-modal" @click="toggleNewPostModal('1')"/>
                    <!-- <div>
                        <p class="text-white">users id : {{UserId}} </p>
                    </div> -->
                </div>

                <div class="mt-2 col-span-3 bg-gabble-green bg-gabble-green text-white">
                <SearchBar/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3 COLONNES AFFICHAGE DES POSTS + ABOUT -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4">
    <div class="border-2 rounded-xl border-white bg-[#ffffff13] ">
        <TitreCard :titre="AvisRecents"/>
        <div v-for="post in lastPosts" class="text-white ml-12 mt-4 mb-4">
            <MiniPost :id=post.id />
        </div>
    </div>

    <div class="border-2 rounded-xl border-white">
        <TitreCard :titre="MieuxNotes"/>
        <div v-for="post in bestPosts" class="text-white  ml-12 mt-4 mb-4">
            <MiniPost :id=post.id />
        </div>
    </div>

    <div class="border-2 rounded-xl border-white ">
        <TitreCard :titre="PlusCommentes"/>
        <div v-for="post in popularPosts" class="text-white  ml-12 mt-4 mb-4">
            <MiniPost :id=post.id />
        </div>
    </div>

    <!-- <div class="bg-oracle rounded-2xl">
        <About/>
    </div> -->
</div>



</template>



<script>


export default {

    data() {
        return {
        AvisRecents:"Avis Récents",
        MieuxNotes:"Les mieux notés",
        PlusCommentes:"Les + commentés",
        UserId : "1",
        bestPosts:'',
        popularPosts:'',
        lastPosts:'',
        }
    },

    methods : {
        getBestPosts(){
            var myHeaders = new Headers();
            myHeaders.append("Accept", "application/json");

            var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
            };

            fetch(this.$path + "api/getbestpost", requestOptions)
            .then(response => response.json())
            .then(result => {
                console.log(result)
                this.bestPosts=result;
            })
            .catch(error => console.log('error', error));

        },

        getMostPopularPosts(){
            var myHeaders = new Headers();
            myHeaders.append("Accept", "application/json");

            var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
            };

            fetch(this.$path + "api/mostpopularposts", requestOptions)
            .then(response => response.json())
            .then(result => {
                console.log(result)
                this.popularPosts=result;
            })
            .catch(error => console.log('error', error));            


        },

        getLastPosts(){

            var requestOptions = {
            method: 'GET',
            redirect: 'follow'
            };

            fetch(this.$path + "api/getlastposts", requestOptions)
            .then(response => response.json())
            .then(result => {
                console.log(result);
                this.lastPosts=result;
            })
            .catch(error => console.log('error', error));
        },

    },
    beforeMount() {
        this.getBestPosts();
        this.getLastPosts();
        this.getMostPopularPosts();
    },
    components: { MiniPost }

    
}
</script>

<style>


#backgradient{

/* background: rgb(56,182,255);
background: -moz-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
background: -webkit-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
background: linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1); */
background: rgb(122,0,0);
background: linear-gradient(125deg, rgba(122,0,0,0.7562734566482843) 0%, rgba(175,0,0,0.7646768179928222) 100%);
}


</style>