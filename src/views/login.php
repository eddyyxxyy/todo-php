<div id="login-card">
    <div id="form-container">
        <ul class="tab-group">
            <li class="tab active"><a href="#login">Login</a></li>
            <li class="tab"><a href="#signup">Sign Up</a></li>
        </ul>
        <div class="content-wrapper">
            <div class="content active" id="login">
                <form action="/login" method="post" class="form" onsubmit="return verifyPassword(true)">
                    <h1>Login Form</h1>
                    <label class="label-username" for="username-label-login">Username</label>
                    <input required class="input-username" type="text" name="username" id="username-label-login">
                    <label class="label-password" for="password-label-login">Password</label>
                    <input required class="input-password" type="password" name="password" id="password-label-login">
                    <label class="label-email" for="email-label-login">Email</label>
                    <input required class="input-email" type="email" name="email" id="email-label-login">
                    <button type="submit">Submit</button>
                    <?= get_flash('message') ?>
                </form>
            </div>
            <div class="content" id="signup">
                <form class="form" action="/user/create" method="post" onsubmit="return verifyPassword()">
                    <h1>Sign Up</h1>
                    <label class="label-username" for="username-label-sign-up">Username</label>
                    <input required class="input-username" type="text" name="username" id="username-label-sign-up">
                    <label class="label-password" for="password-label-sign-up">Password</label>
                    <input required class="input-password" type="password" name="password" id="password-label-sign-up">
                    <label class="label-password" for="password-label-sign-up">Confirm password</label>
                    <input required class="input-password" type="password" name="confirm-password" id="confirm-password-label-sign-up">
                    <label class="label-email" for="email-label-sign-up">Email</label>
                    <input required class="input-email" type="email" name="email" id="email-label-sign-up">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
