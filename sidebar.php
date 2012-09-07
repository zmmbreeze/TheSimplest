<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

    <div class="right">
        <div class="side" role="complementary">
            <nav class="side-nav clearfix">
                <?php wp_page_menu( array( 'show_home' => 'Blog', 'sort_column' => 'menu_order' ) ); ?>
            </nav>

            <aside class="side-info">
                <dl>
                    <dt>
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/stylesheets/pic.jpg" alt="敏明君" width="64" height="64"/><br/>敏明
                    </dt>
                    <dd>
                    Web Developer<br/> #HTML, #CSS, #Javascript
                    </dd>
                    <dd>
                        <a href="https://github.com/zmmbreeze">Github</a>,
                        <a href="https://twitter.com/zhoumm">Twitter</a>,
                        <a href="http://weibo.com/zmmbreeze">Weibo</a>
                    </dd>
                    <dd class="side-info-email">
                        em1tYnJlZXplMDgyNUBnbWFpbC5jb20=
                    </dd>
                </dl>
                <?php get_search_form(); ?>
            </aside>

            <aside class="side-rss">
                <a href="<?php bloginfo( 'rss2_url' ); ?>">RSS</a>
            </aside>

            <aside class="side-project">
                <h2>Projects</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Version</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><a href="https://github.com/zmmbreeze/UBBParser">UBBParser</a></th>
                            <td>0.5</td>
                        </tr>
                        <tr>
                            <th><a href="https://github.com/zmmbreeze/OneTask">OneTask</a></th>
                            <td>0.1</td>
                        </tr>
                        <tr>
                            <th><a href="https://github.com/guokr/G.js">G.js</a></th>
                            <td>0.5</td>
                        </tr>
                        <tr>
                            <th><a href="https://github.com/guokr/guokr">guokr</a>/<a href="https://github.com/guokr/guokr-build">guokr-build</a></th>
                            <td>developing</td>
                        </tr>
                    </tbody>
                </table>
            </aside>

            <?php wp_list_bookmarks('category_before=<aside>&category_after=</aside>'); ?> 
        </div>
    </div>
