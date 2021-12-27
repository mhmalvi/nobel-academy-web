require("./bootstrap");

import { createApp } from "vue";
import store from "./store";

import CreateBlogComponent from "./components/Blogs/CreateComponent";
import BlogListComponent from "./components/Blogs/ListComponent";
import EditBlogComponent from "./components/Blogs/EditComponent";
import CreateCategoryComponent from "./components/Categories/CreateComponent";
import CategoryListComponent from "./components/Categories/ListComponent";
import EditCategoryComponent from "./components/Categories/EditComponent";
import RplFormComponent from "./components/RplFormComponent.vue";

const app = createApp({});

app.component("create-blog-component", CreateBlogComponent);
app.component("blog-list-component", BlogListComponent);
app.component("edit-blog-component", EditBlogComponent);
app.component("create-category-component", CreateCategoryComponent);
app.component("category-list-component", CategoryListComponent);
app.component("edit-category-component", EditCategoryComponent);
app.component("rpl-form-component", RplFormComponent);

app.use(store).mount("#app");
