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
                <form>
                  <div class="mb-[30px]">
                    <SubjectCreateTextField
                      fieldtype="text"
                      name="title"
                      placeholder="Title"
                    >
                      Title
                    </SubjectCreateTextField>
                  </div>

                  <div class="mb-[60px]">
                    <div class="relative top-[33px] left-[15px] text-[#AFAFAF]">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5"
                        />
                      </svg>
                    </div>
                    <div>
                      <SubjectCreateTextField
                        fieldtype="text"
                        name="avatar"
                        placeholder="Avatar"
                      >
                      </SubjectCreateTextField>
                    </div>
                  </div>

                  <div
                    class="
                      flex
                      justify-center
                      bg-[#265AE8]
                      text-white
                      rounded-lg
                      py-2
                      my-5
                    "
                  >
                    <button><Link href="/subjects">Add Now</Link></button>
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
import { ref } from "vue";
import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogTitle,
  DialogDescription,
} from "@headlessui/vue";

const isOpen = ref(true);

function setIsOpen(value) {
  isOpen.value = value;
}
</script>