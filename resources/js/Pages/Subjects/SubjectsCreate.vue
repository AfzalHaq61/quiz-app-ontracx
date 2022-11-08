<template>
  <Head title="Signin" />
  <TransitionRoot :show="isOpen" as="template">
    <Dialog :initialFocus="completeButtonRef" :open="isOpen" @close="setIsOpen">
      <div class="fixed inset-0 bg-black/30" aria-hidden="true" />
      <div class="fixed inset-0 overflow-y-auto p-4">
        <div class="flex min-h-full items-center justify-center">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel
              :open="isOpen"
              @close="setIsOpen"
              class="
                w-[500px]
                transform
                overflow-hidden
                rounded-[8px]
                bg-white
                p-6
                text-left
                align-middle
                shadow-xl
                transition-all
              "
            >
              <div class="flex justify-end">
                <button>
                  <Link href="/subjects"
                    ><XIcon @click="setIsOpen(false)" class="h-[20px] w-[20px]"
                  /></Link>
                </button>
              </div>
              <DialogTitle as="h3">
                <h1 class="text-[20px] font-semibold">Add Subject</h1>
              </DialogTitle>
              <div class="mt-2">
                <form @submit.prevent="submit" enctype="multipart/form-data">
                  <div class="mb-5">
                    <SubjectCreateTextField
                      fieldtype="text"
                      name="title"
                      placeholder="Title"
                      v-model="form.title"
                    >
                      Title
                    </SubjectCreateTextField>
                  </div>

                  <div class="mb-5">
                    <SubjectCreateTextField
                      fieldtype="text"
                      name="color_code"
                      placeholder="Color Code"
                      v-model="form.color_code"
                    >
                      Color Code
                    </SubjectCreateTextField>
                  </div>

                  <div class="mb-16">
                    <label class="block text-gray-700 texy-[16px]" for="title"
                      >Avator</label
                    >
                    <input
                      class="
                        text-sm text-[#3A3A3A] text-[15px]
                        file:bg-gray-200
                        file:w-[350px]
                        file:py-[12px]
                        file:rounded-[8px]
                        file:border-0
                        file:text-[#3A3A3A]
                        hover:file:cursor-pointer
                        mt-2
                      "
                      type="file"
                      name="image"
                      id="image"
                      @change="onFileChanged($event)"
                      accept="image/*"
                    />
                  </div>

                  <div
                    class="
                      grid
                      col-span-2
                      justify-center
                      rounded-[6px]
                      shadow-md
                      bg-theme-color
                      text-white
                      py-4
                    "
                  >
                    <button type="submit" value="Submit">Add Now</button>
                  </div>
                </form>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>
  
  <script setup>
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive, ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogTitle,
  DialogDescription,
} from "@headlessui/vue";

const isOpen = ref(true);

let form = reactive({
  title: "",
  color_code: "",
  image: "",
});

function onFileChanged($event) {
  form.image = $event.target.files[0];
}

function submit() {
  Inertia.post(route("subjects.store"), form, {
    forceFormData: true,
  });
}
</script>
  