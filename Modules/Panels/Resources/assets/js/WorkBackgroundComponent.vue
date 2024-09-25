<template>
  <div>
    <div class="row" v-for='(e,k) in works' :key='k'>
        <div class="col-md-2">
            <input type="text" v-model='works[k].company' class="form-control" placeholder="Nama Perusahaan" value="">
        </div>
        <div class="col-md-2">
            <input type="text" v-model='works[k].start' class="form-control" placeholder="Tahun Mulai" value="">
        </div>
        <div class="col-md-2">
            <input type="text" v-model='works[k].end' placeholder="Tahun Selesai" class="form-control" value="">
        </div>
        <div class="col-md-2">
            <input type="text" v-model='works[k].work_type' placeholder="Bidang Kerja" class="form-control" value="">
        </div>
        <div class="col-md-2">
            <input type="text" v-model='works[k].description' placeholder="Deskripsi" class="form-control" value="">
        </div>
        <div class="col-md-2">
                <button type='button' @click='removeWork(k)' class="btn btn-danger btn-sm">
                    <i class='material-icons'>delete</i>
                </button>
            </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button type='button' class="btn btn-primary" @click='addMoreWork'>Tambah</button>
        <button type='button' class="btn btn-success" @click='submitWork'>Simpan</button>
      </div>
    </div>
  </div>
 
</template>

<script>
export default {
  props : ['eb'],
  data(){
    return {
      works : [],
      work_template: {
        company_name : '',
        work_type : '',
        description : '',
        start : '',
        end : ''
      },
    }
  },
  mounted(){
    let vm = this;
    let _data = JSON.parse(this.eb)
    this.works = _data.map(function(row,key){
      return {
        id : _data[key].id,
        company : _data[key].company,
        work_type : _data[key].work_type,
        description : _data[key].description,
        start : _data[key].start,
        end : _data[key].end
      }
    })
    this.submitWork();
  },
  methods:{
    addMoreWork(){
      this.works.push({
        company : '',
        work_type : '',
        description : '',
        start : '',
        end : ''
      })
    },
    removeWork(i){
      this.$delete(this.works,i)
    },
    submitWork(){
      this.$emit('change', this.works)
    }

  }
}
</script>
