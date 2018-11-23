<template>
    <div class="container">
        <div class="form-group">
            <input v-model="newProjectTitle" placeholder="title" class="form-control" type="text">
            <span>{{characterCount}}</span>
            <input v-model="newProjectDescription" placeholder="description" class="form-control" type="text">
            <button v-on:click="addProject()">Toevoegen</button>
        </div>
        <div v-for="project in projects" class="row">
            <div class="col-12">
                <h2>{{project.title}}</h2>
                <p>{{projects.description}}</p>
                <a :href="'projects/'+projects.id">Bekijk project!</a>
                <button v-on:click="deleteProject(project.id)">Verwijder</button>
                <hr>
            </div>
        </div>
     </div>
</template>

<script>
    import axios from 'axios';

    export default {
        mounted() {
            console.log('Component mounted.');
            this.getProjects();
        },
        data() {
            return {
                projects: [],
                newProjectTitle: '',
                newProjectDescription: ''
            }
        },
        methods: {
            getProjects() {
                axios.get('/projects/all').then(response => {
                   this.projects = response.data;
                   console.log(this.projects)
                });
            },
            addProject() {
                axios.post('/projects/create', {
                    'title': this.newProjectTitle,
                    'description' : this.newProjectDescription
                }).then(response => {
                    this.projects.unshift({
                        'id' : response.data,
                        'title' : this.newProjectTitle,
                        'description' : this.newProjectDescription,
                    });
                });
            },
            deleteProject(id) {
                axios.delete('/projects/delete', {
                    data: {
                        id: id
                    }
                }).then(reponse => {
                    let i = this.projects.map(product => product.id).indexOf(id); // find index of your object
                    this.projects.splice(i, 1);
                })
            }
        },
        computed: {
            characterCount() {
                return this.newProjectTitle.length;
            }
        }
    }
</script>

<style scoped lang="scss">
 .container {
     .row{
         /*background-color: green;*/
     }
 }
</style>
