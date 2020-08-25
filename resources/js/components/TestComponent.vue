<template>
    <div>
        {{ updateDrawerColor() }}
        <v-container class="text-center mt-10">
            <v-row>
                <v-col cols xs="12" sm="4">
                    <v-alert
                        dark
                        dismissible
                        border="top"
                        class="red lighten-1"
                    >
                        Simple alert with test with border
                    </v-alert>
                </v-col>
                <v-col cols xs="12" sm="4">
                    <v-alert
                        border="left"
                        colored-border
                        color="deep-purple accent-4"
                        elevation="2"
                    >
                        custome alert with test with border.
                    </v-alert>
                </v-col>
                <v-col cols xs="12" sm="4">
                    <v-alert
                        border="right"
                        colored-border
                        type="error"
                        elevation="2"
                    >
                        custome warning alert with test with oborder.
                    </v-alert>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    name: "TestComponent",
    methods: {
        updateDrawerColor: function() {
            this.$emit('updateDrawerColor', 'error')
        },
    },
};
</script>

<style scoped></style>
