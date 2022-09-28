<template>
  <Head title="Login" />
  <div class="grid grid-cols-3 min-h-screen bg-[#FCFCFC]">
    <div class="flex justify-center items-center col-span-2">
      <div class="w-full">
        <div class="flex justify-center">
          <h1 class="text-[#3550DC] text-[40px] font-Montserrat mb-[80px]">
            App Name
          </h1>
        </div>
        <div class="px-[230px]">
          <div class="mb-[20px]">
            <TextField
              fieldtype="email"
              name="email"
              placeholder="Enter your email address"
            >
            </TextField>
          </div>
          <div class="mb-[5px]">
            <TextField
              fieldtype="password"
              name="password"
              placeholder="Password"
            >
            </TextField>
          </div>
          <div
            class="
              flex
              justify-end
              text-[15px] text-[#3550DC]
              font-semibold
              mb-[40px]
            "
          >
            <h1>Forgot password ?</h1>
          </div>
          <div class="flex justify-center">
            <button
              class="
                rounded-[50px]
                shadow-md
                bg-[#265AE8]
                text-white
                px-[80px]
                py-[20px]
              "
            >
              Log In
            </button>
          </div>
        </div>
      </div>
    </div>
    <div
      class="
        flex
        justify-center
        items-center
        col-span-1
        text-white
        rounded-l-[50px]
        bg-gradient-to-r
        from-[#3550DC]
        to-[#3DB9FE]
      "
    >
      <div>
        <div>
          <div class="mb-[15px]">
            <h1 class="text-[25px] font-semibold">About This Site</h1>
          </div>
          <div>
            <p class="text-[15px] w-[300px]">
              Viverra semper iaculis integer nisi diam et blandit. Eget
              dignissim enim nisi scelerisque eu sed eget. Facilisis nullam
              commodo.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  errors: Object,
});

let form = reactive({
  first_name: "",
  last_name: "",
  country: "",
  city: "",
  contact_number: "",
  email: "",
  password: "",
  confirm_password: "",
});

function submit() {
  Inertia.post(route("regester.store"), form, {
    forceFormData: true,
  });
}
</script>