import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage: 'Sube aqui nu imagen',
    acceptedFiles: ".png, .jpg, jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,
    init: function(){
      if (document.querySelector('[name="image"]').value.trim()) {
        const imagen = {};
        imagen.size = '';
        imagen.name = document.querySelector('[name="image"]').value;

        this.options.addedfile.call(this,imagen);
        this.options.thumbnail.call(this,imagen,`/uploads/${imagen.name}`);

        imagen.previewElement.classList.add('dz-success','dz-complete');
      }
    }
});

dropzone.on("success", (file,response) => {
  document.querySelector('[name="image"]').value = response.image;
});
dropzone.on("removedfile", (file,response) => {
  document.querySelector('[name="image"]').value = ''
});

