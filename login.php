    
    
<!--    
        <div class="container d-flex justify-content-center" style="background-image: url('assets/images/background.png');background-size: cover;">
            <div class="d-flex align-items-center">
                <img src="assets/images/logo.png" alt="Vibe Verse Logo" class="logo me-3">
                <span class="brand">Vibe Verse</span>
            </div>
        </div>
     -->

    <!-- Login Section -->
    <section class="mt-8">
    <div class="container w-96" style="background-color:rgba(255,198,153,0.5); padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);">
            <h2 class="text-center text-4xl font-boldmb-6">Welcome Back!</h2>
            <div class="form p-6 rounded-lg shadow-lg"  >
                <form method="post" action="assets/php/process.php/?login">
                <div class="mb-4">
                <label for="email_uid" class="form-label block mb-2" style="font-weight: bold;">User_id/Email</label>
                <input type="text" id="email_uid" name="email_uid" value="<?=showPrev('email_uid') ?>" class="form-control" placeholder="Enter userid/email" style="font-weight: bold;">
            </div>
            <?=showError('email_uid')?>
                    <div class="mb-4">
                    <label for="password" class="form-label block mb-2" style="font-weight: bold;">Password</label>
                        <input type="password" name="password" class="form-control " id="password" placeholder="Enter password" value="<?=showPrev('password') ?>">
                    </div>
                    <?=showError('password')?>
                    <button type="submit" class="btn btn-primary w-full bg-blue-600 hover:bg-blue-700 text-white">Login</button>
                </form>
                <p class="text-center mt-4 text-gray-500">Don't have an account? <a href="?sign-up" class="text-indigo-600">Sign Up</a></p>
                <p class="text-center mt-4 text-gray-500">forgot password? <a href="?forgotpss" class="text-indigo-600">set new one</a></p>
            </div>
        </div>
    </section>