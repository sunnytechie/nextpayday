<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>Imported CSV Records.</div>
                        <div>
                            <!-- Button trigger modal -->
                            <a href="/import-csv-file" class="btn btn-primary rounded-0">
                                Add new CSV User
                            </a>
                        </div>
                    </div>


                    <div class="card-body p-0">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr v-for="record in records" :key="record.id">
                                        <td>{{ record.name }}</td>
                                        <td>{{ record.email }}</td>
                                        <td>{{ record.phone }}</td>
                                        <td>{{ record.address }}</td>
                                    </tr>

                            </tbody>
                        </table>
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
                records: []
            }
        },
        mounted() {
            console.log('CSV Records Component mounted.');
            this.importCsv(); // Call the method to fetch CSV records when the component is mounted.
        },

        methods: {
            importCsv() {
                axios.get('/api/import-csv')
                    .then(response => {
                        console.log('API Response:', response.data);
                        this.records = response.data;
                    })
                    .catch(errors => {
                        console.log('API Error:', errors);
                    });
            }
        }

    }
</script>
