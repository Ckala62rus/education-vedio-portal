<template>
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root" style="height: 100vh">
        <!--begin::Login-->
        <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
<!--            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url("template/media/bg/bg-1.jpg")">-->
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" :style="{ 'background-image': 'url(template/media/bg/bg-1.jpg)' }">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img :src="'template/media/logos/logo-letter-9.png'" class="max-h-100px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Sign In To Admin</h3>

                            <p v-if="invalidCredentials" class="error__auth error__credentials">invalid login or password input</p>
                            <p class="opacity-60 font-weight-bold">Enter your details to login to your account:</p>

                        </div>

                        <form class="form" id="kt_login_signin_form" @submit.prevent="sigIn">
                            <div class="form-group">
                                <input
                                    v-model="form.email"
                                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                                    type="email"
                                    placeholder="Email"
                                    name="email"
                                    autocomplete="email"
                                    id="email"
                                    required
                                />

                            </div>
                            <div class="form-group">
                                <input
                                    v-model="form.password"
                                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                                    type="password"
                                    placeholder="Password"
                                    name="password"
                                />
                            </div>
                            <div class="form-group text-center mt-10">
                                <button id="kt_login_signin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign in form-->
                </div>
             </div>
        </div>
    </div>

    <!--end::Login-->
</template>

<script>
import Empty from "@/Layouts/Empty.vue";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Login",
    layout: Empty,
    components: {
        Link
    },
    data(){
        return {
            form:{
                email: '',
                password: ''
            },
            invalidCredentials: false,
        }
    },
    methods: {
        sigIn(){
            this.invalidCredentials = false;
            axios.post('login', this.form).then(res =>{
                if (res.status === 200) {
                    window.location = '/dashboard';
                }
            })
            .catch(err => {
                if (err.response.status === 422) {
                    this.invalidCredentials = true;
                }
            })
        },
    },
}
</script>

<style scoped>
.error__credentials {
    color: red;
}
</style>
