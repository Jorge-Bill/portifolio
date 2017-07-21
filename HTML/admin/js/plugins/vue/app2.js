new Vue({
    el: '#enderecoApp',

    data: {
        endereco: {
            cep: '',
            logradouro: '',
            bairro: '',
            localidade: '',
            uf: '',
        }
    },

    methods: {
        buscar: function(ev)
        {
            var objER = /^[0-9]{5}-[0-9]{3}$/,
            cep       = ev.currentTarget.value;

            if(objER.test(cep))
            {
                this.$http.get('http://viacep.com.br/ws/'+cep+'/json/', function(endereco){
                    if(!endereco.erro){
                        this.endereco = endereco;
                        jQuery(this.$$.logradouro).focus();
                    } else {
                        //this.$$.logradouro.val("Endereço não encontrado !");
                        jQuery(this.$$.logradouro).focus();
                    }
                });
            }
        }
    }
});

