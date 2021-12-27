<template>
  <blog-form-component ref="form_component" @formSubmit="handleFormSubmit" />
</template>
<script>
import { ref } from "vue";
import BlogFormComponent from "./FormComponent.vue";
export default {
  components: {
    BlogFormComponent,
  },
  setup() {
    const form_component = ref(0);
    const handleFormSubmit = ({ form }) => {
      axios
        .post("/admin/blogs/create", form)
        .then((res) => {
          form_component.value.setSuccessResponse(res.data);
        })
        .catch((err) => {
          form_component.value.setErrorResponse(err);
        })
        .finally(() => {
          form_component.value.responseCompleted();
        });
    };
    return {
      form_component,
      handleFormSubmit,
    };
  },
};
</script>