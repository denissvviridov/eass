<template>
    <Filters :filters="filters"/>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Listing :listing="listing" v-for="listing in listings.data" :key="listing.id"/>
    </div>
    <div v-if="listings.data.length" class="w-full flex justify-center mt-8 mb-8">
        <Pagination :links="listings.links"/>
    </div>
</template>

<script setup>

import Listing from "./Index/Components/Listing.vue";
import Pagination from "../../Components/UI/Pagination.vue";
import Filters from "./Index/Components/Filters.vue";

defineProps({
    listings: Object,
    filters: Object
})

</script>
