<template>
<div>
    <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions" @vdropzone-complete="afterUpload"></vue-dropzone>
    
</div>
</template>

<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
export default {
    components: {
        vueDropzone: vue2Dropzone
    },
    data() {
        return {
            dropzoneOptions: {
                url: '/api/upload_images',
                thumbnailWidth: 150,
                maxFilesize: 50,
                parallelUploads:10,
                maxFiles:500,
               withCredentials:false,
          headers: { 'X-CSRF-Token': 'foo', }
            }
        }
    },

    methods: {
        afterUpload:async function(response) {
            console.log(response);
        }
    },
}
</script>

<style lang="scss" scoped>

</style>
