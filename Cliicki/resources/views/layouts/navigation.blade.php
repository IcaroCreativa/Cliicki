<nav x-data="{ open: false }" id="nav" class="flex  dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
     <!-- Logo  button-->
     <div class="shrink-0 flex ml-20 ">
        <x-nav-link href="/">
            <img src="../images/logo.svg" alt="Cliicki logo" class="h-12 w-12">
        </x-nav-link>
    </div>
    
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4  lg:px-8 flex  ">

      
        <div class="flex justify-center gap-8 h-16 ">
            
               
            <!-- User account data button -->
            {{-- <div class='mt-3 '>
                <x-nav-link class="hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 rounded-lg " :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                       
                        <svg class="w-8 h-8 stroke-gray-50  hover:stroke-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </x-nav-link>
            </div> --}}


             <!-- User account data button -->
             <div class='mt-[12px] '>
                <x-nav-link class="hover: rounded-full " :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        {{-- {{ __('Mon Profil') }} --}}
                        <img src="{{Auth::user()->image_url}}" alt="User avatar" class="h-10 w-10 rounded-full">
                </x-nav-link>
            </div>
            
            <!-- User account dashboard button -->
                <div class=" mt-3  ">
                    <x-nav-link class="hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 rounded-lg " :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{-- {{ __('Dashboard') }} --}}
                        <svg class="w-8 h-8  stroke-gray-50 hover:stroke-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </x-nav-link>
                </div>

             <!-- User Admin dashboard button -->
                <?php if (Auth::user()->admin){
                    ?>
                <div class=" mt-3 " >
                    <x-nav-link class="hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 rounded-lg " :href="route('dashboard_admin')"  :active="request()->routeIs('dashboard_admin')">
                        {{-- <div>{{ __('Admin') }}</div> --}}
                        <div><svg class="w-8 h-8 stroke-gray-50  hover:stroke-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg></div>
                    </x-nav-link>
                </div>

                <?php
                  }
                  else{}
                  ?>

                 <!-- LogOut  button-->
                 <form method="POST" action="{{ route('logout') }}" class="mt-3">
                    @csrf

                    <x-nav-link class="hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 rounded-lg " :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{-- {{ __('Log Out') }}  --}}
                        <svg class="w-8 h-8 stroke-gray-50 hover:stroke-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </x-nav-link>
                </form>
        </div>
        
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}">
        {{-- <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> --}}

        <!-- Responsive Settings Options -->
        {{-- <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Votre Profil') }}
                </x-responsive-nav-link>

              

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div> --}}
    </div>


    
</nav>


<script>

    function closewindow(){
       
        window.location.href = '';
   
    }
</script>


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