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
              <b-table striped hover :items="users"></b-table>
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
    mounted () {
        this.axios.get('http://127.0.0.1:8000/api/user')
            .then(response => {
                this.users = response.data;
            } )
    },
    data() {
        return {
            rows: 100,
            perPage: 20,
            currentPage: 1,
            users: []
        }
    }
}
</script>

<style scoped>

</style>
