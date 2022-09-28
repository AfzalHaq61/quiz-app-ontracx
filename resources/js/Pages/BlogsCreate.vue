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
          <h1 class="text-[10px] text-[#AFAFAF] font-semibold">Add Blog</h1>
        </div>
        <div class="bg-white rounded-[8px] mt-[10px] px-[20px] py-[40px]">
          <div>
            <SubjectCreateTextField
              fieldtype="text"
              name="title"
              placeholder="Title"
            >
            Title
            </SubjectCreateTextField>
          </div>
          <div class="mb-5">
            <BlogDescriptionTextField
              fieldtype="text"
              name="description"
              placeholder="Description"
            >
            Description
            </BlogDescriptionTextField>
          </div>
          <div class="flex justify-center">
            <button class="w-full rounded-[6px] text-white bg-[#3550DC] p-2">Add Blog</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>