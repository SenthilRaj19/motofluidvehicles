<template>
    <div>
        <div class="col-md-12">
        <button class="btn btn-default btn-xs" style="margin-bottom: 20px;" @click="toggleAddSection">ADD NEW SERVICE LOG</button>
    </div>
        <div class="col-md-12" style="margin: 25px 0; color: #fff;" v-if="addSection">
            <div class="row" style="color: #000 !important;">
            <div class="col-md-6" >
                <label for="">Date Required</label>
                <datepicker placeholder="" v-model="dateRequired"
                            :format="format"    ></datepicker>
            </div>
            <div class="col-md-6">
                <label for="">Date Done</label>
                <datepicker placeholder="" v-model="dateDone"
                            :format="format"    ></datepicker>
            </div>
            </div>
            <div class="row">
            <div class="col-md-9">
                <label for="">comments</label>
                <textarea name=""  class="form-control" id="" v-model="comments"></textarea>
            </div>
            <div class="col-md-3" style="margin: 50px 0 20px 0">
                <button type="button" class="btn btn-xs btn-primary btn-block" @click="addServiceLog">Add log</button>
            </div>
                <div class="col-md-12" v-if="errorMsg"> <div class="alert alert-danger block">please enter atleast one value to proceed</div></div>
                <div class="col-md-12" v-if="successMsg"><div class="alert alert-success block">Success, this service has been logged</div></div>
            </div>
        </div>

        <div class="card">
        <table class="table table-striped table-bordered">
            <thead align="center">
            <tr>
                <th>Date Required</th>
                <th width="20%">Date Done</th>
                <th width="60%">Comments</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="service in services">
                <td>{{service.date_required}}</td>
                <td>{{service.date_done}}</td>
                <td>{{service.comments}}</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';


    export default {
        props: ['vehicleId'],
        components:{
            Datepicker
        },
        data(){
            return{
                services:[],
                addSection:false,
                dateRequired:'',
                dateDone:'',
                comments:'',
                errorMsg:false,
                successMsg:false,
                format:'yyyy-MM-dd',
            }
        },
        mounted() {
            axios.get('/vehicle-service/'+this.vehicleId)
                .then(response => {
                    this.services = response.data.services;
                });
        },
        methods:{
            toggleAddSection(){
                if(this.addSection===false){
                    this.addSection=true;
                }else{
                    this.addSection=false;
                }
            },
            addServiceLog(){
                if((this.dateRequired==='')&&(this.dateDone==='')&&(this.comments===''))
                {
                    this.errorMsg=true;
                    this.successMsg=false;
                }else{
                    axios.post('/service', {
                        idVehicle: this.vehicleId,
                        dateRequired: this.dateRequired,
                        dateDone: this.dateDone,
                        comments: this.comments,
                    });
                    this.errorMsg=false;
                    this.successMsg=true;
                    this.addSection=false;
                    axios.get('/vehicle-service/'+this.vehicleId)
                        .then(response => {
                            this.services = response.data.services;
                        });
                }
            },
            format(date){
                return moment(date).format('yyyy-MM-dd');
            }
        },
    }
</script>
