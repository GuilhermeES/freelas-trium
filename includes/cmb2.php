<?php

function prefix_sanitize_text_callback( $value, $field_args, $field ) {

    $value = strip_tags( $value, '<p><a><br><br/><strong></strong><mark></mark>' );

    return $value;
}

function prefix_sanitize_text_callback_li( $value, $field_args, $field ) {

    $value = strip_tags( $value, '<li></li><a></a>' );

    return $value;
}

//CMB2 Fields
function get_field($key, $page_id = 0)
{
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0)
{
    echo get_field($key, $page_id);
}

function cmb2_sample_metaboxes()
{


    $cmb_post = new_cmb2_box( array(
        'id'            => 'cmb_post',
        'title'         => __( 'Seção Conteudo', 'cmb2' ),
        'object_types'  => array('post'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_post_group = $cmb_post->add_field(array(
        'id' => 'cmb_post_group',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Conteudo {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'closed' => true,
    ),));

    $cmb_post->add_group_field($cmb_post_group, array(
        'name' => 'Conteudo',
        'id' => 'conteudo',
        'type' => 'wysiwyg',
    ));

    $cmb_post->add_group_field($cmb_post_group, array(
        'name' => 'Conteudo ao lado esquerdo',
        'id' => 'esquerdo',
        'type' => 'file',
    ));

    $cmb_post->add_group_field($cmb_post_group, array(
        'name' => 'Informação',
        'id' => 'esquerdo_info',
        'type' => 'textarea',
    ));

    $cmb_post->add_group_field($cmb_post_group, array(
        'name' => 'Conteudo ao lado direito ',
        'id' => 'direito',
        'type' => 'file',
    ));

    $cmb_post->add_group_field($cmb_post_group, array(
        'name' => 'Informação',
        'id' => 'direito_info',
        'type' => 'textarea',
    ));

    $cmb_post_autor = new_cmb2_box( array(
        'id'            => 'cmb_post_autor',
        'title'         => __( 'Seção Autor Alternativo', 'cmb2' ),
        'object_types'  => array('post'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_post_autor->add_field(array(
        'name' => 'Nome',
        'type' => 'text',
        'id' => 'nome_autor_alternativo'
    ));

    $cmb_post_autor->add_field(array(
        'name' => 'Logo',
        'type' => 'file',
        'id' => 'img_autor_alternativo'
    ));

    /*DENIFICIOES---------------------------------------------------------------------------------------------*/

    $cmb_options = new_cmb2_box(array(
        'id' => 'opcoes_main',
        'title' => 'Definições Gerais',
        'object_types' => array('options-page'),
        'option_key' => 'opcoes_main',
        'tab_group' => 'opcoes_main',
    ));

    $cmb_options->add_field(array(
        'name' => 'Link global',
        'type' => 'title',
        'id' => 'link_title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Link',
        'type' => 'text',
        'id' => 'link_global'
    ));

    /*INFO---------------------------------------------------------------------------------------------*/

    $cmb_options->add_field(array(
        'name' => 'Informação',
        'type' => 'title',
        'id' => 'title_info'
    ));

    $cmb_options->add_field(array(
        'name' => 'NPS',
        'type' => 'text',
        'id' => 'title_nps'
    ));

    $cmb_options->add_field(array(
        'name' => 'Sob custódia',
        'type' => 'text',
        'id' => 'title_sob'
    ));

    /*LOGOS---------------------------------------------------------------------------------------------*/
    $cmb_options->add_field(array(
        'name' => 'Logos',
        'type' => 'title',
        'id' => 'title_logos'
    ));

    $cmb_options->add_field(array(
        'name' => 'Logo Footer',
        'type' => 'file',
        'id' => 'logo_footer'
    ));

    $cmb_options->add_field(array(
        'name' => 'Logo Header',
        'type' => 'file',
        'id' => 'logo_header'
    ));


    /*SOCIAL MEDIA-----------------------------------------------------------------------------------------*/
    $cmb_options->add_field(array(
        'name' => 'Redes sociais',
        'type' => 'title',
        'id' => 'redes_sociais'
    ));

    $cmb_options->add_field(array(
        'name' => 'Facebook',
        'id' => 'facebook',
        'type' => 'text_url',
    ));

    $cmb_options->add_field(array(
        'name' => 'Instagram',
        'id' => 'instagram',
        'type' => 'text_url',
    ));
    $cmb_options->add_field(array(
        'name' => 'Linkedin',
        'id' => 'linkedin',
        'type' => 'text_url',
    ));


       /*WHATSAPP------------------------------------*/
       $cmb_options->add_field(array(
        'name' => 'Whatsapp',
        'type' => 'title',
        'id' => 'wpp_header'
    ));

    $cmb_options->add_field(array(
        'name' => 'Whatsapp',
        'id' => 'whatsapp',
        'type' => 'text',
    ));
    
    /*EMAILS-----------------------------------------------------------------------------------------*/
    $cmb_options->add_field(array(
        'name' => 'Emails',
        'type' => 'title',
        'id' => 'email_header'
    ));

    $emails_group = $cmb_options->add_field(array(
        'id' => 'emails',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Email {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'closed' => true,
        ),));

    $cmb_options->add_group_field($emails_group, array(
        'name' => 'Email',
        'id' => 'email_input',
        'type' => 'text_email',
    ));

    /*PHONES-----------------------------------------------------------------------------------------*/
     $cmb_options->add_field(array(
        'name' => 'Telefones',
        'type' => 'title',
        'id' => 'telefone_header'
    ));

    $telefones_group = $cmb_options->add_field(array(
        'id' => 'telefones',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Telefone {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'closed' => true,
        ),));

    $cmb_options->add_group_field($telefones_group, array(
        'name' => 'Telefone',
        'id' => 'telefone_input',
        'type' => 'text',
    ));

    /*ADDRESS-----------------------------------------------------------------------------------------*/
    $cmb_options->add_field(array(
        'name' => 'Endereço',
        'type' => 'title',
        'id' => 'endereco_title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Endereço',
        'id' => 'endereco',
        'type' => 'text',
    ));

    $cmb_options->add_field(array(
        'name' => 'Endereço link',
        'id' => 'address_link',
        'type' => 'text_url',
    ));

    /*COPY-----------------------------------------------------------------------------------------*/
    $cmb_options->add_field(array(
        'name' => 'Copy',
        'type' => 'title',
        'id' => 'copy_title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Copy',
        'id' => 'copy',
        'type' => 'textarea',
    ));

    /*PUBLICATIONS-----------------------------------------------------------------------------------------*/

    $cmb_publications = new_cmb2_box( array(
        'id'            => 'publications',
        'title'         => __( 'Seção Título', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'publicacoes.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_publications->add_field(array(
        'name' => 'Título',
        'id' => 'title',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    /*PUBLICATIONS-----------------------------------------------------------------------------------------*/

    $cmb_doubt = new_cmb2_box( array(
        'id'            => 'doubt',
        'title'         => __( 'Seção Título', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'duvidas.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_doubt->add_field(array(
        'name' => 'Título',
        'id' => 'title',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_doubt = new_cmb2_box( array(
        'id'            => 'doubt_questions',
        'title'         => __( 'Seção Dúvidas', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'duvidas.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_doubt->add_field(array(
        'name' => 'Título',
        'id' => 'title_questions',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $doubt_group = $cmb_doubt->add_field(array(
        'id' => 'questions',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Dúvida {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'closed' => true,
    ),));

    $cmb_doubt->add_group_field($doubt_group, array(
        'name' => 'Pergunta',
        'id' => 'pergunta',
        'type' => 'text',
    ));

    $cmb_doubt->add_group_field($doubt_group, array(
        'name' => 'Resposta',
        'id' => 'resposta',
        'type' => 'wysiwyg',
    ));

    /*CONTACT-----------------------------------------------------------------------------------------*/
    $cmb_contact = new_cmb2_box( array(
        'id'            => 'contact_title',
        'title'         => __( 'Seção Título', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'contato.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_contact->add_field(array(
        'name' => 'Título',
        'id' => 'title_contact',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    /*advisory-----------------------------------------------------------------------------------------*/
    $cmb_advisory = new_cmb2_box( array(
        'id'            => 'advisory',
        'title'         => __( 'Seção Título', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'assessoria.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_advisory->add_field(array(
        'name' => 'Título',
        'id' => 'title',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_advisory->add_field(array(
        'name' => 'Subtitulo',
        'id' => 'subtitle',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_advisory = new_cmb2_box( array(
        'id'            => 'advisory_items',
        'title'         => __( 'Seção Para Você', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'assessoria.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );
    

    $cmb_advisory_group = $cmb_advisory->add_field(array(
        'id' => 'advisory_items_123',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Grupo {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'closed' => true,
    ),));

    $cmb_advisory->add_group_field($cmb_advisory_group, array(
        'name' => 'Informação',
        'id' => 'informacao',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_advisory->add_group_field($cmb_advisory_group, array(
        'name' => 'Resposta',
        'id' => 'resposta',
        'type' => 'textarea',
    ));

    $cmb_advisory = new_cmb2_box( array(
        'id'            => 'advisory_items_2',
        'title'         => __( 'Seção Para Empresas', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'assessoria.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_advisory_group = $cmb_advisory->add_field(array(
        'id' => 'advisory_items_123_2',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Grupo {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'closed' => true,
    ),));

    $cmb_advisory->add_group_field($cmb_advisory_group, array(
        'name' => 'Informação',
        'id' => 'informacao_2',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_advisory->add_group_field($cmb_advisory_group, array(
        'name' => 'Resposta',
        'id' => 'resposta_2',
        'type' => 'textarea',
    ));

    $cmb_advisory_education = new_cmb2_box( array(
        'id'            => 'advisory_education',
        'title'         => __( 'Seção Educação', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'assessoria.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );
    
    $cmb_advisory_education->add_field(array(
        'name' => 'Título',
        'id' => 'title_education_advisory',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_advisory_education->add_field(array(
        'name' => 'Subtitulo',
        'id' => 'subtitle_education_advisory',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_advisory_home = new_cmb2_box( array(
        'id'            => 'advisory_home',
        'title'         => __( 'Seção Educação', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'index.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );
    
    $cmb_advisory_home->add_field(array(
        'name' => 'Título',
        'id' => 'title_education_advisory',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_advisory_home->add_field(array(
        'name' => 'Subtitulo',
        'id' => 'subtitle_education_advisory',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    /*Banner-----------------------------------------------------------------------------------------*/
    $cmb_banner = new_cmb2_box( array(
        'id'            => 'banner',
        'title'         => __( 'Seção Banner', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'index.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_banner->add_field(array(
        'name' => 'Título',
        'id' => 'title',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Subtítulo',
        'id' => 'subtitle',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Imagem',
        'id' => 'image',
        'type' => 'file',
    ));

    /*Banner infos-----------------------------------------------------------------------------------------*/
    $cmb_banner = new_cmb2_box( array(
        'id'            => 'banner_info',
        'title'         => __( 'Seção Banner Informações', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'index.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_banner->add_field(array(
        'name' => 'Título',
        'id' => 'title_info',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Informação 1',
        'id' => 'banner_info_1',
        'type' => 'text',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Texto 1',
        'id' => 'banner_text_1',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Informação 2',
        'id' => 'banner_info_2',
        'type' => 'text',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Texto 2',
        'id' => 'banner_text_2',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Informação 3',
        'id' => 'banner_info_3',
        'type' => 'text',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Texto 3',
        'id' => 'banner_text_3',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

      /*TRIUM-----------------------------------------------------------------------------------------*/
      $cmb_trium = new_cmb2_box( array(
        'id'            => 'about',
        'title'         => __( 'Seção Sobre', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'index.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_trium->add_field(array(
        'name' => 'Título',
        'id' => 'title_about',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_trium->add_field(array(
        'name' => 'Para você',
        'id' => 'foryou',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_trium->add_field(array(
        'name' => 'Para empresas',
        'id' => 'enterprise',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_trium->add_field(array(
        'name' => 'Imagem',
        'id' => 'image_about',
        'type' => 'file',
    ));


    /*CARD-----------------------------------------------------------------------------------------*/
    $cmb_banner = new_cmb2_box( array(
        'id'            => 'card_home',
        'title'         => __( 'Seção Card', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'index.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_banner->add_field(array(
        'name' => 'Título',
        'id' => 'title_card_home',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_banner->add_field(array(
        'name' => 'Imagem',
        'id' => 'img_card_home',
        'type' => 'file',
    ));

    /*EDUCATION-----------------------------------------------------------------------------------------*/
    $cmb_education = new_cmb2_box( array(
        'id'            => 'education',
        'title'         => __( 'Seção Título', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'educacao.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_education->add_field(array(
        'name' => 'Título',
        'id' => 'title',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_education_last = new_cmb2_box( array(
        'id'            => 'cmb_education_last',
        'title'         => __( 'Seção Últimos Posts', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'educacao.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_education_last->add_field(array(
        'name' => 'Título',
        'id' => 'title_last',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta = new_cmb2_box( array(
        'id'            => 'cmb_cta',
        'title'         => __( 'Seção Materiais Ricos', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'educacao.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_cta->add_field(array(
        'name' => 'Título',
        'id' => 'title_cta',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Subtítulo',
        'id' => 'subtitle_cta',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Nome do botão',
        'id' => 'bota_cta',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Link',
        'id' => 'link_cta',
        'type' => 'text_url',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    /**/
    $cmb_cta->add_field(array(
        'name' => 'Título',
        'id' => 'title_cta_ebook',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Subtítulo',
        'id' => 'subtitle_cta_ebook',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Nome do botão',
        'id' => 'bota_cta_ebook',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Link',
        'id' => 'link_cta_ebook',
        'type' => 'text_url',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    /**/
    $cmb_cta->add_field(array(
        'name' => 'Título',
        'id' => 'title_cta_webinars',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Subtítulo',
        'id' => 'subtitle_cta_webinars',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Nome do botão',
        'id' => 'bota_cta_webinars',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cta->add_field(array(
        'name' => 'Link',
        'id' => 'link_cta_webinars',
        'type' => 'text_url',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_know = new_cmb2_box( array(
        'id'            => 'cmb_know',
        'title'         => __( 'Seção Conhecimento', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'educacao.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_know->add_field(array(
        'name' => 'Título',
        'id' => 'title_know',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_know->add_field(array(
        'name' => 'Subtítulo',
        'id' => 'subtitle_know',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    /*IFRAME YOUTUBE -------------------------------------------*/
    $cmb_youtube = new_cmb2_box( array(
        'id'            => 'iframe',
        'title'         => __( 'Iframe do Youtube', 'cmb2' ),
        'object_types' => array('videos'),
        'priority' => 'high',
    ) );

    $cmb_youtube->add_field( array(
        'name' => 'Youtube vídeo',
        'id' => 'iframe_youtube',
        'type' => 'text',
        'description' => 'Colar apenas o final do link, por exemplo um link <strong>https://www.youtube.com/watch?v=5R3eZqy-_gc</strong> <br>
        colar apenas 5R3eZqy-_gc&t
        '
    ) );

    /*PODCASTS  -------------------------------------------*/
    $cmb_podcast = new_cmb2_box( array(
        'id'            => 'cmb_podcast',
        'title'         => __( 'Link do Podcast', 'cmb2' ),
        'object_types' => array('podcasts'),
        'priority' => 'high',
    ) );

    $cmb_podcast->add_field( array(
        'name' => 'Link',
        'id' => 'link_podcast',
        'type' => 'text_url',
    ) );

    /*LAST POSTS-----------------------------------------------------------------------------------------*/
    $cmb_banner = new_cmb2_box( array(
        'id'            => 'last_posts_title',
        'title'         => __( 'Seção Últimos Posts', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'index.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_banner->add_field(array(
        'name' => 'Título',
        'id' => 'title_last_posts',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));
    
    /*COOKIES-----------------------------------------------------------------------------------------*/
    $cmb_cookies = new_cmb2_box( array(
        'id'            => 'cookies',
        'title'         => __( 'Seção Título', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'politica-de-cookies.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_cookies->add_field(array(
        'name' => 'Título',
        'id' => 'title',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_cookies_secoes = new_cmb2_box( array(
        'id'            => 'cookies_secoes',
        'title'         => __( 'Indíces', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'politica-de-cookies.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_cookies_group = $cmb_cookies_secoes->add_field(array(
        'id' => 'cmb_cookies_group',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Indíce {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'closed' => true,
    ),));

    $cmb_cookies_secoes->add_group_field($cmb_cookies_group, array(
        'name' => 'Indíce',
        'id' => 'indice_cookies',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));
    
    $cmb_cookies_secoes->add_group_field($cmb_cookies_group, array(
        'name' => 'Subindíces',
        'id' => 'subindice_cookies',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback_li',
    ));

    /*TRIUM-----------------------------------------------------------------------------------------*/
    $cmb_trium = new_cmb2_box( array(
        'id'            => 'trium',
        'title'         => __( 'Seção Banner', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'trium.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_trium->add_field(array(
        'name' => 'Título acima',
        'id' => 'title_up',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_trium->add_field(array(
        'name' => 'Título',
        'id' => 'title',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_trium->add_field(array(
        'name' => 'Imagem',
        'id' => 'Imagem',
        'type' => 'file',
    ));

    $cmb_trium_about = new_cmb2_box( array(
        'id'            => 'cmb_trium_about',
        'title'         => __( 'Seção Sobre', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'trium.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_trium_about->add_field(array(
        'name' => 'Título',
        'id' => 'title_trium_about',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_trium_about->add_field(array(
        'name' => 'Texto',
        'id' => 'text_trium_about',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_contributors = new_cmb2_box( array(
        'id'            => 'contributors',
        'title'         => __( 'Seção Colaboradores', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'trium.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );

    $cmb_contributors_group = $cmb_contributors->add_field(array(
        'id' => 'cmb_contributors_group',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Colaborador {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'closed' => true,
            'sortable'          => true,
    ),));

    $cmb_contributors->add_group_field($cmb_contributors_group, array(
        'name' => 'Nome',
        'id' => 'name_contributor',
        'type' => 'text',
    ));

    $cmb_contributors->add_group_field($cmb_contributors_group, array(
        'name' => 'Linkedin',
        'id' => 'linkedin_contributor',
        'type' => 'text_url',
    ));

    $cmb_contributors->add_group_field($cmb_contributors_group, array(
        'name' => 'Imagem',
        'id' => 'image_contributor',
        'type' => 'file',
    ));

    $cmb_trium_text = new_cmb2_box( array(
        'id'            => 'cmb_trium_text',
        'title'         => __( 'Seção Textos', 'cmb2' ),
        'object_types'  => array('page'),
        'show_on' 		=> 	array('key' => 'page-template', 'value' => 'trium.php'),
        'context'       => 'normal',
        'priority'      => 'high',
        'parent_slug'   => '',
        'position'      => 2,
        'show_names'    => true,
    ) );
   
    $cmb_trium_text->add_field(array(
        'name' => 'Titulo',
        'id' => 'title_trium_text',
        'type' => 'text',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));

    $cmb_trium_text->add_field(array(
        'name' => 'Texto',
        'id' => 'text_trium_text',
        'type' => 'textarea',
        'sanitization_cb' => 'prefix_sanitize_text_callback',
    ));
}

add_action('cmb2_admin_init', 'cmb2_sample_metaboxes');