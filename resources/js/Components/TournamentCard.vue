<template>
  <v-card
    class="mx-auto"
  >
    <v-card-text>
      <div>Word of the Day</div>
      <p class="display-1 text--primary">
        {{ tournament.name }}
      </p>
      <p>adjective</p>
      <div class="text--primary">
        {{ tournament.description }}
      </div>
    </v-card-text>
    <v-card-actions>
      <v-btn
        text
        color="deep-purple accent-4"
      >
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
  }
</script>