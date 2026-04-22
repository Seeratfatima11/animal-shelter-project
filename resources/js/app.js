import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function(){

    document.querySelectorAll('.amount-btn').forEach(button => {
        button.addEventListener('click', function(){
            let amount = this.getAttribute('data-amount');
            document.querySelector('.custom-amount').value = '$' + amount;
        });
    });

});