<template>
  <div>
    <div class="alert alert-success" v-if="success_message.length > 0">
      {{ success_message }}
    </div>
    <div class="alert alert-warning" v-if="error_message.length > 0">
      {{ error_message }}
    </div>
    <form @submit.prevent="handleFormSubmit">
      <div class="form-group">
        <label for="username">Username*</label>
        <input
          type="text"
          name="username"
          class="form-control"
          v-model="form.username"
        />
      </div>

      <div class="form-group">
        <label for="email">Email*</label>
        <input
          type="email"
          name="email"
          class="form-control"
          v-model="form.email"
        />
      </div>

      <div class="form-group">
        <label for="password">Password*</label>
        <input
          type="password"
          class="form-control"
          name="password"
          v-model="form.password"
        />
      </div>

      <div class="form-group">
        <label for="password">Confirm Password*</label>
        <input
          type="password"
          class="form-control"
          name="password_confirmation"
          v-model="form.password_confirmation"
        />
      </div>

      <div class="form-group">
        <label for="profile_picture">Profile picture</label>
        <input
          type="file"
          name="profile_picture"
          class="form-control"
          @change="handleFileUpdate"
        />
      </div>

      <div class="form-group d-flex justify-content-end">
        <button
          class="btn btn-outline-primary"
          :disabled="isSubmitting || !isValid"
        >
          Save
        </button>
      </div>
    </form>
  </div>
</template>

<script>
import Axios from "axios";
import { ref, reactive, computed } from "vue";
import Validators from "../../Validators";

export default {
  setup() {
    const form = reactive({
      username: "",
      email: "",
      password: "",
      password_confirmation: "",
      profile_picture: "",
    });
    const success_message = ref("");
    const error_message = ref("");

    const { email, password, fileType } = new Validators();

    const isSubmitting = ref(false);

    const handleFormSubmit = () => {
      isSubmitting.value = true;
      Axios.post("/manage-users/store", form)
        .then((res) => {
          resetForm();
          success_message.value = res.data.message;
        })
        .catch((err) => {
          error_message.value = err.response.data.message;
        })
        .finally(() => {
          isSubmitting.value = false;
        });
    };

    const handleFileUpdate = (e) => {
      const file = e.target.files[0];
      if (fileType(file.name)) {
        let reader = new FileReader();

        reader.onload = (e) => {
          form.profile_picture = e.target.result;
        };

        reader.readAsDataURL(file);
      } else {
      }
    };

    const resetForm = () => {
      form.username = "";
      form.email = "";
      form.password = "";
      form.password_confirmation = "";
      form.profile_picture = "";
    };

    const isValid = computed(() => {
      return (
        form.username.length > 0 &&
        form.email.length > 0 &&
        email(form.email) &&
        password(form.password, 6, 50) &&
        form.password == form.password_confirmation
      );
    });

    return {
      form,
      handleFormSubmit,
      handleFileUpdate,
      isValid,
      isSubmitting,
      success_message,
      error_message,
    };
  },
};
</script>
