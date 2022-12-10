<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[url('../js/images/bg_register.png')] dark:bg-gray-900">
    <div class="drop-shadow-[0px_2px_5px_rgba(150,150,150)]">
        {{ $logo }}
    </div>

    <div id="card"class="w-full sm:max-w-md mt-6 px-6 py-4  border-[2px]   dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>


<style>
    #card{
        border:none;
        background: rgb(67,11,108);
background: -moz-linear-gradient(126deg, rgba(67,11,108,1) 0%, rgba(8,95,206,1) 78%, rgba(56,182,255,1) 100%);
background: -webkit-linear-gradient(126deg, rgba(67,11,108,1) 0%, rgba(8,95,206,1) 78%, rgba(56,182,255,1) 100%);
background: linear-gradient(126deg, rgba(67,11,108,1) 0%, rgba(8,95,206,1) 78%, rgba(56,182,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#430b6c",endColorstr="#38b6ff",GradientType=1);
        
    }
</style>