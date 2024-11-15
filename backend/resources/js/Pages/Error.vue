<template>
    <div class="container">
        <div class="row">
            <!--Delete user-->
            <div class="col-md-12 mt-5 mb-5">
                <div class="card card-custom rdp_statistic_mg">
                    <div class="card-header">
                        <h3 class="card-title">
                            {{ title }}
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
                                        {{ description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
<!--    <div>-->
<!--        <h1>{{ title }}</h1>-->
<!--        <div>{{ description }}</div>-->
<!--    </div>-->
</template>

<script>
import {usePage} from "@inertiajs/inertia-vue3";

export default {
    props: {
        status: Number,
    },
    data() {
        return {
            page: '',
        }
    },
    computed: {
        title() {
            return {
                503: '503: Сервис недоступен',
                500: '500: Ошибка сервера',
                404: '404: Страница не найдена',
                403: '403: Запрещено',
            }[this.status]
        },
        description() {
            return {
                503: 'Извините, мы проводим техническое обслуживание. Пожалуйста, попробуйте позже.',
                500: 'Упс, что-то пошло не так на наших серверах.',
                404: 'К сожалению, не удалось найти страницу, которую Вы ищете.',
                403: `К сожалению, доступ к этой странице (${this.$page.props.ziggy.location}) запрещен. Для получения прав, обратитесь к администратору.`,
            }[this.status]
        },
    },

    created() {
        this.page = this.$page.props.ziggy.location;
    }
}
</script>
