


<template>
    <div class="cont-pie">
        <div class="sec-pie">
            <div>
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4 class="ti-pie">Lista de Locales</h4>
                        </center>
                    </div>
                    
                    <div class="card-body">

                        <table class="table table-bordered mt-4">
                        <thead>
                            <th>Ids</th>
                            <th>Local</th>
                            <th>Descripcion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Distintivo</th>
                            <th>Sitio web</th>
                            <th>Estado</th>
                        </thead>
                        <tbody>
                            <tr v-for="local in locales" :key="local.id">
                                <td>{{local.id}}</td>
                                <td>{{local.nombre}}</td>
                                <td>{{local.descripcion}}</td>
                                <td>{{local.Telefono}}</td>
                                <td>{{local.email}}</td>
                                <td>{{local.Distintivo}}</td>
                                <td>{{local.sitioweb}}</td>
                                <td>{{local.estado}}</td>
                            </tr>
                        </tbody>
                        
                    </table>
                    </div>

                    
                </div>
            </div>
            <div class="espa-l"></div>
        </div>
        
    </div>
</template>

<script>
    export default {
        data(){
            return{
                locales: null,
                api:'https://pueblohuejutla.puebloconsaboruthh.com/Listadolocales'
            } 
        },
        mounted() {
            this.axios.get(this.api).then(res=>{
                this.locales = res.data;
            });
        }
    }

</script>