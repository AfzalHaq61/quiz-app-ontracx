<template>
  <div class="flex justify-between">
    <div class="hidden md:inline">
      <input
        type="search"
        placeholder="Search"
        class="
          text-[#858585] text-[14px]
          focus:ring-[#24C6C9] focus:border-[#24C6C9]
          block
          shadow-sm
          sm:text-sm
          border-gray-300
          rounded-md
          w-[400px]
          pl-[24px]
        "
      />
    </div>
    <div class="flex">
      <div class="mr-[10px]">
        <button
          class="
            bg-white
            text-black
            rounded-[5px]
            text-[15px] text-[#AFAFAF]
            pl-[10px]
            pr-[30px]
            py-[8px]
          "
        >
          Drafts
        </button>
        <div
          class="
            flex
            justify-end
            relative
            bottom-[27px]
            right-[10px]
            text-[#AFAFAF]
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-4 h-4"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 8.25l-7.5 7.5-7.5-7.5"
            />
          </svg>
        </div>
      </div>
      <div class="mr-[10px]">
        <button
          class="
            bg-theme-color 
            text-white
            rounded-[5px]
            text-[15px]
            px-[10px]
            py-[8px]
          "
        >
          <Link :href="route('blogs.create', { subject: subject })">Add New</Link>
        </button>
      </div>
      <div>
        <button
          class="
            bg-[#E31D1D]
            text-white
            rounded-[5px]
            text-[15px]
            px-[10px]
            py-[8px]
          "
        >
          Deleted Selected
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import route from "ziggy-js";

const props = defineProps({
  subject: Number,
});
</script>