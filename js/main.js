$(".product").on('click', function () {
	let link = $(this).attr('href')

	window.location.href = link;
});

let realInp = document.querySelector('.inpFile');
let customInp = document.querySelector('.main-img');
customInp.addEventListener('click', function(){
	realInp.click();
});
let realInp1 = document.querySelector('.inpFile1');
let customInp1 = document.querySelector('.customInp1');
customInp1.addEventListener('click', function(){
	realInp1.click();
});
let realInp2 = document.querySelector('.inpFile2');
let customInp2 = document.querySelector('.customInp2');
customInp2.addEventListener('click', function(){
	realInp2.click();
});
let realInp3 = document.querySelector('.inpFile3');
let customInp3 = document.querySelector('.customInp3');
customInp3.addEventListener('click', function(){
	realInp3.click();
});
let realInp4 = document.querySelector('.inpFile4');
let customInp4 = document.querySelector('.customInp4');
customInp4.addEventListener('click', function(){
	realInp4.click();
});

let inpFile = document.querySelector('.inpFile');
inpFile.addEventListener('change', preview);
function preview(){
	let fileObject = this.files[0];
	let reader = new FileReader
	reader.readAsDataURL(fileObject);
	reader.onload = function(){
		let result = reader.result;
		let img = document.querySelector('.inpImage');
		img.setAttribute('src', result);
		document.querySelector('.main-img').style.background = 'none';
	}
};

let inpFile1 = document.querySelector('.inpFile1');
inpFile1.addEventListener('change', preview1);
function preview1(){
	let fileObject1 = this.files[0];
	let reader1 = new FileReader
	reader1.readAsDataURL(fileObject1);
	reader1.onload = function(){
		let result1 = reader1.result;
		let img1 = document.querySelector('.inpImage1');
		img1.setAttribute('src', result1);
	}
};

let inpFile2 = document.querySelector('.inpFile2');
inpFile2.addEventListener('change', preview2);
function preview2(){
	let fileObject2 = this.files[0];
	let reader2 = new FileReader
	reader2.readAsDataURL(fileObject2);
	reader2.onload = function(){
		let result2 = reader2.result;
		let img2 = document.querySelector('.inpImage2');
		img2.setAttribute('src', result2);
	}
};

let inpFile3 = document.querySelector('.inpFile3');
inpFile3.addEventListener('change', preview3);
function preview3(){
	let fileObject3 = this.files[0];
	let reader3 = new FileReader
	reader3.readAsDataURL(fileObject3);
	reader3.onload = function(){
		let result3 = reader3.result;
		let img3 = document.querySelector('.inpImage3');
		img3.setAttribute('src', result3);
	}
};
let inpFile4 = document.querySelector('.inpFile4');
inpFile4.addEventListener('change', preview4);
function preview4(){
	let fileObject4 = this.files[0];
	let reader4 = new FileReader
	reader4.readAsDataURL(fileObject4);
	reader4.onload = function(){
		let result4 = reader4.result;
		let img4 = document.querySelector('.inpImage4');
		img4.setAttribute('src', result4);
	}
};