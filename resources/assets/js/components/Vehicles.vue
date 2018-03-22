<template>
    <div>
        <table class="table table-striped ">
            <thead align="center">
            <tr>
                <th>Name</th>
                <th width="20%">View</th>
                <th width="20%">Trips</th>
                <th width="20%">Service History</th>
                <th width="20%">Edit</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="vehicle in vehicles">
                <td>{{vehicle.name}}</td>
                <td><a :href="'/vehicle/'+vehicle.id" class="btn btn-block btn-xs btn-info">
                    View</a>
                <td><a :href="'/vehicle/trips/'+vehicle.id" class="btn btn-block btn-info">
                    Trips</a></td>
                <td><a :href="'vehicle/service/'+vehicle.id" class="btn btn-block btn-info">
                    Service History</a></td>
                <td><a :href="'/vehicle/'+vehicle.id+'/edit'" class="btn btn-block btn-primary">
                   Edit</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                vehicles:[],

            }
        },
        mounted() {
            axios.get('/list-vehicles')
                .then(response => {
                    this.vehicles = response.data.vehicles;
                });
        },
        methods:{
        },
    }
</script>
