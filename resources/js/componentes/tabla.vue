<template>
    <table>
        <tr>
           <th v-for="campo in campos">
               <button class="rounded text-lg" @click="ordena(campo)">{{campo}}</button></th>
        </tr>
        <tr v-for="fila in filas">
            <td v-for="valor in fila">{{valor}}</td>
            <td><button @click='borra(fila.id)'>Borrar</button></td>
            <td><button @click='edita(fila.id)'>Editar</button></td>
        </tr>
    </table>
</template>
<script>
//import {destroyTree} from "alpinejs/src/lifecycle";
import axios from "axios";
export default {
    name: "tabla",
    props:["filas_serializado","campos_serializado","nombre"], //atributos que se reciben del html(vista)
    data(){ //valores de los atributos, para acceder a ellos se usa this.
        return{
            filas:[],
            campos:[],
            nombre:"",
        }//fin de return
    },//fin de data
    mounted(){
        this.filas =JSON.parse(this.filas_serializado);
        this.campos =JSON.parse(this.campos_serializado);
    },//fin de montado
    methods:{
        ordena: function(campo){
            this.filas =this.filas.sort((a,b)=>{
                if(a[campo]>b[campo]){
                    return 1;
                }//fin del if
                else{
                    return -1;}//fin del else
            });
        },//fin de la función
        edita: function(campo){
            var url =window.location.href;
            window.location.href =url +"/" +campo +"/edit";
        },//fin de la función
        borra: function(id){
            var url =window.location.href;
            url =url +"/" +id;
            var self =this;

            axios.delete(url)
                .then((response)=> {
                    //var datos =response.data;
                    self.filas =response.data.alumnos;
                })
                .catch((error)=>alert("ERROR EN LA SOLICITUD CLIENTE" +error));
        },//fin de la función
    },//fin de methods
}//fin de default
</script>

<style scoped>

</style>
