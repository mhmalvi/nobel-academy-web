import axios from "axios";

export default class BlogController {
    static async get(slug) {
        return new Promise((resolve, reject) => {
            axios
                .get("/admin/blogs/" + slug + "/raw")
                .then((res) => {
                    resolve(res.data.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async getPaginated(actionUrl, itemsPerPage, query) {
        return new Promise((resolve, reject) => {
            axios
                .get(actionUrl, {
                    params: {
                        items: itemsPerPage,
                        search: query,
                    },
                })
                .then((res) => {
                    resolve(res.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async update(slug, data) {
        return new Promise((resolve, reject) => {
            axios
                .post("/admin/blogs/update/" + slug, {
                    _method: "PUT",
                    ...data,
                })
                .then((res) => {
                    resolve(res.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async delete(slug) {
        return new Promise((resolve, reject) => {
            axios
                .delete("/admin/blogs/delete/" + slug)
                .then((res) => {
                    resolve(res.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }
}
