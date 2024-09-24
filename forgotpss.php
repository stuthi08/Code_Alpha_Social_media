<!-- Forgot Password Section -->
<section class="mt-8">
    <div class="container w-96" style="background-color:rgba(255,198,153,0.5); padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);">
        <h2 class="text-center text-4xl font-bold mb-6">Reset Your Password</h2>
        <div class="form p-6 mt-8 rounded-lg shadow-lg">
        <form method="post" action="assets/php/process.php/?frsendotp">
                <div class="mb-4">
                <label for="email" class="form-label block mb-2" style="font-weight: bold;">Email</label>
                <input type="email" id="email" name="email" value="<?=showPrev('email') ?>" class="form-control" placeholder="you@example.com" style="font-weight: bold;">
                </div>
                <?=showError('email')?>
                <button type="submit" class="btn btn-primary w-full bg-blue-600 hover:bg-blue-700 text-white">send otp</button>
               
</form> 
</div>
</div>
</section>



