<section class="mt-8 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container w-96" style="background-color:rgba(255,198,153,0.5); padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);">
        <div id="emailForm">
            <h2 class="text-center text-4xl" style="font-weight: bold; margin-bottom: 24px;">You Need To Verify Your Email</h2>
            <div class="form p-6 rounded-lg shadow-lg">
                <p class="text-center mb-4">Enter verification code received to your email .</p>
                <form id="requestCodeForm" method="post" action="assets/php/process.php/?verify">
                    <div class="mb-4">
                        <label for="verifyCode" class="form-label block mb-2" style="font-weight: bold;">Verification Code</label>
                        <input type="text" id="verifyCode" name="verifyCode" value="<?= showPrev('verifyCode') ?>" class="form-control" placeholder="Enter your verification code" style="font-weight: bold;">
                    </div>
                    <?= showError('verifyCode') ?>
                    <button type="submit" class="btn btn-primary w-full">Verify</button>
                </form>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>If you haven't received the verification code, you can <a href="assets/php/process.php/?resend" id="resendCode" style="color: #007bff; text-decoration: underline;">resend it here</a>.</p>
        </div>
    </div>
</section>
