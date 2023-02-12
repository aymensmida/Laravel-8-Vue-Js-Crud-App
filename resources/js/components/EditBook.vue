                        <template>
                        <div>
                            <h3 class="text-center">Edit book</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <form @submit.prevent="updatebook">
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
                                        <button type="submit" class="btn btn-primary">Update</button>
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
                            created() {
                                this.axios
                                    .get(`http://localhost:8000/api/book${this.$route.params.id}`)
                                    .then((res) => {
                                        this.book = res.data;
                                    });
                            },
                            methods: {
                                updatebook() {
                                    this.axios
                                        .post(`http://localhost:8000/api/update${this.$route.params.id}`, this.book)
                                        .then((res) => {
                                            this.$router.push({ name: 'home' });
                                        });
                                }
                            }
                        }
                    </script>


