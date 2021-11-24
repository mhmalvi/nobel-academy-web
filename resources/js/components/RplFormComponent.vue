<template>
  <div class="form-wrapper">
    <form @submit.prevent="handleFormSubmit">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3>
                <strong>1</strong>
                Qualification
              </h3>
              <br />
              <p>Choose the qualification you are looking for.</p>
            </div>
            <div class="box-content">
              <div class="form-group">
                <label for="qualification"
                  >What qualification are you looking for? *</label
                >
                <select
                  class="form-control"
                  id="qualification"
                  v-model="form.qualification"
                >
                  <option value>
                    Select the qualification you looking for...
                  </option>
                  <option value="SHB50115 - Diploma of Beauty Therapy">
                    SHB50115 - Diploma of Beauty Therapy
                  </option>
                  <option value="HLT52015 - Diploma of Remedial Massage">
                    HLT52015 - Diploma of Remedial Massage
                  </option>
                  <option value="SHB30416 - Certificate III in Hairdressing">
                    SHB30416 - Certificate III in Hairdressing
                  </option>
                  <option value="SHB40115 - Certificate IV in Beauty Therapy">
                    SHB40115 - Certificate IV in Beauty Therapy
                  </option>
                </select>
                <div
                  class="text-danger"
                  v-if="errors.messages.qualification.length > 0"
                >
                  {{ errors.messages.qualification[0] }}
                </div>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="box-header">
              <h3>
                <strong>2</strong>
                Professional Experience
              </h3>
              <br />
              <p>Describe your profession experience.</p>
            </div>
            <div class="box-content">
              <div class="form-card form-group">
                <div class="radio p-0">
                  <label for="" class="p-0"
                    >How many years of relevant work experience do you have?
                    *</label
                  >
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <input
                        type="radio"
                        name="relevant"
                        id="one"
                        value="1 - 2 years"
                        v-model="form.experience"
                      />
                      <label for="one" class="exp-lbl exp-lbl2">
                        <div>
                          1 - 2 <br />
                          Years
                        </div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                      <input
                        type="radio"
                        name="relevant"
                        id="two"
                        value="3 - 4 years"
                        v-model="form.experience"
                      />
                      <label for="two" class="exp-lbl exp-lbl2">
                        <div>
                          3 - 4 <br />
                          Years
                        </div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                      <input
                        type="radio"
                        name="relevant"
                        id="three"
                        value="5 - 9 years"
                        v-model="form.experience"
                      />
                      <label for="three" class="exp-lbl exp-lbl2">
                        <div>
                          5 - 9 <br />
                          Years
                        </div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                      <input
                        type="radio"
                        name="relevant"
                        id="four"
                        value="10 + years"
                        v-model="form.experience"
                      />
                      <label for="four" class="exp-lbl exp-lbl2">
                        <div>
                          10 + <br />
                          Years
                        </div>
                      </label>
                    </div>
                  </div>
                  <div
                    class="text-danger"
                    v-if="errors.messages.experience.length > 0"
                  >
                    {{ errors.messages.experience[0] }}
                  </div>
                </div>
                <div class="radio p-0">
                  <label class="p-0">Where is your work experience? *</label>
                  <div class="row">
                    <div class="col-sm-4 col-xs-12">
                      <input
                        type="radio"
                        name="work_location"
                        id="wlOne"
                        value="australia"
                        v-model="form.work_location"
                      />
                      <label for="wlOne" class="exp-lbl exp-lbl2">
                        <div>Australia</div>
                      </label>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                      <input
                        type="radio"
                        name="work_location"
                        id="wlTwo"
                        value="overseas"
                        v-model="form.work_location"
                      />
                      <label for="wlTwo" class="exp-lbl exp-lbl2">
                        <div>Overseas</div>
                      </label>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                      <input
                        type="radio"
                        name="work_location"
                        id="wlThree"
                        value="other"
                        v-model="form.work_location"
                      />
                      <label for="wlThree" class="exp-lbl exp-lbl2">
                        <div>Other</div>
                      </label>
                    </div>
                  </div>
                  <div
                    class="text-danger"
                    v-if="errors.messages.work_location.length > 0"
                  >
                    {{ errors.messages.work_location[0] }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="box-header">
              <h3>
                <strong>3</strong>
                Your Address
              </h3>
              <br />
              <p>Please select where do you live in.</p>
            </div>
            <div class="box-content">
              <div class="form-card form-group">
                <div class="radio p-0">
                  <label class="p-0">What state do you live in? *</label>
                  <div class="row">
                    <div class="col-sm-3 col-6 col-xs-6">
                      <input
                        type="radio"
                        name="location"
                        id="locOne"
                        value="NSW"
                        v-model="form.location"
                      />
                      <label for="locOne" class="exp-lbl exp-lbl2 p-1">
                        <img
                          src="../../../public/assets/images/maps/01.webp"
                          alt="nsw"
                        />
                        <div>NSW</div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-6 col-xs-6">
                      <input
                        type="radio"
                        name="location"
                        id="locTwo"
                        value="VIC"
                        v-model="form.location"
                      />
                      <label for="locTwo" class="exp-lbl exp-lbl2 p-1">
                        <img
                          src="../../../public/assets/images/maps/02.webp"
                          alt="vic"
                        />
                        <div>VIC</div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-6 col-xs-6">
                      <input
                        type="radio"
                        name="location"
                        id="locThree"
                        value="QLD"
                        v-model="form.location"
                      />
                      <label for="locThree" class="exp-lbl exp-lbl2 p-1">
                        <img
                          src="../../../public/assets/images/maps/03.webp"
                          alt="qld"
                        />
                        <div>QLDs</div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-6 col-xs-6">
                      <input
                        type="radio"
                        name="location"
                        id="locFour"
                        value="SA"
                        v-model="form.location"
                      />
                      <label for="locFour" class="exp-lbl exp-lbl2 p-1">
                        <img
                          src="../../../public/assets/images/maps/04.webp"
                          alt="sa"
                        />
                        <div>SA</div>
                      </label>
                    </div>
                  </div>
                  <div class="row pt-sm-5">
                    <div class="col-sm-3 col-6 col-xs-6">
                      <input
                        type="radio"
                        name="location"
                        id="locFive"
                        value="WA"
                        v-model="form.location"
                      />
                      <label for="locFive" class="exp-lbl exp-lbl2 p-1">
                        <img
                          src="../../../public/assets/images/maps/05.webp"
                          alt="wa"
                        />
                        <div>WA</div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-6 col-xs-6">
                      <input
                        type="radio"
                        name="location"
                        id="locSix"
                        value="ACT"
                        v-model="form.location"
                      />
                      <label for="locSix" class="exp-lbl exp-lbl2 p-1">
                        <img
                          src="../../../public/assets/images/maps/06.webp"
                          alt="act"
                        />
                        <div>ACT</div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-6 col-xs-6">
                      <input
                        type="radio"
                        name="location"
                        id="locSeven"
                        value="NT"
                        v-model="form.location"
                      />
                      <label for="locSeven" class="exp-lbl exp-lbl2 p-1">
                        <img
                          src="../../../public/assets/images/maps/07.webp"
                          alt="nt"
                        />
                        <div>NT</div>
                      </label>
                    </div>
                    <div class="col-sm-3 col-6 col-xs-6">
                      <input
                        type="radio"
                        name="location"
                        id="locEight"
                        value="TAS"
                        v-model="form.location"
                      />
                      <label for="locEight" class="exp-lbl exp-lbl2 p-1">
                        <img
                          src="../../../public/assets/images/maps/08.webp"
                          alt="tas"
                        />
                        <div>TAS</div>
                      </label>
                    </div>
                  </div>

                  <div
                    class="text-danger"
                    v-if="errors.messages.location.length > 0"
                  >
                    {{ errors.messages.location[0] }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="box-header">
              <h3>
                <strong>4</strong>
                Personal Information
              </h3>
              <br />
              <p>Please enter your personal information</p>
            </div>
            <div class="box-content">
              <div class="form-group">
                <label for="name">Full Name *</label>
                <input
                  type="text"
                  id="name"
                  class="form-control"
                  placeholder="Please enter your full name"
                  v-model="form.name"
                />
                <div class="text-danger" v-if="errors.messages.name.length > 0">
                  {{ errors.messages.name[0] }}
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email Address *</label>
                <input
                  type="email"
                  id="email"
                  class="form-control"
                  placeholder="example@email.com"
                  v-model="form.email"
                />
                <div
                  class="text-danger"
                  v-if="errors.messages.email.length > 0"
                >
                  {{ errors.messages.email[0] }}
                </div>
              </div>
              <div class="form-group">
                <label for="phone">Contact Number *</label>
                <input
                  type="text"
                  id="phone"
                  class="form-control"
                  placeholder="Enter your contact number"
                  v-model="form.contact"
                />
                <div
                  class="text-danger"
                  v-if="errors.messages.contact.length > 0"
                >
                  {{ errors.messages.contact[0] }}
                </div>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="box-header">
              <h3>
                <strong>5</strong>
                Miscellaneous
              </h3>
              <br />
              <p>Tell us more about you.</p>
            </div>
            <div class="box-content">
              <div class="form-group">
                <label for="remark">Remarks:</label>
                <textarea
                  id="remark"
                  class="form-control"
                  rows="5"
                  placeholder="Do you have any query?"
                  v-model="form.remark"
                ></textarea>
              </div>
              <div class="form-group">
                <label
                  class="fieldlabels filesLbl filesLbl2"
                  for="files"
                  id="filesLbl"
                  >Upload your documents</label
                >
                <input
                  type="file"
                  class="form-control files"
                  id="files"
                  onchange="fileUpload(event)"
                  multiple
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3>
                <strong>6</strong>
                RPL Checklist
              </h3>
              <br />
              <p>Tick, if you can demonstrate evidence</p>
            </div>

            <div class="box-content">
              <div class="radio">
                <label class="p-0">
                  Can you provide referees who can support your RPL Assessment?
                  <a href="#abc">Information</a> on type of Referees is
                  explained below.**
                </label>
                <div class="row">
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q1"
                      id="q1_1"
                      value="Yes"
                      v-model="form.q1"
                    />
                    <label for="q1_1" class="exp-lbl exp-lbl2">
                      <div>Yes</div>
                    </label>
                  </div>
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q1"
                      id="q1_2"
                      value="No"
                      v-model="form.q1"
                    />
                    <label for="q1_2" class="exp-lbl exp-lbl2">
                      <div>No</div>
                    </label>
                  </div>
                </div>
                <div class="text-danger" v-if="errors.messages.q1.length > 0">
                  {{ errors.messages.q1[0] }}
                </div>
              </div>

              <div class="radio">
                <label class="p-0">
                  Do you have any past academic qualification you have obtained
                  in Australia ?
                </label>
                <div class="row">
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q3"
                      id="q3_1"
                      value="Yes"
                      v-model="form.q3"
                    />
                    <label for="q3_1" class="exp-lbl exp-lbl2">
                      <div>Yes</div>
                    </label>
                  </div>
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q3"
                      id="q3_2"
                      value="No"
                      v-model="form.q3"
                    />
                    <label for="q3_2" class="exp-lbl exp-lbl2">
                      <div>No</div>
                    </label>
                  </div>
                </div>
                <div class="text-danger" v-if="errors.messages.q3.length > 0">
                  {{ errors.messages.q3[0] }}
                </div>
              </div>

              <div class="radio">
                <label class="p-0">
                  Do you accept that there will be many different type of
                  evidences you have to supply for RPL Assessment, will you be
                  able to supply the documents when requested?
                </label>
                <div class="row">
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q5"
                      id="q5_1"
                      value="Yes"
                      v-model="form.q5"
                    />
                    <label for="q5_1" class="exp-lbl exp-lbl2">
                      <div>Yes</div>
                    </label>
                  </div>
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q5"
                      id="q5_2"
                      value="No"
                      v-model="form.q5"
                    />
                    <label for="q5_2" class="exp-lbl exp-lbl2">
                      <div>No</div>
                    </label>
                  </div>
                </div>
                <div class="text-danger" v-if="errors.messages.q5.length > 0">
                  {{ errors.messages.q5[0] }}
                </div>
              </div>

              <div class="radio">
                <label class="p-0">
                  During the RPL process, we may request you for some video or
                  photo evidences, are you comfortable in supplying such
                  evidences?
                </label>
                <div class="row">
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q6"
                      id="q6_1"
                      value="Yes"
                      v-model="form.q6"
                    />
                    <label for="q6_1" class="exp-lbl exp-lbl2">
                      <div>Yes</div>
                    </label>
                  </div>
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q6"
                      id="q6_2"
                      value="No"
                      v-model="form.q6"
                    />
                    <label for="q6_2" class="exp-lbl exp-lbl2">
                      <div>No</div>
                    </label>
                  </div>
                </div>
                <div class="text-danger" v-if="errors.messages.q6.length > 0">
                  {{ errors.messages.q6[0] }}
                </div>
              </div>

              <div class="radio">
                <label class="p-0">
                  Are you ready to fill out the application form and begin the
                  RPL Assessment immediately?
                </label>
                <div class="row">
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q9"
                      id="q9_1"
                      value="Yes"
                      v-model="form.q8"
                    />
                    <label for="q9_1" class="exp-lbl exp-lbl2">
                      <div>Yes</div>
                    </label>
                  </div>
                  <div class="col-xs-6">
                    <input
                      type="radio"
                      name="q9"
                      id="q9_2"
                      value="No"
                      v-model="form.q8"
                    />
                    <label for="q9_2" class="exp-lbl exp-lbl2">
                      <div>No</div>
                    </label>
                  </div>
                </div>
                <div class="text-danger" v-if="errors.messages.q8.length > 0">
                  {{ errors.messages.q8[0] }}
                </div>
              </div>
            </div>
          </div>

          <div class="box" id="abc">
            <div class="box-header">
              <h3>
                <strong>*</strong>
                Type of Referees
              </h3>
              <br />
              <p>
                Who are eligible Referees that can assess your skill and
                knowledge?
              </p>
            </div>
            <div class="box-body">
              <br />
              <p>
                For the RPL process an applicant must provide at least three
                referee details. Out of the three: one of your referee must be a
                Supervisor at work, who is referred to as ‘Testimonial Referee’
                and the other two must be ‘Nominated Referees’, whom your
                Assessor will contact for reference check. One of your Nominated
                Referee should be able to provide you with ‘Third Party Report'.
                The detail explanation of the type of referees are given below:
              </p>
              <br />
              <p>
                <strong>Testimonial Referee:&nbsp;</strong>
                'Testimonial Referees' are mostly your Employer, Supervisor,
                Managers who can provide you with a testimonial letter declaring
                that they know you for more than 1 year and who can declare that
                you have sufficient job experience to meet the qualification
                requirements.
              </p>
              <br />
              <p>
                <strong>Nominated Referee:&nbsp;</strong>
                You should have two Nominated referee who could either be your
                colleague, supervisor, manager and other relevant person, who
                has worked with you and can assess your skill and knowledge in
                relevance to each unit of competency.
              </p>
            </div>
          </div>
          <button type="submit" class="button-rpl">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <div
    class="loader-wrapper"
    :class="isLoading && 'show-lds'"
    id="lds-wrapper"
    area-hidden="true"
    v-if="isLoading"
  >
    <div class="lds-spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
</template>

<script>
import { reactive, ref, computed } from "vue";
import axios from "axios";
import Validators from "../Validators";

export default {
  setup() {
    const isLoading = ref(false);

    const form = reactive({
      qualification: "",
      experience: "",
      work_location: "",
      location: "",
      name: "",
      email: "",
      contact: "",
      remark: "",
      q1: "",
      q3: "",
      q5: "",
      q6: "",
      q8: "",
    });

    const errors = reactive({
      messages: {
        qualification: "",
        experience: "",
        work_location: "",
        location: "",
        name: "",
        email: "",
        contact: "",
        q1: "",
        q3: "",
        q5: "",
        q6: "",
        q8: "",
      },
    });

    function handleFormSubmit() {
      isLoading.value = ref(true);

      const fd = new FormData();

      Object.keys(form).forEach((key) => {
        fd.append(key, form[key]);
      });

      var files = $("#files").prop("files");
      if (files.length > 0) {
        $.each(files, function (key, value) {
          fd.append("files[]", value);
        });
      }
      axios
        .post("/check-eligibility", fd)
        .then((res) => {
          $("#rplEligibilityForm").trigger("reset");
          $("#lds-wrapper").toggleClass("show-lds");
          isLoading.value = ref(false);
          alert(
            "Your response successfully submitted. You will be redirect to our website shortly."
          );
          location.href = "https://nta.nsw.edu.au";
        })
        .catch((err) => {
          isLoading.value = false;
          $("#lds-wrapper").toggleClass("show-lds");
          errors.messages = err.response.data.errors;
          alert("Invalid response. Try again!");
        });
    }

    const isValid = computed(() => {
      return (
        form.qualification.length > 0 &&
        form.experience.length > 0 &&
        form.location.length > 0 &&
        form.work_location.length > 0 &&
        form.name.length > 0 &&
        Validators().email(form.email) &&
        form.email.length > 0 &&
        form.contact.length > 0 &&
        form.q1.length > 0 &&
        form.q3.length > 0 &&
        form.q5.length > 0 &&
        form.q6.length > 0 &&
        form.q8.length > 0
      );
    });

    return {
      form,
      handleFormSubmit,
      errors,
      isValid,
      isLoading,
    };
  },
};
</script>
