<template>
  <Head title="Subjects" />
  <div class="grid grid-cols-12 min-h-screen">
    <div class="col-span-2 bg-[#FFFFFF] shadow-r-md">
      <SideMenuBar :categories="categories"></SideMenuBar>
    </div>
    <div class="col-span-10 bg-gray-100 mt-[100px] px-[50px]">
      <div class="mb-[100px]">
        <div>
          <h1 class="text-[20px] font-semibold">PakStudy</h1>
          <h1 class="text-[10px] text-[#AFAFAF] font-semibold">Add MCQ</h1>
        </div>
        <div class="bg-white rounded-[8px] mt-[10px] px-[20px] py-[40px]">
          <form @submit.prevent="submit">
            <div>
              <DescriptionTextField
                fieldtype="text"
                name="question"
                placeholder="Enter Question"
                v-model="form.question"
                :errors="errors.question"
              >
                Question
              </DescriptionTextField>
            </div>
            <div class="grid grid-cols-2 gap-[20px] mt-[20px] mb-[40px]">
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="correct_ans"
                  placeholder="Correct Answer"
                  v-model="form.correct_ans"
                  :errors="errors.correct_ans"
                >
                  Correct Answer
                </SubjectCreateTextField>
              </div>
              <br />
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="option_1"
                  placeholder="Option 1"
                  v-model="form.option_1"
                  :errors="errors.option_1"
                >
                  Option 1
                </SubjectCreateTextField>
              </div>
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="option_2"
                  placeholder="Option 2"
                  v-model="form.option_2"
                  :errors="errors.option_2"
                >
                  Option 2
                </SubjectCreateTextField>
              </div>
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="option_3"
                  placeholder="Option 3"
                  v-model="form.option_3"
                  :errors="errors.option_3"
                >
                  Option 3
                </SubjectCreateTextField>
              </div>
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="option_4"
                  placeholder="Option 4"
                  v-model="form.option_4"
                  :errors="errors.option_4"
                >
                  Option 4
                </SubjectCreateTextField>
              </div>
              <div>
                <DescriptionTextField
                  fieldtype="text"
                  name="hint"
                  placeholder="Hint"
                  v-model="form.hint"
                  :errors="errors.hint"
                >
                  Hint
                </DescriptionTextField>
              </div>
              <div>
                <DescriptionTextField
                  fieldtype="text"
                  name="reference"
                  placeholder="Reference"
                  v-model="form.reference"
                  :errors="errors.reference"
                >
                  Reference
                </DescriptionTextField>
              </div>
            </div>
            <div>
              <FormButton>Update Mcq</FormButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  categories: Array,
  mcq: Number,
  errors: Object,
});

let form = reactive({
  subject_id: props.mcq.subject_id,
  question: props.mcq.question,
  correct_ans: props.mcq.correct_ans,
  option_1: props.mcq.option_1,
  option_2: props.mcq.option_2,
  option_3: props.mcq.option_3,
  option_4: props.mcq.option_4,
  hint: props.mcq.hint,
  reference: props.mcq.reference,
  _method: "put",
});

function submit() {
  Inertia.post(route("mcqs.update", { mcq: props.mcq.id }), form, {
    forceFormData: true,
  });
}
</script>