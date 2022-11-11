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
          w-full
          shadow-sm
          sm:text-sm
          border-gray-300
          rounded-md
          w-[400px]
          pl-[24px]
        "
      />
    </div>
    <div
      class="
        bg-[#265AE8]
        text-white
        rounded-[5px]
        text-[15px]
        px-[30px]
        py-[8px]
      "
    >
      <button>
        <Link :href="route('blogs.create', { subject: subject })">Add New</Link>
      </button>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  subject: {
    type: Number,
    default: false,
    required: false,
  },
});
</script>