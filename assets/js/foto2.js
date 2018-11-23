document.getElementById("file2").onchange = function(e) {
	let reader = new FileReader();

  reader.onload = function(){
    let preview = document.getElementById('preview2'),
    		image = document.createElement('img');
				

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };

  reader.readAsDataURL(e.target.files[0]);
}
