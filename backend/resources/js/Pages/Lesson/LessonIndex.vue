<template>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-custom rdp_statistic_mg">
                    <div class="card-header">
                        <h3 class="card-title">
                            Все статьи
                        </h3>
                    </div>
                    <div class="card-body">

                        <Link :href="route('metronic.lesson.create')" as="button" method="get" class="btn btn-success mb-5">Создать статью</Link>

                        <v-server-table
                            :url="url"
                            :columns="columns"
                            :options="options"
                            ref="lessons-table"
                        >
                            <template v-slot:preview="{row}">
                                <img :src="row.preview" width="50" height="50">
                            </template>
                            <template v-slot:is_publish="{row}">
<!--                                <label class="checkbox checkbox-success">-->
<!--                                    <input type="checkbox" disabled="disabled" name="Checkboxes5" checked="checked" />-->
<!--                                    <span></span>-->
<!--                                </label>-->
                                <span v-if="row.is_publish" class="label label-inline label-light-success font-weight-bold">
                                    Опубликовано
                                </span>
                                <span v-else class="label label-inline label-light-danger font-weight-bold">
                                    Не опубликовано
                                </span>
                            </template>

                            <template v-slot:category="{row}">
                                {{row.category_name ? row.category_name : 'Нет категории'}}
                            </template>

                            <template v-slot:actions="{row}">
                                <Link :href="route('metronic.lesson.lesson-view', {id: row.id})" method="get">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-10-29-133027/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-06-223557/theme/html/demo1/dist/../src/media/svg/icons/General/Visible.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                                    </g>
                                                </svg><!--end::Svg Icon-->
                                            </span>
                                      </span>
                                </Link>

                                <a :href="'/post/' + row.id" target="_blank">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Communication/Share.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M10.9,2 C11.4522847,2 11.9,2.44771525 11.9,3 C11.9,3.55228475 11.4522847,4 10.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,16 C20,15.4477153 20.4477153,15 21,15 C21.5522847,15 22,15.4477153 22,16 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L10.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M24.0690576,13.8973499 C24.0690576,13.1346331 24.2324969,10.1246259 21.8580869,7.73659596 C20.2600137,6.12944276 17.8683518,5.85068794 15.0081639,5.72356847 L15.0081639,1.83791555 C15.0081639,1.42370199 14.6723775,1.08791555 14.2581639,1.08791555 C14.0718537,1.08791555 13.892213,1.15726043 13.7542266,1.28244533 L7.24606818,7.18681951 C6.93929045,7.46513642 6.9162184,7.93944934 7.1945353,8.24622707 C7.20914339,8.26232899 7.22444472,8.27778811 7.24039592,8.29256062 L13.7485543,14.3198102 C14.0524605,14.6012598 14.5269852,14.5830551 14.8084348,14.2791489 C14.9368329,14.140506 15.0081639,13.9585047 15.0081639,13.7695393 L15.0081639,9.90761477 C16.8241562,9.95755456 18.1177196,10.0730665 19.2929978,10.4469645 C20.9778605,10.9829796 22.2816185,12.4994368 23.2042718,14.996336 L23.2043032,14.9963244 C23.313119,15.2908036 23.5938372,15.4863432 23.9077781,15.4863432 L24.0735976,15.4863432 C24.0735976,15.0278051 24.0690576,14.3014082 24.0690576,13.8973499 Z" fill="#000000" fill-rule="nonzero" transform="translate(15.536799, 8.287129) scale(-1, 1) translate(-15.536799, -8.287129) "/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                    </span>
                                </a>

                                <Link :href="route('metronic.lesson.edit', {id: row.id})" method="get">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Design/Edit.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                    </span>
                                </Link>

                                <a href="javascript:;" @click="deleteLesson(row)">
                                      <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-10-29-133027/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                                                    <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg><!--end::Svg Icon-->
                                      </span>
                                </a>
                            </template>
                        </v-server-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Link, usePage} from "@inertiajs/inertia-vue3";

export default {
    name: "LessonIndex",
    components: {
        Link,
    },

    data() {
        return {
            url: '/admin/lessons-pagination',
            columns: [
                'id',
                'preview',
                'title',
                'description',
                'is_publish',
                'category',
                'created_at',
                'updated_at',
                'actions'
            ],
            options: {
                // see the options API
                editableColumns:['text'],
                headings: {
                    id: 'id',
                    preview: 'Превью',
                    title: 'Заголовок',
                    description: 'Описание',
                    is_publish: 'Публикация',
                    category: 'Категория',
                    created_at: 'Время создания',
                    updated_at: 'Время обновления',
                    actions: 'Действия',
                },
                texts: {
                    limit: 'Вывод записей',
                    count: "Показано с {from} по {to} из {count} записей|{count} записей|Одна запись",
                },
                perPageValues: [10,25,30,35,50,100],
                skin: "VueTables__table " +
                    "table " +
                    "table-striped " +
                    "table-bordered " +
                    "table-hover " +
                    "vue__table__row " +
                    "vue__table__row__header",
            }
        }
    },

    methods: {
        showLesson(row) {
            console.log('show');
            console.log(row);
        },

        deleteLesson(row) {
            Swal.fire({
                title: 'Удалить статью?',
                text: "Выбранная статья будет удалена",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Да, удалить',
                cancelButtonText: 'Отмена',
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete('/admin/lessons/' + row.id).then(response => {
                        Swal.fire(
                            'Удалено!',
                            'Статья удалена',
                            'success'
                        )
                        this.$refs['lessons-table'].refresh();
                    });
                }
            })
        },
    },

    mounted() {}
}
</script>

<style scoped>

</style>
