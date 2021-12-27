const category = {
    namespaced: true,
    state: () => {
        return {
            category: null,
        };
    },
    getters: {
        getLatestAddedCategory(state) {
            return state.category;
        },
    },
    mutations: {
        updateCategory(state, category) {
            state.category = category;
        },
    },
    actions: {
        addNewCategory(state, category) {
            state.commit("updateCategory", category);
        },
    },
};

export default category;
