<template>
    <div class="container">

        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
                <div class="card card-custom rdp_statistic_mg">
                    <div class="card-header">
                        <h3 class="card-title">
                            Редактирование роли
                        </h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>

                    <form @submit.prevent="createRole">
                        <div class="card-body">
                            <div class="form-group mb-8">
                            </div>
                            <div class="form-group">
                                <label>Название роли <span class="text-danger">*</span></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Your name"
                                    v-model="form.role.name"
                                    :class="{'is-invalid': errors.errorName}"
                                />
                                <div class="invalid-feedback">Название обязательно!</div>
                            </div>

                            <el-radio-group v-model="tabPosition" style="margin-bottom: 30px">
                                <el-radio-button label="top">top</el-radio-button>
                                <el-radio-button label="right">right</el-radio-button>
                                <el-radio-button label="bottom">bottom</el-radio-button>
                                <el-radio-button label="left">left</el-radio-button>
                            </el-radio-group>

                            <el-tabs :tab-position="tabPosition"  class="demo-tabs">
                                <el-tab-pane label="User">
                                    <div class="form-group row" v-for="permission in permissions.user">
                                        <label class="col-3 col-form-label">{{permission.name}}</label>
                                        <div class="col-3">
                                    <span class="switch switch-sm">
                                        <label>
                                            <input type="checkbox" v-model="form.permissions" :value="permission.id"/>
                                            <span></span>
                                        </label>
                                    </span>
                                        </div>
                                    </div>
                                </el-tab-pane>
                                <el-tab-pane label="Lesson">
                                    <div class="form-group row" v-for="permission in permissions.lesson">
                                        <label class="col-3 col-form-label">{{permission.name}}</label>
                                        <div class="col-3">
                                    <span class="switch switch-sm">
                                        <label>
                                            <input type="checkbox" v-model="form.permissions" :value="permission.id"/>
                                            <span></span>
                                        </label>
                                    </span>
                                        </div>
                                    </div>
                                </el-tab-pane>
                            </el-tabs>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success mr-2">Создать</button>
                            <Link :href="route('metronic.role.index')" as="button" method="get" class="btn btn-primary font-weight-bolder">Назад</Link>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "RoleCreate",

    components: {
        Link
    },

    props: {
        id: {
            type: Number,
            required: true,
        },
    },

    data() {
        return {
            form: {
                role: {
                    name: ''
                },
                permissions: []
            },
            errors: {},
            permissions: {},
            tabPosition: 'left',
        }
    },

    methods: {
       createRole(){
           axios.put(`/admin/role/${this.id}`, this.form)
               .then(res => {
                   if (res.status === 200){
                       this.$notify({
                           title: "Обновление роли",
                           text: "Роль обновлена!",
                           speed: 1000,
                           duration: 4000,
                           type: 'success'
                       });
                   }
                   // this.$inertia.visit('/dashboard/role')
               })
               .catch(err => {
                   console.log(err)
               })
       },

        getPermissions(){
           axios.get('/admin/permission')
               .then(response => {
                   this.permissions = response.data.data.permissions;
               })
        },

        getRoleById(){
           axios.get(`/admin/role/${this.id}`)
               .then(responce => {
                   let role = responce.data.data.role;
                   this.form.role.name = role.name;
                   this.form.permissions = role.permissions;
               })
        },

    },

    mounted() {
        this.getPermissions();
        this.getRoleById();
    }
}
</script>

<style scoped>
    .height-profile {
        height: 100%;
    }
    .demo-tabs > .el-tabs__content {
        padding: 32px;
        color: #6b778c;
        font-size: 32px;
        font-weight: 600;
    }

    .el-tabs--right .el-tabs__content,
    .el-tabs--left .el-tabs__content {
        height: 100%;
    }
</style>
