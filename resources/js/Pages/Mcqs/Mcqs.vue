  <template>
  <Head title="Subjects" />
  <div class="grid grid-cols-12 min-h-screen">
    <div class="col-span-2 bg-[#FFFFFF] shadow-r-md">
      <SideMenuBar :categories="categories"></SideMenuBar>
    </div>
    <div class="col-span-10 bg-gray-100 pt-[50px] pl-[50px] pr-[50px]">
      <div>
        <HeadingAdminPanel :subject="subject"></HeadingAdminPanel>
        <div class="my-[45px]">
          <div class="flex justify-between mb-[20px]">
            <div class="flex mr-[10px]">
              <div
                class="
                  flex
                  items-center
                  justify-center
                  bg-white
                  rounded-full
                  px-[7px]
                  mr-[20px]
                "
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-4 h-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"
                  />
                </svg>
              </div>
              <div>
                <h1 class="text-[20px] font-semibold">Boilogy Mcqs</h1>
              </div>
            </div>
            <div class="flex items-end">
              <h1 class="text-[#AFAFAF] text-[12px] font-semibold"></h1>
            </div>
          </div>
          <div class="grid gap-[10px]">
            <div class="flex p-[10px]">
              <div class="flex items-center w-[40px]">
                <div class="border-2 border-black w-[12px] h-[12px]"></div>
              </div>
              <div class="w-[40px]">
                <h1 class="text-[#AFAFAF]">No</h1>
              </div>
              <div class="w-[200px] mr-5">
                <h1 class="text-[#AFAFAF]">Questions</h1>
              </div>
              <div class="w-[100px] mr-5">
                <h1 class="text-[#AFAFAF]">Corr. Ans</h1>
              </div>
              <div class="w-[100px] mr-5">
                <h1 class="text-[#AFAFAF]">Opt. 1</h1>
              </div>
              <div class="w-[100px] mr-5">
                <h1 class="text-[#AFAFAF]">Opt. 2</h1>
              </div>
              <div class="w-[100px] mr-5">
                <h1 class="text-[#AFAFAF]">Opt. 3</h1>
              </div>
              <div class="w-[100px] mr-5">
                <h1 class="text-[#AFAFAF]">Opt. 4</h1>
              </div>
              <div class="flex justify-end text-theme-color">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    d="M17.004 10.407c.138.435-.216.842-.672.842h-3.465a.75.75 0 01-.65-.375l-1.732-3c-.229-.396-.053-.907.393-1.004a5.252 5.252 0 016.126 3.537zM8.12 8.464c.307-.338.838-.235 1.066.16l1.732 3a.75.75 0 010 .75l-1.732 3.001c-.229.396-.76.498-1.067.16A5.231 5.231 0 016.75 12c0-1.362.519-2.603 1.37-3.536zM10.878 17.13c-.447-.097-.623-.608-.394-1.003l1.733-3.003a.75.75 0 01.65-.375h3.465c.457 0 .81.408.672.843a5.252 5.252 0 01-6.126 3.538z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M21 12.75a.75.75 0 000-1.5h-.783a8.22 8.22 0 00-.237-1.357l.734-.267a.75.75 0 10-.513-1.41l-.735.268a8.24 8.24 0 00-.689-1.191l.6-.504a.75.75 0 10-.964-1.149l-.6.504a8.3 8.3 0 00-1.054-.885l.391-.678a.75.75 0 10-1.299-.75l-.39.677a8.188 8.188 0 00-1.295-.471l.136-.77a.75.75 0 00-1.477-.26l-.136.77a8.364 8.364 0 00-1.377 0l-.136-.77a.75.75 0 10-1.477.26l.136.77c-.448.121-.88.28-1.294.47l-.39-.676a.75.75 0 00-1.3.75l.392.678a8.29 8.29 0 00-1.054.885l-.6-.504a.75.75 0 00-.965 1.149l.6.503a8.243 8.243 0 00-.689 1.192L3.8 8.217a.75.75 0 10-.513 1.41l.735.267a8.222 8.222 0 00-.238 1.355h-.783a.75.75 0 000 1.5h.783c.042.464.122.917.238 1.356l-.735.268a.75.75 0 10.513 1.41l.735-.268c.197.417.428.816.69 1.192l-.6.504a.75.75 0 10.963 1.149l.601-.505c.326.323.679.62 1.054.885l-.392.68a.75.75 0 101.3.75l.39-.679c.414.192.847.35 1.294.471l-.136.771a.75.75 0 101.477.26l.137-.772a8.376 8.376 0 001.376 0l.136.773a.75.75 0 101.477-.26l-.136-.772a8.19 8.19 0 001.294-.47l.391.677a.75.75 0 101.3-.75l-.393-.679a8.282 8.282 0 001.054-.885l.601.504a.75.75 0 10.964-1.15l-.6-.503a8.24 8.24 0 00.69-1.191l.735.268a.75.75 0 10.512-1.41l-.734-.268c.115-.438.195-.892.237-1.356h.784zm-2.657-3.06a6.744 6.744 0 00-1.19-2.053 6.784 6.784 0 00-1.82-1.51A6.704 6.704 0 0012 5.25a6.801 6.801 0 00-1.225.111 6.7 6.7 0 00-2.15.792 6.784 6.784 0 00-2.952 3.489.758.758 0 01-.036.099A6.74 6.74 0 005.251 12a6.739 6.739 0 003.355 5.835l.01.006.01.005a6.706 6.706 0 002.203.802c.007 0 .014.002.021.004a6.792 6.792 0 002.301 0l.022-.004a6.707 6.707 0 002.228-.816 6.781 6.781 0 001.762-1.483l.009-.01.009-.012a6.744 6.744 0 001.18-2.064c.253-.708.39-1.47.39-2.264a6.74 6.74 0 00-.408-2.308z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
            </div>

            <div
              v-for="mcq in mcqs"
              :key="mcq.id"
              class="flex bg-white rounded-[8px] p-[10px]"
            >
              <div class="flex items-center w-[40px]">
                <div class="border-2 border-black w-[12px] h-[12px]"></div>
              </div>
              <div>
                <h1 class="w-[40px]">{{ mcq.id }}</h1>
              </div>
              <div class="truncate w-[200px] mr-5">
                <h1 class="">{{ mcq.question }}</h1>
              </div>
              <div>
                <h1 class="truncate w-[100px] mr-5">
                  {{ mcq.correct_ans }}
                </h1>
              </div>
              <div>
                <h1 class="truncate w-[100px] mr-5">{{ mcq.option_1 }}</h1>
              </div>
              <div>
                <h1 class="truncate w-[100px] mr-5">{{ mcq.option_2 }}</h1>
              </div>
              <div>
                <h1 class="truncate w-[100px] mr-5">{{ mcq.option_3 }}</h1>
              </div>
              <div>
                <h1 class="truncate w-[100px] mr-5">{{ mcq.option_4 }}</h1>
              </div>
              <div class="flex justify-end text-[#3550DC]">
                <Menu as="div" class="relative inline-block text-left">
                  <div>
                    <MenuButton class="flex justify-end text-theme-color">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-6 h-6"
                      >
                        <path
                          d="M17.004 10.407c.138.435-.216.842-.672.842h-3.465a.75.75 0 01-.65-.375l-1.732-3c-.229-.396-.053-.907.393-1.004a5.252 5.252 0 016.126 3.537zM8.12 8.464c.307-.338.838-.235 1.066.16l1.732 3a.75.75 0 010 .75l-1.732 3.001c-.229.396-.76.498-1.067.16A5.231 5.231 0 016.75 12c0-1.362.519-2.603 1.37-3.536zM10.878 17.13c-.447-.097-.623-.608-.394-1.003l1.733-3.003a.75.75 0 01.65-.375h3.465c.457 0 .81.408.672.843a5.252 5.252 0 01-6.126 3.538z"
                        />
                        <path
                          fill-rule="evenodd"
                          d="M21 12.75a.75.75 0 000-1.5h-.783a8.22 8.22 0 00-.237-1.357l.734-.267a.75.75 0 10-.513-1.41l-.735.268a8.24 8.24 0 00-.689-1.191l.6-.504a.75.75 0 10-.964-1.149l-.6.504a8.3 8.3 0 00-1.054-.885l.391-.678a.75.75 0 10-1.299-.75l-.39.677a8.188 8.188 0 00-1.295-.471l.136-.77a.75.75 0 00-1.477-.26l-.136.77a8.364 8.364 0 00-1.377 0l-.136-.77a.75.75 0 10-1.477.26l.136.77c-.448.121-.88.28-1.294.47l-.39-.676a.75.75 0 00-1.3.75l.392.678a8.29 8.29 0 00-1.054.885l-.6-.504a.75.75 0 00-.965 1.149l.6.503a8.243 8.243 0 00-.689 1.192L3.8 8.217a.75.75 0 10-.513 1.41l.735.267a8.222 8.222 0 00-.238 1.355h-.783a.75.75 0 000 1.5h.783c.042.464.122.917.238 1.356l-.735.268a.75.75 0 10.513 1.41l.735-.268c.197.417.428.816.69 1.192l-.6.504a.75.75 0 10.963 1.149l.601-.505c.326.323.679.62 1.054.885l-.392.68a.75.75 0 101.3.75l.39-.679c.414.192.847.35 1.294.471l-.136.771a.75.75 0 101.477.26l.137-.772a8.376 8.376 0 001.376 0l.136.773a.75.75 0 101.477-.26l-.136-.772a8.19 8.19 0 001.294-.47l.391.677a.75.75 0 101.3-.75l-.393-.679a8.282 8.282 0 001.054-.885l.601.504a.75.75 0 10.964-1.15l-.6-.503a8.24 8.24 0 00.69-1.191l.735.268a.75.75 0 10.512-1.41l-.734-.268c.115-.438.195-.892.237-1.356h.784zm-2.657-3.06a6.744 6.744 0 00-1.19-2.053 6.784 6.784 0 00-1.82-1.51A6.704 6.704 0 0012 5.25a6.801 6.801 0 00-1.225.111 6.7 6.7 0 00-2.15.792 6.784 6.784 0 00-2.952 3.489.758.758 0 01-.036.099A6.74 6.74 0 005.251 12a6.739 6.739 0 003.355 5.835l.01.006.01.005a6.706 6.706 0 002.203.802c.007 0 .014.002.021.004a6.792 6.792 0 002.301 0l.022-.004a6.707 6.707 0 002.228-.816 6.781 6.781 0 001.762-1.483l.009-.01.009-.012a6.744 6.744 0 001.18-2.064c.253-.708.39-1.47.39-2.264a6.74 6.74 0 00-.408-2.308z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </MenuButton>
                  </div>

                  <transition
                    enter-active-class="transition ease-out duration-100"
                    enter-from-class="transform opacity-0 scale-95"
                    enter-to-class="transform opacity-100 scale-100"
                    leave-active-class="transition ease-in duration-75"
                    leave-from-class="transform opacity-100 scale-100"
                    leave-to-class="transform opacity-0 scale-95"
                  >
                    <MenuItems
                      class="
                        absolute
                        right-0
                        z-10
                        mt-2
                        w-56
                        origin-top-right
                        rounded-md
                        bg-white
                        shadow-lg
                        ring-1 ring-black ring-opacity-5
                        focus:outline-none
                      "
                    >
                      <div class="py-1">
                        <MenuItem v-slot="{ active }">
                          <Link
                            :href="route('mcqs.edit', { mcq: mcq.id })"
                            class="text-black"
                            :class="[
                              active
                                ? 'bg-gray-100 text-gray-900'
                                : 'text-gray-700',
                              'block px-4 py-2 text-sm',
                            ]"
                          >
                            Edit
                          </Link>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                          <Link
                            :href="route('mcqs.delete', { mcq: mcq.id })"
                            class="text-[#E31D1D]"
                            :class="[
                              active
                                ? 'bg-gray-100 text-gray-900'
                                : 'text-gray-700',
                              'block px-4 py-2 text-sm',
                            ]"
                          >
                            Delete
                          </Link>
                        </MenuItem>
                        <div>
                          <div v-if="mcq.status === 'Draft'">
                            <MenuItem v-slot="{ active }">
                              <Link
                                :href="route('mcqs.publish', { mcq: mcq.id })"
                                class="text-[#1D9229]"
                                :class="[
                                  active
                                    ? 'bg-gray-100 text-gray-900'
                                    : 'text-gray-700',
                                  'block px-4 py-2 text-sm',
                                ]"
                              >
                                Publish
                              </Link>
                            </MenuItem>
                          </div>
                          <div v-if="mcq.status === 'Published'">
                            <MenuItem v-slot="{ active }">
                              <Link
                                :href="route('mcqs.draft', { mcq: mcq.id })"
                                class="text-[#1D9229]"
                                :class="[
                                  active
                                    ? 'bg-gray-100 text-gray-900'
                                    : 'text-gray-700',
                                  'block px-4 py-2 text-sm',
                                ]"
                              >
                                Draft
                              </Link>
                            </MenuItem>
                          </div>
                        </div>
                      </div>
                    </MenuItems>
                  </transition>
                </Menu>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import HeadingAdminPanel from "@/Components/Shared/HeadingAdminPanel.vue";
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";
import route from "ziggy-js";

const props = defineProps({
  mcqs: Array,
  categories: Array,
  subject: Number,
});
</script>