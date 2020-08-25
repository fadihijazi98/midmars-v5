<template>
    <div class="home">
        {{ updateDrawerColor() }}
        <p class="subheading grey--text mx-1">
            Application \ Example Component
        </p>
        <v-container class="my-16">
            <h3 class="display-1">
                Example of grid system.
            </h3>
            <v-row dense="" justify="center">
                <v-col cols xs="12" sm="3">
                    <v-btn
                        dense
                        dark
                        block
                        outlined
                        rounded=""
                        class="success py-6"
                    >
                        Grid no.1
                    </v-btn>
                </v-col>
                <v-col cols xs="12" sm="3">
                    <v-btn dark block rounded="" class="success py-6">
                        Grid no.2
                    </v-btn>
                </v-col>
            </v-row>

            <v-row justify="center" class="mt-5">
                <v-card loading="success">
                    <v-col cols xs="12">
                        <v-card-title>
                            <h1 display-4>
                                Fadi Hijazi
                            </h1>
                        </v-card-title>
                    </v-col>
                </v-card>
            </v-row>
        </v-container>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    methods: {
        updateDrawerColor: function() {
            this.$emit("updateDrawerColor", "success");
        }
    }
};
</script>
