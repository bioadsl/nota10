var myViewModel = function()
{
    /*definição de propriedades*/
    this.numberOfClicks = ko.observable(0);
	this.vezes = ko.observable(10);
	this.acertos = ko.observable(0);
	this.erros = ko.observable(0);
	this.resposta = ko.observable();
    this.valorA = ko.observable();
    this.valorB = ko.observable();
	
	/*funções*/
	
    
    this.Init = function() {    	    	
    	do {
    		var a = Math.ceil((Math.random()*6)+4);
        	var b = Math.ceil((Math.random()*2)+1);
        	var c = a / b; // fica com o valor 2 (parte inteira da divisão)  
        	var d = a % b; // fica com o valor 3 (resto da divisão)
    		    		
		} while (a % b != 0);    	
    	
    	this.valorA(a);
    	this.valorB(b);
    };
        
	 this.resetValues = function() {		
		this.resposta(null);	
    };
	
	
	this.Total = ko.computed(function() {
        return this.valorA() / this.valorB();
    }, this);
	
	
	this.Media = ko.computed(function() {
		if (this.acertos() === 0)
			return 0;
			
        return (((this.acertos() )* 100) / this.vezes());
		
    }, this);

    this.Pontuacao = ko.computed(function() {
        if (this.acertos() === 0)
            return 0;

        return (((this.acertos() )* 100) * this.vezes());

    }, this);



	this.hasClickedTooManyTimes = ko.pureComputed(function() {
        return this.numberOfClicks() >= this.vezes();
    }, this);
	
	
	/*evento de click*/
	
	this.resetClicks = function(){
		this.numberOfClicks(0);
		
	}
	
	this.registerClick = function() {
	    this.numberOfClicks(this.numberOfClicks() + 1);
		var resultado = $('#resultado');
		resultado.removeClass('correto');
		resultado.removeClass('errado');
        if (this.Total() == this.resposta()){        	
			this.acertos(this.acertos() + 1);
			resultado.text('Correto !');
			resultado.addClass('correto');
			this.resetValues();
			this.Init();
		}
		else
		{
			this.erros(this.erros() + 1);
			resultado.addClass('errado');
			resultado.text('A resposta correta e : ' + Math.round(this.Total()));
			this.resetValues();
		}
		
		
    };
    
    this.Init();
};

