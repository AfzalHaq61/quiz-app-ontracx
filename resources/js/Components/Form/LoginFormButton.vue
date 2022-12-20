<template>
  <div class="flex justify-center">
    <button
      class="
        grid
        col-span-2
        justify-center
        rounded-[50px]
        shadow-md
        bg-theme-color
        text-white
        px-[60px]
        py-[12px]
      "
      type="submit"
    >
      <slot />
    </button>
  </div>
</template>