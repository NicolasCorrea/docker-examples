<div id="root">
    <div class="row">
        <div class="col-5 text-center">
            <form id="userForm">

                <div class="form-row">
                    <div class="col">
                        <div class="md-form">
                            <input type="text" id="nickname" name="nickname" class="form-control">
                            <label for="nickname">Nombre de Usuario</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="md-form">
                            <input type="text" id="firstname" name="firstname" class="form-control">
                            <label for="firstname">Primer Nombre</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form">
                            <input type="text" id="lastname" name="lastname" class="form-control">
                            <label for="lastname">Apellido</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                            type="button" @click="addUser()" v-if="state == 0">Añadir</button>
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                            type="button" @click="editUser()" v-if="state != 0">Editar</button>
                            
                    </div>
                </div>
            </form>

            <!-- Sign in button -->
            <table-base :rows="usuarios" :headers="[{text:'#', type: 'indice'},{text: 'Username', type: 'valor', value: 'nickname'}, {text: 'Nombre Completo', type: 'computado', value: { values: ['firstname', 'lastname'], separator: ' '}}, {text: 'Acciones', type: 'html', value: '<button type=`button` @click=`selectForEdit(index)` class=`btn btn-outline-warning btn-rounded waves-effect btn-sm`>Editar</button><button type=`button` @click=`deleteUser(index)`class=`btn btn-outline-danger btn-rounded waves-effect btn-sm`>Eliminar</button>'}]"></table-base>
        </div>
        <div class="col-7">
            <table class="table table-striped table-hover">
                <thead class="grey lighten-2">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(usuario, index) in usuarios">
                        <th scope="row">{{index+1}}</th>
                        <td>{{usuario.nickname}}</td>
                        <td>{{usuario.firstname}} {{usuario.lastname}}</td>
                        <td>
                            <button type="button" @click="selectForEdit(index)"
                                class="btn btn-outline-warning btn-rounded waves-effect btn-sm">Editar</button>
                            <button type="button" @click="deleteUser(index)"
                                class="btn btn-outline-danger btn-rounded waves-effect btn-sm">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



</div>
<script src="<? URL; ?>js/vue/components/BaseTable.js"></script>
<script type="text/javascript">

var id = 0;

var app = new Vue({
    el: "#root",
    data: {
        usuarios: [],
        state: 0,
        currentUser: null
    },
    mounted: function(){
        var localUsuarios = JSON.parse(localStorage.getItem("usuarios"))
        if(localUsuarios){
            this.usuarios = localUsuarios;
        }
    },
    methods: {
        addUser: function() {
            var form = document.getElementById("userForm");
            var formData = new FormData(form);
            var arrayData = Array.from(formData.entries());
            var usuario = {};
            for (let i = 0; i < arrayData.length; i++) {
                if (!usuario[arrayData[i][0]]) {
                    usuario[arrayData[i][0]] = arrayData[i][1]
                }
            }
            this.usuarios.push(usuario);
            form.reset();
            localStorage.setItem("usuarios", JSON.stringify(this.usuarios));
        },
        deleteUser: function(index) {
            console.log(index);
            this.usuarios.splice(index, 1);
            localStorage.setItem("usuarios", JSON.stringify(this.usuarios));
        },
        selectForEdit: function(index){
            document.getElementById("nickname").value = this.usuarios[index].nickname;
            document.getElementById("firstname").value = this.usuarios[index].firstname;
            document.getElementById("lastname").value = this.usuarios[index].lastname;
            this.state = 1;
            this.currentUser = index;
        },
        editUser: function() {
            var form = document.getElementById("userForm");
            var formData = new FormData(form);
            var arrayData = Array.from(formData.entries());
            var usuario = {};
            for (let i = 0; i < arrayData.length; i++) {
                if (!usuario[arrayData[i][0]]) {
                    usuario[arrayData[i][0]] = arrayData[i][1]
                }
            }
            this.usuarios[this.currentUser] = usuario;
            form.reset();
            this.state = 0;
            this.currentUser = null;
            localStorage.setItem("usuarios", JSON.stringify(this.usuarios));
        }
    }
})
</script>