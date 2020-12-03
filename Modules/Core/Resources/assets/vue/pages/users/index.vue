<template>
  <div class="fade-in">
    <div class="row">
      <div class="col-md-12">
          <b-card header-tag="header" footer-tag="footer">
              <template #header>
                  <strong class="mr-2">List users</strong>{{ $route.params.page }}
                  <router-link class="btn btn-sm btn-success" :to="{ name: 'users.create' }">
                      <i class="fas fa-plus"></i>
                      Add new
                  </router-link>
              </template>
              <b-table striped hover :items="users"></b-table>
              <template #footer>
                  <b-pagination-nav :link-gen="linkGen" :number-of-pages="10" use-router></b-pagination-nav>
              </template>
          </b-card>
      </div>
    </div>
  </div>
</template>

<script>
import { BCard ,BCardText , BButton ,BPaginationNav ,BTable} from 'bootstrap-vue'
export default {
    name: "Users",
    components:{ BCard, BCardText,  BButton, BPaginationNav, BTable },
    data() {
        return {
            pages: {
                numberOfPages : 1,
            },
            rows: 100,
            perPage: 20,
            currentPage: 1,
            users: []
        }
    },
    mounted () {
        this.axios.get('http://127.0.0.1:8000/api/user')
            .then(response => {
                console.log(response)
                this.users = response.data.data;
                this.pages.numberOfPages = response.data.meta.total
            } )
    },
    methods: {
        linkGen(pageNum) {
            return pageNum === 1 ? '?' : `/users?page=${pageNum}`
        }
    }
}
</script>

<style scoped>

</style>
