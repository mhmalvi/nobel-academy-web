<template>
  <div>
    <div v-if="isLoading" class="d-flex justify-content-center py-3">
      Loading users...
    </div>
    <div class="table-responsive" v-else>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th class="text-left"><input type="checkbox" /></th>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Created At</th>
          </tr>
        </thead>

        <tbody>
          <tr class="text-center" v-for="(user, index) in users" :key="index">
            <td class="text-left"><input type="checkbox" /></td>
            <td>{{ index + 1 }}</td>
            <td>{{ user.username }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.created_at }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from "vue";
import Axios from "axios";

export default {
  setup() {
    const users = ref([]);
    const itemsPerPage = ref(10);
    const isLoading = ref(false);

    const getUsers = () => {
      isLoading.value = true;
      Axios.get("/manage-users/list", {
        params: {
          items: itemsPerPage.value,
        },
      })
        .then((res) => {
          res.data.data.forEach((item) => {
            users.value.push(item);
          });
          isLoading.value = false;
        })
        .catch((err) => {
          console.error(err);
        })
        .finally(() => {});
    };

    onMounted(() => {
      getUsers();
    });

    return {
      users,
      isLoading,
    };
  },
};
</script>
