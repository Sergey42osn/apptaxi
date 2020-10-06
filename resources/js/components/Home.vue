<template>
    <div class="container">222
        <div class="row justify-content-center">
                <div class="grid_12">
                    <h2>Найдите нас</h2>
                    <div class="map">
                        <div id="map"></div>
                    </div>
                </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Index mounted.')
        }
    }
</script>

<style>

.grid_12 {
    width: 100%;
}

.grid_12 h2 {
    text-align: center;
}
</style>