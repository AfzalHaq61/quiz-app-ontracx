<template>
  <div :class="{ errors: props.errors }" class="col-span-6 sm:col-span-3">
    <label class="block text-gray-700 text-[16px]"
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
          focus:ring-theme-color focus:border-theme-color
          block
          shadow-sm
          sm:text-sm
          font-medium
          bg-white
          text-[#3A3A3A]
          border-hidden
          rounded-[60px]
          w-full
          mt-1
          py-[15px]
          px-[20px]
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