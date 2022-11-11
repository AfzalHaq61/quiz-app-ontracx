  <template>
  <Head title="Subjects" />
  <div class="grid grid-cols-12 min-h-screen">
    <div class="col-span-2 bg-[#FFFFFF] shadow-r-md">
      <SideMenuBar :categories="categories"></SideMenuBar>
    </div>
    <div class="col-span-10 bg-gray-100 pt-[50px] pl-[50px] pr-[100px]">
      <div>
        <HeadingBlogs :subject="subject"></HeadingBlogs>
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
                <h1 class="text-[20px] font-semibold">Boilogy Blogs</h1>
              </div>
            </div>
            <div class="flex items-end">
              <h1 class="text-[#AFAFAF] text-[12px] font-semibold">See All</h1>
            </div>
          </div>
          <div class="grid gap-[20px]">
            <div class="grid grid-cols-12 bg-white rounded-[8px] p-[15px]">
              <div class="col-span-3 mr-[30px]">
                <img class="h-full" src="/images/Rectangle 2864.png" alt="" />
              </div>
              <div class="col-span-9">
                <div class="flex justify-between mb-[5px]">
                  <div>
                    <h1 class="text-[24px]">Blog Title</h1>
                  </div>
                  <div class="flex items-center">
                    <h1 class="text-[14px]">22 sep</h1>
                  </div>
                </div>
                <div class="mb-[40px]">
                  <h1 class="text-[#AFAFAF] text-[15px]">
                    Lobortis magna nec volutpat sapien, neque, feugiat. Sagittis
                    cursus ut urna egestas tempus. Turpis feugiat a et phasellus
                    etiam. Fringilla mattis ipsum vel tincidunt. Amet risus
                    velit faucibus enim nisi et purus. Ipsum libero.
                  </h1>
                </div>
                <div class="flex justify-end">
                  <div class="mr-[10px]">
                    <h1 class="text-[#5F65E4]">Edit</h1>
                  </div>
                  <div>
                    <h1 class="text-[#E31D1D]">Delete</h1>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-12 bg-white rounded-[8px] p-[15px]">
              <div class="col-span-3 mr-[30px]">
                <img class="h-full" src="/images/Rectangle 2866.png" alt="" />
              </div>
              <div class="col-span-9">
                <div class="flex justify-between mb-[5px]">
                  <div>
                    <h1 class="text-[24px]">Blog Title</h1>
                  </div>
                  <div class="flex items-center">
                    <h1 class="text-[14px]">22 sep</h1>
                  </div>
                </div>
                <div class="mb-[40px]">
                  <h1 class="text-[#AFAFAF] text-[15px]">
                    Lobortis magna nec volutpat sapien, neque, feugiat. Sagittis
                    cursus ut urna egestas tempus. Turpis feugiat a et phasellus
                    etiam. Fringilla mattis ipsum vel tincidunt. Amet risus
                    velit faucibus enim nisi et purus. Ipsum libero.
                  </h1>
                </div>
                <div class="flex justify-end">
                  <div class="mr-[10px]">
                    <h1 class="text-[#5F65E4]">Edit</h1>
                  </div>
                  <div>
                    <h1 class="text-[#E31D1D]">Delete</h1>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-12 bg-white rounded-[8px] p-[15px]">
              <div class="col-span-3 mr-[30px]">
                <img class="h-full" src="/images/Rectangle 2868.png" alt="" />
              </div>
              <div class="col-span-9">
                <div class="flex justify-between mb-[5px]">
                  <div>
                    <h1 class="text-[24px]">Blog Title</h1>
                  </div>
                  <div class="flex items-center">
                    <h1 class="text-[14px]">22 sep</h1>
                  </div>
                </div>
                <div class="mb-[40px]">
                  <h1 class="text-[#AFAFAF] text-[15px]">
                    Lobortis magna nec volutpat sapien, neque, feugiat. Sagittis
                    cursus ut urna egestas tempus. Turpis feugiat a et phasellus
                    etiam. Fringilla mattis ipsum vel tincidunt. Amet risus
                    velit faucibus enim nisi et purus. Ipsum libero.
                  </h1>
                </div>
                <div class="flex justify-end">
                  <div class="mr-[10px]">
                    <h1 class="text-[#5F65E4]">Edit</h1>
                  </div>
                  <div>
                    <h1 class="text-[#E31D1D]">Delete</h1>
                  </div>
                </div>
              </div>
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
  subject: Number,
});
</script>