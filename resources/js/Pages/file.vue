<!-- Modal Content Code -->
<script setup>
    import { useForm } from '@inertiajs/inertia-vue3';
   
        const props = defineProps({
            categorie: {
                type: Object,
                default: () => ({}),
            },
        });
        const form = useForm({
            image: '',
            category_name: '',
            parent_category_id: '',  
        });

        const submit = () => {
            form.post(route('categories'));
        };
            // const form = useForm({
            //     image: null,
            //     category_name: null,
            //     parent_category_id: null,
            // })

            // function submit() {
            //     form.post('/categories')
            // }

            // return { form, submit }
        
   
</script>
<template>
    <div class="modal fade" tabindex="-1" id="category_modal">
        <div class="modal-dialog modal" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="submit" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="form-label" for="image">Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" @input="form.image = $event.target.files[0]" id="image" />
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <span v-if="form.errors.image" class="text-danger"><small>{{ form.errors.image }}</small></span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="category_name">Category Name</label>
                            <div class="form-control-wrap">
                                <input type="text" v-model="form.category_name" class="form-control" id="category_name" placeholder="" />
                            </div>
                            <span v-if="form.errors.category_name" class="text-danger"><small>{{ form.errors.category_name }}</small></span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Parent Category</label>
                            <div class="form-control-wrap">
                                <select class="form-select form-control" v-model="parent_category_id">
                                    <option value="0" selected>Select Category</option>
                                    <option v-for="category in categorie" :value="category.id">{{ category.name }}</option>
                                </select>
                            </div>
                            <span v-if="form.errors.parent_category_id" class="text-danger"><small>{{ form.errors.parent_category_id }}</small></span>
                        </div>
                        
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-outline-primary form-control" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<!-- <script>
    
//    export default {
//         props: {
//             errors : Object,
//         },
//         date(){
//             return {
//                 form: {
//                     image : null,
//                     category_name : null,
//                     parent_category_id : null,
//                 }
//             }    
//         },
//         methods : {
//             submit(){
//                 this.$inertia.post('/categories',this.form)
//             }
//         },
//    }
  </script> -->