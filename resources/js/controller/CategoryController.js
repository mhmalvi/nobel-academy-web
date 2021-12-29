import Axios from "axios";

export default class CategoryController {
    static async getRaw() {
        return new Promise((resolve, reject) => {
            Axios.get("/admin/categories/list")
                .then((res) => {
                    resolve(res.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async store(data) {
        return new Promise((resolve, reject) => {
            Axios.post("/admin/categories/create", data)
                .then((res) => {
                    resolve(res);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async paginated(perPage, action_url = null) {
        return new Promise((resolve, reject) => {
            action_url = action_url ?? "/admin/categories/list";

            Axios.get(action_url)
                .then((res) => {
                    resolve(res);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async update(slug, data) {
        return new Promise((resolve, reject) => {
            Axios.put("/admin/categories/update/" + slug, data)
                .then((res) => {
                    resolve(res);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async delete(slug) {
        return new Promise((resolve, reject) => {
            Axios.delete("/admin/categories/remove/" + slug)
                .then((res) => {
                    resolve(res.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }
}
