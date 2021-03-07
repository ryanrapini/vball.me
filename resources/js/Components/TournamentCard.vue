<template>
    <v-card class="mx-auto">
        <v-card-text>
            <p class="display-1 text--primary">
                {{ tournament.name }}
            </p>
            <div class="text--primary">{{ tournament.description }} 2</div>
            <div>
                <ul>
                    <li>
                        <strong>Start Date:</strong> {{ tournament.start_date }}
                    </li>
                    <li>
                        <strong>Start Time:</strong> {{ tournament.start_time }}
                    </li>
                    <li v-if="tournament.end_time !== null">
                        <strong>End Time:</strong>{{ tournament.end_time }}
                    </li>
                </ul>
            </div>
            <v-chip :key="division.id" v-for="division in tournament.divisions"
                >{{ division.gender_requirement }}
                {{ division.skill_level }}</v-chip
            >
        </v-card-text>
        <v-card-actions>
            <v-btn text color="deep-purple accent-4">
                Learn More
            </v-btn>
        </v-card-actions>
    </v-card>
</template>
<script>
export default {
    props: {
        tournament: Object
    }
};
</script>
