<template>
  <Head title="Login" />
  <!-- Notificaions -->
  <Notifications></Notifications>
  <div class="grid grid-cols-3 min-h-screen bg-[#FCFCFC]">
    <div class="flex justify-center items-center col-span-2">
      <div class="w-full">
        <div class="flex justify-center text-[40px] mb-[60px]">
          <img class="w-[100px] h-[100px]" src="/images/Logo.png" alt="logo" />
        </div>
        <div class="px-[230px]">
          <form @submit.prevent="submit">
            <div class="mb-[20px]">
              <LoginTextField
                fieldtype="email"
                name="email"
                placeholder="Enter your Email Address"
                v-model="form.email"
                :errors="errors.email"
              >
              </LoginTextField>
            </div>
            <div class="mb-[5px]">
              <LoginTextField
                fieldtype="password"
                name="password"
                placeholder="Password"
                v-model="form.password"
                :errors="errors.password"
              >
              </LoginTextField>
            </div>
            <div
              class="
                flex
                justify-end
                text-[15px] text-theme-color
                font-semibold
                mb-[30px]
              "
            >
              <Link>Forgot password ?</Link>
            </div>
            <LoginFormButton>Log In</LoginFormButton>
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