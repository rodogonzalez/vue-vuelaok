<script setup>


import { ref, reactive, onMounted } from 'vue'

import axios from "axios";


const props = defineProps({
    countries: Array
});


const countries_list = reactive({
    items: []
});

onMounted(() => {
    /*
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => (this.info = response))*/
    //

    axios.get("/country.json").then((res) => {

        console.log(res);
        countries_list.items = res.data;
    });

    console.log(countries_list);
})



</script>
<template>
    <div class="container-fluid">


                <div class="container px-4 py-5">
                    <div class="row row-cols-1 row-cols-lg-5 align-items-stretch g-4 py-5">
                        <div class="col" v-for="item in countries_list.items" v-bind:key="item.name" >

                            <a :href="'/'+ item.slug"><div class="   " >
                                <div class="col-4"><img :src="item.flag" class="" /></div>
                                <div class="col-8"><b class=""> {{ item.name }}</b></div>


                            </div>
                            </a>
                        </div>
                    </div>
                </div>


    </div>


</template>
