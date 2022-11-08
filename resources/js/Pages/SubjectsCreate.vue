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
                <form @submit.prevent="addPost" enctype="multipart/form-data">
                  <div class="mb-[30px]">
                    <input type="text" v-model="title" placeholder="Title" />
                  </div>

                  <div class="mb-[30px]">
                    <input type="file" @change="onChange" />
                  </div>

                  <div v-if="img">
                    <img v-bind:src="imgPreview" width="100" height="100" />
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
                    <button type="submit">Add Now</button>
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
</script>

<script>
export default {
  data() {
    return {
      name: "",
      img: "",
      imgPreview: null,
    };
  },

  methods: {
    setIsOpen(value) {
      isOpen.value = value;
    },

    onChange(e) {
      this.img = e.target.files[0];
      let reader = new FileReader();
      reader.addEventListener("load", function () {
        this.imgPreview = render.result;
      }.bind(this), false);

      if(this.img) {
        if ( /\.(jpe?g|png|gif)?/i.test(this.img.name)) {
          reader.readAsDataURL(this.log);
        }
      }
    },

    addPost(e) {
      this.$axios.get('/sanctum/csrf-cookie').then(response => {
        let existingObj = this;
        const config = {
          headers: {
            'content-type': 'multipart/form-data'
          }
        }

        const formdata = new FormData();
        formData.append('title', this.title);
        formData.append('img', this.img);

        this.$axios.post('/store', formData, config)
        .then(response => {
          existingObj.strError = "";
          existingObj.strSuccess = response.data.success;
        })
        .catch(function(error) {
          existingObj.strSuccess = "";
          existingObj.strError = error.response.data.messege;
        })
      })
    }
  },

  beforeRouteEnter(to, from, next) {
    if (!window.Laravel.isLoggedin) {
      window.location.href = "/";
    }
    next();
  },
};
</script>

