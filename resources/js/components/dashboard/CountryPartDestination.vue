<script setup>


import { ref, reactive, onMounted } from 'vue'

import axios from "axios";


const props = defineProps({
    country_slug: String,
    part_slug: String,
    destination_slug: String,

});


const country = reactive({
    item: [],
    part: [],
    destination:[]
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

                        function find_part_destination(item_cursor, index, array) {
                            if (item_cursor.slug == props.destination_slug) {
                                country.destination = item_cursor;
                                return;
                            }
                        }

                        country.part = item_cursor;
                        item_cursor.destinations.forEach(find_part_destination);

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
            <a :href="'/' + props.country_slug + '/' + props.part_slug"><h2>{{ country.part.name }}</h2></a>

            <h3>{{ country.destination.name}}</h3>
            <div v-html="country.destination.description"></div>

            <div class="col" v-for="video in country.destination.videos">
                <iframe width="560" height="315" :src="video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


            </div>


        </div>
    </div>
</template>
