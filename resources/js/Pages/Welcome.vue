<template>
    <v-app id="inspire">
        <v-app-bar app color="white" flat>
            <v-container class="py-0 fill-height">
                <v-avatar
                    class="mr-10"
                    color="grey darken-1"
                    size="32"
                ></v-avatar>

                <v-btn v-for="link in links" :key="link" text>
                    {{ link }}
                </v-btn>

                <div
                    v-if="canLogin"
                    class="hidden fixed top-0 right-0 px-6 py-4 sm:block"
                >
                    <inertia-link
                        v-if="$page.props.user"
                        href="/dashboard"
                        class="text-sm text-gray-700 underline"
                    >
                        Dashboard
                    </inertia-link>

                    <template v-else>
                        <inertia-link
                            :href="route('login')"
                            class="text-sm text-gray-700 underline"
                        >
                            Login
                        </inertia-link>

                        <inertia-link
                            v-if="canRegister"
                            :href="route('register')"
                            class="ml-4 text-sm text-gray-700 underline"
                        >
                            Register
                        </inertia-link>
                    </template>
                </div>

                <v-spacer></v-spacer>

                <v-responsive max-width="260">
                    <v-text-field
                        dense
                        flat
                        hide-details
                        rounded
                        solo-inverted
                    ></v-text-field>
                </v-responsive>
            </v-container>
        </v-app-bar>

        <v-main class="grey lighten-3">
            <v-container>
                <v-row>
                    <v-col cols="2">
                        <v-sheet rounded="lg">
                            <v-list color="transparent">
                                <v-list-item v-for="n in 5" :key="n" link>
                                    <v-list-item-content>
                                        <v-list-item-title>
                                            List Item {{ n }}
                                        </v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>

                                <v-divider class="my-2"></v-divider>

                                <v-list-item link color="grey lighten-4">
                                    <v-list-item-content>
                                        <v-list-item-title>
                                            Refresh
                                        </v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list>
                        </v-sheet>
                    </v-col>

                    <v-col>
                        <v-sheet min-height="70vh" rounded="lg">
                            <tournament-card
                                v-for="tournament in tournaments"
                                :key="tournament.id"
                                :tournament="tournament"
                            />
                        </v-sheet>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<style scoped></style>

<script>
import TournamentCard from "../Components/TournamentCard";
export default {
    components: {
        TournamentCard
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        tournaments: Array
    },
    data: () => ({
        links: ["Dashboard", "Messages", "Profile", "Updates"]
    })
};
</script>
