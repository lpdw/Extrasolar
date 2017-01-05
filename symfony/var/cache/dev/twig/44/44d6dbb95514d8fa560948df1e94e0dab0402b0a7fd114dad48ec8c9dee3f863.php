<?php

/* /base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_759f0866e6226ce784e01f9fd3439da2f59acdd9ee6084038b19fcbe2b073682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759f0866e6226ce784e01f9fd3439da2f59acdd9ee6084038b19fcbe2b073682->enter($__internal_759f0866e6226ce784e01f9fd3439da2f59acdd9ee6084038b19fcbe2b073682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/base.html.twig"));

        $__internal_5f39167067bcd79d134ffe4b1aa9dc38f574241b597440aa4614f02740385c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f39167067bcd79d134ffe4b1aa9dc38f574241b597440aa4614f02740385c87->enter($__internal_5f39167067bcd79d134ffe4b1aa9dc38f574241b597440aa4614f02740385c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
    </body>
</html>
";
        
        $__internal_759f0866e6226ce784e01f9fd3439da2f59acdd9ee6084038b19fcbe2b073682->leave($__internal_759f0866e6226ce784e01f9fd3439da2f59acdd9ee6084038b19fcbe2b073682_prof);

        
        $__internal_5f39167067bcd79d134ffe4b1aa9dc38f574241b597440aa4614f02740385c87->leave($__internal_5f39167067bcd79d134ffe4b1aa9dc38f574241b597440aa4614f02740385c87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1ac2b2ef6ca5a2d78f839e9aee6791e49b4298185b3208ae35790ffc8f70ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ac2b2ef6ca5a2d78f839e9aee6791e49b4298185b3208ae35790ffc8f70ea3->enter($__internal_e1ac2b2ef6ca5a2d78f839e9aee6791e49b4298185b3208ae35790ffc8f70ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a5a75213470c37f3fd8862f730af5be90ee5fff13e809a8c1cd79633f704569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5a75213470c37f3fd8862f730af5be90ee5fff13e809a8c1cd79633f704569->enter($__internal_2a5a75213470c37f3fd8862f730af5be90ee5fff13e809a8c1cd79633f704569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a5a75213470c37f3fd8862f730af5be90ee5fff13e809a8c1cd79633f704569->leave($__internal_2a5a75213470c37f3fd8862f730af5be90ee5fff13e809a8c1cd79633f704569_prof);

        
        $__internal_e1ac2b2ef6ca5a2d78f839e9aee6791e49b4298185b3208ae35790ffc8f70ea3->leave($__internal_e1ac2b2ef6ca5a2d78f839e9aee6791e49b4298185b3208ae35790ffc8f70ea3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c9273edd86cdc34d760ad2e19b0da1eb8b5551650b3b30e1d54423f0c815fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9273edd86cdc34d760ad2e19b0da1eb8b5551650b3b30e1d54423f0c815fda->enter($__internal_5c9273edd86cdc34d760ad2e19b0da1eb8b5551650b3b30e1d54423f0c815fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2aaebf14eccdcadb9fec80a4fc0364b0fc69021134c850642741ac514a8bfd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaebf14eccdcadb9fec80a4fc0364b0fc69021134c850642741ac514a8bfd43->enter($__internal_2aaebf14eccdcadb9fec80a4fc0364b0fc69021134c850642741ac514a8bfd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <!-- CSS SYSTEME SOLAIRE -->
          <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/solarsystem/styles.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap Core CSS -->

          <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/themesite/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Custom CSS -->
          <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/themesite/the-big-picture.css"), "html", null, true);
        echo "\">
          ";
        
        $__internal_2aaebf14eccdcadb9fec80a4fc0364b0fc69021134c850642741ac514a8bfd43->leave($__internal_2aaebf14eccdcadb9fec80a4fc0364b0fc69021134c850642741ac514a8bfd43_prof);

        
        $__internal_5c9273edd86cdc34d760ad2e19b0da1eb8b5551650b3b30e1d54423f0c815fda->leave($__internal_5c9273edd86cdc34d760ad2e19b0da1eb8b5551650b3b30e1d54423f0c815fda_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_deb85f0e087357c9a346378ffdc1a39a716f99beeb26195dd2ae7b0feff071e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb85f0e087357c9a346378ffdc1a39a716f99beeb26195dd2ae7b0feff071e4->enter($__internal_deb85f0e087357c9a346378ffdc1a39a716f99beeb26195dd2ae7b0feff071e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0128d35aa184747185d508e7dc5a0f1686b142eed74b44b2181020a83a65fa75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0128d35aa184747185d508e7dc5a0f1686b142eed74b44b2181020a83a65fa75->enter($__internal_0128d35aa184747185d508e7dc5a0f1686b142eed74b44b2181020a83a65fa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- JS POUR SYSTEME SOLAIRE -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
          document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prefixfree.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_0128d35aa184747185d508e7dc5a0f1686b142eed74b44b2181020a83a65fa75->leave($__internal_0128d35aa184747185d508e7dc5a0f1686b142eed74b44b2181020a83a65fa75_prof);

        
        $__internal_deb85f0e087357c9a346378ffdc1a39a716f99beeb26195dd2ae7b0feff071e4->leave($__internal_deb85f0e087357c9a346378ffdc1a39a716f99beeb26195dd2ae7b0feff071e4_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f1e298af759b67c9deb84eb2d7856657b91e65a5fac199a066e1414f6bbae46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1e298af759b67c9deb84eb2d7856657b91e65a5fac199a066e1414f6bbae46->enter($__internal_7f1e298af759b67c9deb84eb2d7856657b91e65a5fac199a066e1414f6bbae46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_770370c9745176e12459da812c245a7e53b2da7ea13cf08888e079268a740477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770370c9745176e12459da812c245a7e53b2da7ea13cf08888e079268a740477->enter($__internal_770370c9745176e12459da812c245a7e53b2da7ea13cf08888e079268a740477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        ";
        
        $__internal_770370c9745176e12459da812c245a7e53b2da7ea13cf08888e079268a740477->leave($__internal_770370c9745176e12459da812c245a7e53b2da7ea13cf08888e079268a740477_prof);

        
        $__internal_7f1e298af759b67c9deb84eb2d7856657b91e65a5fac199a066e1414f6bbae46->leave($__internal_7f1e298af759b67c9deb84eb2d7856657b91e65a5fac199a066e1414f6bbae46_prof);

    }

    public function getTemplateName()
    {
        return "/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 36,  166 => 35,  153 => 30,  149 => 29,  137 => 20,  132 => 18,  129 => 17,  120 => 16,  108 => 13,  103 => 11,  97 => 8,  94 => 7,  85 => 6,  67 => 5,  54 => 38,  52 => 35,  48 => 33,  46 => 16,  41 => 15,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <!-- CSS SYSTEME SOLAIRE -->
          <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/solarsystem/styles.css') }}\">
        <!-- Bootstrap Core CSS -->

          <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/themesite/bootstrap.min.css') }}\">
        <!-- Custom CSS -->
          <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/themesite/the-big-picture.css') }}\">
          {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% block javascripts %}
        <!-- jQuery -->
        <script src=\"{{ asset('js/jquery.js') }}\"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

        <!-- JS POUR SYSTEME SOLAIRE -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
          document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"{{ asset('js/prefixfree.min.js') }}\"></script>
        <script src=\"{{ asset('js/scripts.min.js') }}\"></script>

        {% endblock %}
    </head>
    <body>
        {% block body %}

        {% endblock %}

    </body>
</html>
", "/base.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/base.html.twig");
    }
}
