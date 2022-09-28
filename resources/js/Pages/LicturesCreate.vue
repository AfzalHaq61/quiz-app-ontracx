<template>
  <Head title="Subjects" />
  <div class="grid grid-cols-12 min-h-screen">
    <div class="col-span-2 bg-[#FFFFFF] shadow-r-md">
      <SideMenuBar />
    </div>
    <div class="col-span-10 bg-gray-100 mt-[100px] px-[50px]">
      <div class="mb-[100px]">
        <div>
          <h1 class="text-[20px] font-semibold">PakStudy</h1>
          <h1 class="text-[10px] text-[#AFAFAF] font-semibold">Upload Video</h1>
        </div>
        <div
          class="
            grid grid-cols-2
            bg-white
            rounded-[8px]
            mt-[10px]
            px-[20px]
            py-[40px]
          "
        >
          <div class="mr-[50px]">
            <div>
              <SubjectCreateTextField
                fieldtype="text"
                name="title"
                placeholder="Video Title"
              >
              Video Title
              </SubjectCreateTextField>
            </div>
            <div>
              <DescriptionTextField
                fieldtype="text"
                name="Description"
                placeholder="Description"
              >
              Description
              </DescriptionTextField>
            </div>
            <div class="flex justify-center">
              <button class="w-full rounded-[6px] text-white bg-[#3550DC] p-2">
                Upload Question
              </button>
            </div>
          </div>
          <div>
            <div>
              <h1>Thumbnail</h1>
            </div>
            <div>
              <img src="images/Rectangle 4.png" alt="">
            </div>
            <div>
              <h1>+ Add Video File</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>