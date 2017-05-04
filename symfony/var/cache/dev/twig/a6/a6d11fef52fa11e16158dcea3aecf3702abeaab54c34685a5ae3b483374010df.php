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
        $__internal_ce1ebd406454fc6963d35ae099c5fa31106a2bf38d9d4c4e02f12cde671b2b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1ebd406454fc6963d35ae099c5fa31106a2bf38d9d4c4e02f12cde671b2b48->enter($__internal_ce1ebd406454fc6963d35ae099c5fa31106a2bf38d9d4c4e02f12cde671b2b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a78deef11c76aaf44c467358825549eea84b3ccfd379fe913f3196279606bb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78deef11c76aaf44c467358825549eea84b3ccfd379fe913f3196279606bb54->enter($__internal_a78deef11c76aaf44c467358825549eea84b3ccfd379fe913f3196279606bb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        
        $__internal_ce1ebd406454fc6963d35ae099c5fa31106a2bf38d9d4c4e02f12cde671b2b48->leave($__internal_ce1ebd406454fc6963d35ae099c5fa31106a2bf38d9d4c4e02f12cde671b2b48_prof);

        
        $__internal_a78deef11c76aaf44c467358825549eea84b3ccfd379fe913f3196279606bb54->leave($__internal_a78deef11c76aaf44c467358825549eea84b3ccfd379fe913f3196279606bb54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9037ee1f0c0a6d7055ee4c068e9841726314eab1147b9193809868efd71f0154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9037ee1f0c0a6d7055ee4c068e9841726314eab1147b9193809868efd71f0154->enter($__internal_9037ee1f0c0a6d7055ee4c068e9841726314eab1147b9193809868efd71f0154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ac0ef8b6e24a304ce3c23da844c93cbcd66699bd82a25261a94985a9acd973d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac0ef8b6e24a304ce3c23da844c93cbcd66699bd82a25261a94985a9acd973d->enter($__internal_4ac0ef8b6e24a304ce3c23da844c93cbcd66699bd82a25261a94985a9acd973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'encyclopédie des mondes extérieurs";
        
        $__internal_4ac0ef8b6e24a304ce3c23da844c93cbcd66699bd82a25261a94985a9acd973d->leave($__internal_4ac0ef8b6e24a304ce3c23da844c93cbcd66699bd82a25261a94985a9acd973d_prof);

        
        $__internal_9037ee1f0c0a6d7055ee4c068e9841726314eab1147b9193809868efd71f0154->leave($__internal_9037ee1f0c0a6d7055ee4c068e9841726314eab1147b9193809868efd71f0154_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20884412fc0da421debdb756363249e2727a69563964e78e7fc77d677abd6b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20884412fc0da421debdb756363249e2727a69563964e78e7fc77d677abd6b79->enter($__internal_20884412fc0da421debdb756363249e2727a69563964e78e7fc77d677abd6b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_193cf97a2b2a8cd7d866ae32560af99f4fc7c55e93af0ea12d86bc309ff98350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193cf97a2b2a8cd7d866ae32560af99f4fc7c55e93af0ea12d86bc309ff98350->enter($__internal_193cf97a2b2a8cd7d866ae32560af99f4fc7c55e93af0ea12d86bc309ff98350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_193cf97a2b2a8cd7d866ae32560af99f4fc7c55e93af0ea12d86bc309ff98350->leave($__internal_193cf97a2b2a8cd7d866ae32560af99f4fc7c55e93af0ea12d86bc309ff98350_prof);

        
        $__internal_20884412fc0da421debdb756363249e2727a69563964e78e7fc77d677abd6b79->leave($__internal_20884412fc0da421debdb756363249e2727a69563964e78e7fc77d677abd6b79_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad2d7415793477a651308cac27558f6e8706498e4f3a32343a6f7b6829d9f55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2d7415793477a651308cac27558f6e8706498e4f3a32343a6f7b6829d9f55b->enter($__internal_ad2d7415793477a651308cac27558f6e8706498e4f3a32343a6f7b6829d9f55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7bfcac4ec321167023b5c11adc7fd71843e5f2b302c19854c63fcd2ba0f770a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfcac4ec321167023b5c11adc7fd71843e5f2b302c19854c63fcd2ba0f770a8->enter($__internal_7bfcac4ec321167023b5c11adc7fd71843e5f2b302c19854c63fcd2ba0f770a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7bfcac4ec321167023b5c11adc7fd71843e5f2b302c19854c63fcd2ba0f770a8->leave($__internal_7bfcac4ec321167023b5c11adc7fd71843e5f2b302c19854c63fcd2ba0f770a8_prof);

        
        $__internal_ad2d7415793477a651308cac27558f6e8706498e4f3a32343a6f7b6829d9f55b->leave($__internal_ad2d7415793477a651308cac27558f6e8706498e4f3a32343a6f7b6829d9f55b_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_32814973315fc9e95a1744859086ced6c6c7d42d731f5b2a13dea13422cd302e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32814973315fc9e95a1744859086ced6c6c7d42d731f5b2a13dea13422cd302e->enter($__internal_32814973315fc9e95a1744859086ced6c6c7d42d731f5b2a13dea13422cd302e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29bf5360e5e6b45e671703f1a8e8a5ceada12013fba99ac3318a4d9778dde854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bf5360e5e6b45e671703f1a8e8a5ceada12013fba99ac3318a4d9778dde854->enter($__internal_29bf5360e5e6b45e671703f1a8e8a5ceada12013fba99ac3318a4d9778dde854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29bf5360e5e6b45e671703f1a8e8a5ceada12013fba99ac3318a4d9778dde854->leave($__internal_29bf5360e5e6b45e671703f1a8e8a5ceada12013fba99ac3318a4d9778dde854_prof);

        
        $__internal_32814973315fc9e95a1744859086ced6c6c7d42d731f5b2a13dea13422cd302e->leave($__internal_32814973315fc9e95a1744859086ced6c6c7d42d731f5b2a13dea13422cd302e_prof);

    }

    // line 128
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0d96f99f87782bf2ca3ee6e61b9ef3baa51934f42ab052161298819e499ba0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d96f99f87782bf2ca3ee6e61b9ef3baa51934f42ab052161298819e499ba0f8->enter($__internal_0d96f99f87782bf2ca3ee6e61b9ef3baa51934f42ab052161298819e499ba0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7ee67bd04e688bb1db89faf2504ebcb5b40611ee894ba2b54f6d3f08e36420ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee67bd04e688bb1db89faf2504ebcb5b40611ee894ba2b54f6d3f08e36420ed->enter($__internal_7ee67bd04e688bb1db89faf2504ebcb5b40611ee894ba2b54f6d3f08e36420ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_7ee67bd04e688bb1db89faf2504ebcb5b40611ee894ba2b54f6d3f08e36420ed->leave($__internal_7ee67bd04e688bb1db89faf2504ebcb5b40611ee894ba2b54f6d3f08e36420ed_prof);

        
        $__internal_0d96f99f87782bf2ca3ee6e61b9ef3baa51934f42ab052161298819e499ba0f8->leave($__internal_0d96f99f87782bf2ca3ee6e61b9ef3baa51934f42ab052161298819e499ba0f8_prof);

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
