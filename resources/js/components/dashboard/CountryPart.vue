<script setup>


import { ref, reactive, onMounted } from 'vue'

import axios from "axios";


const props = defineProps({
    country_slug: String,
    part_slug: String

});


const country = reactive({
    item: [],
    part: []
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

                function find_part(item_cursor, index, array) {
                    if (item_cursor.slug == props.part_slug) {
                        country.part = item_cursor;
                        return;
                    }
                }

                country.item = item_cursor;
                country.item.country_parts.forEach(find_part);

                return;



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
            <a :href="'/' + props.country_slug"><h1>{{ country.item.name }}</h1></a>
            <h2>{{ country.part.name }}</h2>

            <div class="container px-4 py-5">
                {{ country.part.description }}
                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="col" v-for="picture in country.part.pictures" >

                        <img :src="picture">

                    </div>
                </div>

                <div class="row row-cols-1 row-cols-lg-5 align-items-stretch g-4 py-5">
                    <div class="col" v-for="item in country.part.destinations" v-bind:key="item.name">

                        <a :href="'/' + props.country_slug + '/'  + country.part.slug + '/' +item.slug">
                            <div class="   ">
                                <div class="col-8"><b class=""> {{ item.name }}</b></div>

                                <div class="col" v-for="picture in item.pictures" >

                                    <img :src="picture">

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
