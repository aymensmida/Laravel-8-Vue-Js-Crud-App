                        <template>
                        <div>
                            <h2 class="text-center">books List</h2>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="book in books" :key="book.id">
                                    <td>{{ book.id }}</td>
                                    <td>{{ book.title }}</td>
                                    <td>{{ book.price }}</td>
                                    <td>{{ book.description }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <router-link :to="{name: 'edit', params: { id: book.id }}" class="btn btn-success">Edit</router-link>
                                            <button class="btn btn-danger" @click="deletebook(book.id)">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </template>

                    <script>
                        export default {
                            mounted() {
                            console.log('Example component mounted.')
                        },
                            data() {
                                return {
                                    books: []
                                }
                            },
                            created() {
                                this.axios
                                    .get('http://localhost:8000/api/allbooks')
                                    .then(response => {
                                        this.books = response.data;
                                        console.log(response);
                                    });
                            },
                            methods: {
                                deletebook(id) {
                                    this.axios
                                        .delete(`http://localhost:8000/api/delete${id}`)
                                        .then(response => {
                                            let i = this.books.map(data => data.id).indexOf(id);
                                            this.books.splice(i, 1)
                                        });
                                }
                            }
                        }
                    </script>


