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
            <h1 class="text-[20px] font-semibold">Material Types</h1>
          </div>
          <div class="grid gap-[50px]">
            <div>
              <Link
                :href="
                  route('blogs', {
                    subject: subject,
                  })
                "
              >
                <div
                  class="
                    grid grid-cols-2
                    bg-[#FF8A80]
                    rounded-[10px]
                    text-white
                    p-[24px]
                  "
                >
                  <div>
                    <div class="mb-[80px]">
                      <h1 class="text-[24px] font-semibold">Blogs</h1>
                    </div>
                    <div class="">
                      <h1 class="text-[24px] font-thin">
                        <span class="font-semibold">32</span> blogs published
                      </h1>
                    </div>
                  </div>
                  <div class="flex items-end justify-end">
                    <img class="" src="/images/Book.png" alt="" />
                  </div>
                </div>
              </Link>
            </div>

            <div>
              <Link
                :href="
                  route('mcqs', {
                    subject: subject,
                  })
                "
              >
                <div
                  class="
                    grid grid-cols-2
                    bg-[#005D8B]
                    rounded-[10px]
                    text-white
                    p-[24px]
                  "
                >
                  <div>
                    <div class="mb-[80px]">
                      <h1 class="text-[24px] font-semibold">MCQs</h1>
                    </div>
                    <div class="">
                      <h1 class="text-[24px] font-thin">
                        <span class="font-semibold">32</span> MCQs published
                      </h1>
                    </div>
                  </div>
                  <div class="flex items-end justify-end">
                    <img class="" src="/images/Checkmark.png" alt="" />
                  </div>
                </div>
              </Link>
            </div>

            <div>
              <Link
                :href="
                  route('lectures.index', {
                    subject: subject,
                  })
                "
              >
                <div
                  class="
                    grid grid-cols-2
                    bg-[#F0B26C]
                    rounded-[10px]
                    text-white
                    p-[24px]
                  "
                >
                  <div>
                    <div class="mb-[80px]">
                      <h1 class="text-[24px] font-semibold">Video Lectures</h1>
                    </div>
                    <div class="">
                      <h1 class="text-[24px] font-thin">
                        <span class="font-semibold">32</span> Lectures published
                      </h1>
                    </div>
                  </div>
                  <div class="flex items-end justify-end">
                    <img class="" src="/images/Video Lesson.png" alt="" />
                  </div>
                </div>
              </Link>
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