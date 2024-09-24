<!-- <div class="container d-flex justify-content-center" style="background-image: url('assets/images/background.png'); background-size: cover;">
    <div class="d-flex align-items-center">
        <img src="assets/images/logo.png" alt="Vibe Verse Logo" class="logo me-3">
        <span class="brand" style="font-weight: bold;">Vibe Verse</span>
    </div>
</div> -->

<section class="mt-8 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
<div class="container w-96" style="background-color:rgba(255,198,153,0.5); padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);">
        <h2 class="text-center text-4xl" style="font-weight: bold; margin-bottom: 24px;">Join Vibe Verse</h2>
     <div class="form p-6 rounded-lg shadow-lg" >
        <form id="signupForm" method="post" action="assets/php/process.php/?sign-up">
            <div class="mb-4">
                <label for="userID" class="form-label block mb-2" style="font-weight: bold;">User ID</label>
                <input type="text" id="userID" name="userID" value="<?=showPrev('userID') ?>" class="form-control" placeholder="Enter your user ID" style="font-weight: bold;">
            </div>
            <?=showError('userID')?>

            <div class="mb-4">
                <label for="username" class="form-label block mb-2" style="font-weight: bold;">Username</label>
                <input type="text" id="username" name="username" value="<?=showPrev('username') ?>" class="form-control" placeholder="Choose a username" style="font-weight: bold;">
            </div>
            <?=showError('username')?>

            <div class="mb-4">
                <label for="email" class="form-label block mb-2" style="font-weight: bold;">Email</label>
                <input type="email" id="email" name="email" value="<?=showPrev('email') ?>" class="form-control" placeholder="you@example.com" style="font-weight: bold;">
            </div>
            <?=showError('email')?>

            <div class="mb-4">
                <label for="gender" class="form-label block mb-2" style="font-weight: bold;">Gender</label>
                <select id="gender" name="gender" class="form-control" style="font-weight: bold;">
                    <option value="<?=showPrev('gender')?>">Select your gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Other</option>
                </select>
            </div>
            <?=showError('gender')?>

            <div class="mb-4">
                <label for="password" class="form-label block mb-2" style="font-weight: bold;">Password</label>
                <input type="password" id="password" name="password" value="<?=showPrev('password') ?>" class="form-control" placeholder="Create a password" style="font-weight: bold;">
            </div>
            <?=showError('password')?>

            <div class="mb-4">
                <label for="confirmPassword" class="form-label block mb-2" style="font-weight: bold;">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" value="<?=showPrev('confirmPassword') ?>" class="form-control" placeholder="Confirm your password" style="font-weight: bold;">
            </div>
            <?=showError('confirmPassword')?>

            <button type="submit" class="btn btn-primary w-full" style="background-color: #1D4ED8; font-weight: bold; color: white;">Sign Up</button>
        </form>

        <p class="text-center mt-4 text-gray-600" style="font-weight: bold;">Already have an account? <a href="?login" class="text-blue-500" style="font-weight: bold;">Log in</a></p>
    </div>
</div>
</section>
