<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-custom height-profile rdp_statistic_mg">
                    <div class="card-header">
                        <h3 class="card-title">
                            Мой профиль
                        </h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>

                    <!--Edit profile-->
                    <!--begin::Form-->
                    <form @submit.prevent="updateProfile">
                        <div class="card-body">
                            <div class="form-group mb-8">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                    <div class="alert-text">
                                        Здесь вы можете отредактировать данные о своем профиле
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Your name"
                                    v-model="form_profile.name"
                                />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Email <span class="text-danger">*</span></label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="exampleInputPassword"
                                    placeholder="Your email address"
                                    v-model="form_profile.email"
                                />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">SAVE</button>
                        </div>
                    </form>
                </div>
                <!--end::Form-->
            </div>

            <!--Edit password-->
            <div class="col-md-6">
                <div class="card card-custom rdp_statistic_mg">
                    <div class="card-header">
                        <h3 class="card-title">
                            Обновление пароля
                        </h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form @submit.prevent="updatePassword">
                        <div class="card-body">
                            <div class="form-group mb-8">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                    <div class="alert-text">
                                        Убедитесь, что ваша учетная запись использует длинный случайный пароль, чтобы оставаться в безопасности.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Текущий пароль<span class="text-danger">*</span></label>
                                <input
                                    type="password"
                                    class="form-control"
                                    placeholder="Введите текущий пароль"
                                    v-model="form_new_password.current_password"
                                    :class="{'is-invalid': errors.current_password}"
                                />
                                <div class="invalid-feedback">Текущий пароль не заполнен</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Новый пароль<span class="text-danger">*</span></label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="exampleInputPassword2"
                                    placeholder="Password"
                                    v-model="form_new_password.password"
                                    :class="{'is-invalid': errors.password}"
                                />
                                <div class="invalid-feedback">Не заполнен новый пароль</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword3">Подтверждение пароля<span class="text-danger">*</span></label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="exampleInputPassword3"
                                    placeholder="Password"
                                    v-model="form_new_password.password_confirmation"
                                />
                                <div class="invalid-feedback">Подтверждение пароля не заполнено</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">SAVE</button>
                        </div>
                    </form>
                </div>
                <!--end::Form-->

            </div>

            <!--Delete user-->
            <div class="col-md-12 mt-5 mb-5">
                <div class="card card-custom rdp_statistic_mg">
                    <div class="card-header">
                        <h3 class="card-title">
                            Удаление аккаунта
                        </h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <!--            <div class="col-md-6">-->
                    <form>
                        <div class="card-body">
                            <div class="form-group mb-8">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                    <div class="alert-text">
                                        После удаления вашей учетной записи все ее ресурсы и данные будут безвозвратно удалены.
                                        Перед удалением своей учетной записи загрузите любые данные или информацию, которые вы хотите сохранить.
                                    </div>
                                </div>
                                <button type="reset" class="btn btn-danger mr-2">DELETE ACCOUNT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import {Link, usePage} from "@inertiajs/inertia-vue3";

export default {
    name: "Profile",

    components: {
        Link
    },

    data() {
        return {
            form_profile: {
                name: usePage().props.value.auth.user.name,
                email: usePage().props.value.auth.user.email
            },
            form_new_password: {
                current_password: '',
                password: '',
                password_confirmation: '',
            },
            errors: {
                current_password: false,
                password: false,
                password_confirmation: false,
            },
        }
    },

    methods: {
        updateProfile(){
            axios.patch('/profile', this.form_profile)
                .then(res => {
                    this.$notify({
                        title: "Обновление профиля",
                        text: "Обновлено!",
                        speed: 1000,
                        duration: 1000,
                        type: 'success'
                    });
            })
        },

        updatePassword(){
            this.resetErrors()

            axios.put('/password', this.form_new_password)
                .then(res => {
                    this.$notify({
                        title: "Обновление пароля",
                        text: "Пароль обновлен!",
                        speed: 1000,
                        duration: 1000,
                        type: 'success'
                    });
                    this.resetFormPassword()
                })
                .catch(err => {
                    let errors = err.response.data.errors

                    console.log(errors)

                    if (err.response.status === 422) {
                        this.errors = {
                            current_password: errors.hasOwnProperty('current_password'),
                            password: errors.hasOwnProperty('password'),
                            // errorText: errors.hasOwnProperty('text'),
                        };
                        this.$notify({
                            title: "Обновление пароля",
                            text: "Неверно введены пароли!",
                            speed: 1000,
                            duration: 1000,
                            type: 'error'
                        });
                    }
                })
        },

        resetErrors(){
            this.errors = {
                current_password: false,
                password: false,
                password_confirmation: false
            };
        },

        resetFormPassword(){
            this.form_new_password = {
                current_password: '',
                password: '',
                password_confirmation: ''
            };
        },
    },
}
</script>

<style scoped>
    .height-profile {
        height: 100%;
    }
</style>
