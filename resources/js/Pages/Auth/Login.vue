<template>
  <Head title="Login" />
  <div class="grid grid-cols-3 min-h-screen bg-[#FCFCFC]">
    <div class="flex justify-center items-center col-span-2">
      <div class="w-full">
        <div class="flex justify-center text-[40px] mb-[80px]">
          <img src="/images/logo.png" alt="logo" />
        </div>
        <div class="px-[230px]">
          <div
            v-show="display"
            class="
              bg-red-100
              border border-red-400
              text-red-700
              px-4
              py-2
              mb-5
              rounded
              relative
            "
            role="alert"
          >
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline"
              >Something seriously bad happened.</span
            >
            <span class="absolute top-0 bottom-0 right-0 px-4 py-2">
              <svg
                @click="remove()"
                class="fill-current h-6 w-6 text-red-500"
                role="button"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <title>Close</title>
                <path
                  d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"
                />
              </svg>
            </span>
          </div>
          <form @submit.prevent="submit">
            <div class="mb-[20px]">
              <TextField
                fieldtype="email"
                name="email"
                placeholder="Enter your Email Address"
                v-model="form.email"
                :errors="errors.email"
              >
              </TextField>
            </div>
            <div class="mb-[5px]">
              <TextField
                fieldtype="password"
                name="password"
                placeholder="Password"
                v-model="form.password"
                :errors="errors.password"
              >
              </TextField>
            </div>
            <div
              class="
                flex
                justify-end
                text-[15px] text-theme-color
                font-semibold
                mb-[40px]
              "
            >
              <Link>Forgot password ?</Link>
            </div>
            <div class="flex justify-center">
              <div
                class="
                  grid
                  col-span-2
                  justify-center
                  rounded-[50px]
                  shadow-md
                  
                  text-white
                  px-[80px]
                  py-[20px]
                "
              >
                <button type="submit">Log In</button>
              </div>
            </div>
          </form>
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
        bg-theme-color
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
import { reactive, ref } from "vue";

const display = ref(true);

const props = defineProps({
  errors: Object,
});

let form = reactive({
  email: "",
  password: "",
});

function submit() {
  Inertia.post(route("login.store"), form, {
    forceFormData: true,
  });
}

function remove() {
  display.value = !display.value;
}
</script>