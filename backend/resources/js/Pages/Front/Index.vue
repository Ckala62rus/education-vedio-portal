<template>
    <div class="container">
        <div class="blog">
            <div class="blog-content">
                <div class="blog-content-left">

                    <div class="blog-articals">
<!--                        <template v-for="(lesson, k) in lessons.data" :key="k">-->
<!--                            <div class="blog-artical">-->

<!--                                <div class="blog-artical-info">-->
<!--                                    <div class="blog-artical-info-img">-->
<!--&lt;!&ndash;                                        <a href="#"><img src="front/images/8.jpg" title="post-name"></a>&ndash;&gt;-->
<!--                                        <a href="#">-->
<!--                                            <img-->
<!--                                                :src="lesson.preview"-->
<!--                                                title="post-name"-->

<!--                                            >-->
<!--                                        </a>-->

<!--                                    </div>-->
<!--                                    <div class="blog-artical-info-head">-->
<!--&lt;!&ndash;                                        <h2><a href="#">{{lesson.title}}</a></h2>&ndash;&gt;-->
<!--                                        <h2>-->
<!--                                            <Link :href="route('front.post', lesson.id)">-->
<!--                                                {{lesson.title}}-->
<!--                                            </Link>-->
<!--                                        </h2>-->
<!--                                        <h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>-->

<!--                                    </div>-->
<!--                                    <div class="blog-artical-info-text">-->
<!--                                        <p>{{lesson.description}}</p>-->
<!--                                    </div>-->
<!--                                    <div class="artical-links">-->
<!--                                        <ul>-->
<!--                                            <li><small> </small><span>june 14, 2013</span></li>-->
<!--                                            <li><a href="#"><small class="admin"> </small><span>admin</span></a></li>-->
<!--                                            <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>-->
<!--                                            <li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>-->
<!--                                            <li><a href="#"><small class="link"> </small><span>permalink</span></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="clearfix"> </div>-->
<!--                            </div>-->
<!--                        </template>-->
                        <template v-for="(lesson, k) in postData.data" :key="k">
                            <div class="blog-artical">

                                <div class="blog-artical-info">
                                    <div class="blog-artical-info-img">
                                        <!--                                        <a href="#"><img src="front/images/8.jpg" title="post-name"></a>-->
                                        <a href="#">
                                            <img
                                                :src="lesson.preview"
                                                title="post-name"
                                                class="img-size-preview"
                                            >
                                        </a>

                                    </div>
                                    <div class="blog-artical-info-head">
                                        <!--                                        <h2><a href="#">{{lesson.title}}</a></h2>-->
                                        <h2>
                                            <Link :href="route('front.post', lesson.id)">
                                                {{lesson.title}}
                                            </Link>
                                        </h2>
                                        <h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>

                                    </div>
                                    <div class="blog-artical-info-text">
                                        <p>{{lesson.description}}</p>
                                    </div>
                                    <div class="artical-links">
                                        <ul>
                                            <li><small> </small><span>june 14, 2013</span></li>
                                            <li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
                                            <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
                                            <li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
                                            <li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </template>

                    </div>

                    <!--start-blog-pagenate-->

<!--                    <ul class="pagination">-->
<!--                        <li v-if="lessons.current_page !== 1"></li>-->

<!--                        <li v-for="link in lessons.links">-->
<!--                            <template v-if="-->
<!--                                Number(link.label) &&-->
<!--                                (lessons.current_page - link.label < 2 &&-->
<!--                                lessons.current_page - link.label > -2) ||-->
<!--                                Number(link.label) === 1 || Number(link.label) === lessons.last_page-->
<!--                            ">-->
<!--                                <Link class="" :class="{ 'active': link.active }" :href="link.url" v-html="link.label" />-->
<!--                            </template>-->
<!--                        </li>-->

<!--                        <li v-if="lessons.current_page !== lessons.last_page"></li>-->
<!--                    </ul>-->
                    <!--//End-blog-pagenate-->

                    <Bootstrap5Pagination
                        :data="postData"
                        @pagination-change-page="getResult"
                    />

                </div>
                <div class="blog-content-right">
                    <div class="b-search">
                        <form>
                            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                            <input type="submit" value="" placeholder="">
                        </form>
                    </div>
                    <!--start-twitter-weight-->
                    <div class="twitter-weights">
                        <h3>Tweet Widget</h3>
                        <div class="twitter-weight-grid">
                            <h4><span> </span>John Doe</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
                            <i><a href="#">2 days ago</a></i>
                        </div>
                        <div class="twitter-weight-grid">
                            <h4><span> </span>John Doe</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
                            <i><a href="#">2 days ago</a></i>
                        </div>
                        <a class="twittbtn" href="#">See all Tweets</a>
                    </div>
                    <!--//End-twitter-weight-->
                    <!-- start-tag-weight-->
                    <div class="b-tag-weight">
                        <h3>Tags Weight</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">consectetur</a></li>
                            <li><a href="#">dolore</a></li>
                            <li><a href="#">aliqua</a></li>
                            <li><a href="#">sit amet</a></li>
                            <li><a href="#">ipsum</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">consectetur</a></li>
                            <li><a href="#">dolore</a></li>
                            <li><a href="#">aliqua</a></li>
                            <li><a href="#">sit amet</a></li>
                            <li><a href="#">ipsum</a></li>
                        </ul>
                    </div>
                    <!---- //End-tag-weight---->
                </div>
                <div class="clearfix"> </div>

            </div>
        </div>
        <!-- /Blog -->
    </div>
</template>

<script>

import {Link} from "@inertiajs/inertia-vue3";
import { Bootstrap5Pagination } from 'laravel-vue-pagination';

export default {
    name: "Index",

    components: {
        Link,
        Bootstrap5Pagination
    },

    props: {
        lessons: {
            type: Object,
        },
    },

    data(){
        return {
            search: '',
            url: '/data/post-paginate',
            // lessons: {},
            columns: [
                'lesson'
            ],
            options: {
                // see the options API
                headings: {
                    id: 'id',
                },
                texts: {
                    limit: 'Вывод записей',
                    count: "Показано с {from} по {to} из {count} записей|{count} записей|Одна запись",
                },
                perPageValues: [10,25,30,35,50,100],
            },

            postData: {},
        }
    },

    methods: {
        getLessons(){
            axios.get('/data/post-paginate')
                .then(res => {
                    console.log(res.data)
                    this.lessons = res.data.lessons
                })
        },

        getResult(page = 1) {
            axios.get(`/data/post-paginate?page=${page}`)
                .then((res)=>{
                    this.postData = res.data.lessons
                })
        },
    },

    mounted() {
        // this.getLessons()
        this.getResult()

        const data = {
            var1: 'value1',
            var2: 'value2'
        };

        const searchParams = new URLSearchParams(data);
        console.log(searchParams.toString())
    }
}
</script>

<style scoped>
.active {
    background: #50e047
}
.img-size-preview{
    width: 60%;
    height: auto;
}
</style>
