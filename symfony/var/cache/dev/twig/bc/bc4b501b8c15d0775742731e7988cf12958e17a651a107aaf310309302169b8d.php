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
        $__internal_ea793779ac4561552eea7fd2d3817e23f49c7336ef05d0593ea6972f9cba1e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea793779ac4561552eea7fd2d3817e23f49c7336ef05d0593ea6972f9cba1e86->enter($__internal_ea793779ac4561552eea7fd2d3817e23f49c7336ef05d0593ea6972f9cba1e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b85d8316c174c592e8ab43baaf53b97d56eefe90818c2d64c5d5136b80479fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85d8316c174c592e8ab43baaf53b97d56eefe90818c2d64c5d5136b80479fc1->enter($__internal_b85d8316c174c592e8ab43baaf53b97d56eefe90818c2d64c5d5136b80479fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "</head>

<body>

<div style=\"display: flex; flex-direction: column; min-height: 100vh;\">
    <div class=\"content\" style=\"flex: 1;\">


    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "    </div>


    <footer id=\"footer\">
      ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 107
        echo "    </footer>
</div>

</body>
</html>
";
        
        $__internal_ea793779ac4561552eea7fd2d3817e23f49c7336ef05d0593ea6972f9cba1e86->leave($__internal_ea793779ac4561552eea7fd2d3817e23f49c7336ef05d0593ea6972f9cba1e86_prof);

        
        $__internal_b85d8316c174c592e8ab43baaf53b97d56eefe90818c2d64c5d5136b80479fc1->leave($__internal_b85d8316c174c592e8ab43baaf53b97d56eefe90818c2d64c5d5136b80479fc1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_734c4687abc60195b50e2929fc1fd7fe7e5600af0016f706d4b654f03356dd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734c4687abc60195b50e2929fc1fd7fe7e5600af0016f706d4b654f03356dd32->enter($__internal_734c4687abc60195b50e2929fc1fd7fe7e5600af0016f706d4b654f03356dd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c3fa464c858c02744374c6e76c0734ca34860b30d8c053c8c0e6ada2584334b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3fa464c858c02744374c6e76c0734ca34860b30d8c053c8c0e6ada2584334b->enter($__internal_1c3fa464c858c02744374c6e76c0734ca34860b30d8c053c8c0e6ada2584334b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c3fa464c858c02744374c6e76c0734ca34860b30d8c053c8c0e6ada2584334b->leave($__internal_1c3fa464c858c02744374c6e76c0734ca34860b30d8c053c8c0e6ada2584334b_prof);

        
        $__internal_734c4687abc60195b50e2929fc1fd7fe7e5600af0016f706d4b654f03356dd32->leave($__internal_734c4687abc60195b50e2929fc1fd7fe7e5600af0016f706d4b654f03356dd32_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_759f3d1b6d7b8fc0dd7974be1cc43266a2dc350a359e52f6512f110d6fb48a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759f3d1b6d7b8fc0dd7974be1cc43266a2dc350a359e52f6512f110d6fb48a85->enter($__internal_759f3d1b6d7b8fc0dd7974be1cc43266a2dc350a359e52f6512f110d6fb48a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4c6ec74e45ea4353e270c177efa3fec3a8792901309b587f719c138968bc0f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6ec74e45ea4353e270c177efa3fec3a8792901309b587f719c138968bc0f6d->enter($__internal_4c6ec74e45ea4353e270c177efa3fec3a8792901309b587f719c138968bc0f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    ";
        
        $__internal_4c6ec74e45ea4353e270c177efa3fec3a8792901309b587f719c138968bc0f6d->leave($__internal_4c6ec74e45ea4353e270c177efa3fec3a8792901309b587f719c138968bc0f6d_prof);

        
        $__internal_759f3d1b6d7b8fc0dd7974be1cc43266a2dc350a359e52f6512f110d6fb48a85->leave($__internal_759f3d1b6d7b8fc0dd7974be1cc43266a2dc350a359e52f6512f110d6fb48a85_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57a868dbb77d582c0b93fdaef7ff066a05e81b5cfe52d3682025fb804cc82f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a868dbb77d582c0b93fdaef7ff066a05e81b5cfe52d3682025fb804cc82f66->enter($__internal_57a868dbb77d582c0b93fdaef7ff066a05e81b5cfe52d3682025fb804cc82f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_30b397b5577d562b24e3e9812767d7bddccbbfe007287813e4a8e004895262ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b397b5577d562b24e3e9812767d7bddccbbfe007287813e4a8e004895262ce->enter($__internal_30b397b5577d562b24e3e9812767d7bddccbbfe007287813e4a8e004895262ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/equalHeight.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/scripts.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_30b397b5577d562b24e3e9812767d7bddccbbfe007287813e4a8e004895262ce->leave($__internal_30b397b5577d562b24e3e9812767d7bddccbbfe007287813e4a8e004895262ce_prof);

        
        $__internal_57a868dbb77d582c0b93fdaef7ff066a05e81b5cfe52d3682025fb804cc82f66->leave($__internal_57a868dbb77d582c0b93fdaef7ff066a05e81b5cfe52d3682025fb804cc82f66_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f488b40fe3e77753d5c7a1e9398dd28b42889ff8e5fd2879925ee877d6904f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f488b40fe3e77753d5c7a1e9398dd28b42889ff8e5fd2879925ee877d6904f9->enter($__internal_9f488b40fe3e77753d5c7a1e9398dd28b42889ff8e5fd2879925ee877d6904f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd1131a00841edafffcefe0c92d3989a5a7b35aa0cd32e4797ac83765ac8de59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1131a00841edafffcefe0c92d3989a5a7b35aa0cd32e4797ac83765ac8de59->enter($__internal_fd1131a00841edafffcefe0c92d3989a5a7b35aa0cd32e4797ac83765ac8de59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "    <header id=\"header\" class=\"header-blog\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getBackgroundImageURL(), "html", null, true);
        echo ");background-attachment: fixed;\">
      ";
        // line 43
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 44
            echo "          <a class=\"buttonLink posAbsolute\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a>
      ";
        }
        // line 46
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
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span>Accueil</span></a></li>
                                <li id=\"menu-item-1156\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_index");
        echo "\"><span>Catalogue</span></a></li>
                                <li id=\"menu-item-1146\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Blog</span></a></li>
                                <li id=\"menu-item-1147\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/communaute/\"><span>Communauté</span></a></li>
                                <li id=\"menu-item-1149\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"#\"><span>API</span></a></li>
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
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span>Portail</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_index");
        echo "\"><span>Catalogue</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Blog</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/communaute/\"><span>Communauté</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"#\"><span>API</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/contact/\"><span>Contact</span></a></li>
            </ul>
        </nav><!--/.responsive-menu-->
        <div class=\"bottom-header blog\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h2>";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
                    </div><!--/.col-sm-12-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.bottom-header.blog-->
    </header><!--/#header-->
    ";
        
        $__internal_fd1131a00841edafffcefe0c92d3989a5a7b35aa0cd32e4797ac83765ac8de59->leave($__internal_fd1131a00841edafffcefe0c92d3989a5a7b35aa0cd32e4797ac83765ac8de59_prof);

        
        $__internal_9f488b40fe3e77753d5c7a1e9398dd28b42889ff8e5fd2879925ee877d6904f9->leave($__internal_9f488b40fe3e77753d5c7a1e9398dd28b42889ff8e5fd2879925ee877d6904f9_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        $__internal_63b380df44908267bd8089ef3d2648dec8ebf5cb46485f30b15b4b08aa4253f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b380df44908267bd8089ef3d2648dec8ebf5cb46485f30b15b4b08aa4253f8->enter($__internal_63b380df44908267bd8089ef3d2648dec8ebf5cb46485f30b15b4b08aa4253f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_eff7db81ce8c21c7821acc1d46b02e8a485d9aec65e1806b08bced41f40253fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff7db81ce8c21c7821acc1d46b02e8a485d9aec65e1806b08bced41f40253fe->enter($__internal_eff7db81ce8c21c7821acc1d46b02e8a485d9aec65e1806b08bced41f40253fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 97
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
        
        $__internal_eff7db81ce8c21c7821acc1d46b02e8a485d9aec65e1806b08bced41f40253fe->leave($__internal_eff7db81ce8c21c7821acc1d46b02e8a485d9aec65e1806b08bced41f40253fe_prof);

        
        $__internal_63b380df44908267bd8089ef3d2648dec8ebf5cb46485f30b15b4b08aa4253f8->leave($__internal_63b380df44908267bd8089ef3d2648dec8ebf5cb46485f30b15b4b08aa4253f8_prof);

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
        return array (  309 => 97,  300 => 96,  283 => 85,  273 => 78,  268 => 76,  264 => 75,  260 => 74,  256 => 73,  242 => 62,  237 => 60,  233 => 59,  229 => 58,  225 => 57,  212 => 46,  206 => 44,  204 => 43,  199 => 42,  190 => 41,  178 => 31,  173 => 29,  169 => 28,  165 => 27,  157 => 21,  148 => 20,  136 => 17,  130 => 14,  126 => 13,  122 => 12,  118 => 11,  115 => 10,  106 => 9,  88 => 6,  73 => 107,  71 => 96,  65 => 92,  63 => 41,  53 => 33,  51 => 20,  48 => 19,  46 => 9,  41 => 7,  37 => 6,  30 => 1,);
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
    <header id=\"header\" class=\"header-blog\" style=\"background-image: url({{getBackgroundImageURL()}});background-attachment: fixed;\">
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
                                <li id=\"menu-item-1149\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"#\"><span>API</span></a></li>
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
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"#\"><span>API</span></a></li>
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
