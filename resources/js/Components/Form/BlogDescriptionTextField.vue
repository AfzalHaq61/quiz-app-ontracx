<template>
  <div
    :class="{ errors: props.errors }"
    class="col-span-6 sm:col-span-3 mb-[30px]"
  >
    <label class="block text-gray-700"
      ><slot />
      <input
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        :type="props.fieldtype"
        :name="props.name"
        :id="props.name"
        :placeholder="props.placeholder"
        :readonly="readonly"
        class="
          mt-1
          focus:ring-[#3550DC] focus:border-[#3550DC]
          block
          w-full
          shadow-sm
          sm:text-sm
          bg-gray-200
          text-[#3A3A3A]
          border-hidden
          rounded-md
          pb-[400px]
        "
      />
    </label>
    <div :v-if="props.errors" class="text-red-600 pt-1 text-xs" role="alert">
      {{ props.errors }}
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  errors: Object,
  name: String,
  placeholder: String,
  fieldtype: String,
  modelValue: String,
  readonly: {
    type: Boolean,
    default: false,
    required: false,
  },
});
const emits = defineEmits(["update:modelValue"]);
</script>