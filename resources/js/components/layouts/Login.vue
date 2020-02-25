<template>
    <div id="login_area">
        <div class="site-content">
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start User Registation Model
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="" class="user-reg-form-area">
                <div class="register-modal-area">
                    <div class="register-modal-area-outer-inner">

                        <div class="user-register-area">
                            <!--~~~ Start User Signin Area ~~~-->
                            <div class="user-signin-area">
                                <div class="user-left-thumb">
                                    <img src="http://via.placeholder.com/270x490" alt="thumb" />
                                </div>

                                <div class="form-content">
                                    <div class="form-content-signin">
                                        <h3>Login to Account</h3>
                                        <form class="default-form signin-form">
                                            <div class="form-group">
                                                <input
                                                        id="email"
                                                        name="email"
                                                        class="form-controllar"
                                                        type="email"
                                                        placeholder="Email Address"
                                                />
                                            </div>
                                            <!--/.form-group-->

                                            <div class="form-group">
                                                <input
                                                        id="pass"
                                                        name="password"
                                                        class="form-controllar"
                                                        type="password"
                                                        placeholder="Password"
                                                />
                                            </div>
                                            <!--/.form-group-->

                                            <div class="remember-and-password">
                                                <div class="login-form-remember">
                                                    <!--<label>
                                                        <input id="remembermesignin" value type="checkbox" />
                                                        <span>Remember Me</span>
                                                    </label>-->
                                                </div>
                                                <div class="forget-pass">
                                                    <a class="btn-password" href="#">Forget Password</a>
                                                </div>
                                            </div>
                                            <!--/.remember-and-password-->

                                            <div class="form-btn-group">
                                                <button type="submit" class="btn btn-default">sign in</button>
                                                <div class="reg-others-midea">
                                                    <div class="text">Or Login With</div>
                                                    <div class="midea-icons">
                                                        <ul class="social-share">
                                                            <li>
                                                                <a class="facebook" href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="twitter" href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="google-plus" href="#">
                                                                    <i class="fa fa-google-plus"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="linkedin" href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="login-form-register-now">
                                            Dont have an account?
                                            <router-link class="btn-register-now" :to="{name:'register'}">Register Now</router-link>
                                        </div>
                                    </div>
                                    <div class="form-content-password">
                                        <h3>Account recovery</h3>
                                        <form class="default-form password-form">
                                            <div class="form-group">
                                                <input
                                                        id="re-email"
                                                        name="email"
                                                        class="form-controllar"
                                                        type="email"
                                                        placeholder="Email Address"
                                                />
                                            </div>
                                            <!--/.form-group-->

                                            <div class="form-group">
                                                <input
                                                        id="re-pass-up"
                                                        name="password"
                                                        class="form-controllar"
                                                        type="password"
                                                        placeholder="Password"
                                                />
                                            </div>
                                            <!--/.form-group-->

                                            <div class="form-group">
                                                <input
                                                        id="re-pass-up-confirm"
                                                        name="password"
                                                        class="form-controllar"
                                                        type="password"
                                                        placeholder="Confirm Password"
                                                />
                                            </div>
                                            <!--/.form-group-->

                                            <div class="form-btn-group pt-10">
                                                <button type="submit" class="btn btn-default btn-recet">recet password</button>
                                                <button type="button" class="btn btn-primary btn-back">Back</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--~./ end user signin area ~-->

                        </div>
                    </div>
                </div>
            </div>
            <!--~./ end user registation model ~-->

        </div>
    </div>
</template>

<script>
    export default {
        name: "Login",


    }
</script>

<style scoped>

</style>