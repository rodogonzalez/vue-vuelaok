<script setup>


import { ref, reactive, onMounted } from 'vue'

import axios from "axios";


const props = defineProps({
    country_slug: String
});


const country = reactive({
    item: []
});

onMounted(() => {
    /*
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => (this.info = response))*/
    //

    axios.get("/country.json").then((res) => {



        function find_country(item_cursor, index, array) {
            if (item_cursor.slug == props.country_slug) {

                country.item = item_cursor;

            }
        }
        let items = res.data;

        items.forEach(find_country);


    });


})



</script>
<template>
    <div class="container-fluid">
        <div class="container px-4 py-5">

            <div class="row">
                <div class="col-2"><img :src="country.item.flag" class="" /></div>
                <div class="col-10">
                    <h1 class=""> {{ country.item.name }}</h1>
                </div>


            </div>


            <div class="col" v-for="video in country.item.video_links">
                <iframe width="560" height="315" :src=video title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
{{video}}

            </div>



            <div class="container px-4 py-5">
                <h2>Aerolineas </h2>
                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 align-items-stretch g-5 py-5">


                    <div class="col" v-for="item in country.item.airlines" v-bind:key="item.name">
                        <div class="   ">
                            <div class="col-4"><img :src="item.logo" class="" /></div>
                        </div>
                    </div>


                </div>

                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 align-items-stretch g-5 py-5">


                    <div class="col" v-for="item in country.item.country_parts" v-bind:key="item.name">

                        <a :href="'/' + country.item.slug + '/' + item.slug">
                            <div class="   ">

                                <b class=""> {{ item.name }}</b>

                                <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-2 py-2">
                                    <div class="col" v-for="picture in item.pictures">

                                        <img :src="picture">

                                    </div>
                                </div>


                            </div>
                        </a>
                    </div>


                </div>



            </div>
        </div>
    </div>
</template>
