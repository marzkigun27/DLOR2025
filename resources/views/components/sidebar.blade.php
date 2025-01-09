<!-- Hamburger Button -->
<button 
    id="sidebarToggle" 
    type="button" 
    class="fixed top-5 left-5 md:left-16 sm:left-10 inline-flex items-center p-2 mt-2  h-fit z-50"
> 
    <img src="images/Homepage/Hamburger Nav.png" class=" h-[25px] md:h-[40px] sm:h-[30px]" alt="hamburger">
</button>

<!-- Sidebar -->
<aside 
    id="default-sidebar" 
    class="fixed top-0 left-0 z-40 w-[50%] sm:w-[35%] h-screen bg-black bg-opacity-50 transition-transform -translate-x-full scrollbar-hidden" 
    aria-label="Sidebar"
>
    <div class="h-full px-3 py-4 overflow-y-auto opacity-90">
        <h1 class="text-white text-center text-2xl mt-20 mb-2">Recruitment</h1>
        <ul class="space-y-1 font-medium">
            <li class="h-16 max-w-[232px] mx-auto">
                <a href="#" class="flex items-center justify-center p-2 text-gray-200 rounded-lg h-full">
                    <x-sidebar-button>Anouncment</x-sidebar-button>
                </a>
            </li>
            <li class="h-16 max-w-[232px] mx-auto">
                <a href="#" class="flex items-center justify-center p-2 text-gray-200 rounded-lg h-full">
                    <x-sidebar-button>Shift</x-sidebar-button>
                </a>
            </li>
            <li class="h-16 max-w-[232px] mx-auto">
                <a href="#" class="flex items-center justify-center p-2 text-gray-200 rounded-lg h-full">
                    <x-sidebar-button>Gems</x-sidebar-button>
                </a>
            </li>
        </ul>
        <h1 class="text-white text-center text-2xl mt-4 mb-2">Contacts</h1>
        <ul class="space-y-1 font-medium">
            <li class="h-16 max-w-[232px] mx-auto">
                <a href="#" class="flex items-center justify-center p-2 text-gray-200 rounded-lg h-full">
                    <x-sidebar-button>Assistants</x-sidebar-button>
                </a>
            </li>
            <li class="h-16 max-w-[232px] mx-auto">
                <a href="#" class="flex items-center justify-center p-2 text-gray-200 rounded-lg h-full">
                    <x-sidebar-button>OA Line</x-sidebar-button>
                </a>
            </li>
        </ul>
        <h1 class="text-white text-center text-2xl mt-4 mb-2">Account</h1>
        <ul class="space-y-1 font-medium">
            <li class="h-16 max-w-[232px] mx-auto">
                <a href="/Profile" class="flex items-center justify-center p-2 text-gray-200 rounded-lg h-full">
                    <x-sidebar-button>Profile</x-sidebar-button>
                </a>
            </li>
            <li class="h-16 max-w-[232px] mx-auto">
                <a href="/ChangePassword" class="flex items-center justify-center p-2 text-gray-200 rounded-lg h-full">
                    <x-sidebar-button>Change Password</x-sidebar-button>
                </a>
            </li>
            <li class="h-16 max-w-[232px] mx-auto">
                <a href="#" class="flex items-center justify-center p-2 text-gray-200 rounded-lg h-full">
                    <x-sidebar-button>Log Out</x-sidebar-button>
                </a>
            </li>
        </ul>
    </div>
</aside>


<!-- JavaScript -->
<script>
    // Select the toggle button and sidebar
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('default-sidebar');

    // Add event listener to toggle sidebar visibility
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });

    // Close the sidebar when clicking outside of it
    document.addEventListener('click', (e) => {
        // Check if the click is outside the sidebar and the sidebar toggle button
        if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
            sidebar.classList.add('-translate-x-full');
        }
    });
</script>
