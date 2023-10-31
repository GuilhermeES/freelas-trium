let menu_hamburguer = document.querySelector('.header__hamburguer');
let menu_hamburguer_open = document.querySelector('.header__hamburguer .open');
let menu_hamburguer_close = document.querySelector('.header__hamburguer .close');
let header__navigation = document.querySelector('.header__navigation');
let header = document.querySelector('.header');

menu_hamburguer.addEventListener('click', () => {
    header__navigation.classList.toggle('open');

    if(header__navigation.classList.contains('open')){
        menu_hamburguer_close.style.display = "block";
        menu_hamburguer_open.style.display = "none";
		header.classList.add('fixed')
    }
    else{
        menu_hamburguer_close.style.display = "none";
        menu_hamburguer_open.style.display = "block";
		header.classList.remove('fixed')
    }
})  

const faqItems = document.querySelectorAll('.faq__item');

if(faqItems){
	faqItems.forEach(el => {
		el.addEventListener('click', () => {

			if (el.classList.contains('active')) {
				el.classList.remove('active');
			} else {
				faqItems.forEach(element => {
					element.classList.remove('active');
				})
				el.classList.add('active');
			}
		})
	})
}


const advisoryCards = document.querySelectorAll('.advisory__card');

if(advisoryCards){
	advisoryCards.forEach(el => {
		el.addEventListener('click', () => {
			console.log(el)

			if (el.classList.contains('active')) {
				el.classList.remove('active');
			} 
			else {
				advisoryCards.forEach(element => {
					element.classList.remove('active');
					el.classList.add('active');
				})
				
			}
		})
	})
}

$('.last-posts-items').slick({
    infinite: true,
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 3000,
	touchThreshold: 1000,
    slidesToShow: 4,
	nextArrow: '<div class="slick-next"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z" fill="rgba(255,255,255,1)"></path></svg>  </div>',
	prevArrow: '<div class="slick-prev"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z" fill="rgba(255,255,255,1)"></path></svg> </div>',
	responsive: [
        {
            breakpoint: 1440,
            settings: {
			slidesToShow: 3,
            }
        },
		{
            breakpoint: 996,
            settings: {
			slidesToShow: 2,
			arrows: false,
            }
        },	
		{
            breakpoint: 576,
            settings: {
				slidesToShow: 1,
				arrows: false,
            }
        },
    ]
});

$('.cpt__items').slick({
    infinite: true,
    arrows: false,
    dots: false,
    autoplay: true,
	touchThreshold: 1000,
    autoplaySpeed: 3000,
    slidesToShow: 4,
	responsive: [
        {
            breakpoint: 1440,
            settings: {
			slidesToShow: 3,
            }
        },
		{
            breakpoint: 996,
            settings: {
			slidesToShow: 2,
			arrows: false,
            }
        },	
		{
            breakpoint: 576,
            settings: {
				slidesToShow: 1,
				arrows: false,
				variableWidth: true
            }
        },
    ]
});

$('.cpt__videos').slick({
    infinite: true,
    arrows: false,
	touchThreshold: 1000,
    dots: false,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 3,
	responsive: [
        {
            breakpoint: 1440,
            settings: {
			slidesToShow: 3,
            }
        },
		{
            breakpoint: 996,
            settings: {
			slidesToShow: 2,
			arrows: false,
            }
        },	
		{
            breakpoint: 576,
            settings: {
				slidesToShow: 1,
				arrows: false,
				variableWidth: true
            }
        },
    ]
});

