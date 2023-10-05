import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

Vue.component("chat-group-section", require("./components/group-section.vue").default);
Vue.component("create-group-form", require("./components/create-group.vue").default);

new Vue({
    el: "#chatify",
    data: {
        show: {
            createGroup: false, // Add this line to show/hide the "Create Group" section
        },
    },
    methods: {
        openCreateGroup() {
            this.show.createGroup = true;
        },
        closeCreateGroup() {
            this.show.createGroup = false;
        },
    },
});
