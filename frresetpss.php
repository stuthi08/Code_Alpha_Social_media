<section class="mt-8">
    <div class="container w-96" style="background-color:rgba(255,198,153,0.5); padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);">
        <h2 class="text-center text-4xl font-bold mb-6">Reset Your Password</h2>
<div class="form p-6 mt-8 rounded-lg shadow-lg">
<form method="post" action="assets/php/process.php/?frresetpss">
                <div class="mb-4">
                    <label for="new_password" class="form-label block mb-2" style="font-weight: bold;">New Password</label>
                    <input type="password" id="new_password" name="new_password" class="form-control" placeholder="Enter new password">
                </div>
                <?=showError('new_password')?>
                <div class="mb-4">
                    <label for="confirm_password" class="form-label block mb-2" style="font-weight: bold;">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm new password">
                </div>
                <?=showError('confirm_password')?>
                <button type="submit" class="btn btn-primary w-full bg-blue-600 hover:bg-blue-700 text-white">Reset Password</button>
            </form>
            <p class="text-center mt-4 text-gray-500">Remember your password? <a href="?login" class="text-indigo-600">Login</a></p>
        </div>
    </div>
</div>
</div>