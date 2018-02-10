$(document).ready(function(){

	$('.btn').on({//cria funçao de quando clica no
		click: function(){//botao call-to-action,gera alguma açao
			openModal()
		}
	});

	$('.fecha-botao').on({//cria funçao de quando clica no
		click: function(){//botao X,gera alguma açao
			closeModal()
		}
	});

	$('.tab-modal').on({
		click: function(event){
			if(event.target == this)
			closeModal();
		}
	});

});//fim document.ready

function openModal(){
	$('html').addClass('modal-aberto');
}

function closeModal(){
	$('html').removeClass('modal-aberto');
}