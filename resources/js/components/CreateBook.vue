                        <template>
    <div>
        <h3 class="text-center">Create book</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addbook">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="book.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="book.description">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" v-model="book.author">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" v-model="book.price">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                book: {}
            }
        },
        methods: {
            addbook() {
                this.axios
                    .post('http://localhost:8000/api/store', this.book)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>



