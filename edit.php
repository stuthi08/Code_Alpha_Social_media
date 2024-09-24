
<form id="editpro" method="post" action="assets/php/process.php/?edit">
    <section class="mt-8 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container w-96" style="background-color: rgba(255,198,153,0.5); padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);">
            <h2 class="text-center text-4xl" style="font-weight: bold; margin-bottom: 24px;">Edit Profile</h2>
    
            <!-- Profile Picture Section -->
            <div class="profile-picture-section text-center mb-6">
                <!-- Cropped Image Preview -->
                <div class="mb-4">
                    <img id="croppedProfileImagePreview" src="default-profile.png" alt="Profile Picture" class="rounded-full w-24 h-24 mb-4">
                </div>

                <!-- Image Cropper -->
                <div class="mb-4">
                    <input type="file" id="profilePicInput" accept="image/*" class="mb-2">
                    <button type="button" id="cropProfileBtn" class="btn btn-secondary mb-2">Crop Profile Picture</button>
                </div>
            </div>

            <!-- Username/Handle Section -->
            <div class="mb-6">
                <label for="username" class="font-bold">Username/Handle</label>
                <input type="text" id="username" class="form-control w-full mt-2" placeholder="@username">
            </div>

            <!-- Bio Section -->
            <div class="mb-6">
                <label for="bio" class="font-bold">Bio/Description</label>
                <textarea id="bio" class="form-control w-full mt-2" placeholder="Introduce yourself, add links, hashtags, etc."></textarea>
            </div>
            <!-- Personal Information Section -->
        <div class="mb-6">
            <label class="font-bold">Personal Information</label>
            <div class="mt-2">
                <input type="text" class="form-control mb-2" placeholder="Full Name">
                <input type="text" class="form-control mb-2" placeholder="Location">
                <input type="date" class="form-control mb-2" placeholder="Date of Birth">
                <input type="text" class="form-control mb-2" placeholder="Gender/Pronouns">
            </div>
        </div>

        <!-- Contact Information -->
        <div class="mb-6">
            <label class="font-bold">Contact Information</label>
            <div class="mt-2">
                <input type="email" class="form-control mb-2" placeholder="Email">
                <input type="tel" class="form-control mb-2" placeholder="Phone Number">
            </div>
        </div>
            <div class="mb-6">
            <label class="font-bold">Interests/Tags</label>
            <div class="mt-2">
                <input type="text" class="form-control mb-2" placeholder="Add interests or tags (e.g., #coding, #music)">
            </div>
        </div>

            <!-- Notifications Settings -->
        <div class="mb-6">
            <label class="font-bold">Notifications Settings</label>
            <div class="mt-2">
                <select class="form-control mb-2">
                    <option>Receive all notifications</option>
                    <option>Only notifications from friends</option>
                    <option>Do not disturb</option>
                </select>
            </div>
        </div>

            <!-- Add Your First Post Section -->
            <div class="profile-picture-section text-center mb-6">
                <!-- Cropped Image Preview -->
                <div class="mb-4">
                    <img id="croppedProfileImagePreview" src="default-profile.png" alt="Profile Picture" class="rounded-full w-24 h-24 mb-4">
                </div>

                <!-- Image Cropper -->
                <div class="mb-4">
                    <input type="file" id="profilePicInput" accept="image/*" class="mb-2">
                    <button type="button" id="cropProfileBtn" class="btn btn-secondary mb-2">Crop Profile Picture</button>
                </div>
            </div>

            <!-- Save Button -->
            <div class="text-center mt-4">
                <button class="btn btn-primary" style="background-color: #1D4ED8; font-weight: bold; color: white;">Save Changes</button>
            </div>
        </div>
    </section>
</form>

<!-- Cropper.js Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let profileCropper, postCropper;

        // Profile Picture Cropping
        const profilePicInput = document.getElementById("profilePicInput");
        const croppedProfileImagePreview = document.getElementById("croppedProfileImagePreview");
        const cropProfileBtn = document.getElementById("cropProfileBtn");

        // Post Image Cropping
        const postImageInput = document.getElementById("postImageInput");
        const croppedPostImagePreview = document.getElementById("croppedPostImagePreview");
        const cropPostBtn = document.getElementById("cropPostBtn");

        // Initialize cropper function for dynamic image cropping
        function initializeCropper(inputElement, imageElement, cropperInstance, previewElement, cropBtn) {
            inputElement.addEventListener("change", function(event) {
                const file = event.target.files[0];
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        // Create an image element for the cropper
                        const image = new Image();
                        image.src = e.target.result;
                        image.style.maxWidth = "100%";

                        // Clear the current cropper image (if any)
                        const cropperContainer = imageElement.parentElement;
                        cropperContainer.innerHTML = ""; // Clear existing content
                        cropperContainer.appendChild(image); // Add the new image

                        // Initialize the Cropper.js on the new image
                        if (cropperInstance) {
                            cropperInstance.destroy();
                        }
                        cropperInstance = new Cropper(image, {
                            aspectRatio: 1, // Maintain a square aspect ratio for both profile and post images
                            viewMode: 2,
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Crop the image and update the preview
            cropBtn.addEventListener("click", function() {
                if (cropperInstance) {
                    const canvas = cropperInstance.getCroppedCanvas({
                        width: 150, // Final image size
                        height: 150,
                    });
                    previewElement.src = canvas.toDataURL('image/png');
                    previewElement.style.display = 'block';

                    // Convert the canvas to a blob if needed for uploading
                    canvas.toBlob(function(blob) {
                        // blob contains the cropped image as a file
                        // You can upload this blob using AJAX or form
                    });
                }
            });
        }

        // Initialize cropper for profile picture
        initializeCropper(profilePicInput, document.querySelector('.profile-picture-section .mb-4'), profileCropper, croppedProfileImagePreview, cropProfileBtn);

        // Initialize cropper for post image
        initializeCropper(postImageInput, document.querySelector('.add-first-post .mt-4'), postCropper, croppedPostImagePreview, cropPostBtn);
    });
</script>

