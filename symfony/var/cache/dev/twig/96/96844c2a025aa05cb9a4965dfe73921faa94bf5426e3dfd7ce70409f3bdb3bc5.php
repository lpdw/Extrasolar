<?php

/* body/api.html.twig */
class __TwigTemplate_a1dd70558fe8a31a617ac4ffb13c52ae90dcd51f706232b5ef6b7124dcebd4f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "body/api.html.twig", 1);
        $this->blocks = array(
            'solarsystem' => array($this, 'block_solarsystem'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2d8a9095854783de361c4bbf2071fb0f346a3022f2ff476fa3ba834d41b3559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d8a9095854783de361c4bbf2071fb0f346a3022f2ff476fa3ba834d41b3559->enter($__internal_c2d8a9095854783de361c4bbf2071fb0f346a3022f2ff476fa3ba834d41b3559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "body/api.html.twig"));

        $__internal_fb3e9ce70317f5121a041b473624f0101fc687099c13fb999367a5e8757634d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3e9ce70317f5121a041b473624f0101fc687099c13fb999367a5e8757634d5->enter($__internal_fb3e9ce70317f5121a041b473624f0101fc687099c13fb999367a5e8757634d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "body/api.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d8a9095854783de361c4bbf2071fb0f346a3022f2ff476fa3ba834d41b3559->leave($__internal_c2d8a9095854783de361c4bbf2071fb0f346a3022f2ff476fa3ba834d41b3559_prof);

        
        $__internal_fb3e9ce70317f5121a041b473624f0101fc687099c13fb999367a5e8757634d5->leave($__internal_fb3e9ce70317f5121a041b473624f0101fc687099c13fb999367a5e8757634d5_prof);

    }

    // line 2
    public function block_solarsystem($context, array $blocks = array())
    {
        $__internal_f8613d129941f47543044a3a2dd58dc0841dc1febdc0f64ba7fcfad7836597e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8613d129941f47543044a3a2dd58dc0841dc1febdc0f64ba7fcfad7836597e7->enter($__internal_f8613d129941f47543044a3a2dd58dc0841dc1febdc0f64ba7fcfad7836597e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solarsystem"));

        $__internal_a2c11dbd28c520a2af2c105710fad3ee0c4c551baf49a7a42915ac1005d78918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c11dbd28c520a2af2c105710fad3ee0c4c551baf49a7a42915ac1005d78918->enter($__internal_a2c11dbd28c520a2af2c105710fad3ee0c4c551baf49a7a42915ac1005d78918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "solarsystem"));

        // line 3
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge;chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable = no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title dir=\"ltr\">API</title>
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 140
        echo "    </body>
</html>
";
        
        $__internal_a2c11dbd28c520a2af2c105710fad3ee0c4c551baf49a7a42915ac1005d78918->leave($__internal_a2c11dbd28c520a2af2c105710fad3ee0c4c551baf49a7a42915ac1005d78918_prof);

        
        $__internal_f8613d129941f47543044a3a2dd58dc0841dc1febdc0f64ba7fcfad7836597e7->leave($__internal_f8613d129941f47543044a3a2dd58dc0841dc1febdc0f64ba7fcfad7836597e7_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_de2fe80f7fb5687e9536c85498d70f5a664eaef994d1637ffe7220fcdc461e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2fe80f7fb5687e9536c85498d70f5a664eaef994d1637ffe7220fcdc461e2a->enter($__internal_de2fe80f7fb5687e9536c85498d70f5a664eaef994d1637ffe7220fcdc461e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d6ca77285d1aded1c37603d4d88372abcc8231720e57b61d709758dd26cd7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6ca77285d1aded1c37603d4d88372abcc8231720e57b61d709758dd26cd7ec->enter($__internal_3d6ca77285d1aded1c37603d4d88372abcc8231720e57b61d709758dd26cd7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "API";
        
        $__internal_3d6ca77285d1aded1c37603d4d88372abcc8231720e57b61d709758dd26cd7ec->leave($__internal_3d6ca77285d1aded1c37603d4d88372abcc8231720e57b61d709758dd26cd7ec_prof);

        
        $__internal_de2fe80f7fb5687e9536c85498d70f5a664eaef994d1637ffe7220fcdc461e2a->leave($__internal_de2fe80f7fb5687e9536c85498d70f5a664eaef994d1637ffe7220fcdc461e2a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd31997ca65aa371da87c1ec8b879c6028122e65f743de5eb3ba2718044fe6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd31997ca65aa371da87c1ec8b879c6028122e65f743de5eb3ba2718044fe6aa->enter($__internal_cd31997ca65aa371da87c1ec8b879c6028122e65f743de5eb3ba2718044fe6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2a9a41496a2e40ef6314a06e0f01393df6c47af24fa2ea5ff76cb045e86b79b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9a41496a2e40ef6314a06e0f01393df6c47af24fa2ea5ff76cb045e86b79b1->enter($__internal_2a9a41496a2e40ef6314a06e0f01393df6c47af24fa2ea5ff76cb045e86b79b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <!-- Bootstrap Core CSS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/themesite/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/helpers.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/wp-content/themes/illdy/layout/css/main.css\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css\" />
            <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css\" />
            <link rel='stylesheet' id='font-awesome-css'  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/wp-content/themes/illdy/layout/css/font-awesome.min.css?ver=4.5.0\" type='text/css' media='all' />
        ";
        
        $__internal_2a9a41496a2e40ef6314a06e0f01393df6c47af24fa2ea5ff76cb045e86b79b1->leave($__internal_2a9a41496a2e40ef6314a06e0f01393df6c47af24fa2ea5ff76cb045e86b79b1_prof);

        
        $__internal_cd31997ca65aa371da87c1ec8b879c6028122e65f743de5eb3ba2718044fe6aa->leave($__internal_cd31997ca65aa371da87c1ec8b879c6028122e65f743de5eb3ba2718044fe6aa_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae7257af836e07d2167a12a61110085ff612c88427bbd4b70c0817c4764960cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7257af836e07d2167a12a61110085ff612c88427bbd4b70c0817c4764960cd->enter($__internal_ae7257af836e07d2167a12a61110085ff612c88427bbd4b70c0817c4764960cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01a6765683eafd92c66824ed8073ec1141db4ae308117067064ffd4293ca73d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a6765683eafd92c66824ed8073ec1141db4ae308117067064ffd4293ca73d6->enter($__internal_01a6765683eafd92c66824ed8073ec1141db4ae308117067064ffd4293ca73d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "
        <header id=\"header\" class=\"header-blog\" style=\"background-image: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getBackgroundImageURL(), "html", null, true);
        echo ");background-attachment: fixed;\">
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
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Blog</span></a></li>
                                    <li id=\"menu-item-1147\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/communaute/\"><span>Communauté</span></a></li>
                                    <li id=\"menu-item-1149\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"/api\"><span>API</span></a></li>
                                    <li id=\"menu-item-1148\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 48
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
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Portail</span></a></li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Catalogue</span></a></li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/blog/\"><span>Blog</span></a></li>
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/blog/communaute/\"><span>Communauté</span></a></li>
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"/api\"><span>API</span></a></li>
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/blog/contact/\"><span>Contact</span></a></li>
                </ul>
            </nav><!--/.responsive-menu-->
            <div class=\"bottom-header blog\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h2>";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
                        </div><!--/.col-sm-12-->
                    </div><!--/.row-->
                </div><!--/.container-->
            </div><!--/.bottom-header.blog-->
        </header><!--/#header-->

        <div id=\"spinner\"></div>

        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-5 col-md-5 col-xs-9 col-xs-offset-1\">
              <h1>NOM DE LA PLANETE</h1>
              <div id=\"custom-search-input\">
                <div class=\"input-group col-md-12\">
                    <input type=\"text\" class=\"form-control input-lg\" />
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-info btn-lg\" type=\"button\">
                            <i class=\"glyphicon glyphicon-search\"></i>
                        </button>
                    </span>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-4 col-xs-10 col-xs-offset-1 jumbotron\">
              <div class=\"row\">
                <h3 class=\"col-lg-8\">INSTRUCTIONS</h3>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <ul id=\"list_planete\" class=\"col-lg-7 col-lg-offset-2\"></ul>
          </div>

          <div class=\"row col-lg-7 col-lg-offset-2\" id=\"generate-infos\">
              <h2 class=\"planete-name col-lg-8 col-md-10 col-lg-offset-1\"></h2>

              <form class=\"col-lg-5 col-lg-offset-2\">
              </form>
          </div>


          <div class=\"row col-lg-7 col-lg-offset-2\" id=\"html-generated\">
            <h2>CODE A COPIER</h2>

            <!-- <div class=\"code-to-copy\">
              <code>&lt;script
          \t\t\t&nbsp;&nbsp;<span>src=\"https://code.jquery.com/jquery-3.2.1.min.js\"</span>
          \t\t\t&nbsp;&nbsp;<span>integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"</span>
          \t\t\t&nbsp;&nbsp;<span>crossorigin=\"anonymous\"&gt;&lt;/script&gt;</span>
          \t\t</code>

              <button class=\"sri-modal-copy-btn\" data-clipboard-text=\"<script src=&quot;https://code.jquery.com/jquery-3.2.1.min.js&quot; integrity=&quot;sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=&quot; crossorigin=&quot;anonymous&quot;></script>\" title=\"Copy to clipboard!\">
  \t\t\t           <i class=\"fa fa-clipboard\" aria-hidden=\"true\"></i>
  \t\t        </button>
            </div> -->
          </div>

        </div>
        </body>

      ";
        
        $__internal_01a6765683eafd92c66824ed8073ec1141db4ae308117067064ffd4293ca73d6->leave($__internal_01a6765683eafd92c66824ed8073ec1141db4ae308117067064ffd4293ca73d6_prof);

        
        $__internal_ae7257af836e07d2167a12a61110085ff612c88427bbd4b70c0817c4764960cd->leave($__internal_ae7257af836e07d2167a12a61110085ff612c88427bbd4b70c0817c4764960cd_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88e769fd06ef7e860e3895b97878937de63881b663a29396feb24f2301f11fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e769fd06ef7e860e3895b97878937de63881b663a29396feb24f2301f11fa7->enter($__internal_88e769fd06ef7e860e3895b97878937de63881b663a29396feb24f2301f11fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ded134cb514662fcb8d58273550fa0bfcc462eb4ab38d5b24df887877dce8260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded134cb514662fcb8d58273550fa0bfcc462eb4ab38d5b24df887877dce8260->enter($__internal_ded134cb514662fcb8d58273550fa0bfcc462eb4ab38d5b24df887877dce8260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script src=\"http://spin.js.org/spin.min.js\"></script>
        <script src=\"js/api.js\"></script>

      ";
        
        $__internal_ded134cb514662fcb8d58273550fa0bfcc462eb4ab38d5b24df887877dce8260->leave($__internal_ded134cb514662fcb8d58273550fa0bfcc462eb4ab38d5b24df887877dce8260_prof);

        
        $__internal_88e769fd06ef7e860e3895b97878937de63881b663a29396feb24f2301f11fa7->leave($__internal_88e769fd06ef7e860e3895b97878937de63881b663a29396feb24f2301f11fa7_prof);

    }

    public function getTemplateName()
    {
        return "body/api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 135,  313 => 134,  239 => 70,  229 => 63,  224 => 61,  220 => 60,  216 => 59,  212 => 58,  199 => 48,  194 => 46,  190 => 45,  173 => 31,  170 => 30,  161 => 29,  149 => 18,  143 => 15,  139 => 14,  135 => 13,  131 => 12,  128 => 11,  119 => 10,  101 => 8,  89 => 140,  86 => 134,  84 => 29,  73 => 21,  70 => 20,  68 => 10,  63 => 8,  59 => 7,  53 => 3,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block solarsystem %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <title>{% block title %}API{% endblock %}</title>

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

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge;chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable = no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title dir=\"ltr\">API</title>
    </head>
    <body>
        {% block body %}

        <header id=\"header\" class=\"header-blog\" style=\"background-image: url({{getBackgroundImageURL()}});background-attachment: fixed;\">
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
                                    <li id=\"menu-item-1149\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"/api\"><span>API</span></a></li>
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
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"/api\"><span>API</span></a></li>
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

        <div id=\"spinner\"></div>

        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-5 col-md-5 col-xs-9 col-xs-offset-1\">
              <h1>NOM DE LA PLANETE</h1>
              <div id=\"custom-search-input\">
                <div class=\"input-group col-md-12\">
                    <input type=\"text\" class=\"form-control input-lg\" />
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-info btn-lg\" type=\"button\">
                            <i class=\"glyphicon glyphicon-search\"></i>
                        </button>
                    </span>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-4 col-xs-10 col-xs-offset-1 jumbotron\">
              <div class=\"row\">
                <h3 class=\"col-lg-8\">INSTRUCTIONS</h3>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <ul id=\"list_planete\" class=\"col-lg-7 col-lg-offset-2\"></ul>
          </div>

          <div class=\"row col-lg-7 col-lg-offset-2\" id=\"generate-infos\">
              <h2 class=\"planete-name col-lg-8 col-md-10 col-lg-offset-1\"></h2>

              <form class=\"col-lg-5 col-lg-offset-2\">
              </form>
          </div>


          <div class=\"row col-lg-7 col-lg-offset-2\" id=\"html-generated\">
            <h2>CODE A COPIER</h2>

            <!-- <div class=\"code-to-copy\">
              <code>&lt;script
          \t\t\t&nbsp;&nbsp;<span>src=\"https://code.jquery.com/jquery-3.2.1.min.js\"</span>
          \t\t\t&nbsp;&nbsp;<span>integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"</span>
          \t\t\t&nbsp;&nbsp;<span>crossorigin=\"anonymous\"&gt;&lt;/script&gt;</span>
          \t\t</code>

              <button class=\"sri-modal-copy-btn\" data-clipboard-text=\"<script src=&quot;https://code.jquery.com/jquery-3.2.1.min.js&quot; integrity=&quot;sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=&quot; crossorigin=&quot;anonymous&quot;></script>\" title=\"Copy to clipboard!\">
  \t\t\t           <i class=\"fa fa-clipboard\" aria-hidden=\"true\"></i>
  \t\t        </button>
            </div> -->
          </div>

        </div>
        </body>

      {% endblock %}
        {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script src=\"http://spin.js.org/spin.min.js\"></script>
        <script src=\"js/api.js\"></script>

      {% endblock %}
    </body>
</html>
{% endblock %}
", "body/api.html.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/app/Resources/views/body/api.html.twig");
    }
}
