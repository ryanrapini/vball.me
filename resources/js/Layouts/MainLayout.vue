<template>
    <v-app>
        <v-app-bar app color="white" flat>
            <v-container class="py-0 fill-height">
                vball.me
                <inertia-link
                    as="v-btn"
                    v-for="link in links"
                    :key="link"
                    :href="'/' + link.url"
                    color="secondary"
                    text
                    small
                >
                    {{ link.title }}
                </inertia-link>

                <v-spacer></v-spacer>

                <v-responsive max-width="260">
                    <v-text-field dense flat hide-details rounded solo-inverted>
                    </v-text-field>
                </v-responsive>
            </v-container>
        </v-app-bar>

        <v-main class="grey lighten-3">
            <v-container fluid>
                <slot />
            </v-container>
        </v-main>
    </v-app>
</template>

<style scoped></style>

<script>
export default {
    components: {},
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        tournaments: Array
    },
    data: () => ({
        links: [
            {
                title: "Home",
                url: ""
            },
            {
                title: "News",
                url: "news"
            },
            {
                title: "Tournaments",
                url: "tournaments"
            },
            {
                title: "Leagues",
                url: "leagues"
            },
            {
                title: "Facilities",
                url: "facilities"
            },
            {
                title: "Resources",
                url: "resources"
            }
        ]
    })
};
</script>
