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
          <form @submit.prevent="submit">
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
              <BlogDescriptionTextField
                fieldtype="text"
                name="description"
                placeholder="Description"
                v-model="form.description"
                :errors="errors.description"
              >
                Description
              </BlogDescriptionTextField>
            </div>
            <div
              class="
                flex
                justify-center
                w-full
                rounded-[6px]
                text-white
                bg-theme-color
                p-2
              "
            >
              <button type="submit">Add Blog</button>
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
  blog: Array,
  errors: Object,
});

let form = reactive({
  subject_id: props.blog.subject_id,
  title: props.blog.title,
  description: props.blog.description,
  status: props.blog.status,
  _method: "put",
});

function submit() {
  Inertia.post(route("blogs.update", { blog: props.blog.id }), form, {
    forceFormData: true,
  });
}
</script>