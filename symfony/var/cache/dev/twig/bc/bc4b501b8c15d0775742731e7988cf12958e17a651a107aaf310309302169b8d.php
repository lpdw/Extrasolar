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
        $__internal_c55813d7e09e6d767822c480caf4cad93024a98ed3c626bbf4c689da9a83b779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55813d7e09e6d767822c480caf4cad93024a98ed3c626bbf4c689da9a83b779->enter($__internal_c55813d7e09e6d767822c480caf4cad93024a98ed3c626bbf4c689da9a83b779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ce0b22335f45f8a565198445b9e5cb9d32e149e1374422d8e74c555ec6dcae17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0b22335f45f8a565198445b9e5cb9d32e149e1374422d8e74c555ec6dcae17->enter($__internal_ce0b22335f45f8a565198445b9e5cb9d32e149e1374422d8e74c555ec6dcae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c55813d7e09e6d767822c480caf4cad93024a98ed3c626bbf4c689da9a83b779->leave($__internal_c55813d7e09e6d767822c480caf4cad93024a98ed3c626bbf4c689da9a83b779_prof);

        
        $__internal_ce0b22335f45f8a565198445b9e5cb9d32e149e1374422d8e74c555ec6dcae17->leave($__internal_ce0b22335f45f8a565198445b9e5cb9d32e149e1374422d8e74c555ec6dcae17_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc478a09b00aabdf79decdd0cde2c8766c14de2543cf4bc7a4dba83845c4411c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc478a09b00aabdf79decdd0cde2c8766c14de2543cf4bc7a4dba83845c4411c->enter($__internal_fc478a09b00aabdf79decdd0cde2c8766c14de2543cf4bc7a4dba83845c4411c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3b188ec20d762e44c399672bbd138786283c8531015b1142c183188db0970af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b188ec20d762e44c399672bbd138786283c8531015b1142c183188db0970af->enter($__internal_d3b188ec20d762e44c399672bbd138786283c8531015b1142c183188db0970af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d3b188ec20d762e44c399672bbd138786283c8531015b1142c183188db0970af->leave($__internal_d3b188ec20d762e44c399672bbd138786283c8531015b1142c183188db0970af_prof);

        
        $__internal_fc478a09b00aabdf79decdd0cde2c8766c14de2543cf4bc7a4dba83845c4411c->leave($__internal_fc478a09b00aabdf79decdd0cde2c8766c14de2543cf4bc7a4dba83845c4411c_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abd88048eeb8e5d53813a3406fd15d6ce4eca9795eb6b2e543ad1dd8a4df2c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd88048eeb8e5d53813a3406fd15d6ce4eca9795eb6b2e543ad1dd8a4df2c19->enter($__internal_abd88048eeb8e5d53813a3406fd15d6ce4eca9795eb6b2e543ad1dd8a4df2c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ea51006d870c8989ead75fb4b4c447b97444c5090d312ed890fcbb86c703648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea51006d870c8989ead75fb4b4c447b97444c5090d312ed890fcbb86c703648->enter($__internal_7ea51006d870c8989ead75fb4b4c447b97444c5090d312ed890fcbb86c703648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7ea51006d870c8989ead75fb4b4c447b97444c5090d312ed890fcbb86c703648->leave($__internal_7ea51006d870c8989ead75fb4b4c447b97444c5090d312ed890fcbb86c703648_prof);

        
        $__internal_abd88048eeb8e5d53813a3406fd15d6ce4eca9795eb6b2e543ad1dd8a4df2c19->leave($__internal_abd88048eeb8e5d53813a3406fd15d6ce4eca9795eb6b2e543ad1dd8a4df2c19_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e6084df03aa87ffff30bf0d775d0162a8e93bef2556cd34b4cc7b28e61a1d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6084df03aa87ffff30bf0d775d0162a8e93bef2556cd34b4cc7b28e61a1d59->enter($__internal_3e6084df03aa87ffff30bf0d775d0162a8e93bef2556cd34b4cc7b28e61a1d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ad47a4d37ac09069a0eabd52be739c51ee43c2a055dd9094b9c8599da68feb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad47a4d37ac09069a0eabd52be739c51ee43c2a055dd9094b9c8599da68feb9->enter($__internal_6ad47a4d37ac09069a0eabd52be739c51ee43c2a055dd9094b9c8599da68feb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6ad47a4d37ac09069a0eabd52be739c51ee43c2a055dd9094b9c8599da68feb9->leave($__internal_6ad47a4d37ac09069a0eabd52be739c51ee43c2a055dd9094b9c8599da68feb9_prof);

        
        $__internal_3e6084df03aa87ffff30bf0d775d0162a8e93bef2556cd34b4cc7b28e61a1d59->leave($__internal_3e6084df03aa87ffff30bf0d775d0162a8e93bef2556cd34b4cc7b28e61a1d59_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_34455050405cb56bde8bda3b9e12181f38941d31b143091630a9422b36b08e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34455050405cb56bde8bda3b9e12181f38941d31b143091630a9422b36b08e98->enter($__internal_34455050405cb56bde8bda3b9e12181f38941d31b143091630a9422b36b08e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c519c441d95225627782dc74fe4bafee74e1c8722ffa6ec1e6d0dfc332b8975d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c519c441d95225627782dc74fe4bafee74e1c8722ffa6ec1e6d0dfc332b8975d->enter($__internal_c519c441d95225627782dc74fe4bafee74e1c8722ffa6ec1e6d0dfc332b8975d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c519c441d95225627782dc74fe4bafee74e1c8722ffa6ec1e6d0dfc332b8975d->leave($__internal_c519c441d95225627782dc74fe4bafee74e1c8722ffa6ec1e6d0dfc332b8975d_prof);

        
        $__internal_34455050405cb56bde8bda3b9e12181f38941d31b143091630a9422b36b08e98->leave($__internal_34455050405cb56bde8bda3b9e12181f38941d31b143091630a9422b36b08e98_prof);

    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4727d0ea349827202cc17e8909a1f6dc31c6a9ee9862b463c32c7567ebef16f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4727d0ea349827202cc17e8909a1f6dc31c6a9ee9862b463c32c7567ebef16f3->enter($__internal_4727d0ea349827202cc17e8909a1f6dc31c6a9ee9862b463c32c7567ebef16f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fec887000cb921bad3f25ff061f14d3315d62baaae95e885f9eee01479af8156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec887000cb921bad3f25ff061f14d3315d62baaae95e885f9eee01479af8156->enter($__internal_fec887000cb921bad3f25ff061f14d3315d62baaae95e885f9eee01479af8156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_fec887000cb921bad3f25ff061f14d3315d62baaae95e885f9eee01479af8156->leave($__internal_fec887000cb921bad3f25ff061f14d3315d62baaae95e885f9eee01479af8156_prof);

        
        $__internal_4727d0ea349827202cc17e8909a1f6dc31c6a9ee9862b463c32c7567ebef16f3->leave($__internal_4727d0ea349827202cc17e8909a1f6dc31c6a9ee9862b463c32c7567ebef16f3_prof);

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
