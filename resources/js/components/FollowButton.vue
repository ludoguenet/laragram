<template>
    <div>
        <button class="btn btn-sm btn-primary" @click="followProfile" v-text="follow"></button>
    </div>
</template>

<script>
    export default {

        props: ['profileId', 'follows'],

        data: function () {
            return {
                status: this.follows
            }
        },

        methods: {
            followProfile() {
                axios.post('/follows/' + this.profileId)
                    .then(response => {
                        this.status = ! this.status
                    })
                    .catch(errors => {
                        if (errors.response.status === 401) {
                            window.location = '/login';
                        }
                    })
            }
        },

        computed: {
            follow() {
                return (this.status) ? 'Ne plus suivre' : 'Suivre';
            }
        }

    }
</script>
