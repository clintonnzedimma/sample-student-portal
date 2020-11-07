function PreviewImage(){
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("fileToUpload").files[0]);

	oFReader.onload = function (oFREvent) {
		document.getElementById("uploadPreview").src = oFREvent.target.result;
	};
};




