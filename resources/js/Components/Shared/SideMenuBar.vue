<template>
  <div>
    <div class="flex justify-center mt-[30px] mb-[50px]">
      <img class="w-[100px] h-[100px]" src="/images/Logo.png" alt="logo" />
    </div>
    <div class="">
      <div class="ml-[20px] mb-[40px]">
        <Accordion
          ><template v-slot:title>
            <span class="text-[20px] text-theme-color font-semibold"
              >Categories</span
            >
          </template>
          <template v-slot:content>
            <div
              v-for="category in categories"
              :key="category.id"
              class="ml-[25px] mt-[4px]"
            >
              <h1
                @click="selectCategory(category.id)"
                class="
                  text-[#AFAFAF] text-[18px]
                  cursor-pointer
                  font-semibold
                  mb-[8px]
                "
              >
                {{ category.title }}
              </h1>
            </div>
          </template></Accordion
        >
      </div>
      <div class="ml-[45px] mb-[40px]">
        <span class="text-[20px] text-[#AFAFAF] font-semibold">Users</span>
      </div>
      <div class="ml-[20px] mb-[40px]">
        <Accordion
          ><template v-slot:title>
            <span class="text-[20px] text-[#AFAFAF] font-semibold"
              >Weekly Quiz</span
            >
          </template>
          <template v-slot:content> </template
        ></Accordion>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
  categories: {
    type: Object,
    default: false,
    required: false,
  },
});

function selectCategory(category_id) {
  Inertia.get(route("subjects.index", { category_id: category_id }));
}
</script>