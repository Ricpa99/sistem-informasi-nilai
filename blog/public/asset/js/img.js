function previewImg(){
      const img = document.querySelector('#image')
      const imgPreview  = document.querySelector('.img-preview ')
      const ofReader  = new FileReader();
      ofReader .readAsDataURL(img.files[0]);
      ofReader.onload = function(parameter_el){
      imgPreview.src = parameter_el.target.result;}
}