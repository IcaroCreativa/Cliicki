<template>

<div class="grid  place-items-center">

  <form id="backgradient" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[375px] lg:w-[500px]">
 <!-- ------------------ title ------------------ -->
 <div class="mb-4">
      <label class="block text-gray-100 font-medium text-lg mb-2" for="title">
        Titre *
      </label>
      <input required v-on:change="deleteErrorMessage()" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" v-model="title" placeholder="Entrez un titre">
    </div>
    <p v-if="error_title" class="text-red-200 ml-1 -mt-3 mb-3">{{this.error_message}}</p>

  <!-- ------------------ URL ------------------ -->
    <div class="mb-4">
      <label class="block text-gray-100 font-medium text-lg mb-2" for="url">
        URL *
      </label>
      <input v-on:change="deleteErrorMessage(); checkUrl(this.url)" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="url" type="text" v-model="url" placeholder="Collez l'URL">
      <p v-if="error_url" class="text-red-200 ml-1">{{this.error_message}}</p>
    </div>

    <!-- ------------------ CATEGORIES ------------------ -->
    <div class="menu categories mt-6">
            <label class="block text-gray-100 font-medium text-lg mb-2" for="category">
              Catégorie *
            </label>
            <div id="backgradient1" class="rounded">
                <details class = "group py-2 px-2 text-left font-bold mt-3">
                    <summary
                        class = "flex cursor-pointer px-2 py-2 text-white rounded-sm hover:bg-white hover:text-san-juan"
                        >
                        <span class = "text-sm font-medium">Choisissez une Catégorie</span>
                        
                        <span
                            class = "ml-auto shrink-0 transition duration-300 group-open:-rotate-180"
                            >
                            <svg
                                xmlns   = "http://www.w3.org/2000/svg"
                                class   = "h-5 w-5"
                                viewBox = "0 0 20 20"
                                fill    = "currentColor"
                                >
                                <path   
                                fill-rule = "evenodd"
                                d         = "M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule = "evenodd"
                                />
                            </svg>
                        </span>
                    </summary>

                <div class="flex items-center pl-3" v-for="(item, index) in items" :key="index">
                  <label  class="py-2 ml-2  w-48 text-sm md:text-base font-medium text-white hover:bg-[#0e51ae41] rounded-lg ">
                  <input type="radio" v-on:change="deleteErrorMessage()" :value="item.value" v-model="checkedValues" class="w-4 h-4 pl-4  text-[#0A59C3] border-gray-400 rounded focus:ring-2 focus:ring-[#0d6eee] "/>
                  &nbsp;{{item.label }}
                  </label>
                </div>
                <p v-if="error_categories" class="text-red-200 ml-1 -mt-3 mb-3">{{this.error_message}}</p>
              
<!-- title:{{title}}
url: {{url}}
box: {{checkedValues}}
commentaire: {{content}}
tag: {{tags}}
stars: {{stars}} -->

                </details>
            </div>
       
    </div>

    <!-- ------------------ COMMENTAIRES ------------------ -->
    <div class="mb-4 mt-6">
      <label class="flex text-gray-100 font-medium text-lg mb-2" for="comment">
        Commentaire *
      </label>
      <textarea v-on:change="deleteErrorMessage()" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="comment" v-model="content" placeholder="Laissez votre commentaire"></textarea>    
      <p v-if="error_comment" class="text-red-200 ml-1 -mt-3 mb-3">{{this.error_message}}</p>
    </div> 

    <!-- ------------------ ETOILES ------------------ -->
    <label class="block text-gray-100 font-medium text-lg mb-4" for="category">
              Notez 
    </label>
   
    <div class=" -mt-4">
      <ul class="">
    <li>
      <label for="5">
        <input checked type="radio" id="5" name="stars" class="" value="5" v-model="stars" >
        <i class="bi bi-star-fill text-yellow-400 ml-2"></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
      </label>
    </li>
    
    <li>
      <input type="radio" id="4" name="stars" value="4" v-model="stars">
      <label for="4" class="ml-2" >
        <i class="bi bi-star-fill text-yellow-400 "></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
     </label>
    </li>
    <li>
      <input type="radio" id="3" name="stars" value="3" v-model="stars">
      <label for="3" class="ml-2">
        <i class="bi bi-star-fill text-yellow-400 "></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
      </label>
    </li>
    <li>
      <input type="radio" id="2" name="stars" value="2" v-model="stars" class="" >
      <label for="2" class="ml-2">
        <i class="bi bi-star-fill text-yellow-400 "></i>
        <i class="bi bi-star-fill text-yellow-400 ml-1"></i>
      </label>
    </li>
    <li class="mb-2">
      <input type="radio" id="1"  name="stars" value="1" v-model="stars">
      <label for="1" class="ml-2">
        <i class="bi bi-star-fill text-yellow-400 "></i>
      </label>
    </li>
  
  </ul>
   </div>



    <!-- ------------------ TAGS ------------------ -->
    <div class="mb-6 mt-6">
      <label class="block text-gray-100 font-medium text-lg mb-2" for="tags">
        Tags
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tags" type="text" v-model="tags" placeholder="Ajoutez un tag à votre commentaire">
    
    </div>
   
    <!-- ------------------ VALIDER / CLOSE ------------------ -->
    <div class="flex items-center justify-between">
      <button  @click= "createPost()" class="bg-downy hover:bg-san-juan border-4 hover:border-cardinal hover:text-slate-200 text-eagle-green font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        VALIDER
      </button>
      <router-link to="/">
      <button class="inline-block align-baseline font-bold text-sm text-cardinal hover:text-eagle-green" @click="$emit('close')">
        CLOSE
      </button>
    </router-link>
    </div>

  </form>

