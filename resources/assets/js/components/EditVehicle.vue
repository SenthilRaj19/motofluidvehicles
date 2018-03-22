<template>
    <div>
        <form action="" >
            <div class="col-md-12" style="margin-top: 15px">
                <h2 class="text-primary">Vehicle Info</h2>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Name (required)</label>
                        <input type="text" class="form-control" v-model="vehicleName" required>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-6">
                        <label for="">Chasis No</label>
                        <input type="text" class="form-control" v-model="chasis">
                    </div>
                    <div class="col-md-6">
                        <label for="">VIN</label>
                        <input type="text" class="form-control" v-model="vin">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-6">
                        <label for="">Rego</label>
                        <input type="text" class="form-control" v-model="rego">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Rego Type</label>
                        <select name="" id="" v-model="regoType" class="form-control">
                            <option value="None">NONE</option>
                            <option value="Club">CLUB</option>
                            <option value="Full">FULL</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-6">
                        <label for="">Rego Due</label>
                        <datepicker placeholder="" v-model="regoDue"
                                    :format="format"    ></datepicker>
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Rego Club</label>
                        <input type="text" class="form-control" v-model="regoClub">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-4">
                        <label for="">Insurance Company</label>
                        <input type="text" class="form-control" v-model="insCompany">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Insurance Policy No</label>
                        <input type="text" class="form-control" v-model="insPolicyNo">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Insurance Date Due</label>
                        <datepicker placeholder="" v-model="insDateDue"
                                    :format="format"    ></datepicker>
                    </div>
                </div>

                <h2 class="text-primary">Vehicle Data</h2>
                <div class="row">
                    <div class="form-group  col-md-4">
                        <label for="">Engine Oil</label>
                        <input type="text" class="form-control" v-model="engOil">
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="">Gear Box Oil</label>
                        <input type="text" class="form-control" v-model="gearOil">
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="">Diff Oil</label>
                        <input type="text" class="form-control" v-model="diffOil">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-4">
                        <label for="">Brake Fluid</label>
                        <input type="text" class="form-control" v-model="brakeFluid">
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="">Radiator</label>
                        <input type="text" class="form-control" v-model="radiator">
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="">Shock oil Front/Back</label>
                        <input type="text" class="form-control" v-model="shockOil">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-4">
                        <label for="">Steering</label>
                        <input type="text" class="form-control" v-model="steering">
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="">One Shot Lube</label>
                        <input type="text" class="form-control" v-model="lube">
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="">Cold Tyre Pressure</label>
                        <input type="text" class="form-control" v-model="coldPressure">
                    </div>
                </div>

                <h2 class="text-primary">Parts</h2>
                <div class="row">
                    <div class="form-group  col-md-6">
                        <label for="">Oil Filter No</label>
                        <input type="text" class="form-control" v-model="oilFilter">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Fuel Filter Number</label>
                        <input type="text" class="form-control" v-model="fuelFilter">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-6">
                        <label for="">Front Brake Pads</label>
                        <input type="text" class="form-control" v-model="brakesFront">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Rear Brake Pads</label>
                        <input type="text" class="form-control" v-model="brakesRear">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-4">
                        <label for="">Headlight</label>
                        <input type="text" class="form-control" v-model="headLight">
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="">Taillight</label>
                        <input type="text" class="form-control" v-model="tailLight">
                    </div>
                    <div class="form-group  col-md-4">
                        <label for="">Brakelight</label>
                        <input type="text" class="form-control" v-model="brakeLight">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Description</label>
                        <textarea class="form-control"  rows="3" v-model="description"></textarea>
                    </div>
                </div>
                <div class="error_message text-danger">{{errorMessage}}</div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" @click="editVehicle()">Update Vehicle details</button>
                </div>
            </div>
        </form>
        <div class="row" v-if="successMsg"  style="margin-top: 10px">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Vehicle details updated successfully. <a href="/vehicle" class="text-primary"> Click here to go back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ">
                <button type="button" class="btn btn-danger pull-right" @click="deleteVehicle()">Delete vehicle</button>
            </div>
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
                vehicleName:'',
                chasis:'',
                vin:'',
                rego:'',
                regoType:'',
                regoDue:'',
                regoClub:'',
                insCompany:'',
                insPolicyNo:'',
                insDateDue:'',
                engOil:'',
                gearOil:'',
                diffOil:'',
                brakeFluid:'',
                radiator:'',
                shockOil:'',
                steering:'',
                lube:'',
                coldPressure:'',
                oilFilter:'',
                fuelFilter:'',
                brakesFront:'',
                brakesRear:'',
                headLight:'',
                tailLight:'',
                brakeLight:'',
                description:'',
                errorMessage:'',
                successMsg:false,
                format:'yyyy-MM-dd',
            }
        },
        mounted() {
            axios.get('/vehicle-details/' + this.vehicleId)
                .then(response => {
                    this.vehicleName= response.data.vehicle.name,
                    this.chasis= response.data.vehicle.chasis,
                    this.vin= response.data.vehicle.vin,
                    this.rego= response.data.vehicle.rego,
                    this.regoType= response.data.vehicle.rego_type,
                    this.regoDue= response.data.vehicle.rego_due,
                    this.regoClub= response.data.vehicle.rego_club,
                    this.insCompany= response.data.vehicle.ins_company,
                    this.insPolicyNo= response.data.vehicle.ins_policy_no,
                    this.insDateDue= response.data.vehicle.ins_date_due,
                    this.engOil= response.data.vehicle.engine_oil,
                    this.gearOil= response.data.vehicle.gb_oil,
                    this.diffOil= response.data.vehicle.diff_oil,
                    this.brakeFluid= response.data.vehicle.brake_fluid,
                    this.radiator= response.data.vehicle.radiator,
                    this.shockOil= response.data.vehicle.shock_oil,
                    this.steering= response.data.vehicle.steering,
                    this.lube= response.data.vehicle.one_shot_lube,
                    this.coldPressure= response.data.vehicle.cold_tyre_pressure,
                    this.oilFilter= response.data.vehicle.oil_filter,
                    this.fuelFilter= response.data.vehicle.fuel_filter,
                    this.brakesFront= response.data.vehicle.front_brake,
                    this.brakesRear= response.data.vehicle.rear_brake,
                    this.headLight= response.data.vehicle.headlight,
                    this.tailLight= response.data.vehicle.taillight,
                    this.brakeLight= response.data.vehicle.brakelight,
                    this.description= response.data.vehicle.description
                });
        },
        methods:{
            editVehicle(){
                if(this.vehicleName===''){
                    this.errorMessage='Please enter vehicle name to submit';
                }else{
                    axios.put('/vehicle/'+this.vehicleId, {
                        vehicleName: this.vehicleName,
                        chasis: this.chasis,
                        vin: this.vin,
                        rego: this.rego,
                        regoType: this.regoType,
                        regoDue:this.regoDue,
                        regoClub:this.regoClub,
                        insCompany:this.insCompany,
                        insPolicyNo:this.insPolicyNo,
                        insDateDue:this.insDateDue,
                        engOil:this.engOil,
                        gearOil:this.gearOil,
                        diffOil:this.diffOil,
                        brakeFluid:this.brakeFluid,
                        radiator:this.radiator,
                        shockOil:this.shockOil,
                        steering:this.steering,
                        lube:this.lube,
                        oilFilter:this.oilFilter,
                        coldPressure:this.coldPressure,
                        fuelFilter:this.fuelFilter,
                        brakesRear:this.brakesRear,
                        brakesFront:this.brakesFront,
                        headLight:this.headLight,
                        tailLight:this.tailLight,
                        brakeLight:this.brakeLight,
                        description:this.description,
                    });
                    this.errorMessage='';
                    this.successMsg=true;
                }
            },
            deleteVehicle(){
                axios.delete('/vehicle/'+this.vehicleId);
                window.location.href = "/vehicle";
            }
        },
    }
</script>
