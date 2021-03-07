<template>
    <main-layout title="Login">
        <v-row>
            <v-col lg="4" offset-lg="4" md="6" offset-md="3">
                <v-card class="mx-auto">
                    <v-card-text>
                        <p class="display-1 text--primary" align="center">
                            Login
                        </p>
                        <v-text-field
                            label="Email Address"
                            v-model="loginForm.email"
                        ></v-text-field>
                        <v-text-field
                            label="Password"
                            v-model="loginForm.password"
                            :append-icon="
                                showPassword ? 'mdi-eye' : 'mdi-eye-off'
                            "
                            :type="showPassword ? 'text' : 'password'"
                            name="login-input-password"
                            counter
                            @click:append="showPassword = !showPassword"
                        ></v-text-field>
                        <v-row class="mt-3 mr-3">
                            <v-spacer />
                            <v-btn right elevation="2" color="secondary">
                                Login
                                <v-icon right dark>
                                    mdi-login
                                </v-icon>
                            </v-btn>
                        </v-row>
                    </v-card-text>
                    <v-card-actions>
                        <v-btn
                            text
                            color="teal accent-4"
                            @click="isRegistering = true"
                        >
                            Register for an Account
                        </v-btn>
                    </v-card-actions>

                    <v-expand-transition>
                        <v-card
                            v-if="isRegistering"
                            class="transition-fast-in-fast-out v-card--reveal"
                            style="height: 100%;"
                        >
                            <v-card-text class="pb-0">
                                <v-text-field
                                    v-model="registerForm.firstname"
                                    name="register-firstname-input"
                                >
                                </v-text-field>
                                <v-text-field
                                    v-model="loginForm.password"
                                    :append-icon="
                                        showPassword ? 'mdi-eye' : 'mdi-eye-off'
                                    "
                                    :type="showPassword ? 'text' : 'password'"
                                    name="input-10-1"
                                    label="Password"
                                    hint="At least 8 characters"
                                    counter
                                    @click:append="showPassword = !showPassword"
                                ></v-text-field>
                            </v-card-text>
                            <v-card-actions class="pt-0">
                                <v-btn
                                    text
                                    color="teal accent-4"
                                    @click="isRegistering = false"
                                >
                                    Login
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-expand-transition>
                </v-card>
            </v-col>
        </v-row>
    </main-layout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";

export default {
    components: {
        MainLayout
    },

    props: {
        status: String
    },

    data() {
        return {
            isRegistering: false,
            showPassword: false,
            loginForm: this.$inertia.form({
                email: "",
                password: "",
                remember: false
            })
        };
    },

    methods: {
        submit() {
            this.form
                .transform(data => ({
                    ...data,
                    remember: this.form.remember ? "on" : ""
                }))
                .post(this.route("login"), {
                    onFinish: () => this.form.reset("password")
                });
        }
    }
};
</script>

<style scoped>
.v-card--reveal {
    bottom: 0;
    opacity: 1 !important;
    position: absolute;
    width: 100%;
}
</style>