</div>


</template>




<script>

export default {

  props: 
      {
      showNewPostModal:Boolean,
      myUserId:Number,
      },
  
  data() {
  return {
      url: "",
      content: "",
      tags: "",
      category:'',
      checkedNames: [],
      model: this.value,
      items: [],
      checkedValues: [],
      image_icon: 'imageicon',
      title:'',
      stars_count:parseInt(this.stars),
      post_id:'',
      tag_id:'',
      toogle:false,
      stars:5,
      error_title:false,
      error_url:false,
      error_categories:false,
      error_comment:false,
      error_message:'Ce champ est obligatoire',
 
    
  }
  },
  


  methods: {
  

    createPost(){

      if(this.title==''){
       this.error_title=true;
        }  
      else if(this.url==''){
       this.error_url=true;
                  }
      else if(this.checkedValues==''){
       this.error_categories=true;
                  }
      else if(this.content==''){
       this.error_comment=true;
                  }             
      else if(this.tags==''){
        this.$swal("Merci d'ajouter un tag pour votre commentaire!")
                  }
      else{
      this.getTagByName();
    }

    },

    deleteErrorMessage(){
      this.error_title=false;
      this.error_url=false;
      this.error_categories=false;
      this.error_comment=false;

    },




    checkUrl(url) {
      var myHeaders = new Headers();
myHeaders.append("Accept", "application/json");

var requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow',
  method:'cors',
  origin: 'https://www.google.com',
};

fetch(url, requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));


    },

  

















    

      
    createPostEnd(){
          
            this.stars_count=this.stars;
           
            var myHeaders = new Headers();
            myHeaders.append("Accept", "application/json");

            var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            redirect: 'follow'
            };

            fetch(this.$path + "api/createpost?title="+this.title+"&category_id="+this.checkedValues+"&url="+this.url+"&image_icon="+this.image_icon+"&stars_count="+this.stars_count, requestOptions)
            .then(response => response.json())
            .then(result =>{ 
                console.log(result);
                if (result.message=="Unauthenticated."){
                    
                    this.$swal("Super initiative.Pour créer un commit il faut s'identifier!").then(result=>{
                    window.location.href = this.$path + "login";
                
                })
                
            }
            else if(result[0]==1){
              // alert('This post exist');
             let post_id=result[1].id;
              this.$swal("Oups ce url existe déja!").then(result=>{
                window.location.href = this.$path+'post/'+post_id;   //REDIRECTION VERS LE POST POUR POUVOIR LE COMMENTER Changer la direction
                })
              
            }
                else{
                this.post_id=result[1].id;
                console.log('id:'+this.post_id);
                this.storeStars(this.post_id,this.stars_count)
                this.createPostTag();
                this.createComment(this.post_id,this.content);
            }
            })
            .catch(error => {
              this.$swal("Oups ce url existe déja!").then(result=>{
                window.location.href = this.$path;   //REDIRECTION VERS LE POST POUR POUVOIR LE COMMENTER Changer la direction
                })

                // this.$swal('login in to your account').then(result=>{
                //     window.location.href = this.$path + "login";
                //     console.log('error in fectch createpost:'+error);   
                // })     
            });
        },
        createComment(post_id,content){
            var myHeaders = new Headers();
            myHeaders.append("Accept", "application/json");

            var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            redirect: 'follow'
            };

            fetch(this.$path + "api/createcomment?content="+content+"&post_id="+post_id, requestOptions)
            .then(response => response.json())
            .then(result => {
        
                console.log(result)
                if (result.error=='comment already exist'){
                    
                    this.$swal("Le commentaire avec id: "+ result[1].id + " dans le post: "+result[1].post_id+" existe ");
                }
                else if(result.message=="Unauthenticated."){
                    this.$swal("Identifie toi avant de créer un commenatire!").then(result=>{
                        window.location.href = this.$path + "login";
                
                })
                }
                else if(result.code==0){
                    this.$swal("Le post n'existe pas!")
                }
                else{
                    
                    this.$swal("Super, votre commentaire est en ligne!").then(result=>{ window.location.href = this.$path;});
                }    
            })
            .catch(error => console.log('error', error));
        },





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
                for (const key in result) {
                  const obj = new Object();
                  obj.label =result[key].name ;
                  obj.value = result[key].id;
                  this.items.push(obj);
               }
  
              })
              .catch(error => console.log('error', error));

        },

       getTagByName(){
 
          var requestOptions = {
            method: 'GET',
         
            redirect: 'follow'
          };

          fetch(this.$path + "api/gettagbyname?name="+this.tags, requestOptions)
            .then(response => response.json())
            .then(result => {
              console.log(result);
              if (result==0){
                // methode creation du tag et recuperer le id du tag créé.
                 this.createTag();
              }else{
                console.log('tag trouvé');
                this.tag_id=result[0].id;
                console.log(this.tag_id);
              }
              
            })
            .catch(error => console.log('error', error));
        },

        createTag(){
          var myHeaders = new Headers();
          myHeaders.append("Accept", "application/json");

          var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            redirect: 'follow'
          };

          fetch(this.$path + "api/createtag?name="+this.tags, requestOptions)
            .then(response => response.json())
            .then(result => {  

              this.tag_id=result.id;
              console.log('id:'+this.tag_id);
  
            }).then(result=>{
              // finalisation de la création du post
              this.createPostEnd();})

            .catch(error => console.log('error', error));
        },

        createPostTag(){

          var myHeaders = new Headers();
          myHeaders.append("Accept", "application/json");

          var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            redirect: 'follow'
          };

          fetch(this.$path + "api/createposttag?post_id="+this.post_id+"&tag_id="+this.tag_id, requestOptions)
            .then(response => response.text())
            .then(result => {  
              console.log(result);
              this.$swal("Super, votre commentaire est en ligne!").then(result=>{
                          window.location.href = this.$path;})

            })
            .catch(error => console.log('error', error));
        },

      storeStars(post_id,stars){
        
        var myHeaders = new Headers();
        myHeaders.append("Accept", "application/json");
        var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        redirect: 'follow'
        };

        fetch(this.$path + "api/storestars?post_id="+post_id+"&stars="+ stars, requestOptions)
        .then(response => response.json())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));

      },
  








  // Accolade fermeture de methods
  },
  created(){

  this.getcategories();
  },

  // Accolade fermeture de export default
}

