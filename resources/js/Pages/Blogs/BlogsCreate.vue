<template>
  <Head title="Subjects" />
  <div class="grid grid-cols-12 min-h-screen">
    <div class="col-span-2 bg-[#FFFFFF] shadow-r-md">
      <SideMenuBar :categories="categories"></SideMenuBar>
    </div>
    <div class="col-span-10 bg-gray-100 mt-[100px] px-[50px]">
      <div class="mb-[100px]">
        <div>
          <h1 class="text-[20px] font-semibold">PakStudy</h1>
          <h1 class="text-[10px] text-[#AFAFAF] font-semibold">Add Blog</h1>
        </div>
        <div class="bg-white rounded-[8px] mt-[10px] px-[20px] py-[40px]">
          <form @submit.prevent="submit" enctype="multipart/form-data">
            <div class="mb-5">
              <SubjectCreateTextField
                fieldtype="text"
                name="title"
                placeholder="Title"
                v-model="form.title"
                :errors="errors.title"
              >
                Title
              </SubjectCreateTextField>
            </div>
            <div class="mb-5">
              <SubjectCreateTextField
                fieldtype="text"
                name="reference"
                placeholder="Reference"
                v-model="form.reference"
                :errors="errors.reference"
              >
                Reference
              </SubjectCreateTextField>
            </div>
            <div class="mb-5">
              <label class="block text-gray-700 texy-[16px]" for="title"
                >Cover Image</label
              >
              <input
                class="
                  text-sm text-[#3A3A3A] text-[15px]
                  file:bg-gray-200
                  file:w-[350px]
                  file:py-[12px]
                  file:rounded-[8px]
                  file:border-0
                  file:text-[#3A3A3A]
                  hover:file:cursor-pointer
                  mt-2
                "
                type="file"
                name="image"
                id="image"
                @change="onFileChanged($event)"
                accept="image/*"
                :errors="errors.image"
              />
            </div>
            <div class="mb-5">
              <label class="block text-gray-700 mb-1" for="">Description</label>
              <ckeditor
                :editor="editor"
                v-model="form.description"
                :config="editorConfig"
              ></ckeditor>
            </div>
            <div>
              <FormButton>Add Blog</FormButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  categories: Array,
  subject: Number,
  errors: Object,
});

let form = reactive({
  title: "",
  reference: "",
  image: "",
  description: "",
});

function onFileChanged($event) {
  form.image = $event.target.files[0];
}

function submit() {
  Inertia.post(route("blogs.store", { subject: props.subject }), form, {
    forceFormData: true,
  });
}
</script>

<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
  name: "app",
  data() {
    return {
      editor: ClassicEditor,
      editorData: "<p>Content of the editor.</p>",
      editorConfig: {
        // The configuration of the editor.
      },
    };
  },
};
</script>