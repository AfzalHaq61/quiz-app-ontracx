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
                  name="correct_answer"
                  placeholder="Correct Answer"
                  v-model="form.correct_answer"
                  :errors="errors.correct_answer"
                >
                  Correct Answer
                </SubjectCreateTextField>
              </div>
              <br />
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="answer_one"
                  placeholder="Answer One"
                  v-model="form.answer_one"
                  :errors="errors.answer_one"
                >
                  Answer One
                </SubjectCreateTextField>
              </div>
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="answer_two"
                  placeholder="Answer Two"
                  v-model="form.answer_two"
                  :errors="errors.answer_two"
                >
                  Answer Two
                </SubjectCreateTextField>
              </div>
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="answer_three"
                  placeholder="Answer Three"
                  v-model="form.answer_three"
                  :errors="errors.answer_three"
                >
                  Answer Three
                </SubjectCreateTextField>
              </div>
              <div>
                <SubjectCreateTextField
                  fieldtype="text"
                  name="answer_four"
                  placeholder="Answer Four"
                  v-model="form.answer_four"
                  :errors="errors.answer_four"
                >
                  Answer Four
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
            <div
              class="
                flex
                justify-center
                w-full
                rounded-[6px]
                text-white
                bg-theme-color
                p-2
              "
            >
              <button type="submit">Add Blog</button>
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
  correct_answer: props.mcq.correct_answer,
  answer_one: props.mcq.answer_one,
  answer_two: props.mcq.answer_two,
  answer_three: props.mcq.answer_three,
  answer_four: props.mcq.answer_four,
  hint: props.mcq.hint,
  reference: props.mcq.reference,
  status: props.mcq.status,
  _method: "put",
});

function submit() {
  Inertia.post(route("mcq.update", { mcq: props.mcq.id }), form, {
    forceFormData: true,
  });
}
</script>