<?php

/* default/index.html.twig */
class __TwigTemplate_414b32ffcf812314ab6f6f4ec932b815ec91e438653ecb658e5d481da4367d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce7420fbdee7573e8640f81fdb4fb754a0de07a4fc98e38d6b79d728c8210007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7420fbdee7573e8640f81fdb4fb754a0de07a4fc98e38d6b79d728c8210007->enter($__internal_ce7420fbdee7573e8640f81fdb4fb754a0de07a4fc98e38d6b79d728c8210007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1919702eb95716326acd4b8317d30dd28513ec059c97870a3fccee50d31604dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1919702eb95716326acd4b8317d30dd28513ec059c97870a3fccee50d31604dd->enter($__internal_1919702eb95716326acd4b8317d30dd28513ec059c97870a3fccee50d31604dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "</head>

<body class=\"homeBg\">
";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "

<!-- Page Content -->
    <div class=\"container mBottom30\">
        <!-- Projects Row -->
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <h1 class=\"page-header whiteColor\">Dernières planètes ajoutées</h1>
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bodies"]) ? $context["bodies"] : $this->getContext($context, "bodies")));
        foreach ($context['_seq'] as $context["_key"] => $context["body"]) {
            // line 93
            echo "                    <div class=\"col-md-12 col-xs-12 portfolio-item randomstar lined\">
                        <a class=\"linkHoverHome\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_show", array("id" => $this->getAttribute($context["body"], "id", array()))), "html", null, true);
            echo "\">
                            <img class=\"img-responsive\" src=\"";
            // line 95
            if ($this->getAttribute($this->getAttribute($context["body"], "typeID", array()), "picturePath", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["body"], "typeID", array()), "picturePath", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/p-uranus.png"), "html", null, true);
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["body"], "name", array()), "html", null, true);
            echo "\">
                            <div class=\"planet-informations\">
                                <h5>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["body"], "name", array()), "html", null, true);
            echo "</h5>
                                <p class=\"textBody\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["body"], "typeID", array()), "categorie", array()), "html", null, true);
            echo "<br>Découverte en ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["body"], "discovery", array()), "Y"), "html", null, true);
            echo "</p>
                                <div class=\"more\">
                                    <p>en savoir plus</p>
                                </div>
                            </div>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </div>

            <div class=\"col-md-6 col-xs-12\">
                <h1 class=\"page-header whiteColor\">Derniers articles du blog</h1>
              ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 111
            echo "                <div data-mh=\"my-group\" class=\"col-md-16 mTop30 recent-post\">
                    <h4 class=\"greyColor\"><b>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "postTitle", array()), "html", null, true);
            echo "</b></h4>
                    <!--<p><i class=\"paddingX5 fa fa-user\"></i> ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "userLogin", array()), "html", null, true);
            echo " <i class=\"paddingX5 fa fa-calendar\"></i> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "postDate", array()), "d/m/Y"), "html", null, true);
            echo "</p>-->
                    ";
            // line 114
            if ($this->getAttribute($context["article"], "postContent", array())) {
                // line 115
                echo "                        <p class=\"greyColor\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["article"], "postContent", array())), 0, 300), "html", null, true);
                echo "...</p>
                    ";
            }
            // line 117
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "guid", array()), "html", null, true);
            echo "\" class=\"buttonLink mTop5\">Lire l'article</a>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            </div>
            <!-- /.row -->
        </div>

</div>


<footer id=\"footer\">
  ";
        // line 128
        $this->displayBlock('footer', $context, $blocks);
        // line 139
        echo "</footer>

