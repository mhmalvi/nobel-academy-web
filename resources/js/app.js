require("./bootstrap");

import { createApp } from "vue";

import RplFormComponent from "./components/RplFormComponent.vue";
import UserListComponent from "./components/Admin/UserListComponent.vue";
import UserCreateComponent from "./components/Admin/UserCreateComponent.vue";

const app = createApp({});

app.component("rpl-form-component", RplFormComponent);
app.component("user-list-component", UserListComponent);
app.component("user-create-component", UserCreateComponent);

app.mount("#app");
