<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-im-fell-english min-h-screen bg-LoginCaas bg-cover bg-center bg-no-repeat max-w-full overflow-x-hidden">
    
    <!-- Background Image -->
    <img src="images/Homepage/Wall2.png" 
        alt="left wall" 
        class="fixed left-0 h-full w-auto ">
    <img src="images/Homepage/Wall-Mobile.png" 
        alt="left wall" 
        class="fixed inset-0 h-full w-full sm:hidden  ">
    <img src="images/Homepage/Crystal 3.png" 
        alt="bottom left crystal 1" 
        class="fixed bottom-0 left-0 h-96 w-auto scale-x-[-1] scale-y-[-1]">
    <img src="images/blue-crystal-2.png" 
        alt="bottom left crystal 2" 
        class="fixed bottom-0 z-10 left-36 h-52 w-auto">
    <img src="images/Homepage/Crystal Upper.png" 
         alt="bottom left crystal" 
         class="fixed top-0 z-10 left-0 h-full w-auto">
    <img src="images/Homepage/Shine.png" 
        alt="shine" 
        class="fixed bottom-24 z-10 left-5 h-auto w-[70px] sm:w-auto">
   
   <img src="images/Homepage/Shine.png" 
        alt="shine" 
        class="fixed bottom-10 z-10 left-32  h-auto w-[70px] sm:w-auto">

    <div class="absolute z-20 h-full w-full bg-black bg-opacity-50 flex items-center justify-center">
        <div class="w-64 relative group">
            <img 
                src="images/Profile.png" 
                alt="profile card" 
                class="relative z-10 transition-all duration-300 group-hover:scale-105"
            >
            <div 
                class="absolute inset-0 bg-white blur-xl opacity-0 transition-opacity duration-300 group-hover:opacity-100"
            ></div>
        </div>
    </div>

    <x-sidebar></x-sidebar>
    

</body>
</html>
