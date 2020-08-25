<template>
    <div class="home">
        {{updateDrawerColor()}}
        <p class="subheading grey--text mx-1">
            Application \ Home
        </p>
        <v-container class="my-16">
            <h3 class="display-1">
                Bice of creative work:
            </h3>
            <div class="py-2">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat provident optio ullam dignissimos magni numquam est,
                    ab aliquid rerum impedit repellat mollitia. Ipsum,
                    temporibus aspernatur ratione quis doloremque cupiditate
                    fugit.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat provident optio ullam dignissimos magni numquam est,
                    ab aliquid rerum impedit repellat mollitia. Ipsum,
                    temporibus aspernatur ratione quis doloremque cupiditate
                    fugit.
                </p>
            </div>
        </v-container>
    </div>
</template>

<script>
export default {
    name: "Home",
    methods: {
        updateDrawerColor: function() {
            this.$emit("updateDrawerColor", "secondary");
        }
    }
};
</script>
