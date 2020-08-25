<template>
    <nav>
        <v-toolbar flat app class="grey lighten-4">
            <v-tooltip bottom>
                <template v-slot:activator="{ on, attrs }">
                    <v-app-bar-nav-icon
                        v-bind="attrs"
                        v-on="on"
                        @click="drawer = !drawer"
                    ></v-app-bar-nav-icon>
                </template>
                <span>Click to <span class="green--text lighten-1 font-weight-bold">{{ (drawer) ? `hidden` : `show`}}</span> the menu</span>
            </v-tooltip>

            <v-toolbar-title class="text-uppercase grey--text">
                <span class="font-weight-light">Mid</span>Mars
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn depressed="" class="grey--text">
                <span>Singout</span>
                <v-icon right>
                    exit_to_app
                </v-icon>
            </v-btn>
        </v-toolbar>
        <v-navigation-drawer v-model="drawer" app :class="`${drawerColor}`">
            <v-list flat v-for="link in links" :key="link.text">
                <v-list-item router :to="link.route">
                    <v-list-item-icon>
                        <v-icon class="white--text">
                            {{ link.icon }}
                        </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content class="white--text">
                        {{ link.text }}
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
    </nav>
</template>

<script>
export default {
    data: function() {
        return {
            drawer: false,
            links: [
                {
                    icon: "dashboard",
                    text: "Dashboard",
                    route: "/"
                },
                {
                    icon: "folder",
                    text: "My project",
                    route: "/test"
                },
                {
                    icon: "person",
                    text: "Team",
                    route: "/example"
                }
            ]
        };
    },
    props: ["drawerColor"],
    methods: {}
};
</script>
