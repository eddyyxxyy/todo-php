<div id="login-card">
    <div id="form-container">
        <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
        </ul>
        <div class="content-wrapper">
            <div class="content active" id="signup">
                <form class="form" action="/user/create" method="post">
                    <h1>Sign Up</h1>
                    <label class="label-username" for="username-label-sign-up">Username</label>
                    <input class="input-username" type="text" name="username" id="username-label-sign-up">
                    <label class="label-password" for="password-label-sign-up">Password</label>
                    <input class="input-password" type="password" name="password" id="password-label-sign-up">
                    <label class="label-email" for="email-label-sign-up">Email</label>
                    <input class="input-email" type="email" name="email" id="email-label-sign-up">
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="content" id="login">
                <form action="/login" method="post" class="form">
                    <h1>Login Form</h1>
                    <label class="label-username" for="username-label-login">Username</label>
                    <input class="input-username" type="text" name="username" id="username-label-login">
                    <label class="label-password" for="password-label-login">Password</label>
                    <input class="input-password" type="password" name="password" id="password-label-login">
                    <label class="label-email" for="email-label-login">Email</label>
                    <input class="input-email" type="email" name="email" id="email-label-login">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
