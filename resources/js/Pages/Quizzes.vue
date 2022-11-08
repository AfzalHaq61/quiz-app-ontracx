<template>
  <Head title="Quiz" />
  <div class="grid grid-cols-12 min-h-screen">
    <div class="col-span-2 bg-[#FFFFFF] shadow-r-md">
      <SideMenuBar />
    </div>
    <div class="col-span-10 bg-gray-100 pt-[50px] pl-[50px] pr-[100px]">
      <div>
        <Heading />
        <div class="my-[45px]">
          <div class="mb-[20px]">
            <h1 class="text-[20px] font-semibold">Monthly Quizzes</h1>
          </div>
          <div class="grid grid-cols-3 gap-[50px]">
            <div
              class="
                grid grid-cols-3
                bg-[#FF8A80]
                rounded-[10px]
                text-white
                px-[24px]
                pt-[24px]
                py-[10px]
                h-[170px]
              "
            >
              <div class="col-span-2">
                <div>
                  <h1 class="text-[24px] font-semibold">20-4-2022</h1>
                </div>
                <div>
                  <h1 class="">Participants: 2392</h1>
                </div>
                <div>
                  <h1>Completed</h1>
                </div>
                <div>
                  <h1>Prized Distributed</h1>
                </div>
              </div>
              <div class="col-span-1 flex justify-end items-end">
                <h1>See Details</h1>
              </div>
            </div>

            <div
              class="bg-[#FF8A80] rounded-[10px] text-white p-[24px] h-[170px]"
            >
              <div class="flex justify-center items-center h-full">
                <div>
                  <h1 class="text-[24px] font-semibold">Draft</h1>
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
</script>