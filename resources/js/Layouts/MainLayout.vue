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
            <v-container fill-height fluid>
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
        links: ["Dashboard", "Messages", "Profile", "Updates"]
    })
};
</script>
