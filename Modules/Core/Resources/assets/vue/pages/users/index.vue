<template>
  <div class="fade-in">
    <div class="row">
      <div class="col-md-12">
          <b-card header-tag="header" footer-tag="footer">
              <template #header>
                  <strong class="mr-2">List users</strong>
                  <router-link class="btn btn-sm btn-success" :to="{ name: 'users.create' }">
                      <i class="fas fa-plus"></i>
                      Add new
                  </router-link>
              </template>
              <b-table striped hover :items="items"></b-table>
              <template #footer>
                  <b-pagination v-model="currentPage" :total-rows="rows" :per-page="perPage" first-number ></b-pagination>
              </template>
          </b-card>
      </div>
    </div>
  </div>
</template>

<script>
import { BCard ,BCardText , BButton ,BPagination ,BTable} from 'bootstrap-vue'
export default {
    name: "Users",
    components:{
        BCard,
        BCardText,
        BButton,
        BPagination,
        BTable
    },
    data() {
        return {
            rows: 100,
            perPage: 20,
            currentPage: 1,
            items: [
                { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
                { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
                { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
                { age: 38, first_name: 'Jami', last_name: 'Carney' }
            ]
        }
    }
}
</script>

<style scoped>

</style>
