<?php

return [
    'about_assets_title'           => 'Sobre os artigos',
    'about_assets_text'            => 'Artigos são itens seguidos por números de serie ou "asset tags". Eles tendem a ser itens de maior valor, onde a identificação de um item específico importa.',
    'archived'  				=> 'Arquivado',
    'asset'  					=> 'Ativo',
    'bulk_checkout'             => 'Saída em massa',
    'bulk_checkin'              => 'Bulk Checkin',
    'checkin'  					=> 'Devolver Ativo',
    'checkout'  				=> 'Ativo de compras',
    'clone'  					=> 'Clonar Ativo',
    'deployable'  				=> 'Implementável',
    'deleted'  					=> 'Este ativo foi excluído.',
    'delete_confirm'            => 'Tem a certeza de que pretende eliminar este equipamento?',
    'edit'  					=> 'Editar artigo',
    'model_deleted'  			=> 'Este modelo de artigo foi excluído. Deve restaurar o modelo antes de restaurar o artigo.',
    'model_invalid'             => 'O modelo deste artigo é inválido.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'Solicitavel',
    'requested'				    => 'Requisitado',
    'not_requestable'           => 'Não solicitável',
    'requestable_status_warning' => 'Não altere o estado solicitável',
    'restore'  					=> 'Restaurar ativo',
    'pending'  					=> 'Pendente',
    'undeployable'  			=> 'Não implementável',
    'undeployable_tooltip'  	=> 'Este artigo possui uma etiqueta de estado que não é implantável e não pode ser entregue no momento.',
    'view'  					=> 'Ver Artigo',
    'csv_error' => 'Tem um erro no ficheiro CSV:',
    'import_text' => '<p>Upload de um CSV que contém o histórico de ativos. Os ativos e usuários já existem no sistema, ou serão ignorados. Correspondência de mídias para o histórico de importação acontece com a tag de conteúdo. Tentaremos encontrar um usuário correspondente com base no nome de usuário que você fornece, e nos critérios que você selecionar abaixo. Se você não selecionar nenhum critério abaixo, ele simplesmente tentará combinar com o formato de nome de usuário configurado na <code>Administração &gt; Configurações Gerais</code>.</p><p>Campos incluídos no CSV devem corresponder aos cabeçalhos: <strong>Marcador de Ativo, Nome, Data de Finalização, Data de Entrada</strong>. Quaisquer campos adicionais serão ignorados. </p><p>Data de check-in: em branco ou em datas futuras de check-in fará check-in dos itens para o usuário associado. Excluindo a coluna Data de check-in criará uma data de check-in com a data de hoje.</p>
    ',
    'csv_import_match_f-l' => 'Tente corresponder aos usuários por <strong>firstname.lastname</strong> (<code>jane.smith</code>) formato',
    'csv_import_match_initial_last' => 'Tente coincidir com os usuários do formato <strong>primeiro sobrenome</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Tente corresponder aos usuários pelo formato <strong>primeiro nome</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Tentar corresponder usuários por <strong>email</strong> como nome de usuário',
    'csv_import_match_username' => 'Tente corresponder aos usuários do nome <strong>nome de usuário</strong>',
    'error_messages' => 'Mensagens de erro:',
    'success_messages' => 'Mensagens de sucesso:',
    'alert_details' => 'Por favor, veja abaixo para detalhes.',
    'custom_export' => 'Exportação Personalizada',
    'mfg_warranty_lookup' => ':fabricante busca por estado de garantia',
    'user_department' => 'Departamento do Utilizador',
];
