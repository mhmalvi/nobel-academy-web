<template>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <!-- <div class="col-12">
          <div class="d-flex justify-content-center">Loading...</div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <p class="text-center">No category found</p>
            </div>
          </div>
        </div> -->
        <div class="col-md-12">
          <div class="row">
            <div class="col-4">
              <select class="form-control" v-model="state.pagination.perPage">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
              </select>
            </div>
            <div class="col-6 offset-2">
              <input
                type="text"
                class="form-control"
                v-model="state.pagination.search"
                placeholder="Search..."
              />
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Created At</th>
                  </tr>
                </thead>

                <tbody v-if="state.categories.length > 0">
                  <tr
                    v-for="(category, index) in state.categories"
                    :key="index"
                  >
                    <td width="10px">
                      {{ index + 1 }}
                    </td>
                    <td>
                      <a
                        :href="category.action_url"
                        target="_blank"
                        class="btn-link"
                      >
                        {{ category.title }}
                      </a>
                      <div class="pt-3">
                        <a :href="getEditLink(category)" class="text-secondary">
                          Edit
                        </a>
                        <a
                          href="javascript:void(0)"
                          @click.prevent="promptToDelete(category)"
                          class="mx-2 text-secondary"
                        >
                          Delete
                        </a>
                      </div>
                    </td>
                    <td>
                      {{ category.created_at }}
                    </td>
                  </tr>
                </tbody>

                <tbody v-else>
                  <tr>
                    <td class="text-center" colspan="3">No category found!</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <nav aria-label="Categories pagination">
                <ul class="pagination justify-content-center">
                  <li
                    class="page-item"
                    v-for="(page, index) in state.paginationLinks"
                    :key="index"
                    :class="page.url == null ? 'disabled' : ''"
                  >
                    <a
                      class="page-link"
                      href="javascript:void(0)"
                      tabindex="-1"
                      @click="getLink(page.url)"
                      v-html="page.label"
                    ></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { reactive, onMounted, watch } from "vue";
import CategoryController from "../../controller/CategoryController";
import { useStore } from "vuex";
export default {
  setup() {
    const store = useStore();
    const state = reactive({
      categories: [],
      paginationLinks: [],
      pagination: {
        perPage: 5,
        search: "",
      },
      isLoading: false,
    });

    onMounted(() => {
      getData();
    });

    watch(
      () => store.state.category.category,
      (newVal, oldVal) => {
        console.log(newVal);
        state.categories.unshift(newVal);
      }
    );

    const getData = (action_url = null) => {
      state.isLoading = true;
      CategoryController.paginated(state.pagination.perPage, action_url)
        .then((res) => {
          state.isLoading = false;
          state.categories = res.data.data;
          state.paginationLinks = res.data.meta.links;
        })
        .catch((err) => {})
        .finally(() => {
          state.isLoading = false;
        });
    };

    const getLink = (action_url) => {
      getData(action_url);
    };

    const getEditLink = (category) => {
      return "/admin/categories/edit/" + category.slug;
    };

    const promptToDelete = (category) => {
      if (confirm("Are you sure you want to delete?")) {
        CategoryController.delete(category.slug).then((data) => {
          alert(data.message);
          getData();
        });
      }
    };

    return {
      state,
      getLink,
      getEditLink,
      promptToDelete,
    };
  },
};
</script>

<style>
.w-40 {
  width: 40px;
}
</style>