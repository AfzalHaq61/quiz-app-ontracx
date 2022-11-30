<template>
  <div
    v-if="$page.props.flash.success || $page.props.flash.error"
    v-show="display"
  >
    <div
      v-if="$page.props.flash.success"
      class="
        absolute
        flex
        bg-green-100
        text-sm
        font-medium
        text-green-800
        rounded-md
        shadow-md
        p-4
        ml-3
        mt-3
      "
    >
      <div class="flex-shrink-0 pr-3">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="w-5 h-5"
        >
          <path
            fill-rule="evenodd"
            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div role="alert">
        {{ $page.props.flash.success }}
      </div>
      <div class="ml-auto pl-3">
        <div class="-mx-1.5 -my-1.5">
          <button
            @click="remove()"
            type="button"
            class="
              inline-flex
              bg-green-50
              rounded-md
              p-1.5
              text-green-500
              hover:bg-green-100
              focus:outline-none
              focus:ring-2
              focus:ring-offset-2
              focus:ring-offset-green-50
              focus:ring-green-600
            "
          >
            <span class="sr-only">Dismiss</span>
            <XIcon class="h-5 w-5" aria-hidden="true" />
          </button>
        </div>
      </div>
    </div>
    <div
      v-if="$page.props.flash.error"
      class="
        absolute
        flex
        bg-red-100
        text-sm
        font-medium
        text-red-800
        rounded-md
        shadow-md
        p-4
        ml-3
        mt-3
      "
    >
      <div class="flex-shrink-0 pr-3">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="w-5 h-5"
        >
          <path
            fill-rule="evenodd"
            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
            clip-rule="evenodd"
          />
        </svg>
      </div>

      <div role="alert">
        {{ $page.props.flash.error }}
      </div>

      <div class="ml-auto pl-3">
        <div class="-mx-1.5 -my-1.5">
          <button
            @click="remove()"
            type="button"
            class="
              inline-flex
              bg-red-50
              rounded-md
              p-1.5
              text-red-500
              hover:bg-red-100
              focus:outline-none
              focus:ring-2
              focus:ring-offset-2
              focus:ring-offset-red-50
              focus:ring-red-600
            "
          >
            <span class="sr-only">Dismiss</span>
            <XIcon class="h-5 w-5" aria-hidden="true" />
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
const display = ref(true);

function remove() {
  display.value = !display.value;
}
</script>