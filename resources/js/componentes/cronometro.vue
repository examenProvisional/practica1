<template>
    <h1>Cronómetro {{titulo}}</h1>
    {{minutos}}:{{segundos}}:{{decimas}}
    <button @click="arranca_para">{{start_stop}}</button>
    <button v-on:click="realizarReset">Reset</button>
</template>

<script>
export default {
    name: "cronometro",
    //props:{
    //name:titulo,
    //require:true,
    //default:"nada"
    //}
    props:["titulo"],
    data(){
        return{
            minutos:0,
            segundos:0,
            decimas:0,
            start_stop:"Start",
            estado:false,
        }//fin de return
    },//fin de data,
    //inicializacion de las variables
    mounted() {
        setInterval(fn=>{
            if(this.estado ==true){
                this.decimas++;
                if(this.decimas ==10){
                    this.segundos++;
                    this.decimas =0;
                    if(this.segundos){
                        this.minutos++;
                        this.segundos =0;
                        if(this.minutos ==5){
                            this.minutos =0;
                        }//fin del if
                    }//fin del if
                }//fin del if
            }//fin del if
        },100);
    },//fin de mounted
    methods:{
        arranca_para:function(){
            if(this.estado ==false){
                this.estado =true;
                this.start_stop ="Stop"
            }//fin del if
            else{
                this.estado =false;
                this.start_stop ="Start"
            }//fin del else
        },//fin de la función
        realizarReset:function(){
            this.decimas =0;
            this.segundos =0;
            this.minutos =0;
            this.estado =false;
            this.start_stop ="Start";
        }//fin de la función
    }//fin de methods
}//fin de default
</script>

<style scoped>

</style>
