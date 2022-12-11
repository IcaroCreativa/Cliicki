<template lang="">
    <div>
        <div id="backgradient" class="grid justify-items-center 2xl:mx-auto lg:py-2 lg:px-10 md:py-4 md:px-6  rounded-t-xl">
            <div class="text-center text-gray-600 ">
                <h1 class="text-2xl lg:text-3xl font-bold leading-9 text-slate-100 mb-4">{{titre}}</h1>
            </div>
        </div>
    </div>
</template>


<script>

export default {
    props:['titre'],    
}

</script>
