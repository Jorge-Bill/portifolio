$(document).ready(function() {
    var table = $('#jobs').DataTable( {
        "ajax": {
            "url": "/php/gerar-planilha.php",
            "dataSrc": ""
        },
        "scrollY": 600,
      
        "columns": [
            { 'data': 'numero'         },  
            { 'data': 'nome'           },    
            { 'data': 'contato'        }, 
            { 'data': 'atendimento'    }, 
            { 'data': 'cliente'        }, 
            { 'data': 'status'         },  
            { 'data': 'observacoes'    },
            { 'data': 'favorito'       }
        ],
        "scrollCollapse": true,
        "paging":         false,
        "order": [[ 7, "desc" ]],
        "columnDefs": [
            {
                "targets": [ 6 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 7 ],
                "visible": false,
                "searchable": true
            },
        ],
        "createdRow": function ( row, data, index ) {
            if ( data['status'] == "Declinado" ) {
                $('td', row).addClass('text-danger');
            }
            if ( data['atendimento'] == "<?=$_SESSION['passaporte']->nome;?>" ) {
                $('td', row).addClass('bolder');
            }

            if ( data['favorito'] != '' ) {
                $('td', row).addClass('bolder');
            }

        },
    } );
   
    $('#jobs tbody').on('click', 'tr', function () {
        
        var data = table.row(this).data();

        if ( $(this).hasClass('linha-selecionada') ) {
            $(this).removeClass('linha-selecionada');
            $("#ferramentas").fadeOut();
        }
        else {
            table.$('tr.linha-selecionada').removeClass('linha-selecionada');
            $(this).addClass('linha-selecionada');
            $("#ferramentas").fadeIn();
            $("#bt-job").html(data['numero']);
            $("#bt-status").html(data['status']);
        }
        $("#bt-editar").attr("href",    "/job/editar/" + data['numero']);
        $("#bt-briefing").attr("href",  "/job/briefing/" + data['numero']);
        $("#bt-job").attr("href",       "/job/detalhe/" + data['numero']);
    } );

   $('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
        var column = table.column( $(this).attr('data-column') );
        column.visible( ! column.visible() );
    } );

    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                .search( this.value )
                .draw();
            }
        } );
    } );
} );

function alteraStatus(status){
    var numero = $('#bt-job').html();
    if(numero){
        var url = '/js/ajax/job/altera-status-job.php?numero='+numero+'&status='+status;
        $.get(url, function(dataReturn) {
            $('#bt-status').html(dataReturn);
            $('#jobs').DataTable().ajax.reload();
        });
    }
};