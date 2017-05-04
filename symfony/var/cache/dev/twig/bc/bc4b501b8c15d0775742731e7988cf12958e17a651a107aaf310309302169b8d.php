<?php

/* base.html.twig */
class __TwigTemplate_34fc64c73d39b29097dcc3c158d22ecd09f58325207b65ab1df775155d242f69 extends Twig_Template
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
        $__internal_eb51d39fcd6b19f7c0c387962b97378dd87913bb35cb4be06e8bc456dd7a409c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb51d39fcd6b19f7c0c387962b97378dd87913bb35cb4be06e8bc456dd7a409c->enter($__internal_eb51d39fcd6b19f7c0c387962b97378dd87913bb35cb4be06e8bc456dd7a409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fab249c540cae2e7778b5228c628d1a396e433db1c3e0f627a6e15e6d95286a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab249c540cae2e7778b5228c628d1a396e433db1c3e0f627a6e15e6d95286a0->enter($__internal_fab249c540cae2e7778b5228c628d1a396e433db1c3e0f627a6e15e6d95286a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "</head>

<body>

<div style=\"display: flex; flex-direction: column; min-height: 100vh;\">
    <div class=\"content\" style=\"flex: 1;\">


    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "    </div>


    <footer id=\"footer\">
      ";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 105
        echo "    </footer>
</div>

</body>
</html>
";
        
        $__internal_eb51d39fcd6b19f7c0c387962b97378dd87913bb35cb4be06e8bc456dd7a409c->leave($__internal_eb51d39fcd6b19f7c0c387962b97378dd87913bb35cb4be06e8bc456dd7a409c_prof);

        
        $__internal_fab249c540cae2e7778b5228c628d1a396e433db1c3e0f627a6e15e6d95286a0->leave($__internal_fab249c540cae2e7778b5228c628d1a396e433db1c3e0f627a6e15e6d95286a0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_39030ae6b562cc1370bcf2ac258d033250dcce2e4a35d0cb90c6df89a94afd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39030ae6b562cc1370bcf2ac258d033250dcce2e4a35d0cb90c6df89a94afd1a->enter($__internal_39030ae6b562cc1370bcf2ac258d033250dcce2e4a35d0cb90c6df89a94afd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_092aced05bb82d641137ac59f197daa64d786fd291065b9c49784569eb7ce8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092aced05bb82d641137ac59f197daa64d786fd291065b9c49784569eb7ce8b8->enter($__internal_092aced05bb82d641137ac59f197daa64d786fd291065b9c49784569eb7ce8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_092aced05bb82d641137ac59f197daa64d786fd291065b9c49784569eb7ce8b8->leave($__internal_092aced05bb82d641137ac59f197daa64d786fd291065b9c49784569eb7ce8b8_prof);

        
        $__internal_39030ae6b562cc1370bcf2ac258d033250dcce2e4a35d0cb90c6df89a94afd1a->leave($__internal_39030ae6b562cc1370bcf2ac258d033250dcce2e4a35d0cb90c6df89a94afd1a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d48b643c1cd2f2fb29b0441339a7542ad50a4012148d141d287983fc03af94be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48b643c1cd2f2fb29b0441339a7542ad50a4012148d141d287983fc03af94be->enter($__internal_d48b643c1cd2f2fb29b0441339a7542ad50a4012148d141d287983fc03af94be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d664dce48e25af4a128e387c46c38a38bc2ededdbf3e235449179b562d79e501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d664dce48e25af4a128e387c46c38a38bc2ededdbf3e235449179b562d79e501->enter($__internal_d664dce48e25af4a128e387c46c38a38bc2ededdbf3e235449179b562d79e501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/themesite/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/helpers.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/wp-content/themes/illdy/layout/css/main.css\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css\" />
        <link rel='stylesheet' id='font-awesome-css'  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/wp-content/themes/illdy/layout/css/font-awesome.min.css?ver=4.5.0\" type='text/css' media='all' />
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
    ";
        
        $__internal_d664dce48e25af4a128e387c46c38a38bc2ededdbf3e235449179b562d79e501->leave($__internal_d664dce48e25af4a128e387c46c38a38bc2ededdbf3e235449179b562d79e501_prof);

        
        $__internal_d48b643c1cd2f2fb29b0441339a7542ad50a4012148d141d287983fc03af94be->leave($__internal_d48b643c1cd2f2fb29b0441339a7542ad50a4012148d141d287983fc03af94be_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2fe6f661a59e837cb5854ba998f0fb7c0e730498adf39a2bfa8ed924a425bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fe6f661a59e837cb5854ba998f0fb7c0e730498adf39a2bfa8ed924a425bbe->enter($__internal_e2fe6f661a59e837cb5854ba998f0fb7c0e730498adf39a2bfa8ed924a425bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f766c31f10a0b6cf6a3adae3910be3ec5d154d506353816ab8dcb8a8f8d0df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f766c31f10a0b6cf6a3adae3910be3ec5d154d506353816ab8dcb8a8f8d0df3->enter($__internal_5f766c31f10a0b6cf6a3adae3910be3ec5d154d506353816ab8dcb8a8f8d0df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
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
        
        $__internal_5f766c31f10a0b6cf6a3adae3910be3ec5d154d506353816ab8dcb8a8f8d0df3->leave($__internal_5f766c31f10a0b6cf6a3adae3910be3ec5d154d506353816ab8dcb8a8f8d0df3_prof);

        
        $__internal_e2fe6f661a59e837cb5854ba998f0fb7c0e730498adf39a2bfa8ed924a425bbe->leave($__internal_e2fe6f661a59e837cb5854ba998f0fb7c0e730498adf39a2bfa8ed924a425bbe_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_72f943824c893c38108b4d253de3f83d300d784b4360d93470513279641831a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f943824c893c38108b4d253de3f83d300d784b4360d93470513279641831a9->enter($__internal_72f943824c893c38108b4d253de3f83d300d784b4360d93470513279641831a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2a23cf9b662197365a4ae0d0d042641b1f9647f81c9f63d9fe143210f0f8eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a23cf9b662197365a4ae0d0d042641b1f9647f81c9f63d9fe143210f0f8eb3->enter($__internal_a2a23cf9b662197365a4ae0d0d042641b1f9647f81c9f63d9fe143210f0f8eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    <header id=\"header\" class=\"header-blog\" style=\"background-image: url('http://extrasolar.fr/blog/wp-content/uploads/2017/05/cropped-background-space-7.jpg');background-attachment: fixed;\">
      ";
        // line 44
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 45
            echo "          <a class=\"buttonLink posAbsolute\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a>
      ";
        }
        // line 47
        echo "        <div class=\"top-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-8\">

                        <a href=\"/\" title=\"Extrasolar\" class=\"header-logo\">Extrasolar</a>

                    </div><!--/.col-sm-2-->
                    <div class=\"col-sm-10 col-xs-4\">
                        <nav class=\"header-navigation\">
                            <ul class=\"clearfix\">
                                <li id=\"menu-item-1157\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span>Accueil</span></a></li>
                                <li id=\"menu-item-1156\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_index");
        echo "\"><span>Catalogue</span></a></li>
                                <li id=\"menu-item-1146\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Blog</span></a></li>
                                <li id=\"menu-item-1147\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/communaute/\"><span>Communauté</span></a></li>
                                <li id=\"menu-item-1148\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 62
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
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span>Portail</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_index");
        echo "\"><span>Catalogue</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Blog</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/communaute/\"><span>Communauté</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/contact/\"><span>Contact</span></a></li>
            </ul>
        </nav><!--/.responsive-menu-->
        <div class=\"bottom-header blog\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h2>";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
                    </div><!--/.col-sm-12-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.bottom-header.blog-->
    </header><!--/#header-->
    ";
        
        $__internal_a2a23cf9b662197365a4ae0d0d042641b1f9647f81c9f63d9fe143210f0f8eb3->leave($__internal_a2a23cf9b662197365a4ae0d0d042641b1f9647f81c9f63d9fe143210f0f8eb3_prof);

        
        $__internal_72f943824c893c38108b4d253de3f83d300d784b4360d93470513279641831a9->leave($__internal_72f943824c893c38108b4d253de3f83d300d784b4360d93470513279641831a9_prof);

    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9f87699e176dc8454dc795e4b08ef069f29ef07805df0a1c6579a87e90fccb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f87699e176dc8454dc795e4b08ef069f29ef07805df0a1c6579a87e90fccb5b->enter($__internal_9f87699e176dc8454dc795e4b08ef069f29ef07805df0a1c6579a87e90fccb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_bbcbb4f692ff7b5615fe655a41bdbd1d876354b94677214138e25bd77d9fc699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcbb4f692ff7b5615fe655a41bdbd1d876354b94677214138e25bd77d9fc699->enter($__internal_bbcbb4f692ff7b5615fe655a41bdbd1d876354b94677214138e25bd77d9fc699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 95
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <p>
                <span>Extrasolar.fr de <a href=\"http://www.extrasolar.fr/\">Alexandre Lomaev</a> est mis à disposition selon les termes de la <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">licence Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0 International. Licence Creative Commons</a><span>
              </p>
            </div>
          </div>
        </div>
      ";
        
        $__internal_bbcbb4f692ff7b5615fe655a41bdbd1d876354b94677214138e25bd77d9fc699->leave($__internal_bbcbb4f692ff7b5615fe655a41bdbd1d876354b94677214138e25bd77d9fc699_prof);

        
        $__internal_9f87699e176dc8454dc795e4b08ef069f29ef07805df0a1c6579a87e90fccb5b->leave($__internal_9f87699e176dc8454dc795e4b08ef069f29ef07805df0a1c6579a87e90fccb5b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 95,  296 => 94,  279 => 83,  269 => 76,  265 => 75,  261 => 74,  257 => 73,  253 => 72,  240 => 62,  236 => 61,  232 => 60,  228 => 59,  224 => 58,  211 => 47,  205 => 45,  203 => 44,  200 => 43,  191 => 42,  179 => 32,  174 => 30,  170 => 29,  166 => 28,  158 => 22,  149 => 21,  136 => 17,  130 => 14,  126 => 13,  122 => 12,  118 => 11,  115 => 10,  106 => 9,  88 => 6,  73 => 105,  71 => 94,  65 => 90,  63 => 42,  53 => 34,  51 => 21,  48 => 20,  46 => 9,  41 => 7,  37 => 6,  30 => 1,);
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
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
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

<body>

<div style=\"display: flex; flex-direction: column; min-height: 100vh;\">
    <div class=\"content\" style=\"flex: 1;\">


    {% block body %}
    <header id=\"header\" class=\"header-blog\" style=\"background-image: url('http://extrasolar.fr/blog/wp-content/uploads/2017/05/cropped-background-space-7.jpg');background-attachment: fixed;\">
      {% if app.user %}
          <a class=\"buttonLink posAbsolute\" href=\"{{ path('logout') }}\">Déconnexion</a>
      {% endif %}
        <div class=\"top-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-8\">

                        <a href=\"/\" title=\"Extrasolar\" class=\"header-logo\">Extrasolar</a>

                    </div><!--/.col-sm-2-->
                    <div class=\"col-sm-10 col-xs-4\">
                        <nav class=\"header-navigation\">
                            <ul class=\"clearfix\">
                                <li id=\"menu-item-1157\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ path('homepage') }}\"><span>Accueil</span></a></li>
                                <li id=\"menu-item-1156\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ path('catalogue_index') }}\"><span>Catalogue</span></a></li>
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
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ path('homepage') }}\"><span>Portail</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ path('catalogue_index') }}\"><span>Catalogue</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"{{ getRootURL() }}\"><span>Blog</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/communaute/\"><span>Communauté</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/contact/\"><span>Contact</span></a></li>
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
</div>

</body>
</html>
", "base.html.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/app/Resources/views/base.html.twig");
    }
}
