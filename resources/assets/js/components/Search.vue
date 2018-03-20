<template>
  <div class = "container">
<input  class = "form-control"  placeholder="اكتب نص الحديث هنا" type="text" v-model="postBody" v-on:keyup="doSearch()"/>
<ul>
  <li v-for="hadith in hadiths">
    {{ hadith._source.text[0]}}
</li>
</ul>

</div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      postBody: '',
      hadiths :[],
      errors: [],
    }
  },
  methods: {
  doSearch () {
    console.log('start doing someting');
    axios.get('/hadith/search/text.0:"' + this.postBody + '"')
    .then( (response) => {
      this.hadiths = response.data.data.hits.hits ;
      console.log(this.hadiths);
    });
  }
}
}


</script>

<style>
h1 {
  color : green ;

}
</style>
