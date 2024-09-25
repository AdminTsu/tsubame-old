import Vue from 'vue';
import axios from 'axios';
import swal from 'sweetalert';

import PictureInput from 'vue-picture-input';
import EducationBackground from './EducationBackgroundComponent.vue';
import WorkBackground from './WorkBackgroundComponent.vue';


let app = new Vue({
  el : "#panels-edit",
  components: {
    PictureInput,
    EducationBackground,
    WorkBackground
  },
  data(){
   return {
    avatar : "",
    avatar_is_removed : 0,
    first_name : "",
    last_name : "",
    date_of_birth : "",
    address : "",
    phone_number : "",
    ktp_number : "",
    married : 0,
    educations : [],
    works : [],
    family_background : "",
    hobbies : "",
    is_in_company : 0,
    company_name : "",
    height : "",
    weight : "",
    blood_type : "",
    jlpt_score : "",
    epa_score : "",
    nat_score : "",
    is_ever_to_japan : 0,
    experience_abroad : ""
   } 
  },
  mounted(){
  },
  methods:{
    onChange (image) {
      if (image) {
        this.avatar = image
      } else {
      }
      this.avatar_is_removed = 0

    },
    educationsChanged(childEducations){
      this.educations = childEducations;
    },
    worksChanged(childWorks){
      this.works = childWorks;
    },
    onRemove(){
      this.avatar_is_removed = 1
    },
    submit(e){
      let _url = e.target.action;
      let _data = new FormData();

      _data.append('_token', e.target._token.value);  
      _data.append('_method', e.target._method.value);
      _data.append('avatar', e.target.avatar.files[0]);
      _data.append('avatar_is_removed', this.avatar_is_removed);
      _data.append('first_name', e.target.first_name.value);
      _data.append('last_name', e.target.last_name.value);
      _data.append('date_of_birth', e.target.date_of_birth.value);
      _data.append('gender', e.target.gender.value);
      _data.append('address', e.target.address.value);
      _data.append('phone_number', e.target.phone_number.value);
      _data.append('ktp_number', e.target.ktp_number.value);
      _data.append('married', e.target.marital_status.value);
      _data.append('educations', JSON.stringify(this.educations));
      _data.append('works', JSON.stringify(this.works));
      _data.append('family_background', e.target.family_background.value);
      _data.append('hobbies', e.target.hobbies.value);
      _data.append('is_in_company', e.target.is_in_company.value);
      _data.append('company_name', e.target.company_name.value);
      _data.append('body_weight', e.target.body_weight.value);
      _data.append('body_height', e.target.body_height.value);
      _data.append('blood_type', e.target.blood_type.value);
      _data.append('jlpt_score', e.target.jlpt_score.value);
      _data.append('epa_score', e.target.epa_score.value);
      _data.append('nat_score', e.target.nat_score.value);
      _data.append('is_ever_to_japan', e.target.is_ever_to_japan.value);
      _data.append('experience_abroad', e.target.experience_abroad.value);

      axios.post(_url, _data)
      .then(function (response) {
        console.log(response.data);
        swal('Update data sukses!',"",'success').then(function(){
          window.location.reload()
        })
      })
      .catch(function (error) {
      });
    }
  }
})