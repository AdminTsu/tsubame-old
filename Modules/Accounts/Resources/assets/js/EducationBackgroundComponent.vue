<template>
  <div>
    <div class="row" v-for='(e,k) in educations' :key='k'>
        <div class="col-md-3">
            <input type="text" v-model='educations[k].level' name="education[]" class="form-control" placeholder="SD/SMP/SMA/Universitas" value="">
        </div>
        <div class="col-md-2">
            <input type="text" v-model='educations[k].start' name="education[]" class="form-control" placeholder="Tahun Mulai" value="">
        </div>
        <div class="col-md-2">
            <input type="text" v-model='educations[k].end' name="education[]" placeholder="Tahun Selesai" class="form-control" value="">
        </div>
        <div class="col-md-3">
            <input type="text" v-model='educations[k].name' name="education[]" placeholder="Nama Sekolah/Institusi" class="form-control" value="">
        </div>
        <div class="col-md-2">
                <button type='button' @click='removeEducation(k)' class="btn btn-danger btn-sm">
                    <i class='material-icons'>delete</i>
                </button>
            </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type='button' class="btn btn-primary" @click='addMoreEducation'>Tambah</button>
        <button type='button' class="btn btn-success" @click='submitEducation'>Simpan</button>

      </div>
    </div>
  </div>
 
</template>

<script>
export default {
  props : ['eb'],
  data(){
    return {
      educations : [],
      education_template: {
        level : '',
        name : '',
        start : '',
        end : ''
      },
    }
  },
  mounted(){
    let vm = this;
    let _data = JSON.parse(this.eb)
    this.educations = _data.map(function(row,key){
      return {
        id : _data[key].id,
        level : _data[key].level,
        name : _data[key].name,
        start : _data[key].start,
        end : _data[key].end
      }
    })
    this.submitEducation();
    
  },
  methods:{
    addMoreEducation(){
      this.educations.push({
        level : '',
        name : '',
        start : '',
        end : ''
      })
    },
    removeEducation(i){
      this.$delete(this.educations,i)
    },
    submitEducation(){
      this.$emit('change', this.educations)
    }

  }
}
</script>
