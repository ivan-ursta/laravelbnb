<template>
    <div>
        <nav class="navbar bg-white border-bottom navba-light">
            <router-link class="navbar-brand mr-auto" :to="{ name: 'home' }">LaravelBnb</router-link>
        </nav>

        <div class="container mt-4 mb-4 pr-4 pl-4">
            <router-view></router-view>
        </div>
  
    </div>
</template>
<script>
import { mapState, mapGetters } from "vuex";

export default {
  data() {
    return {
      lastSearch: this.$store.state.lastSearch
    };
  },
  computed: {
    ...mapState({
      lastSearchComputed: "lastSearch",
      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({
      itemsInBasket: "itemsInBasket"
    }),
    somethingElse() {
      return 1 + 2;
    }
  },
  methods: {
    async logout() {
      try {
        axios.post("/logout");
        this.$store.dispatch("logout");
      } catch (error) {
        this.$store.dispatch("logout");
      }
    }
  }
};
</script>
