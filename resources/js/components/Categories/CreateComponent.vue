<template>
  <div>
    <h4>Add New Category</h4>
    <CategoryFormComponent ref="form_component" @formSubmit="handleSubmit" />
  </div>
</template>

<script>
import CategoryFormComponent from "./FormComponent.vue";
import CategoryController from "../../controller/CategoryController";
import { ref } from "vue";
import { useStore } from "vuex";
export default {
  components: {
    CategoryFormComponent,
  },
  setup() {
    const form_component = ref(0);
    const store = useStore();
    const handleSubmit = (data) => {
      CategoryController.store(data)
        .then((res) => {
          form_component.value.success(res);
          store.dispatch("category/addNewCategory", res.data.category);
        })
        .catch((err) => {
          form_component.value.fail(err.response.data);
        })
        .finally(() => {
          form_component.value.completed();
        });
    };
    return {
      form_component,
      handleSubmit,
    };
  },
};
</script>