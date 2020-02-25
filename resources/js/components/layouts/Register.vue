<template>
    <div id="register_area">
        <div class="site-content">
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start User Registation Model
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="" class="user-reg-form-area">
                <div class="register-modal-area">
                    <div class="register-modal-area-outer-inner">
                        <div class="user-register-area">
                            <!--~~~ Start User Signup Area ~~~-->
                            <div class="user-signup-area">
                                <div class="user-left-thumb">
                                    <img src="http://via.placeholder.com/270x570" alt="thumb" />
                                </div>

                                <div class="form-content">
                                    <h3>Create an Account</h3>
                                    <form id="signup-form" class="default-form signup-form" method="post">
                                        <div class="form-group">
                                            <input
                                                    id="name"
                                                    name="name"
                                                    class="form-controllar"
                                                    type="text"
                                                    placeholder="Username"
                                            />
                                        </div>
                                        <!--/.form-group-->
                                        <div class="form-group">
                                            <input
                                                    id="email-up"
                                                    name="email"
                                                    class="form-controllar"
                                                    type="email"
                                                    placeholder="Email Address"
                                            />
                                        </div>
                                        <!--/.form-group-->
                                        <div class="form-group">
                                            <input
                                                    id="pass-up"
                                                    name="password"
                                                    class="form-controllar"
                                                    type="password"
                                                    placeholder="Password"
                                            />
                                        </div>
                                        <!--/.form-group-->

                                        <div class="form-group">
                                            <input
                                                    id="pass-up-confirm"
                                                    name="password"
                                                    class="form-controllar"
                                                    type="password"
                                                    placeholder="Confirm Password"
                                            />
                                        </div>
                                        <!--/.form-group-->

                                        <div class="login-form-remember">
                                            <label>
                                                <input id="remembermesignup" value type="checkbox" />
                                                <span>I Agree to the</span>
                                                <a href="#">Privacy Policy</a>
                                            </label>
                                        </div>
                                        <div class="form-btn-group">
                                            <button type="submit" class="btn btn-default btn-register">register</button>
                                            <router-link to="/login" type="button" class="btn btn-primary btn-signin">sign in</router-link>
                                            <div class="reg-others-midea">
                                                <div class="text">Or Connect With</div>
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
                                </div>
                            </div>
                            <!--~./ end user signup area ~-->
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
        name: "Register"
    }
</script>

<style scoped>

</style>