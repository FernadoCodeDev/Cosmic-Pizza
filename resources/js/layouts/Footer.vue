<script setup lang="ts">
import CosmicPizzaLogo2 from "../assets/img/ComicPizzaLogo2.webp"

</script>

<template>
    <footer class="p-4 w-full pt-8 bg-neutral-950 text-white">
        <div class="flex flex-col gap-4 max-w-[80rem] m-auto">

            <div class="flex flex-row gap-2 items-end ">
                <img :src="CosmicPizzaLogo2" alt="CosmicPizzaLogo" class="w-auto h-12 object-contain" />
                <h5 class="text-lg"> COSMIC PIZZA</h5>
            </div>

            <div class="grid grid-cols-2 w-full ">
                <div class="">
                    <ul class="list-unstyled">
                        <li><a href="">Product</a></li>
                        <li><a href="">Benefits</a></li>
                        <li><a href="">Partners</a></li>
                        <li><a href="">Team</a></li>
                    </ul>
                </div>
                <div class="">
                    <ul class="list-unstyled">
                        <li><a href="">Documentation</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">Legal Terms</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>
</template>