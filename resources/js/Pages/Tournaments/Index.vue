<template>
    <main-layout>
        <header-bar>Tournaments</header-bar>
        <v-row>
            <v-col cols="2">
                <v-sheet class="pa-4">
                    <v-text-field
                        v-model="search"
                        outlined
                        prepend-inner-icon="mdi-text-search"
                    ></v-text-field>
                    <v-select
                        :items="genderFilter"
                        v-model="gender"
                        label="Gender Requirements"
                        outlined
                    ></v-select>
                    <v-select
                        v-model="skill"
                        :items="skillFilter"
                        label="Skill Levels"
                        multiple
                        outlined
                        chips
                    ></v-select>
                </v-sheet>
            </v-col>

            <v-col>
                <v-sheet>
                    <tournament-card
                        v-for="tournament in tournaments"
                        :key="tournament.id"
                        :tournament="tournament"
                    />
                </v-sheet>
            </v-col>
        </v-row>
    </main-layout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";

import TournamentCard from "@/Components/TournamentCard";
import HeaderBar from "@/Components/HeaderBar";

export default {
    components: {
        MainLayout,
        HeaderBar,
        TournamentCard
    },
    props: {
        tournaments: Array
    },
    data: () => ({
        genderFilter: [
            {
                text: "",
                value: ""
            },
            {
                text: "Males Only",
                value: "mens"
            },
            {
                text: "Females Only",
                value: "womens"
            },
            {
                text: "Co-Ed",
                value: "coed"
            }
        ],
        skillFilter: [
            {
                text: "Open",
                value: "open"
            },
            {
                text: "AAA",
                value: "aaa"
            },
            {
                text: "AA",
                value: "aa"
            },
            {
                text: "A",
                value: "a"
            },
            {
                text: "BB",
                value: "bb"
            },
            {
                text: "Upper B",
                value: "upperb"
            }
        ],
        search: "",
        gender: ""
    })
};
</script>

<style scoped></style>