/*MUDAR O PATH AQUI APOS SUBIR PARA PRODUCAO*/
let round_blue_desktop = document.querySelector('.round_blue_desktop');
if(round_blue_desktop){
	bodymovin.loadAnimation({
		container: round_blue_desktop,
		path: `../wp-content/themes/trium/assets/json/round_blue.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

/*MUDAR O PATH AQUI APOS SUBIR PARA PRODUCAO*/
let round_blue_mobile = document.querySelector('.round_blue_mobile');
if(round_blue_mobile){
	bodymovin.loadAnimation({
		container: round_blue_mobile,
		path: `../wp-content/themes/trium/assets/json/round_blue.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

/*MUDAR O PATH AQUI APOS SUBIR PARA PRODUCAO*/
let arrow_home = document.querySelector('.arrow_home');
if(arrow_home){
	bodymovin.loadAnimation({
		container: arrow_home,
		path: `../wp-content/themes/trium/assets/json/setas.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

/*MUDAR O PATH AQUI APOS SUBIR PARA PRODUCAO*/
let servir = document.querySelector('.servir');
if(servir){
	bodymovin.loadAnimation({
		container: servir,
		path: `../wp-content/themes/trium/assets/json/Servir.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

/*MUDAR O PATH AQUI APOS SUBIR PARA PRODUCAO*/
let investidor = document.querySelector('.investidor');
if(investidor){
	bodymovin.loadAnimation({
		container: investidor,
		path: `../wp-content/themes/trium/assets/json/Investidor.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

/*MUDAR O PATH AQUI APOS SUBIR PARA PRODUCAO*/
let assesoria = document.querySelector('.assesoria');
if(assesoria){
	bodymovin.loadAnimation({
		container: assesoria,
		path: `../wp-content/themes/trium/assets/json/Confianca.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

/*MUDAR O PATH AQUI APOS SUBIR PARA PRODUCAO*/

let education_json_home = document.querySelector('.education__json__home');
if(education_json_home){
	bodymovin.loadAnimation({
		container: education_json_home,
		path: `../wp-content/themes/trium/assets/json/educacao_financeira.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}


let round_yellow = document.querySelector('.round-yellow-json')
if(round_yellow){
	bodymovin.loadAnimation({
		container: round_yellow,
		path: `../wp-content/themes/trium/assets/json/round_yellow.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

let round_blue_education = document.querySelector('.round_blue_education')
if(round_blue_education){
	bodymovin.loadAnimation({
		container: round_blue_education,
		path: `../wp-content/themes/trium/assets/json/round_blue.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

let arrow = document.querySelector('.arrow');
if(arrow){
	bodymovin.loadAnimation({
		container: arrow,
		path: `../wp-content/themes/trium/assets/json/setas.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

let rounded_blue_trium = document.querySelector('.rounded_blue_trium');
if(rounded_blue_trium){
	bodymovin.loadAnimation({
		container: rounded_blue_trium,
		path: `../wp-content/themes/trium/assets/json/round_blue.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

let education_json = document.querySelector('.education__json');
if(education_json){
	bodymovin.loadAnimation({
		container: education_json,
		path: `../wp-content/themes/trium/assets/json/educacao_financeira.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

let arrow_trium = document.querySelector('.arrow_trium');
if(arrow_trium){
	bodymovin.loadAnimation({
		container: arrow_trium,
		path: `../wp-content/themes/trium/assets/json/setas.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}

let form_success = document.querySelector('.success__gif');
if(form_success){
	bodymovin.loadAnimation({
		container: form_success,
		path: `../wp-content/themes/trium/assets/json/Form.json`,
		render: 'svg',
		loop: true,
		autoplay: true
	})
}


let cookies_h2s = document.querySelectorAll('.content-pattern--cookie h2');
if(cookies_h2s){
	cookies_h2s.forEach((item, i) => {
		item.setAttribute('id', `indice${i}`)
	})
}
let cookies_h3s = document.querySelectorAll('.content-pattern--cookie h3');
if(cookies_h3s){
	cookies_h3s.forEach((item, i) => {
		item.setAttribute('id', `subindice${i}`)
	})
}

let cookies_indice = document.querySelectorAll('.politic__indice');
if(cookies_indice){
	cookies_indice.forEach((item, i) => {
		item.setAttribute('href', `#indice${i}`)
	})
}

let cookies_indice_li = document.querySelectorAll('.politic__subindice li a');
if(cookies_indice_li){
	cookies_indice_li.forEach((item, i) => {
		item.setAttribute('href', `#subindice${i}`)
	})
}

let indice = document.querySelector('.content-pattern--indices');
let btn_indice = document.querySelector('.politic__indice');

if(btn_indice && indice){
	btn_indice.addEventListener('click', (e) => {
		e.preventDefault()
		indice.classList.toggle('active')
		console.log('oi')
	})
}

document.addEventListener( 'wpcf7mailsent', function( event ) {
	document.querySelector('.success_form-btn').click()
}, false );
  