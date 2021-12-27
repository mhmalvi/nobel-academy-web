<template>
  <blog-form-component ref="form_component" @formSubmit="handleFormSubmit" />
</template>

<script>
import BlogFormComponent from "./FormComponent.vue";
import { ref, onMounted } from "vue";
import BlogController from "../../controller/BlogController";
export default {
  components: { BlogFormComponent },
  props: ["data"],
  setup({ data }) {
    const form_component = ref(0);
    const blog = JSON.parse(data);
    onMounted(() => {
      form_component.value.setFormData(blog);
    });
    const handleFormSubmit = ({ form }) => {
      BlogController.update(blog.slug, form)
        .then((data) => {
          form_component.value.setSuccessResponse(data, false);
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