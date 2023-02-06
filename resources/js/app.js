import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


//sidebar
const menuItems = document.querySelectorAll('.menu-items');


//remove active class from all menu items

const changeActiveItem = () =>{
	menuItems.forEarch(item => {
		item.classList.remove('active');
	})
}

menuItems.forEarch(item => {
	item.addEventListener('click',()=>{
		changeActiveItem();
		item.classList.add('active');
		if(item.id != 'notifications'){
			document.querySelector('.notifications-popup').style.display='none';
		}else{
			document.querySelector('.notifications-popup').style.display='block';
		}
	})
})
