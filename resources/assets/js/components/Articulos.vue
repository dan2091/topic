<template>
    <div>
        <form @submit.prevent="addArticulo" class="nb-3">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Titulo"
                v-model="articulo.titulo">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Cuerpo"
                v-model="articulo.cuerpo"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Guardar
            </button>
        </form>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]"
                    @click="fetchArticulos(pagination.prev_page_url)"
                    class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>
                <!--<li v-for="(articulo, index) in articulos"  
                    @click="fetchArticulos(pagination.prev_page_url)"
                    class="page-item"><a class="page-link" href="#">{{index+1}}</a></li>-->
                <li v-bind:class="[{disabled: !pagination.next_page_url}]"
                    @click="fetchArticulos(pagination.next_page_url)"
                    class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        <div v-for="articulo in articulos" v-bind:key="articulo.id" class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                </div>
                <h4 class="panel-title">{{articulo.titulo}}</h4>
            </div>
            <div class="panel-body">
                {{articulo.cuerpo}}
                <hr>
                <button title='Editar art&iacute;culo' class='btn btn-warning' @click="editArticulo(articulo)"><i class='fa fa-pencil-alt'></i></button>
                <button title='Eliminar art&iacute;culo' class='btn btn-danger' data-click="swal-danger" @click="deleteArticulo(articulo.id)"><i class='fa fa-trash'></i></button>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                articulos: [],
                articulo: {
                    id: '',
                    titulo: '',
                    cuerpo: ''
                },
                articulo_id: '',
                pagination: {},
                edit: false
            }
        },
        created(){
            this.fetchArticulos();
        },
        methods:{
            fetchArticulos(page_url){
                let vn = this;
                page_url = page_url || '/api/articulos'
                fetch( page_url )
                    .then(res => res.json() )
                    .then(res => {
                        console.log(res.data);
                        this.articulos = res.data;
                        vn.makePagination(res.meta, res.links);
                    })
                    .catch(err => console.log( err ) )
            },
            makePagination(meta, links){
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                }

                this.pagination = pagination;
            },
            deleteArticulo(id){
                if(confirm('Estas seguro?')){
                    fetch(`api/articulo/${id}`,{
                        method:'delete'
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert("Articulo removido");
                        this.fetchArticulos();
                    })
                    .catch( err => console.log() )
                }
            },
            addArticulo(id){
                if(this.edit === false){
                    //add
                    fetch('api/articulo', {
                        method: 'post',
                        body: JSON.stringify(this.articulo),
                        headers: {
                            'content-type' : 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.articulo.titulo = '';
                        this.articulo.cuerpo = '';
                        alert('Articulo añadido');
                        this.fetchArticulos();
                    })
                    .catch( err => console.log() )
                }
                else
                {
                    //update
                    fetch('api/articulo', {
                        method: 'put',
                        body: JSON.stringify(this.articulo),
                        headers: {
                            'content-type' : 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.articulo.titulo = '';
                        this.articulo.cuerpo = '';
                        alert('Articulo actualizado');
                        this.fetchArticulos();
                    })
                    .catch( err => console.log() )
                }
            },
            editArticulo(articulo){
                this.edit = true;
                this.articulo.id = articulo.id;
                this.articulo_id = articulo.id;
                this.articulo.titulo = articulo.titulo;
                this.articulo.cuerpo = articulo.cuerpo;
            }
        }
    }
</script> 