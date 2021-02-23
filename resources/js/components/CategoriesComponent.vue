<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="post in posts">
                    <div class="card-header">{{post.title}}</div>

                    <div class="card-body">
                        {{post.body}}
                    </div>

                    <div class="card-footer">
                        <span> Created at: {{new Date(post.created_at).toLocaleString("IT")}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

       data() {
            return {
                posts: "",
            }
        },

        mounted() {
            console.log('Component mounted.');
            axios.get("api/posts").then(response => {
                console.log(response.data.data);
                this.posts = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>

<style lang="scss" scoped>
    .card{
        margin-bottom: 30px;
    }
</style>
