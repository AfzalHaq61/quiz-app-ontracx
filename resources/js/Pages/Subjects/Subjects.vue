<template>
  <Head title="Subjects" />
  <div class="grid grid-cols-12 min-h-screen">
    <div class="col-span-2 bg-[#FFFFFF] shadow-r-md">
      <SideMenuBar :categories="categories"> </SideMenuBar>
    </div>
    <div class="col-span-10 bg-gray-100 pt-[50px] pl-[50px] pr-[100px]">
      <div>
        <Heading />
        <div class="my-[45px]">
          <div class="mb-[20px]">
            <h1 class="text-[20px] font-semibold">Subjects</h1>
          </div>
          <div class="grid grid-cols-3 gap-[50px]">
            <div v-for="subject in subjects" :key="subject.id">
              <div
                class="
                  grid grid-cols-2
                  bg-[#FF8A80]
                  rounded-[10px]
                  text-white
                  p-[24px]
                  h-[170px]
                "
              >
                <div>
                  <div class="mb-[80px]">
                    <Link
                      :href="
                        route('material.index', {
                          subject: subject.id,
                        })
                      "
                    >
                      <h1 class="text-[24px] font-semibold">
                        {{ subject.title }}
                      </h1>
                    </Link>
                  </div>
                  <div class="flex">
                    <div class="mr-[10px]">
                      <Link
                        :href="
                          route('subjects.edit', {
                            subject: subject.id,
                          })
                        "
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="w-6 h-6"
                        >
                          <path
                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z"
                          />
                          <path
                            d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z"
                          />
                        </svg>
                      </Link>
                    </div>

                    <div>
                      <Link
                        :href="
                          route('subjects.delete', {
                            subject: subject.id,
                          })
                        "
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="w-6 h-6"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </Link>
                    </div>
                  </div>
                </div>
                <div class="flex items-end justify-end">
                  <img class="" :src="subject.icon" alt="" />
                </div>
              </div>
            </div>
            <div
              class="
                flex
                justify-center
                items-center
                bg-[#EBEBEB]
                rounded-[10px]
                h-[170px]
              "
            >
              <h1 class="text-[24px] text-[#AFAFAF]">
                <Link :href="route('subjects.create')">Add Subject</Link>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script setup>
const props = defineProps({
  categories: Array,
  subjects: Array,
});
</script>