</script>
<style>
select {
  /* Style the select input */
  padding: 0.5em 1em;
  border: 1px solid #ccc;
  border-radius: 4px;
  cursor: pointer;
}

select option {
  /* Style the options */
  padding: 0.5em 1em;
  cursor: pointer;

  /* Set the icon as the background image of the option */
  background-image: url('https://example.com/icon1.png');
  background-position: center center;
  background-size: contain;
}

/* Style the selected option */
select option:checked {
  background-color: #ddd;
}


#backgradient{

background: rgb(56,182,255);
background: -moz-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
background: -webkit-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
background: linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1);
}
#backgradient1{

    /* background: rgb(56,182,255);
background: -moz-linear-gradient(126deg, rgba(56,182,255,0.876721635919993) 0%, rgba(8,95,206,0.8571137927827381) 16%, rgba(48,5,35,0.9159373221945029) 100%);
background: -webkit-linear-gradient(126deg, rgba(56,182,255,0.876721635919993) 0%, rgba(8,95,206,0.8571137927827381) 16%, rgba(48,5,35,0.9159373221945029) 100%);
background: linear-gradient(126deg, rgba(56,182,255,0.876721635919993) 0%, rgba(8,95,206,0.8571137927827381) 16%, rgba(48,5,35,0.9159373221945029) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1); */

/* background: rgb(56,182,255);
background: -moz-linear-gradient(126deg, rgba(56,182,255,0.9159373221945029) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9355451653317577) 100%);
background: -webkit-linear-gradient(126deg, rgba(56,182,255,0.9159373221945029) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9355451653317577) 100%);
background: linear-gradient(126deg, rgba(56,182,255,0.9159373221945029) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9355451653317577) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1); */

background: rgb(56,182,255);
background: -moz-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9131362017463235) 100%);
background: -webkit-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9131362017463235) 100%);
background: linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9131362017463235) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1);

}



</style>
