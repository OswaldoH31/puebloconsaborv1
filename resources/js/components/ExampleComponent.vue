


<template>
    <div class="cont-pie">
        <div class="sec-pie">
            <div>
                <div class="card">
                    <div class="card-header">Todo</div>
                    
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" placeholder="Todo.." class="form-control"
                            aria-label="todo" aria-describedby="todo">
                            
                        </div>

                        {{ usuarios }}
                        <table class="table table-bordered mt-4">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <!-- <tr v-for="(todo,index) in todos" :key="index">
                                <td>{{index}}</td>
                                <td>{{todo.name}}</td>
                                <td>delete</td>
                            </tr> -->
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
                usuarios:[],
                api:'http://localhost:8000/api/Listadolocales'
            } 
        },
        mounted() {
            this.axios.get(this.api).then(res=>{
                console.log(res);
            });
        }
    }
</script>
