<template>
    <v-app>
        <v-content class="grey lighten-4">
            <NavBar :drawerColor="drawerColor" />
            <div class="mx-3">
                <router-view v-on:updateDrawerColor="updateDrawerColor($event)"></router-view>
            </div>
        </v-content>
    </v-app>
</template>

<script>
import NavBar from "./NavBar.vue";
export default {
    name: "App",
    components: {
        NavBar
    },
    data: function() {
        return {
            drawerColor: "success",
        }
    },
    props: ["user", "test"],
    methods: {
        updateDrawerColor: function(newColor) {
            this.drawerColor = newColor;
        },
    },

};
</script>

<style scoped></style>
