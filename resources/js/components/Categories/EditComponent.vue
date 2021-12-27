<template>
  <div class="card">
    <div class="card-body">
      <h4>Update Category</h4>

      <CategoryFormComponent
        ref="form_component"
        :data="category"
        @formSubmit="handleSubmit"
      />
    </div>
  </div>
</template>

<script>
import { ref } from "vue";
import CategoryFormComponent from "./FormComponent.vue";
import CategoryController from "../../controller/CategoryController";
export default {
  components: { CategoryFormComponent },
  props: ["data"],
  setup({ data }) {
    const category = ref(JSON.parse(data));
    const form_component = ref(0);
    const handleSubmit = (data) => {
      CategoryController.update(category.value.slug, {
        ...data,
      })
        .then((res) => {
          form_component.value.success(res, false);
          if (res.data.refresh) {
            location.replace(res.data.refresh_url);
          }
        })
        .catch((err) => {
          form_component.value.fail(err.response.data);
        })
        .finally(() => {
          form_component.value.completed();
        });
    };
    return {
      category,
      form_component,
      handleSubmit,
    };
  },
};
</script>