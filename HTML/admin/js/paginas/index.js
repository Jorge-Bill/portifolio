
function baixarNotificacoes(log_id){
      var log_id = log_id;
      if(log_id){
        var url = '/js/ajax/index/notificacoes.php?log_id='+log_id;
        $.get(url, function(dataReturn) {
           $('#notificacaoesArea').html(dataReturn);
        });
      }
    };
/******************************************/

var xhr=function(){var a={};return a.init=function(){return window.XMLHttpRequest?new XMLHttpRequest:void 0},a.get=function(b,c){var d=a.init();d.open("GET",b),d.send(),d.onreadystatechange=function(){200===d.status&&4===d.readyState&&c(d.responseText)}},{get:a.get}}();

document.addEventListener('DOMContentLoaded', function(){
    var  total_not= document.getElementsByClassName('ctnots')[0];
    window.setInterval(function(){
        xhr.get('/notify/app/requests.php?acao=verificar', function(total){
            total_not.innerHTML = total;
        });
        xhr.get('/notify/app/requests.php?acao=getnew', function(alerta){
            if(alerta != 'nao'){
                var mensagem = alerta.split( ";");                
                switch (mensagem[0]) {
                    case "warning":   toastr.warning(mensagem[1], mensagem[2]);   break;
                    case "success":   toastr.success(mensagem[1], mensagem[2]);   break;
                    case "error":     toastr.error(mensagem[1],   mensagem[2]);   break;
                }
            }    
        });
           
    }, 5000);
});

