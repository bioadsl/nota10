var myViewModel = function()
{
    /*definição de propriedades*/
    this.numberOfClicks = ko.observable(0);
	this.vezes = ko.observable(3);
	this.acertos = ko.observable(0);
	this.erros = ko.observable(0);
	this.resposta = ko.observable();
    this.valorA = ko.observable(Math.floor((Math.random()*6)+1));
    this.valorB = ko.observable(Math.floor((Math.random()*6)+1));
	
	/*funções*/
	
	 this.resetValues = function() {
		this.valorA( Math.floor((Math.random()*6)+1));
		this.valorB( Math.floor((Math.random()*6)+1));
		this.resposta(null);	
    };
	
	
	this.Total = ko.computed(function() {
        return this.valorA() + this.valorB();
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
		this.resetValues();
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
		}
		else
		{
			this.erros(this.erros() + 1);
			resultado.addClass('errado');
			resultado.text('A resposta correta e : ' + Math.round(this.Total()));
		}
		
		this.resetValues();
    };
};

