<!--  -->

    <!-- Header Section -->
    <header class="flex justify-between items-center p-4 header shadow-lg">
        <h1 class="text-4xl font-bold text-center w-full">Vibe Verse</h1>
        <div class="relative flex space-x-4 items-center">
            <!-- Search Icon -->
            <div class="relative">
                <button id="searchBtn" class="focus:outline-none">
                    <!-- Search Icon -->
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/search--v1.png" alt="Search">
                </button>
                <input id="searchInput" type="text" placeholder="Search" class="hidden absolute top-10 right-0 border border-gray-400 p-2 rounded-md focus:outline-none">
            </div>
            <!-- Menu Icon -->
            <div class="relative">
                <button id="menuBtn" class="focus:outline-none">
                    <!-- Menu Icon -->
                    <img src="https://img.icons8.com/ios-filled/30/000000/menu.png" alt="Menu">
                </button>
            </div>
        </div>
    </header>

    <!-- Menu Slide-in -->
    <div id="menuSlide" class="menu-slide">
    <ul class="space-y-4 p-4">
        <!-- Profile Option -->
        <li class="flex items-center section-highlight">
            <form action="?profview" method="get" class="w-full">
                <button type="submit" class="flex items-center w-full text-left">
                    <img src="https://img.icons8.com/ios-filled/30/000000/user-male-circle.png" alt="Profile" class="mr-2">
                    Profile
                </button>
            </form>
        </li>

        <!-- Settings Option -->
        <li class="flex items-center section-highlight">
            <form action="settings.php" method="get" class="w-full">
                <button type="submit" class="flex items-center w-full text-left">
                    <img src="https://img.icons8.com/ios-filled/30/000000/settings.png" alt="Settings" class="mr-2">
                    Settings
                </button>
            </form>
        </li>

        <!-- Create Post Option -->
        <li class="flex items-center section-highlight">
            <form action="create_post.php" method="get" class="w-full">
                <button type="submit" class="flex items-center w-full text-left">
                    <img src="https://img.icons8.com/ios-filled/30/000000/plus-math.png" alt="Create Post" class="mr-2">
                    Create Post
                </button>
            </form>
        </li>

        <!-- Log Out Option -->
        <li class="flex items-center section-highlight">
            <form action="?profview" method="get" class="w-full">
                <button type="submit" class="flex items-center w-full text-left">
                    <img src="https://img.icons8.com/ios-filled/30/000000/logout-rounded-left.png" alt="Logout" class="mr-2">
                    Log Out
                </button>
            </form>
        </li>
    </ul>
</div>


    <!-- Overlay for closing the menu -->
    <div id="closeMenuOverlay" class="close-menu"></div>
        <!-- Vibe Status Section -->
        <div class="vibe-status p-4 rounded-lg mb-4">
            <h2 class="text-xl font-bold">Current Vibe</h2>
            <!-- User Vibe Statuses -->
            <div class="flex space-x-4">
    <!-- Story 1 -->
    <div class="bg-white p-2 rounded-full story text-center section-highlight">
        <img src="assets/images/pic.jpg" alt="User" class="mx-auto rounded-full w-20 h-20 object-cover">
        <p class="text-sm mt-2">My Vibe</p>
    </div>
</div>
                <!-- Story 2
                <div class="bg-white p-2 rounded-full story text-center section-highlight">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male-circle.png" alt="User" class="mx-auto">
                    <p class="text-sm">User Name</p>
                </div>
                
                <div class="bg-white p-2 rounded-full story text-center section-highlight">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male-circle.png" alt="User" class="mx-auto">
                    <p class="text-sm">User Name</p>
                </div>
                
                <div class="bg-white p-2 rounded-full story text-center section-highlight">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male-circle.png" alt="User" class="mx-auto">
                    <p class="text-sm">User Name</p>
                </div>
                
                <div class="bg-white p-2 rounded-full story text-center section-highlight">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male-circle.png" alt="User" class="mx-auto">
                    <p class="text-sm">User Name</p>
                </div> -->
            </div>
        </div>
        
        <!-- User Posts Section -->
<div class="flex">
    <div class="container mx-auto mt-4 post-section" style="max-width: 75%;background-color:rgba(255, 204, 128,0.5);">
        <!-- Post Structure -->
        <div class="bg-white rounded-lg shadow-md mb-4" style="width: 80%;">
            <div class="flex items-center p-4">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male-circle.png" alt="User" class="w-8 h-8 rounded-full">
                <div class="ml-4">
                    <h3 class="font-semibold">User Name</h3>
                    <p class="text-xs text-gray-500">1 hour ago</p>
                </div>
            </div>
            <div class="bg-yellow-100">
                <img src="assets/images/pic2.jpg" alt="Post" class="w-full">
            </div>
            <div class="p-4 flex justify-between items-center">
                <div class="flex space-x-4">
                    <button class="focus:outline-none">
                        <img src="https://img.icons8.com/ios-glyphs/24/000000/facebook-like.png" alt="Like">
                    </button>
                    <button class="focus:outline-none">
                        <img src="https://img.icons8.com/ios-glyphs/24/000000/comments.png" alt="Comment">
                    </button>
                    <button class="focus:outline-none">
                        <img src="https://img.icons8.com/ios-glyphs/24/000000/share.png" alt="Share">
                    </button>
                </div>
                <button class="focus:outline-none">
                    <img src="https://img.icons8.com/ios-glyphs/24/000000/bookmark.png" alt="Save">
                </button>
            </div>
            <div class="px-4 pb-4">
                <p class="font-bold text-sm">0 likes</p>
                <p><span class="font-semibold">Henry_Horrid</span> Life is good with friends</p>
            </div>
        </div>
        <!-- Repeat post structure as necessary -->
    </div>
    <script>
    
    document.addEventListener("DOMContentLoaded", function() {
        const menuBtn = document.getElementById("menuBtn");
        const menuSlide = document.getElementById("menuSlide");
        const closeMenuOverlay = document.getElementById("closeMenuOverlay");

        // Show the menu when menu icon is clicked
        menuBtn.addEventListener("click", function() {
            menuSlide.style.transform = "translateX(0)"; // Slide in the menu
            closeMenuOverlay.style.display = "block";    // Show the overlay
        });

        // Hide the menu when clicking on the overlay
        closeMenuOverlay.addEventListener("click", function() {
            menuSlide.style.transform = "translateX(-100%)"; // Slide out the menu
            closeMenuOverlay.style.display = "none";         // Hide the overlay
        });

        // Prevent clicks inside the menu from closing it
        menuSlide.addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent the event from bubbling up
        });

        // Close the menu if user clicks anywhere outside the menu
        document.addEventListener("click", function(event) {
            if (!menuSlide.contains(event.target) && !menuBtn.contains(event.target)) {
                menuSlide.style.transform = "translateX(-100%)"; // Hide the menu
                closeMenuOverlay.style.display = "none";         // Hide the overlay
            }
        });

        // Redirect actions for the menu items
       
    });


</script>

        
   