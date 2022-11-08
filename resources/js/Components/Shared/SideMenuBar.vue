<template>
  <div>
    <div class="flex justify-center">
      <h1 class="text-[#3550DC] text-[30px] font-semibold mt-[50px] mb-[100px]">
        Quiz App
      </h1>
    </div>
    <div class="">
      <div class="mb-[40px]">
        <div class="flex mb-[8px] ml-[20px]">
          <div class="flex items-center mr-[5px]">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-5 h-5"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M19.5 8.25l-7.5 7.5-7.5-7.5"
              />
            </svg>
          </div>
          <div>
            <h1 class="text-[#3550DC] text-[20px] font-semibold">Categories</h1>
          </div>
        </div>
        <div
          v-for="category in categories"
          :key="category.id"
          class="ml-[45px]"
        >
          <h1 class="text-[#AFAFAF] text-[18px] font-semibold mb-[8px]">
            {{ category.title }}
          </h1>
        </div>
      </div>
      <div class="mb-[40px] ml-[45px]">
        <div>
          <h1 class="text-[20px] text-[#AFAFAF] font-semibold">Users</h1>
        </div>
        <div></div>
      </div>
      <div class="mb-[40px] ml-[45px]">
        <div>
          <h1 class="text-[20px] text-[#AFAFAF] font-semibold">Monthly Quiz</h1>
        </div>
        <div></div>
      </div>
      <div class="ml-[45px]">
        <div>
          <h1 class="text-[20px] text-[#AFAFAF] font-semibold">Weekly Quiz</h1>
        </div>
        <div></div>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  categories: {
    type: Object,
    default: false,
    required: false,
  },
});
</script>