</body>
</html>
";
        
        $__internal_ce7420fbdee7573e8640f81fdb4fb754a0de07a4fc98e38d6b79d728c8210007->leave($__internal_ce7420fbdee7573e8640f81fdb4fb754a0de07a4fc98e38d6b79d728c8210007_prof);

        
        $__internal_1919702eb95716326acd4b8317d30dd28513ec059c97870a3fccee50d31604dd->leave($__internal_1919702eb95716326acd4b8317d30dd28513ec059c97870a3fccee50d31604dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b940f22d21bb1678fba719371934393d353925fb19f50dd57af5130618c1f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b940f22d21bb1678fba719371934393d353925fb19f50dd57af5130618c1f07->enter($__internal_1b940f22d21bb1678fba719371934393d353925fb19f50dd57af5130618c1f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2e6f4dfa4e5723c55ca1cb635bc1d3309dfaf2d16fb7456bd185c2a126f0927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e6f4dfa4e5723c55ca1cb635bc1d3309dfaf2d16fb7456bd185c2a126f0927->enter($__internal_b2e6f4dfa4e5723c55ca1cb635bc1d3309dfaf2d16fb7456bd185c2a126f0927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'encyclopédie des mondes extérieurs";
        
        $__internal_b2e6f4dfa4e5723c55ca1cb635bc1d3309dfaf2d16fb7456bd185c2a126f0927->leave($__internal_b2e6f4dfa4e5723c55ca1cb635bc1d3309dfaf2d16fb7456bd185c2a126f0927_prof);

        
        $__internal_1b940f22d21bb1678fba719371934393d353925fb19f50dd57af5130618c1f07->leave($__internal_1b940f22d21bb1678fba719371934393d353925fb19f50dd57af5130618c1f07_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80e0f30ed633b5a4817b39e1cf36fd44446aac1675e7d6635c5b48495fead60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e0f30ed633b5a4817b39e1cf36fd44446aac1675e7d6635c5b48495fead60b->enter($__internal_80e0f30ed633b5a4817b39e1cf36fd44446aac1675e7d6635c5b48495fead60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6dafcec9028b8f9d434c174da20b94ba2535e5b836477d19a82df1c8ae9a9b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dafcec9028b8f9d434c174da20b94ba2535e5b836477d19a82df1c8ae9a9b97->enter($__internal_6dafcec9028b8f9d434c174da20b94ba2535e5b836477d19a82df1c8ae9a9b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/themesite/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/helpers.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/wp-content/themes/illdy/layout/css/main.css\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css\" />
        <link rel='stylesheet' id='font-awesome-css'  href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/wp-content/themes/illdy/layout/css/font-awesome.min.css?ver=4.5.0\" type='text/css' media='all' />
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
    ";
        
        $__internal_6dafcec9028b8f9d434c174da20b94ba2535e5b836477d19a82df1c8ae9a9b97->leave($__internal_6dafcec9028b8f9d434c174da20b94ba2535e5b836477d19a82df1c8ae9a9b97_prof);

        
        $__internal_80e0f30ed633b5a4817b39e1cf36fd44446aac1675e7d6635c5b48495fead60b->leave($__internal_80e0f30ed633b5a4817b39e1cf36fd44446aac1675e7d6635c5b48495fead60b_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b2a85f344516a70e43741f524c567b5cbc24a8f0e437d076804de0ac15f7a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2a85f344516a70e43741f524c567b5cbc24a8f0e437d076804de0ac15f7a5c->enter($__internal_0b2a85f344516a70e43741f524c567b5cbc24a8f0e437d076804de0ac15f7a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a297102356c71c43c1181903559ff72c89ca0f62bba53a56c1795fc672d1589e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a297102356c71c43c1181903559ff72c89ca0f62bba53a56c1795fc672d1589e->enter($__internal_a297102356c71c43c1181903559ff72c89ca0f62bba53a56c1795fc672d1589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/equalHeight.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/scripts.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_a297102356c71c43c1181903559ff72c89ca0f62bba53a56c1795fc672d1589e->leave($__internal_a297102356c71c43c1181903559ff72c89ca0f62bba53a56c1795fc672d1589e_prof);

        
        $__internal_0b2a85f344516a70e43741f524c567b5cbc24a8f0e437d076804de0ac15f7a5c->leave($__internal_0b2a85f344516a70e43741f524c567b5cbc24a8f0e437d076804de0ac15f7a5c_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_63b496dcbcea195aa816d10a32c79161e918bc4f82309eeef0c550a252cb1780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b496dcbcea195aa816d10a32c79161e918bc4f82309eeef0c550a252cb1780->enter($__internal_63b496dcbcea195aa816d10a32c79161e918bc4f82309eeef0c550a252cb1780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd30cd6df8f9b3367c0b2784921d4f1fcec0790c815230e5a1a3f5db18af384a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd30cd6df8f9b3367c0b2784921d4f1fcec0790c815230e5a1a3f5db18af384a->enter($__internal_bd30cd6df8f9b3367c0b2784921d4f1fcec0790c815230e5a1a3f5db18af384a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<header id=\"header\" class=\"header-blog\" style=\"background-image: url('http://extrasolar.fr/blog/wp-content/uploads/2017/05/cropped-background-space-7.jpg');background-attachment: fixed;\">
    <div class=\"top-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-2 col-xs-8\">

                    <a href=\"/\" title=\"Extrasolar\" class=\"header-logo\">Extrasolar</a>

                </div><!--/.col-sm-2-->
                <div class=\"col-sm-10 col-xs-4\">
                    <nav class=\"header-navigation\">
                        <ul class=\"clearfix\">
                            <li id=\"menu-item-1157\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"/\"><span>Accueil</span></a></li>
                            <li id=\"menu-item-1156\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"/catalogue\"><span>Catalogue</span></a></li>
                            <li id=\"menu-item-1146\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Blog</span></a></li>
                            <li id=\"menu-item-1147\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/communaute/\"><span>Communauté</span></a></li>
                            <li id=\"menu-item-1148\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/contact/\"><span>Contact</span></a></li>
                        </ul><!--/.clearfix-->
                    </nav><!--/.header-navigation-->
                    <button class=\"open-responsive-menu\"><i class=\"fa fa-bars\"></i></button>
                </div><!--/.col-sm-10-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.top-header-->
    <nav class=\"responsive-menu\">
        <ul>
            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Portail</span></a></li>
            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Catalogue</span></a></li>
            <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/blog/\"><span>Blog</span></a></li>
            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/blog/communaute/\"><span>Communauté</span></a></li>
            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/blog/contact/\"><span>Contact</span></a></li>
        </ul>
    </nav><!--/.responsive-menu-->
    <div class=\"bottom-header blog\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <h2>";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
                </div><!--/.col-sm-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.bottom-header.blog-->
</header><!--/#header-->

";
        
        $__internal_bd30cd6df8f9b3367c0b2784921d4f1fcec0790c815230e5a1a3f5db18af384a->leave($__internal_bd30cd6df8f9b3367c0b2784921d4f1fcec0790c815230e5a1a3f5db18af384a_prof);

        
        $__internal_63b496dcbcea195aa816d10a32c79161e918bc4f82309eeef0c550a252cb1780->leave($__internal_63b496dcbcea195aa816d10a32c79161e918bc4f82309eeef0c550a252cb1780_prof);

    }

    // line 128
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dee16a62879588fcf27f386d134afc136970dd3171d403a9684e7851a9337626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee16a62879588fcf27f386d134afc136970dd3171d403a9684e7851a9337626->enter($__internal_dee16a62879588fcf27f386d134afc136970dd3171d403a9684e7851a9337626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c56562b5b09c7eab2ba6e2e70563de2621a8ab4f2543bb896f028664ba407c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56562b5b09c7eab2ba6e2e70563de2621a8ab4f2543bb896f028664ba407c68->enter($__internal_c56562b5b09c7eab2ba6e2e70563de2621a8ab4f2543bb896f028664ba407c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 129
        echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p>
            <span>Extrasolar.fr de <a href=\"http://www.extrasolar.fr/\">Alexandre Lomaev</a> est mis à disposition selon les termes de la <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">licence Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0 International. Licence Creative Commons</a><span>
          </p>
        </div>
      </div>
    </div>
  ";
        
        $__internal_c56562b5b09c7eab2ba6e2e70563de2621a8ab4f2543bb896f028664ba407c68->leave($__internal_c56562b5b09c7eab2ba6e2e70563de2621a8ab4f2543bb896f028664ba407c68_prof);

        
        $__internal_dee16a62879588fcf27f386d134afc136970dd3171d403a9684e7851a9337626->leave($__internal_dee16a62879588fcf27f386d134afc136970dd3171d403a9684e7851a9337626_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 129,  373 => 128,  355 => 76,  345 => 69,  341 => 68,  337 => 67,  333 => 66,  329 => 65,  316 => 55,  312 => 54,  308 => 53,  292 => 39,  283 => 38,  270 => 32,  265 => 30,  261 => 29,  257 => 28,  248 => 21,  239 => 20,  226 => 16,  220 => 13,  216 => 12,  212 => 11,  208 => 10,  205 => 9,  196 => 8,  178 => 5,  164 => 139,  162 => 128,  152 => 120,  142 => 117,  136 => 115,  134 => 114,  128 => 113,  124 => 112,  121 => 111,  117 => 110,  111 => 106,  95 => 98,  91 => 97,  80 => 95,  76 => 94,  73 => 93,  69 => 92,  59 => 84,  57 => 38,  52 => 35,  50 => 20,  47 => 19,  45 => 8,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}L'encyclopédie des mondes extérieurs{% endblock %}</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {% block stylesheets %}
        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/themesite/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/main.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/helpers.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ getRootURL() }}/wp-content/themes/illdy/layout/css/main.css\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css\" />
        <link rel='stylesheet' id='font-awesome-css'  href=\"{{ getRootURL() }}/wp-content/themes/illdy/layout/css/font-awesome.min.css?ver=4.5.0\" type='text/css' media='all' />
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
    {% endblock %}

    {% block javascripts %}

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"{{ asset('js/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/equalHeight.js') }}\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('/js/scripts.js') }}\"></script>

    {% endblock %}
</head>

<body class=\"homeBg\">
{% block body %}
<header id=\"header\" class=\"header-blog\" style=\"background-image: url('http://extrasolar.fr/blog/wp-content/uploads/2017/05/cropped-background-space-7.jpg');background-attachment: fixed;\">
    <div class=\"top-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-2 col-xs-8\">

                    <a href=\"/\" title=\"Extrasolar\" class=\"header-logo\">Extrasolar</a>

                </div><!--/.col-sm-2-->
                <div class=\"col-sm-10 col-xs-4\">
                    <nav class=\"header-navigation\">
                        <ul class=\"clearfix\">
                            <li id=\"menu-item-1157\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"/\"><span>Accueil</span></a></li>
                            <li id=\"menu-item-1156\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"/catalogue\"><span>Catalogue</span></a></li>
                            <li id=\"menu-item-1146\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"{{ getRootURL() }}\"><span>Blog</span></a></li>
                            <li id=\"menu-item-1147\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/communaute/\"><span>Communauté</span></a></li>
                            <li id=\"menu-item-1148\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/contact/\"><span>Contact</span></a></li>
                        </ul><!--/.clearfix-->
                    </nav><!--/.header-navigation-->
                    <button class=\"open-responsive-menu\"><i class=\"fa fa-bars\"></i></button>
                </div><!--/.col-sm-10-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.top-header-->
    <nav class=\"responsive-menu\">
        <ul>
            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ getRootURL() }}\"><span>Portail</span></a></li>
            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ getRootURL() }}\"><span>Catalogue</span></a></li>
            <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"{{ getRootURL() }}/blog/\"><span>Blog</span></a></li>
            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/blog/communaute/\"><span>Communauté</span></a></li>
            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/blog/contact/\"><span>Contact</span></a></li>
        </ul>
    </nav><!--/.responsive-menu-->
    <div class=\"bottom-header blog\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <h2>{{ title }}</h2>
                </div><!--/.col-sm-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.bottom-header.blog-->
</header><!--/#header-->

{% endblock %}


<!-- Page Content -->
    <div class=\"container mBottom30\">
        <!-- Projects Row -->
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <h1 class=\"page-header whiteColor\">Dernières planètes ajoutées</h1>
                {% for body in bodies %}
                    <div class=\"col-md-12 col-xs-12 portfolio-item randomstar lined\">
                        <a class=\"linkHoverHome\" href=\"{{ path('catalogue_show', { 'id': body.id }) }}\">
                            <img class=\"img-responsive\" src=\"{% if body.typeID.picturePath %}{{body.typeID.picturePath}}{% else %}{{ asset('/img/p-uranus.png') }}{% endif %}\" alt=\"{{ body.name }}\">
                            <div class=\"planet-informations\">
                                <h5>{{ body.name }}</h5>
                                <p class=\"textBody\">{{ body.typeID.categorie }}<br>Découverte en {{ body.discovery|date(\"Y\") }}</p>
                                <div class=\"more\">
                                    <p>en savoir plus</p>
                                </div>
                            </div>
                        </a>
                    </div>
                {% endfor %}
            </div>

            <div class=\"col-md-6 col-xs-12\">
                <h1 class=\"page-header whiteColor\">Derniers articles du blog</h1>
              {% for article in articles %}
                <div data-mh=\"my-group\" class=\"col-md-16 mTop30 recent-post\">
                    <h4 class=\"greyColor\"><b>{{ article.postTitle }}</b></h4>
                    <!--<p><i class=\"paddingX5 fa fa-user\"></i> {{ article.userLogin }} <i class=\"paddingX5 fa fa-calendar\"></i> {{ article.postDate|date(\"d/m/Y\") }}</p>-->
                    {% if article.postContent %}
                        <p class=\"greyColor\">{{ article.postContent|striptags[:300] }}...</p>
                    {% endif %}
                    <a href=\"{{ article.guid }}\" class=\"buttonLink mTop5\">Lire l'article</a>
                </div>
              {% endfor %}
            </div>
            <!-- /.row -->
        </div>

</div>


<footer id=\"footer\">
  {% block footer %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <p>
            <span>Extrasolar.fr de <a href=\"http://www.extrasolar.fr/\">Alexandre Lomaev</a> est mis à disposition selon les termes de la <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">licence Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0 International. Licence Creative Commons</a><span>
          </p>
        </div>
      </div>
    </div>
  {% endblock %}
</footer>

</body>
</html>
", "default/index.html.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/app/Resources/views/default/index.html.twig");
    }
}
