
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 900px;
            margin: 20px auto;
            padding: 0 20px;
            background-color: white;
            border-bottom: 1px solid #dbdbdb;
        }

        /* Profile picture section */
        .profile-picture {
            display: flex;
            justify-content: center;
            flex: 1;
        }

        .profile-picture img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 2px solid #dbdbdb;
        }

        /* Profile details section */
        .profile-details {
            flex: 2;
            margin-left: 20px;
        }

        .profile-username {
            font-size: 28px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .edit-profile-btn {
            font-size: 14px;
            padding: 5px 10px;
            margin-left: 20px;
            border: 1px solid #dbdbdb;
            background-color: #fff;
            cursor: pointer;
            border-radius: 4px;
        }

        .profile-stats {
            display: flex;
            margin: 20px 0;
        }

        .profile-stats div {
            margin-right: 20px;
        }

        .profile-stats div strong {
            font-weight: bold;
        }

        .profile-bio {
            font-size: 16px;
            color: #666;
        }

        .profile-bio p {
            margin: 0;
        }

        /* Profile links and details section */
        .profile-links {
            display: flex;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 0 auto 20px;
            padding: 0 20px;
        }

        .profile-links div {
            flex: 1;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .profile-links div a {
            color: #00376b;
            text-decoration: none;
        }

        /* Highlight the profile theme color */
        .theme-color {
            width: 100%;
            height: 30px;
            background-color: white;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .profile-details {
                margin-left: 0;
                margin-top: 20px;
            }

            .profile-picture img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>

    <!-- Theme Color Section -->
    <div class="theme-color"></div>

    <!-- Profile Header Section -->
    <div class="profile-header" >
        <!-- Profile Picture -->
        <div class="profile-picture">
            <img src="assets/images/pic.jpg" alt="Profile Picture">
        </div>

        <!-- Profile Details -->
        <div class="profile-details">
            <!-- Username and Edit Button -->
            <div class="profile-username">
                Henry_Horrid
                <button class="edit-profile-btn">Edit Profile</button>
                <form id="profview" method="post"  action="assets/php/process.php/?profview">
                <button class="edit-profile-btn">Home</button></form>
            </div>

            <!-- Follower/Following Stats -->
            <div class="profile-stats">
                <div><strong>0</strong> posts</div>
                <div><strong>0</strong> followers</div>
                <div><strong>0</strong> following</div>
            </div>

            <!-- Bio Section -->
            <div class="profile-bio">
                <p>Henry Horrid</p>
                <p>The trickster</p>
                <p><a href="[SOCIAL_LINK]" target="_blank"> </a></p>
            </div>
        </div>
    </div>

    <!-- Additional Profile Information -->
    <div class="profile-links">
        <div><strong>Interests:</strong> eat,sleep,repeat</div>
        
       
    </div>
    <div class="flex">
    <div class="container mx-auto mt-4 post-section" style="max-width: 75%;background-color:rgba(255, 204, 128,0.5);">
        <!-- Post Structure -->
        <div class="bg-white rounded-lg shadow-md mb-4" style="width: 80%;">
            <div class="flex items-center p-4">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male-circle.png" alt="User" class="w-8 h-8 rounded-full">
                <div class="ml-4">
                    <h3 class="font-semibold">YOU</h3>
                    <p class="text-xs text-gray-500">just now</p>
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
                <p><span class="font-semibold">YOU</span> Life is good with friends</p>
            </div>
        </div>
        
        
    </div>
    <script>
        <script>
  function goToHome() {
    window.location.href = '/vibe verse/?home'; 
  }
</script>
        </script>
</body>
</html>
