    new Vue({
    el: '#tarefaApp',

    data: {
        tarefa: {
            id: '',
            job_numero: '',
            t_area: '',
            bri_id: '',
            user_id: '',
            t_saida: '',
            t_entrada: '',
            t_obs: '',
            t_prioridade: '',
            t_nome: '',
            bri_secao: '',
            user_nome: '',
        }
    },

    methods: {
        buscar: function(ev)
        {   
            this.$http.get('/tarefas/pecas/json-tarefa.php?id='+ ev, function(tarefa){
                if(!tarefa.erro){
                    this.tarefa = tarefa;
                    console.log(tarefa);
                    jQuery(this.$$.t_nome).focus();
                } else {
                    jQuery(this.$$.t_nome).focus();
                }
            });
            
        }
    }
});

