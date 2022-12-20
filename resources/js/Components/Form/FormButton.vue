<template>
  <div class="flex justify-center">
    <button
      class="
        grid
        col-span-2
        justify-center
        rounded-[6px]
        shadow-md
        bg-theme-color
        text-white
        py-4
        w-full
      "
      type="submit"
    >
      <slot />
    </button>
  </div>
</template>