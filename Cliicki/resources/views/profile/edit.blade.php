<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Votre Compte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6  ">
            <div id="backgradient" class="p-4  sm:p-8  border-2  dark:bg-gray-800 shadow sm:rounded-lg">
                <div  class="max-w-xl ">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div id="backgradient" class="p-4 sm:p-8  border-2 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div id="backgradient" class="p-4 sm:p-8  border-2 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
     
    </div>
    
 
</x-app-layout>

<style>

#backgradient{

background: rgb(56,182,255);
background: -moz-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
background: -webkit-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
background: linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9327439594001663) 77%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1);


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

/* background: rgb(56,182,255);
background: -moz-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9131362017463235) 100%);
background: -webkit-linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9131362017463235) 100%);
background: linear-gradient(299deg, rgba(56,182,255,0.8739205154718137) 0%, rgba(8,95,206,0.8795227563681722) 16%, rgba(48,5,35,0.9131362017463235) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#38b6ff",endColorstr="#300523",GradientType=1); */


}

</style>



 
