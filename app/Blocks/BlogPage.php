<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlogPage extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'BlogPage';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple BlogPage block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'custom';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'items' => [
            ['item' => 'Item one'],
            ['item' => 'Item two'],
            ['item' => 'Item three'],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'b_title' => get_field('blog title'),
            'b_content' => get_field('blog content'),
            's_title' => get_field('study title'),
            's_content' => get_field('study content'),
            'blog' => $this->blog(),
            'studies' => $this->studies(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $blogPage = new FieldsBuilder('blog_page');

        $blogPage
            ->addText('blog title')
            ->addWysiwyg('blog content')
            ->addText('study title')
            ->addWysiwyg('study content');

        return $blogPage->build();
    }

    public function blog() {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'category__not_in' => 3,
        );

        $posts = new \WP_Query($args);

        $post_data = [];
        while($posts->have_posts()): $posts->the_post();
        
        $id = get_the_ID();

        $post_data[] = [
            'title' => get_the_title(),
            'link' => get_the_permalink(),
            'image' => get_the_post_thumbnail_url(),
        ];

        endwhile;
        wp_reset_query();

        return $post_data;
    }

    public function studies() {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'category__in' => 3,
        );

        $posts = new \WP_Query($args);

        $post_data = [];
        while($posts->have_posts()): $posts->the_post();
        
        $id = get_the_ID();

        $post_data[] = [
            'title' => get_the_title(),
            'link' => get_the_permalink(),
            'image' => get_the_post_thumbnail_url(),
        ];

        endwhile;
        wp_reset_query();

        return $post_data;
    }


}
