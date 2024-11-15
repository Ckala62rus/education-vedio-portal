<template>
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title flex-row flex-row-fluid flex-center justify-content-between">
                    <h3 class="card-label">
                        {{title}}
                    </h3>
                    <Link :href="route('metronic.lesson.index')" as="button" method="get" class="btn btn-primary font-weight-bolder">Назад</Link>
                </div>
            </div>
            <div class="card-body">
                <h2>{{description}}</h2>
                <div v-html="text" class="mce-content-body"></div>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import axios from "axios";

export default {
    name: "LessonView",

    components: {
        Link
    },

    props: {
        id: {
            type: Number,
            required: true
        },
    },

    data() {
        return {
            title: '',
            description: '',
            text: '',
        }
    },

    methods: {
        loadLesson(){
            axios.get('/admin/lessons/' + this.id)
                .then(res => {
                    let lesson = res.data.data.lesson;
                    this.title = lesson.title;
                    this.description = lesson.description;
                    this.text = lesson.text;
                })
        },
    },

    watch: {
        // Observe paste instance defined in Vue data using the deep option
        //for code syntax tinymce result
        'text':  {
            handler(value) {
                let editor = document.querySelector('.single-top');
                this.$nextTick(()=> {
                    Prism.highlightAll();
                });
            },
            deep: true
        },
    },

    mounted() {
        this.loadLesson();
    }
}
</script>

<style>
    img {
        max-width: 100%;
        height: auto;
    }
</style>
