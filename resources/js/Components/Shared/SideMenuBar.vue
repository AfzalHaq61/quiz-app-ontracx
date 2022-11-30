<template>
  <div>
    <div class="flex justify-center mt-[30px] mb-[50px]">
      <img class="w-[100px] h-[100px]" src="/images/logo.png" alt="logo" />
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
      <div class="ml-[20px] mb-[40px]">
        <Accordion
          ><template v-slot:title>
            <span class="text-[20px] text-[#AFAFAF] font-semibold">Users</span>
          </template>
          <template v-slot:content>
            <div class="ml-[25px] mt-[4px]">
              <h1
                class="
                  text-[#AFAFAF] text-[18px]
                  cursor-pointer
                  font-semibold
                  mb-[8px]
                "
              >
                NTS
              </h1>
              <h1
                class="
                  text-[#AFAFAF] text-[18px]
                  cursor-pointer
                  font-semibold
                  mb-[8px]
                "
              >
                Eata
              </h1>
              <h1
                class="
                  text-[#AFAFAF] text-[18px]
                  cursor-pointer
                  font-semibold
                  mb-[8px]
                "
              >
                Mdcat
              </h1>
            </div>
          </template></Accordion
        >
      </div>
      <div class="ml-[20px] mb-[40px]">
        <Accordion
          ><template v-slot:title>
            <span class="text-[20px] text-[#AFAFAF] font-semibold"
              >Weekly Quiz</span
            >
          </template>
          <template v-slot:content>
            <div class="ml-[25px] mt-[4px]">
              <h1
                class="
                  text-[#AFAFAF] text-[18px]
                  cursor-pointer
                  font-semibold
                  mb-[8px]
                "
              >
                NTS
              </h1>
              <h1
                class="
                  text-[#AFAFAF] text-[18px]
                  cursor-pointer
                  font-semibold
                  mb-[8px]
                "
              >
                Eata
              </h1>
              <h1
                class="
                  text-[#AFAFAF] text-[18px]
                  cursor-pointer
                  font-semibold
                  mb-[8px]
                "
              >
                Mdcat
              </h1>
            </div>
          </template></Accordion
        >
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