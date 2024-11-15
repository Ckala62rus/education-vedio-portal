<template>
    <div class="container">

        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
                <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
                    <div class="alert-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-xl"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Tools/Compass.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
                                <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </span>
                    </div>
                    <div class="alert-text">
                        Создание категории для статей по обучению
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-custom height-profile">
                    <div class="card-header">
                        <h3 class="card-title">
                            Создание категории для статей
                        </h3>
                    </div>

                    <!--begin::Form-->
                    <form @submit.prevent="createCategory">
                        <div class="card-body">
                            <div class="form-group mb-8">
                            </div>
                            <div class="form-group">
                                <label>Название категории <span class="text-danger">*</span></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Category name"
                                    v-model="form.name"
                                    :class="{'is-invalid': errors.errorName}"
                                />
                                <div class="invalid-feedback">Название категории обязательно!</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Описание категории</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="exampleInputPassword"
                                    placeholder="Category description"
                                    v-model="form.description"
                                    :class="{'is-invalid': errors.errorEmail}"
                                />
                                <div class="invalid-feedback">{{errors.errorEmailText}}</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success mr-2">Создать</button>
                            <Link :href="route('metronic.lesson-category.index')" as="button" method="get" class="btn btn-primary font-weight-bolder">Назад</Link>
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
    name: "LessonCategoryCreate",

    components: {
        Link
    },

    data() {
        return {
            form: {
                name: '',
                description: '',
            },
            errors: {
                errorName: false,
            },
        }
    },

    methods: {
        createCategory(){
            this.resetErrors()

            axios.post('/admin/category', this.form)
                .then(res => {
                    if (res.status === 201){
                        this.$notify({
                            title: "Создание категории",
                            text: "Категория создана!",
                            speed: 1000,
                            duration: 1000,
                            type: 'success'
                        });

                        this.resetForm();
                    }
                })
                .catch(err => {
                    let errors = err.response.data.errors

                    if (err.response.status === 422) {
                        console.log(errors)
                        this.errors = {
                            errorName: errors.hasOwnProperty('name'),
                            errorEmail: errors.hasOwnProperty('email'),
                        };
                        this.$notify({
                            title: "Ошибка валидации полей",
                            text: "Ошибка в заполнении полей",
                            speed: 3000,
                            duration: 1000,
                            type: 'error'
                        });
                    }
                })
        },

        resetForm(){
            this.form = {
                name: '',
                description: '',
            };
        },

        resetErrors(){
            this.errors = {
                errorName: false,
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
