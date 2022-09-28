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
          <h1 class="text-[10px] text-[#AFAFAF] font-semibold">Add MCQ</h1>
        </div>
        <div class="bg-white rounded-[8px] mt-[10px] px-[20px] py-[40px]">
          <div>
            <DescriptionTextField
              fieldtype="text"
              name="question"
              placeholder="Enter Question"
            >
            Question
            </DescriptionTextField>
          </div>
          <div class="grid grid-cols-2 gap-[20px] mt-[20px] mb-[40px]">
            <div>
              <SubjectCreateTextField
                fieldtype="text"
                name="correct_answer"
                placeholder="Answer"
              >
              Correct Answer
              </SubjectCreateTextField>
            </div>
            <div>
              <SubjectCreateTextField
                fieldtype="text"
                name="answer2"
                placeholder="Answer"
              >
              Answer 2
              </SubjectCreateTextField>
            </div>
            <div>
              <SubjectCreateTextField
                fieldtype="text"
                name="answer3"
                placeholder="Answer"
              >
              Answer 3
              </SubjectCreateTextField>
            </div>
            <div>
              <SubjectCreateTextField
                fieldtype="text"
                name="answer4"
                placeholder="Answer"
              >
              Answer 4
              </SubjectCreateTextField>
            </div>
            <div>
              <DescriptionTextField
                fieldtype="text"
                name="hint"
                placeholder="Hint Text"
              >
              Hint
              </DescriptionTextField>
            </div>
            <div>
              <DescriptionTextField
                fieldtype="text"
                name="reference"
                placeholder="Reference"
              >
              Reference
              </DescriptionTextField>
            </div>
          </div>
          <div class="flex justify-center">
            <button class="w-full rounded-[6px] text-white bg-[#3550DC] p-2">Upload Question</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>