<template>
  <form @submit.prevent="handleFormSubmit">
    <div
      class="form-group"
      v-if="
        state.validation.message.length > 0 &&
        (state.validation.errors == null || state.validation.errors == {})
      "
    >
      <div class="alert alert-danger">
        {{ state.validation.message }}
      </div>
    </div>
    <div class="form-group" v-if="state.success.message">
      <div class="alert alert-success">
        {{ state.success.message }}
      </div>
    </div>

    <div class="form-group">
      <input
        type="text"
        name="category"
        class="form-control"
        placeholder="Enter new category here..."
        v-model="state.form.title"
      />
      <small
        class="text-danger"
        v-if="state.validation.errors && state.validation.errors.title"
      >
        {{ state.validation.errors.title[0] }}
      </small>
    </div>

    <div class="form-group">
      <input
        type="text"
        name="category"
        class="form-control"
        placeholder="Enter category slug here..."
        v-model="state.form.slug"
      />
      <small
        class="text-danger"
        v-if="state.validation.errors && state.validation.errors.slug"
      >
        {{ state.validation.errors.slug[0] }}
      </small>
    </div>

    <div class="form-group">
      <textarea
        name="category"
        class="form-control"
        placeholder="Enter category description here..."
        v-model="state.form.description"
      ></textarea>
      <small
        class="text-danger"
        v-if="state.validation.errors && state.validation.errors.description"
      >
        {{ state.validation.errors.description[0] }}
      </small>
    </div>

    <button
      type="submit"
      class="btn btn-sm btn-primary"
      :disabled="state.submitting"
    >
      {{ state.actionLabel }}
    </button>
    <div
      class="spinner-border text-info spinner-border-sm ml-2"
      role="status"
      v-show="state.submitting"
    >
      <span class="sr-only">Loading...</span>
    </div>
  </form>
</template>

<script>
import { reactive, watch, onMounted } from "vue";
import Slug from "../../modules/Slug";
export default {
  props: ["data"],
  setup({ data }, { emit }) {
    const state = reactive({
      form: {
        id: null,
        title: "",
        slug: "",
        description: "",
      },
      submitting: false,
      validation: {
        errors: {
          title: [],
          slug: [],
          description: [],
        },
        message: "",
      },
      success: {
        message: "",
      },
      enableAutoSlug: true,
      actionLabel: "Save",
    });
    onMounted(() => {
      if (data) {
        // user is editing the category, so disabling auto-generating the slug
        // because user may not want to change the slug, just the title
        state.enableAutoSlug = false;
        state.actionLabel = "Update";
        setFormData(data);
      }
    });
    watch(
      () => state.form.title,
      (newVal, oldVal) => {
        if (state.enableAutoSlug) {
          state.form.slug = Slug.generate(newVal);
        }
      }
    );
    const handleFormSubmit = () => {
      state.validation.errors = {};
      state.validation.message = "";
      state.submitting = true;
      state.success.message = "";
      emit("formSubmit", state.form);
    };
    const setFormData = (data) => {
      state.form.id = data.id;
      state.form.title = data.title;
      state.form.slug = data.slug;
      state.form.description = data.description;
    };
    const success = (res, formReset = true) => {
      if (formReset) {
        resetForm();
      }
      state.success.message = res.data.message;
    };
    const fail = (error_data) => {
      state.validation = error_data;
      console.log(state.validation);
    };
    const completed = () => {
      state.submitting = false;
    };
    const resetForm = () => {
      state.form.title = "";
      state.form.slug = "";
      state.form.description = "";
    };
    return {
      state,
      handleFormSubmit,
      success,
      fail,
      completed,
    };
  },
};
</script>